(function($) {
  $(document).ready(function() {
    var $container = $('#marquees');
    var $marquees = $container.find('.marquee');
    var minTime = 2500;
    var maxTime = 10000;

    var cycle = function(el, time) {
      $(el).transition({
        x: '-50%'
      }, time, 'linear', function() {
        $(el).css({ x: 0 });
        cycle(el, time);
      });
    }

    $marquees.each(function() {
      var text = $(this).text();
      var $text = $('<div class="text" />').text(text);

      $(this)
        .empty()
        .css({
          top: 'calc(' + (Math.random() * 100) + '% - ' + $(this).height() + 'px)'
        })
        .append($text.clone())
        .append($text.clone());

      cycle(this, minTime + Math.random() * (maxTime - minTime));
    });
  });
})(jQuery);
