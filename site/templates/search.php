<body class="search">

<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <?php snippet('projects', array('query' => get('q'))); ?>

  </main>

<?php snippet('footer') ?>

</body>