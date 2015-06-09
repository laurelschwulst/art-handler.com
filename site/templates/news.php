<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="content-block text">
      <h1><?php echo $page->title() ?></h1>
    
      <?php echo $page->text()->kirbytext() ?>

      <div class="news-block">
        <?php foreach(page('news')->children()->visible() as $news_item): ?>
          <div class="news-title">
            <h2 class="title"><?php echo $news_item->title()->html() ?></h2>
            <div class="news-date">
              <?php echo $news_item->month()->html() ?>
              <?php echo $news_item->year()->html() ?>
            </div>
          </div>
          <div class="content">
            <div class="text-block">
              <?php echo $news_item->text()->html() ?>
            </div>
          </div>
        <?php endforeach ?>
      </div>

  </div>

  </main>

<?php snippet('footer') ?>