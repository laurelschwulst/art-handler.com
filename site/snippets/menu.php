<nav role="navigation">

  <ul class="menu cf">
    <a href="index.php" class="art-handler">ART HANDLER</a>
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
  </ul>

  <ul id="social">
    <a href="http://www.facebook.com/pages/Art-Handler/"><li class="fb"></li></a>
    <a href="http://twitter.com/ArtHandlerMag"><li class="twitter"></li></a>
    <a href="http://art-handler.tumblr.com"><li class="tumblr"></li></a>
    <a href="http://instagram.com/arthandlermag/"><li class="instagram"></li></a>
  </ul>

</nav>