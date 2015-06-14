<?php snippet('header-article') ?>

  <main class="main article" role="main">

    <h1><?php echo $page->title()->html() ?></h1>

    <div class="article-container">

      <div class="text-block">
        <div class="author">By <?php echo $page->author() ?></div>
      </div>

    <?php echo $page->text()->kirbytext() ?>

    </div>

  </main>

  <div class="sp-scrollbar">
    <div class="sp-thumb"/>
  </div>

  <div class="clearer"></div>

  <div class="article-footer">
    <div id="back-to-top" href="#top">Back to Top</div>
  </div>

<?php snippet('footer') ?>