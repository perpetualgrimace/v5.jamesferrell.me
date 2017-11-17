//////////////////////////////////////
// interactions
//////////////////////////////////////

// when hovering or focusing an object,
// add a state class to the parent
function parentFocus(selector, container) {

  $(selector).focus(function() {
    $(this).closest(container).addClass('is-focused');
  });
  $(selector).blur(function() {
    $(this).closest(container).removeClass('is-focused');
  });
  $(selector).mouseenter(function() {
    $(this).closest(container).addClass('is-focused');
  });
  $(selector).mouseleave(function() {
    $(this).closest(container).removeClass('is-focused');
  });
}


// uppercase initial letter
function uppercaseInitial(string) {
  // get first character and capitalize it
  var firstChar = string.substring(0, 1).toUpperCase();
  // get the rest of the string
  var tail = string.substring(1);
  // put them both together
  return firstChar + tail;
}


// get the page hash
function getHash() {
  // get the hash value, minus the hash
  return window.location.hash.substr(1);
}


// get the page slug
// thanks, https://stackoverflow.com/questions/16717086/converting-url-string-into-slug#answer-16717628
function getSlug() {

  // if we're on the home page, there won't be a slug
  if (window.location.pathname == '/') {
    return 'home';
  // otherwise, get the slug
  } else {
    // get the full path and split it into components
    var pathComponents = window.location.pathname.match(/([^\/]+)/g);
    // return the last bit (AKA, the slug)
    return pathComponents[pathComponents.length - 1];
    // debugging
    // console.log('getSlug() fired; the slug is: ' + slug);
  }
}


// update filter header title
function filter() {

  // update hashtag value
  hashVal = getHash();

  // check for filtery hash, exclude non-filtery hashes
  if (hashVal != 'footer-nav' && hashVal != 'site-intro' && hashVal != 'main' && hashVal != '') {


    // update category title

    // convert category-title to Category title
    var categoryTitle = uppercaseInitial( hashVal.replace('-', ' ') );
    // set title to categoryTitle
    $('[data-filter-header-category]').text(categoryTitle);


    // update selected trigger style (.tag-link)

    // remove .is-selected class from previously selected tag-link
    $('[data-type-trigger]:not([href="#' + hashVal + '"])').removeClass('is-selected');
    // add .is-selected class to currently selected tag-link
    $('[data-type-trigger][href="#' + hashVal + '"]').addClass('is-selected');


    // show/hide filtered items

    // unide them all by default
    $('[data-type-item]').removeClass('is-hidden');
    // hide those who shall be hidden
    if (hashVal != 'all') { // 'all' isn't a category, so without this everything gets hidden 😬
      $('[data-type-item]:not([data-type*="' + hashVal + '"])').addClass('is-hidden');
    }


    // fancy highlight effect

    // remove highlight class by default
    $('.tag[data-type]').removeClass('is-highlighted');

    // highlight the appropriate tags
    if (hashVal != 'all') {
      $('.tag[data-type*="' + hashVal + '"]').addClass('is-highlighted');
    }

    // remove the highlighted class after a bit
    delay(function(){
      $('.is-highlighted').removeClass('is-highlighted');
    }, 1000);


    // debug
    // console.log('filter() fired; category updated to "' + categoryTitle + '"');

  }
}


// delay function
// thanks, https://coderwall.com/p/biqpfw/jquery-window-size-onload-and-onresize
var delay = (function() {
  var timer = 0;
  return function(callback, ms){
    clearTimeout(timer);
    timer = setTimeout(callback, ms);
  };
})();
