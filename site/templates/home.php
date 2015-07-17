<body class="home">

  <?php snippet('header') ?>
    <main>

      <div class="image-container-one">
        <div class="image-container-two">
          <?php if($magazine = page('magazine')): ?>
            <?php foreach($magazine->children()->filterBy('featured', '1', ',')->shuffle()->limit(1) as $project): ?>
              <a href="<?php echo $project->url() ?>">
                <?php if($project->coverimage()): ?>
                  <?php
                    $filename = $project->coverimage();
                    $coverimage = $project->files()->find($filename);
                  ?>

                  <img class="special-image" src="<?php echo thumb($coverimage, array('width' => 1200))->url(); ?>" />
                <?php endif; ?>
              </a>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>

      <div id="marquees">
        <div class="marquee one">
          A new magazine on the practice of moving art
        </div>

        <div class="marquee two">
          A new magazine on the practice of moving art
        </div>

        <div class="marquee three">
          A new magazine on the practice of moving art
        </div>

        <div class="marquee four">
          A new magazine on the practice of moving art
        </div>
      </div>

      <div class="top-bar"></div>
      <div class="bottom-bar"></div>
      <div class="right-bar"></div>
      <div class="left-bar"></div>

    </main>

  <?php snippet('footer') ?>

</body>
