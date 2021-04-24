<nav>
  <ul>
      <li <?php if ($name == "index") echo 'class="current"'; ?>><a href="<?php echo url_for('/index.php'); ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li <?php if ($name == "advisors") echo 'class="current"'; ?>><a href="<?php echo url_for('/advisors.php'); ?>"><span class="glyphicon glyphicon-star"></span> Advisors</a></li>
      <li <?php if ($name == "samples") echo 'class="current"'; ?>><a href="<?php echo url_for('/samples.php'); ?>"><span class="glyphicon glyphicon-comment"></span> Sample Advice</a></li>
      <li <?php if ($name == "cats") echo 'class="current"'; ?>><a href="<?php echo url_for('/cats.php'); ?>"><span class="glyphicon glyphicon-comment"></span> Cats Advice</a></li>
      <li <?php if ($name == "subscribe") echo 'class="current"'; ?>><a href="<?php echo url_for('/subscribe.php'); ?>"><span class="glyphicon glyphicon-shopping-cart"></span> Subscribe Now</a></li>
  </ul>
</nav>
