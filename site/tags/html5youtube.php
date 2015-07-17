<?php
/*
 * kirbytag html5youtube
 * responsive html5 youtube player embedding
 * 
 * copyright: Jannik Beyerstedt | http://jannikbeyerstedt.de | code@jannikbeyerstedt.de
 * license: http://www.gnu.org/licenses/gpl-3.0.txt GPLv3 License
 * 
 * version 2.0.1 (09.01.2015)
 * changelog:
 * - v2.0:   kirby 2 support
 * - v2.0.1: fix some html validation issues with & symbols
 */

kirbytext::$tags['html5youtube'] = array(
  'attr' => array(
    'options'
  ),
  'html' => function($tag) {
    $base = 'https://www.youtube-nocookie.com/embed/';
    $end = '?rel=0&amp;html5=1';
    
    $videoID = $tag->attr('html5youtube');
    $options    = $tag->attr('options');

    return '<div class="video-container"><iframe src="' . $base . $videoID . $end . $options . '" allowfullscreen></iframe></div>';
  }
  
);