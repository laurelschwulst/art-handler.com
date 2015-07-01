<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <?php snippet('projects', array('author' => $page->slug())); ?>

  </main>

<?php snippet('footer') ?>
