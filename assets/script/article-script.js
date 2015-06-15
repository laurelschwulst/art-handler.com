$(document).ready(function(){

  $.getScript( "../assets/script/jquery.jscrollpane.js" )
    .done(function( script, textStatus ) {
      $('body.article').jScrollPane({
          verticalDragMinHeight: 82,
          verticalDragMaxHeight: 82,
          horizontalDragMinWidth: 20,
          horizontalDragMaxWidth: 20
        });
      console.log( 'script success' );
    })
    .fail(function( jqxhr, settings, exception ) {
      console.log('script fail')
  });

});