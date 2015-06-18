<body class="home gradient">

  <?php snippet('header') ?>
    <main>

      <div class="image-container-one">
        <div class="image-container-two">
          <?php foreach(page('magazine')->children()->filterBy('featured', '1', ',')->shuffle()->limit(1) as $project): ?>
            <a href="<?php echo $project->url() ?>">

              <?php if($project->coverimage()): ?>

              <?php
              $filename = $project->coverimage();
              $coverimage = $project->files()->find($filename);
              ?>

              <img class="special-image" src="<?php echo $coverimage->url(); ?>" />

            <?php endif ?>

          </a>
        <?php endforeach ?>
        </div>
      </div>




      
      <div id="marquees">
        <div class="marquee one">
          <marquee>A new magazine on the practice of moving art</marquee>
        </div>

        <div class="marquee two">
          <marquee>A new magazine on the practice of moving art</marquee>
        </div>

        <div class="marquee three">
          <marquee>A new magazine on the practice of moving art</marquee>
        </div>

        <div class="marquee four">
          <marquee>A new magazine on the practice of moving art</marquee>
        </div>

        <div class="marquee five">
          <marquee>A new magazine on the practice of moving art</marquee>
        </div>
      </div>
    -->

      <div class="top-bar"></div>
      <div class="bottom-bar"></div>
      <div class="right-bar"></div>
      <div class="left-bar"></div>

    </main>

</body>