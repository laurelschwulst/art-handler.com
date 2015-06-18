$(document).ready(function(){
  $.getScript( "../assets/script/jquery.jscrollpane.js" )
    .done(function( script, textStatus ) {
      if ($(window).width() < 1126) {
        $('body.article').jScrollPane({
            verticalDragMinHeight: 72,
            verticalDragMaxHeight: 72,
            horizontalDragMinWidth: 0,
            horizontalDragMaxWidth: 0
          });
      }else{
          $('body.article').jScrollPane({
            verticalDragMinHeight: 82,
            verticalDragMaxHeight: 82,
            horizontalDragMinWidth: 0,
            horizontalDragMaxWidth: 0
          });
      }
      //console.log( 'script success' );
    })
    .fail(function( jqxhr, settings, exception ) {
      //console.log('script fail')
  });

  $( "sup.footnote a" ).click(function() {
		  //console.log('footnote-cilcked');
		  var scrollto = $(this).attr('href');
		  //console.log(scrollto);
		  var value = $('li'+scrollto).position();
		  //console.log(value.top);
		  var valueheight = $('.jspPane').height() - $(window).height();
		  console.log(valueheight);
		  if(value.top < valueheight ){
			  $('.jspPane').animate({
			    top: -value.top,
			  }, 350, function() {
			    // Animation complete.
			  });
		  }else{
		  		$('.jspPane').animate({
			    top: -valueheight,
			  }, 350, function() {
			    // Animation complete.
			  });
		  }
	});

  	$( ".footnotereverse a" ).click(function() {
  		//console.log('footnote-reverse-cilcked');
		var scrollup = $(this).attr('href');
		//console.log(scrollup);
		var stringarray = scrollup.split("ef-");
		var scrollto = $(this).attr('href');
		var num = stringarray[1]
		var valueTwo = $('footnote a#fnref-'+num).position();
		//console.log(valueTwo);
		var valueheight = $('.jspPane').height() - $(window).height();
		  //console.log(valueheight);
			  $('.jspPane').animate({
			    top: -valueTwo.top
			  }, 350, function() {
			    // Animation complete.
			  });

  	});
});



