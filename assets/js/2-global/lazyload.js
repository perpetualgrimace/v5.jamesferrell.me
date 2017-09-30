// images
function lazyloadImg() {

  $('img[data-src]').each(function() {
    var sourceFile = $(this).attr('data-src');
    $(this).attr('src', sourceFile);
  });

}


// @2x images via srcset
function lazyload2x() {

  $('img[data-src2x]').each(function() {
    var sourceFile = $(this).attr('data-src');
    var sourceFile2x = $(this).attr('data-src2x');

    $(this).attr('srcset', sourceFile + ', ' + sourceFile2x + ' 2x');
  });

}


// background
function lazyloadBg() {

  $('[data-bg-src]').each(function() {
    var sourceFile = $(this).attr('data-bg-src');
    var bgPath = "url(" + sourceFile + ")";
    $(this).css('background-image', bgPath);
  });

}


$(document).ready(function() {
  lazyload2x();
  lazyloadImg();
  lazyloadBg();
});
