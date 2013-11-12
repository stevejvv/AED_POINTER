###!
  # Responsive Slider widget script
  # by w3widgets
  #
  # Author: Lukasz Kokoszkiewicz
  #
  # Copyright © Lukasz Kokoszkiewicz 2013 All Rights Reserved
###

do ($ = jQuery) ->
  # SLIDER CLASS DEFINITION
  # =======================
  Slider = ( element, options ) ->
    @$element = element
    @$slides = @$element.find( '.slides ul li' )
    if @$slides.length < 1
      @$slides = @$element.find( '[data-group="slides"] ul li' )
    @$prevNext = @$element.find( '[data-jump]' )
    @$pages = @$element.find( '[data-jump-to]' )
    @$rel = @$element.find( '[data-group="slides"]' )
    @slideChangeInProgress = false
    @interval = false;
    @options = options
    @current = options.current
    
    @set 2, true # real first element

    null
  
  Slider.prototype =
    getGlobalWidth: () ->
      @$element.width()
    
    updateControls: () ->
      # make current page indicator active
      @$pages.removeClass( 'active' )
      @$pages.filter( '[data-jump-to=' + ( @current - 1 ) + ']' ).addClass( 'active' )
    
    runAnimations: () ->
      r = @
      captions = $( @$slides[ @current - 1 ] ).find( '[data-animate]' )
      captions.each () ->
        $caption = $( this )
        # animate
        r.options.animations[ $caption.data( 'animate' ) ] $caption, $caption.data( 'delay' ), $caption.data( 'length' )
    
    hideAnimatedCaptions: ( slide ) ->
      $( @$slides[ slide - 1 ] ).find( '[data-animate]' ).css( {'opacity': 0} )

    calculateScroll: ( slide ) ->
      gWidth = @getGlobalWidth()
      (slide - 1) * gWidth
      
    resize: () ->
      @$rel.scrollLeft @calculateScroll( @current )
    
    jump: ( slide, transitionTime = @options.transitionTime, noanimation = false ) ->
      r = @

      # if we are on the same slide do not run captions animations
      if slide == r.current
        noanimation = true

      # dont do anything when slide
      # number greaten then number of slides
      if @$slides.length >= slide and !@slideChangeInProgress
        gWidth = @getGlobalWidth()
        if !noanimation
          @hideAnimatedCaptions slide

        step = undefined;

        if @options.parallax
          @currentBgPosition = parseInt r.$rel.css 'background-position'
          @moveStartScroll = parseInt( @$rel.scrollLeft(), 10 )

          step = () ->
            position = Math.round(r.currentBgPosition-(r.moveStartScroll-@scrollLeft)*r.options.parallaxDistance*r.options.parallaxDirection) + 'px 0'
            r.$rel.css 'background-position', position
            
        
        animateOptions =
          duration: transitionTime
          step: step
          done: () ->
            if slide == 1
              r.hideAnimatedCaptions r.$slides.length-1
              r.set r.$slides.length-1
            else if slide == r.$slides.length
              r.hideAnimatedCaptions 2
              r.set 2
            else
              r.current = slide
            r.updateControls()
            if !noanimation
              r.runAnimations()
            r.options.onSlideChange.call( this )
            null
          always: () ->
            r.slideChangeInProgress = false
            null

        @slideChangeInProgress = true
        @$rel.animate {'scrollLeft': @calculateScroll( slide )}, animateOptions 
      null
      
    set: ( slide, init = false ) ->
      gWidth = @getGlobalWidth()
      @$rel.scrollLeft @calculateScroll( slide )
      @current = slide
      @updateControls()
      null

    movestart: ( e ) ->
      if @options.parallax
        @currentBgPosition = parseInt @$rel.css 'background-position'
      @hideAnimatedCaptions @current - 1
      @hideAnimatedCaptions @current + 1
      @moveStartScroll = parseInt( @$rel.scrollLeft(), 10 )
      @$rel.stop()
      @$rel.addClass('drag');
      @timeStart = new Date()
      
    move: ( e ) ->
      if @options.parallax
        position = Math.round(@currentBgPosition-e.distX*@options.parallaxDistance*@options.parallaxDirection) + 'px 0'
        @$rel.css 'background-position', position
      @$rel.scrollLeft ( @moveStartScroll - e.distX )
      
    moveend: ( e ) ->
      absDist = Math.abs( e.distX )
      timeDelta = ( new Date() ).getTime() - @timeStart.getTime()
      gWidth = @getGlobalWidth()
      distLeftFrac = absDist / gWidth
      transitionTime = ( timeDelta / distLeftFrac ) * ( 1 - distLeftFrac )
      transitionTime = if transitionTime < 1000 then transitionTime else 1000
      @$rel.removeClass('drag');

      if absDist < gWidth / @options.moveDistanceToSlideChange # change slide in distance greater then 33%
        @jump( @current, transitionTime, true )
      else
        if e.distX < 0
          @next( transitionTime )
        else
          @prev( transitionTime )
    
    prev: ( transitionTime = @options.transitionTime, noanimation = false ) ->
      @jump( @current - 1, transitionTime, noanimation )
      @options.onSlidePrev.call( this )
    
    next: ( transitionTime = @options.transitionTime, noanimation = false ) ->
      @jump( @current + 1, transitionTime, noanimation )
      @options.onSlideNext.call( this )
      
  # MAIN PLUGIN FUNCTION
  # ====================
  $.fn.responsiveSlider = ( option ) ->
    r = @
    # build the options variable from the data given by user
    options = $.extend {}, $.fn.responsiveSlider.defaults, typeof option == 'object' && option
    options.animations = $.fn.responsiveSlider.animations

    publicFunc =
      next: 'next'
      prev: 'prev'

    clearAutoplay = ( $this, interval ) ->
      clearInterval( interval )
      $this.off 'mouseover'
      $this.off 'mouseleave'
      null

    # INIT SLIDER
    init = ( $this ) ->
      # support for metadata plugin
      options = if $.metadata then $.extend( {}, options, $this.metadata() ) else options

      # duplicate last and first slide
      # get all slides
      slides = $this.find( 'ul li' )
      # get the first and the last one
      if slides.length > 1
        $firstSlide = $( slides[0] )
        $lastSlide  = $( slides[slides.length-1] )
        
        # put last slide before first
        $firstSlide.before( $lastSlide.clone() )
        # and the other way around
        $lastSlide.after( $firstSlide.clone() )

      $this.data 'slider', ( data = new Slider $this, options )

      if options.autoplay
        data.interval = setInterval ( () -> data.next() ), options.interval

        $this.on 'mouseover', () ->
          clearInterval( data.interval )

        $this.on 'mouseleave', () ->
          clearInterval( data.interval )
          data.interval = setInterval ( () -> data.next() ), options.interval
      
      $( window ).on 'resize', () ->
        data.resize()
      
      # slider next, prev click
      $this.find( '[data-jump]' ).on 'click', () ->
        data[ $( this ).data( 'jump' ) ]()
        false
      
      # slider pager click
      $this.find( '[data-jump-to]' ).on 'click', () ->
        data.jump $( this ).data( 'jump-to' ) + 1
        options.onSlidePageChange.call( this )
        false
      
      # slider swipe
      if options.touch
        $this.find( '[data-group="slide"]' )
          .on 'movestart', (e) ->
            clearAutoplay $this, data.interval
            data.movestart e
          .on 'move', (e) ->
            data.move e
          .on 'moveend', (e) ->
            data.moveend e

    # CREATE SLIDER FOR EACH SELECTED ELEMENT
    run = () ->
      r.each () ->
        $this = $( @ )

        # create "slider" data variable
        data = $this.data 'slider'
        
        # create slider object on init
        if !data
          init $this, options
        else if typeof option == 'string'
          data[ publicFunc[option] ]()
        else if typeof option == 'number'
          data.jump Math.abs( option ) + 1
        
        $this

    # Run slider only when page is fully loaded
    if $.fn.responsiveSlider.run
      run()
    else
      $(window).on 'load', run
      $.fn.responsiveSlider.run = true

  # ANIMATION FUNCTIONS
  # ===================
  $.fn.responsiveSlider.animations =
    slideAppearRightToLeft: ( $caption, delay = 0, length = 300 ) ->
      css =
        'margin-left': 100
        'margin-right': -100
      $caption.css css
      animate = () ->
        css =
          'margin-left': 0
          'margin-right': 0
          'opacity': 1
        $caption.animate css, length
      if delay > 0 then setTimeout animate, delay else animate()

    slideAppearLeftToRight: ( $caption, delay = 0, length = 300 ) ->
      css =
        'margin-left': -100
        'margin-right': 100
      $caption.css css
      animate = () ->
        css =
          'margin-left': 0
          'margin-right': 0
          'opacity': 1
        $caption.animate css, length
      if delay > 0 then setTimeout animate, delay else animate()

    slideAppearUpToDown: ( $caption, delay = 0, length = 300 ) ->
      css =
        'margin-top': 100
        'margin-bottom': -100
      $caption.css css
      animate = () ->
        css =
          'margin-top': 0
          'margin-bottom': 0
          'opacity': 1
        $caption.animate css, length
      if delay > 0 then setTimeout animate, delay else animate()

    slideAppearDownToUp: ( $caption, delay = 0, length = 300 ) ->
      css =
        'margin-top': -100
        'margin-bottom': 100
      $caption.css css
      animate = () ->
        css =
          'margin-top': 0
          'margin-bottom': 0
          'opacity': 1
        $caption.animate css, length
      if delay > 0 then setTimeout animate, delay else animate()

  # PLUGIN DEFAULTS
  $.fn.responsiveSlider.defaults =
    autoplay: false
    interval: 5000
    touch: true
    parallax: false
    parallaxDistance: 1/10;
    parallaxDirection: 1;
    transitionTime: 300
    moveDistanceToSlideChange: 4
    onSlideChange: () ->
    onSlideNext: () ->
    onSlidePrev: () ->
    onSlidePageChange: () ->

  $.fn.responsiveSlider.run = false
  
  spy = $('[data-spy="responsive-slider"]')

  if ( spy.length )
    opts = {}
    if autoplay = spy.data 'autoplay' then opts.autoplay = autoplay
    if interval = spy.data 'interval' then opts.interval = interval
    if parallax = spy.data 'parallax' then opts.parallax = parallax
    if parallaxDistance = spy.data 'parallax-distance' then opts.parallaxDistance = parseInt parallaxDistance, 10
    if parallaxDirection = spy.data 'parallax-direction' then opts.parallaxDirection = parseInt parallaxDirection, 10
    if !touch = spy.data 'touch' then opts.touch = touch
    if transitionTime = spy.data 'transitiontime' then opts.transitionTime = transitionTime
    spy.responsiveSlider( opts )

  null