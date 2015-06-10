<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="content-block text">
      <h1><?php echo $page->title() ?></h1>
    
      <?php echo $page->text()->kirbytext() ?>

        <?php foreach(page('news')->children()->visible()->sortBy('year', 'month') as $news_item): ?>
        <div class="news-block">
          <div class="news-title">
            <h2 class="title"><?php echo $news_item->title()->html() ?></h2>
            <div class="news-date">
              <?php echo $news_item->month()->html() ?>
              <?php echo $news_item->year()->html() ?>
            </div>
          </div>
          <div class="content">
            <div class="text-block">
              <?php echo $news_item->text()->kirbytext() ?>
            </div>
          </div>
      </div>
      <?php endforeach ?>

  </div>

  </main>

<?php snippet('footer') ?>