<?php snippet('header-article') ?>

  <div class="breadcrumb">
    <a href="../index.php">ART HANDLER</a> /
    <a href="../magazine">Magazine</a>
  </div>

  <main class="main article" role="main">

    <h1><?php echo $page->title()->html() ?></h1>

    <div class="article-container">

      <div class="text-block">
        <div class="author">By <?php echo $page->author() ?></div>
      </div>

    <?php echo $page->text()->kirbytext() ?>

    </div>

    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
      <?php endif ?>
    </nav>

  </main>

  <div class="sp-scrollbar">
    <div class="sp-thumb"/>
  </div>

<?php snippet('footer') ?>