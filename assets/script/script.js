$(document).ready(function(){

  /* News item accordion */

  $('.news-title').click(function(){
    $(this).siblings('.content').slideToggle('fast');
  });

  /* Small images in articles and lightbox */

  var small_images = $('figure.small img, figure.medium img, figure.large img, figure.fifty img');

  $(small_images).each(function() {
    var $link = $(this).parent('a');
    if($link.length) {
      $link.attr('data-lightbox', 'set');
    }
  });

  var small_image_containers = $('figure.small, figure.medium, figure.large, figure.fifty');

  $(small_image_containers).each(function(){
    var caption = $(this).children('figcaption').html();
    var link = $(this).children('a');
    $(link).attr('data-title', caption);
  });

  var last_small_image = $('figure.small, figure.fifty').last();
  $('<div class="clearer"></div>').insertAfter(last_small_image);

});
