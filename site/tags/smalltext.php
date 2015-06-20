<?php

kirbytext::$tags['smalltext'] = array(
  'html' => function($tag) {
    return '<div class="smalltext">' . $tag->attr('smalltext') . '</div>';
  }
);

?>