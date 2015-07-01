$(document).ready(function(){
  var $scrollPane = $('body.article');

  if($(window).width() < 1126) {
    $scrollPane.jScrollPane({
      verticalDragMinHeight: 72,
      verticalDragMaxHeight: 72,
      horizontalDragMinWidth: 0,
      horizontalDragMaxWidth: 0
    });
  } else {
    $scrollPane.jScrollPane({
      verticalDragMinHeight: 82,
      verticalDragMaxHeight: 82,
      horizontalDragMinWidth: 0,
      horizontalDragMaxWidth: 0
    });
  }

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
