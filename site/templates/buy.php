<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="content-block">
      <div class="text-block">
        <h1><?php echo $page->title()->html() ?></h1>
        <?php echo $page->text()->kirbytext() ?>
      </div>
    </div>

  </main>

<?php snippet('footer') ?>