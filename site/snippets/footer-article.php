  <footer class="footer cf" role="contentinfo">

    <div class="article-footer">

      <div class="nextprev mobile">
    	<?php if($next = $page->nextVisible()): ?>
    		<a class="next" href="<?php echo $next->url() ?>">Next</a>
    	<?php endif ?>
    	<?php if($prev = $page->prevVisible()): ?>
    		<a class="prev" href="<?php echo $prev->url() ?>">Prev</a>
    	<?php endif ?>
      </div>

      <div id="back-to-top" href="#top">Back to Top</div>

      <ul id="social" class="mobile">
      	<a href="http://instagram.com/arthandlermag/"><li class="instagram"></li></a>
      	<a href="http://art-handler.tumblr.com"><li class="tumblr"></li></a>
      	<a href="http://twitter.com/ArtHandlerMag"><li class="twitter"></li></a>
        <a href="http://facebook.com/pages/Art-Handler/735055009910112"><li class="fb"></li></a>
      </ul>

    </div>

  </footer>

</body>
</html>