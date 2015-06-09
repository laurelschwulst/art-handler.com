<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="content-block text">

      <h1><?php echo $page->title() ?></h1>
      
      <div class="text-block">

        <?php echo $page->text()->kirbytext() ?>

        <?php snippet('mailing-list') ?>

      </div>

    </div>

  </main>

<?php snippet('footer') ?>