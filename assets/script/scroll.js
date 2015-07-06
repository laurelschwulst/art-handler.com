$(document).ready(function(){
  var $scrollPane = $('body.article');

  var verticalMax = ($(window).width() < 1126) ? 72 : 82;
  var animateDuration = 1200;

  $scrollPane.jScrollPane({
    verticalDragMinHeight: verticalMax,
    verticalDragMaxHeight: verticalMax,
    horizontalDragMinWidth: 0,
    horizontalDragMaxWidth: 0,
    animateDuration: animateDuration
  });

  var jsp = $scrollPane.data('jsp');

  $('sup.footnote a, .footnotereverse a').on('click', function(event) {
    event.preventDefault();
    jsp.scrollToElement($(this.hash), true, true);
	});

  $('#back-to-top').on('click', function(event) {
    event.preventDefault();
    jsp.scrollToY(0, true);
  });
});
