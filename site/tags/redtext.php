<?php

kirbytext::$tags['redtext'] = array(
  'html' => function($tag) {
    return '<span class="redtext">' . $tag->attr('redtext') . '</span>';
  }
);

?>