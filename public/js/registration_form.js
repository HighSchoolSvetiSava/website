var theForm = document.getElementById( 'theForm' );
  new stepsForm( theForm, {
        onSubmit : function( form ) {
          // hide form
          classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );

          /*
          form.submit()
          or
          AJAX request (maybe show loading indicator while we don't have an answer..)
          */

          // let's just simulate something...
          var messageEl = theForm.querySelector( '.final-message' );
          classie.addClass( messageEl, 'show' );
          $('.sign-visable').height('800px');
        }
      } );
    