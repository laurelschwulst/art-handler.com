<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="../assets/images/favicon.ico">

  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>

  <!-- 

   ▄▀▀█▄▄   ▄▀▀█▄▄▄▄  ▄▀▀▀▀▄  ▄▀▀█▀▄    ▄▀▀▀▀▄    ▄▀▀▄ ▀▄      ▄▀▀█▄▄   ▄▀▀▄ ▀▀▄                                                                     
  █ ▄▀   █ ▐  ▄▀   ▐ █ █   ▐ █   █  █  █         █  █ █ █     ▐ ▄▀   █ █   ▀▄ ▄▀                                                                     
  ▐ █    █   █▄▄▄▄▄     ▀▄   ▐   █  ▐  █    ▀▄▄  ▐  █  ▀█       █▄▄▄▀  ▐     █                                                                       
    █    █   █    ▌  ▀▄   █      █     █     █ █   █   █        █   █        █                                                                       
   ▄▀▄▄▄▄▀  ▄▀▄▄▄▄    █▀▀▀    ▄▀▀▀▀▀▄  ▐▀▄▄▄▄▀ ▐ ▄▀   █        ▄▀▄▄▄▀      ▄▀                                                                        
  █     ▐   █    ▐    ▐      █       █ ▐         █    ▐       █    ▐       █                                                                         
  ▐         ▐                ▐       ▐           ▐            ▐            ▐                                                                         
   ▄▀▀█▄▄   ▄▀▀█▄▄▄▄  ▄▀▀█▄   ▄▀▀▄ ▄▀▀▄  ▄▀▀▀█▀▀▄  ▄▀▀█▀▄    ▄▀▀▀█▄    ▄▀▀▄ ▄▀▀▄  ▄▀▀▀▀▄                                                             
  ▐ ▄▀   █ ▐  ▄▀   ▐ ▐ ▄▀ ▀▄ █   █    █ █    █  ▐ █   █  █  █  ▄▀  ▀▄ █   █    █ █    █                                                              
    █▄▄▄▀    █▄▄▄▄▄    █▄▄▄█ ▐  █    █  ▐   █     ▐   █  ▐  ▐ █▄▄▄▄   ▐  █    █  ▐    █                                                              
    █   █    █    ▌   ▄▀   █   █    █      █          █      █    ▐     █    █       █                                                               
   ▄▀▄▄▄▀   ▄▀▄▄▄▄   █   ▄▀     ▀▄▄▄▄▀   ▄▀        ▄▀▀▀▀▀▄   █           ▀▄▄▄▄▀    ▄▀▄▄▄▄▄▄▀                                                         
  █    ▐    █    ▐   ▐   ▐              █         █       █ █                      █                                                                 
  ▐         ▐                           ▐         ▐       ▐ ▐                      ▐                                                                 
   ▄▀▄▄▄▄   ▄▀▀▀▀▄   ▄▀▀▄ ▄▀▄  ▄▀▀▄▀▀▀▄  ▄▀▀█▄   ▄▀▀▄ ▀▄  ▄▀▀▄ ▀▀▄                                                                                   
  █ █    ▌ █      █ █  █ ▀  █ █   █   █ ▐ ▄▀ ▀▄ █  █ █ █ █   ▀▄ ▄▀                                                                                   
  ▐ █      █      █ ▐  █    █ ▐  █▀▀▀▀    █▄▄▄█ ▐  █  ▀█ ▐     █                                                                                     
    █      ▀▄    ▄▀   █    █     █       ▄▀   █   █   █        █                                                                                     
   ▄▀▄▄▄▄▀   ▀▀▀▀   ▄▀   ▄▀    ▄▀       █   ▄▀  ▄▀   █       ▄▀                                                                                      
  █     ▐           █    █    █         ▐   ▐   █    ▐       █                                                                                       
  ▐                 ▐    ▐    ▐                 ▐            ▐                                                                                       
  
  Special thanks to Dexter Edwards and Matt Lenz.    
                                                          
  -->

  <?php

  echo css('assets/css/lightbox.css');
  echo css('assets/css/main.css');
  echo css('assets/css/jquery.jscrollpane.css');

  $cssURI  = 'assets/css/' . $page->template() . '.css';
  $cssRoot = c::get('root') . '/' . $cssURI;

  echo css($cssURI);

  echo js('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
  echo js('assets/script/jquery.mousewheel.js');
  echo js('assets/script/script.js');
  echo js('assets/script/scroll.js');
  echo js('assets/script/lightbox.js');
  echo js('assets/script/jquery.jscrollpane.js');
  ?>

</head>

<body class="article">

  <header>

    <nav id="top">

      <ul class="menu cf">

        <a href="<?php echo $site->url(); ?>" class="art-handler">ART HANDLER</a>
        <?php foreach($pages->visible() as $p): ?>
        <li>
          <a <?php e($p->isOpen(), ' class="current"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

          <?php if($p->hasVisibleChildren()): ?>
          <ul class="submenu">
            <?php foreach($p->children()->visible() as $p): ?>
            <li>
              <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
            </li>
            <?php endforeach ?>
          </ul>
          <?php endif ?>

        </li>
        <?php endforeach ?>

        <div class="nextprev">
          <?php if($next = $page->nextVisible()): ?>
          <a class="next" href="<?php echo $next->url() ?>">Next</a>
          <?php endif ?>
          <?php if($prev = $page->prevVisible()): ?>
          <a class="prev" href="<?php echo $prev->url() ?>">Prev</a>
          <?php endif ?>
        </div>

      </ul>

    </nav>

    <form id="search" action="<?php echo url('search'); ?>" method="get">
    <input type="text" placeholder="Search" name="q" autocomplete="off" value="<?php echo get('q'); ?>" />
  </form>

  </header>
