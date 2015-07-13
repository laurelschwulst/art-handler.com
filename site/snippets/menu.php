<nav role="navigation" id="top">

  <ul class="menu cf">

    <a href="<?php echo $site->url(); ?>" class="art-handler">ART HANDLER</a>
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <?php
        $is_open = false;
        if($page->parent()->slug() == 'authors' && $p->slug() == 'magazine') $is_open = true;

        if($page->template() == 'search' && $p->slug() == 'magazine') $is_open = true;
      ?>
      <a <?php e($p->isOpen() || $is_open, ' class="current"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

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
  </ul>

  <ul id="social">
    <a href="http://facebook.com/pages/Art-Handler/735055009910112"><li class="fb"></li></a>
    <a href="http://twitter.com/ArtHandlerMag"><li class="twitter"></li></a>
    <a href="http://art-handler.tumblr.com"><li class="tumblr"></li></a>
    <a href="http://instagram.com/arthandlermag/"><li class="instagram"></li></a>
    <a href="#" class="search"><li class="search"></li></a>
  </ul>

  <form id="search" action="<?php echo url('search'); ?>" method="get">
    <input type="text" placeholder="Search" name="q" autocomplete="off" value="<?php echo get('q'); ?>" />
  </form>

</nav>
