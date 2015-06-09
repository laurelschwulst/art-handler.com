<ul class="magazine-block">
  <div class="grid-wrap">
    <h1><?php echo $page->title() ?></h1>
    <?php foreach(page('magazine')->children()->visible() as $project): ?>
    <a href="<?php echo $project->url() ?>" class="grid-col col-one-quarter">
      <div class="square"><img src="assets/images/square-invisible.svg"></div>
      <div class="title-container">
        <span class="title"><?php echo $project->title()->html() ?></span>
      </div>
      <div class="metadata">
        <div class="type"><?php echo $project->type() ?></div>
        <div class="byline">by <?php echo $project->author()->html() ?></div>
      </div>

      <?php if($project->postimage()): ?>

        <?php
            $filename = $project->postimage();
            $postimage = $project->files()->find($filename);
        ?>

        <div class="image">
          <img src="<?php echo $postimage->url(); ?>" />
        </div>

      <?php endif ?>

    </a>
    <?php endforeach ?>
  </div>
</ul>
