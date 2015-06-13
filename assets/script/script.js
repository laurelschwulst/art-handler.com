$(document).ready(function(){

  $('.news-title').click(function(){
    $(this).siblings('.content').slideToggle('fast');
  });

  var small_images = $('figure.small img');

  $(small_images).each(function(){
    var url = $(this).attr('src');
    var link = $('<a href="' + url + '" data-lightbox="set"></a>');
    $(this).wrap(link);
  });

  var small_image_containers = $('figure.small');

  $(small_image_containers).each(function(){
    var caption = $(this).children('figcaption').html();
    console.log(caption);
    var link = $(this).children('a');
    $(link).attr('data-title', caption);
  });


  var randomPercentOne = Math.floor(Math.random()*100);
  var randomPercentTwo = Math.floor(Math.random()*100);
  var randomPercentThree = Math.floor(Math.random()*100);
  var randomPercentFour = Math.floor(Math.random()*100);
  var randomPercentFive = Math.floor(Math.random()*100);

  var randomSpeedOne = Math.floor(Math.random()*15);
  var randomSpeedTwo = Math.floor(Math.random()*15);
  var randomSpeedThree = Math.floor(Math.random()*15);
  var randomSpeedFour = Math.floor(Math.random()*15);
  var randomSpeedFive = Math.floor(Math.random()*15);

  $('.marquee.one').css("top", randomPercentOne + "%");
  $('.marquee.two').css("top", randomPercentTwo + "%");
  $('.marquee.three').css("top", randomPercentThree + "%");
  $('.marquee.four').css("top", randomPercentFour + "%");
  $('.marquee.five').css("top", randomPercentFive + "%");

  $('.marquee.one').children().attr("scrollamount", randomSpeedOne);
  $('.marquee.two').children().attr("scrollamount", randomSpeedTwo);
  $('.marquee.three').children().attr("scrollamount", randomSpeedThree);
  $('.marquee.four').children().attr("scrollamount", randomSpeedFour);
  $('.marquee.five').children().attr("scrollamount", randomSpeedFive);

  $("body.article").jScrollPane(
    {
      verticalDragMinHeight: 82,
      verticalDragMaxHeight: 82,
      horizontalDragMinWidth: 20,
      horizontalDragMaxWidth: 20
    }
  );

});