(function($) {
  $(document).ready(function() {
    var $container = $('#marquees');
    var $marquees = $container.find('.marquee');
    var minTime = 5000;
    var maxTime = 28000;

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

      var minPos = 10;
      var maxPos = 95;
      var position = minPos + (Math.random() * (maxPos - minPos));

      $(this)
        .empty()
        .css({
          top: 'calc(' + position + '% - ' + $(this).height() + 'px)'
        })
        .append($text.clone())
        .append($text.clone());

      cycle(this, minTime + Math.random() * (maxTime - minTime));
    });
  });
})(jQuery);
