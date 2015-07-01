<ul class="magazine-block">
  <div class="grid-wrap">
    <h1>Magazine</h1>

    <?php if(isset($author) && $author_page = page('authors')->find($author)): ?>
      <h2>Filter: <?php echo $author_page->title(); ?></h2>
    <?php endif; ?>

    <?php
      $articles = page('magazine')->children()->visible();
      if(isset($author)):
        $articles = $articles->filterBy('author', '*=', $author);
      endif;
    ?>

    <?php foreach($articles as $project): ?>
    <a href="<?php echo $project->url() ?>" class="grid-col col-one-quarter">
      <div class="square"><img src="<?php echo url('assets/images/square-invisible.svg'); ?>"></div>
      <div class="title-container">
        <span class="title"><?php echo $project->title()->html() ?></span>
      </div>
      <div class="metadata">
        <div class="type">
          <?php echo $project->type() ?>
          <?php if($topic = $project->topic()): ?>
            <span class="topic"><?php echo $topic ?></span>
          <?php endif ?>
        </div>
        <div class="byline">
          by
          <span class="author-container" data-type="short">
            <?php
              foreach($project->author()->split() as $slug):
                if($author = page('authors')->find($slug)):
            ?>
              <span><?php echo $author->title(); ?></span>
            <?php else: ?>
              <span><?php echo $slug; ?></span>
            <?php endif; endforeach; ?>
          </span>
        </div>

      </div>

      <?php if($postimage = $project->postimage()->sortBy('sort', 'asc')->first()): ?>

        <?php
            $filename = $project->postimage();
            $postimage = $project->files()->find($filename);
        ?>

        <div class="image">
          <?php echo thumb($postimage, array('width' => 650)) ?>
        </div>

      <?php endif ?>

    </a>
    <?php endforeach ?>
  </div>
</ul>
