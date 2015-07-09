      (function() {
  
        function init() {
          var speed = 300,
            easing = mina.backout;

          [].slice.call ( document.querySelectorAll( '#news-grid > a' ) ).forEach( function( el ) {
            var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
              pathConfig = {
                from : path.attr( 'd' ),
                to : el.getAttribute( 'data-path-hover' )
              };

            el.addEventListener( 'mouseenter', function() {
              path.animate( { 'path' : pathConfig.to }, speed, easing );
            } );

            el.addEventListener( 'mouseleave', function() {
              path.animate( { 'path' : pathConfig.from }, speed, easing );
            } );
          } );
        }

        init();

      })();
      var loader = document.getElementById('la-anim-6-loader')
        , border = document.getElementById('la-anim-6-border')
        , α = 0
        , π = Math.PI
        , t = 15
        
        , tdraw;

      function PieDraw() {
        α++;
        α %= 360;
        var r = ( α * π / 180 )
        , x = Math.sin( r ) * 250
        , y = Math.cos( r ) * - 250
        , mid = ( α > 180 ) ? 1 : 0
        , anim = 'M 0 0 v -250 A 250 250 1 ' 
               + mid + ' 1 ' 
               +  x  + ' ' 
               +  y  + ' z';

        loader.setAttribute( 'd', anim );
        border.setAttribute( 'd', anim );
        if( α != 0 )
        tdraw = setTimeout(PieDraw, t); // Redraw
      }

      function PieReset() {
        clearTimeout(tdraw);
        var anim = 'M 0 0 v -250 A 250 250 1 0 1 0 -250 z';
        loader.setAttribute( 'd', anim );
        border.setAttribute( 'd', anim );
      }

      var inProgress = false;

      Array.prototype.slice.call( document.querySelectorAll( '#la-buttons > button' ) ).forEach( function( el, i ) {
        var anim = el.getAttribute( 'data-anim' ),
          animEl = document.querySelector( '.' + anim );

        el.addEventListener( 'click', function() {
          if( inProgress ) return false;
          inProgress = true;
          classie.add( animEl, 'la-animate' );

          if( anim === 'la-anim-6' ) {
            PieDraw();
          }

          setTimeout( function() {
            classie.remove( animEl, 'la-animate' );
            
            if( anim === 'la-anim-6' ) {
              PieReset();
            }
            
            inProgress = false;
          }, 6000 );
        } );
      } );
