$(document).ready(function(){


  ////////////////////////////////////////////////////
  // toggle via button
  ////////////////////////////////////////////////////

  // detect button click
  $('.site-intro-toggle').on('click', function(e) {
    // toggle .site-intro class
    $('.site-intro').toggleClass('is-collapsed');
    // set focus to contact link in bio
    // add .tertiary-is-collapsed body class to prevent scroll tests
    // $('body').toggleClass('tertiary-is-collpased');
  });


  ////////////////////////////////////////////////////
  // toggle via scroll
  ////////////////////////////////////////////////////

  /*
  // check for .tertiary-is-collapsed body class before doing the scroll test
  if(!$('body').hasClass('tertiary-is-collapsed')) {

    // initialize window position for later comparisons
    var previousWindowPosition = $(window).scrollTop();

    // scroll event
    $(window).on('scroll', function() {

      // set new window position variable
      var currentWindowPosition = $(this).scrollTop();

      // compare new window position to old window position
      // if the test passes, the user is scrolling downward
      if (currentWindowPosition > previousWindowPosition) {

        // get logo position + offset
        var logo = $('.site-intro .logo').offset();

        // check window position against logo position
        // if the test passes, the logo is in position to toggle
        if (currentWindowPosition >= logo.top - 20) {

          // add .is-collapsed to .site-intro if it isn't already there
          $('.site-intro:not(.is-collapsed)').addClass('is-collapsed');
          // add .tertiary-is-collapsed to body
          $('body').addClass('tertiary-is-collpased');
        }

      }

      // all new things must become old
      previousWindowPosition = currentWindowPosition;

    });
  }
  */

});
