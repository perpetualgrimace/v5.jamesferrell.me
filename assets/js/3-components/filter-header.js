$(document).ready(function() {

  // get hash
  var hashVal = getHash();

  // get slug
  var slug = getSlug();

  // debugging
  console.log(slug + ' | ' + hashVal);

  // check for filtery pages
  if (slug == 'blog' || slug == 'projects') {
    // check for filtery hash
    if (hashVal != 'all' && hashVal != '') {
      // filter items
      filter();
    }
  }


  ////////////////////////////////////
  // sort by type on click
  ////////////////////////////////////

  $('[data-type-trigger]').click(function() {
    // detect the hash change before firing
    window.onhashchange = function() {
      // filter items
      filter();
    };
  });


  /*
  // close button
  $('[data-categorized-close]').click(function() {

    // reset all
    $('.card-container').removeClass('is-hidden');
    // hide categorized alert
    $('[data-categorized]').addClass('is-hidden');
    // focus the all button
    $('[data-type-trigger][href="#all"]').addClass('is-selected');

  });
  */

});
