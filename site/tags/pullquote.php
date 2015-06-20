<?php

kirbytext::$tags['pullquote'] = array(
  'html' => function($tag) {
    return '<div class="pullquote">' . $tag->attr('pullquote') . '</div>';
  }
);

?>