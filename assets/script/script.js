$(document).ready(function(){

  /* News item accordion */

  $('.news-title').click(function(){
    $(this).siblings('.content').slideToggle('fast');
  });


  /* Small images in articles and lightbox */

  var small_images = $('figure.small img');

  $(small_images).each(function(){
    var url = $(this).attr('src');
    var link = $('<a href="' + url + '" data-lightbox="set"></a>');
    $(this).wrap(link);
  });

  var small_image_containers = $('figure.small');

  $(small_image_containers).each(function(){
    var caption = $(this).children('figcaption').html();
    var link = $(this).children('a');
    $(link).attr('data-title', caption);
  });

  var last_small_image = $('figure.small').last();
  $('<div class="clearer"></div>').insertAfter(last_small_image);


  /* Homepage  marquees */

  var width = $(window).width();
  var height = $(window).height();

  if ($('.marquee').length){
    $('.marquee').marquee();
  }

  var randomVerticalOne = Math.floor(Math.random()*height);
  var randomVerticalTwo = Math.floor(Math.random()*height);
  var randomVerticalThree = Math.floor(Math.random()*height);
  var randomVerticalFour = Math.floor(Math.random()*height);
  var randomVerticalFive = Math.floor(Math.random()*height);

  if (randomVerticalOne < 0 || randomVerticalOne > (height-20)) { randomVerticalOne == 0 }
  if (randomVerticalTwo < 0 || randomVerticalTwo > (height-20)) { randomVerticalTwo == 0 }
  if (randomVerticalThree < 0 || randomVerticalThree > (height-20)) { randomVerticalThree == 0 }
  if (randomVerticalFour < 0 || randomVerticalFour > (height-20)) { randomVerticalFour == 0 }
  if (randomVerticalFive < 0 || randomVerticalFive > (height-20)) { randomVerticalFive == 0 }

  var randomHorizontalOne = Math.floor(Math.random()*width);
  var randomHorizontalTwo = Math.floor(Math.random()*width);
  var randomHorizontalThree = Math.floor(Math.random()*width);
  var randomHorizontalFour = Math.floor(Math.random()*width);
  var randomHorizontalFive = Math.floor(Math.random()*width);

  $('.marquee.one').css("top", randomVerticalOne + 72 + "px").css("margin-left", -randomHorizontalOne);
  $('.marquee.two').css("top", randomVerticalTwo + 72 + "px").css("margin-left", -randomHorizontalTwo);
  $('.marquee.three').css("top", randomVerticalThree + 72 + "px").css("margin-left", -randomHorizontalThree);
  $('.marquee.four').css("top", randomVerticalFour + 72 + "px").css("margin-left", -randomHorizontalFour);
  $('.marquee.five').css("top", randomVerticalFive + 72 + "px").css("margin-left", -randomHorizontalFive);

  /* Article scrollbar */


  /* Article "back to top" link */
  $('#back-to-top').click(function() {
    console.log('hi');
    $('.jspPane').animate({ top: '0'}, 800);
    $('.jspDrag').animate({ top: '0'}, 800);
  });

});