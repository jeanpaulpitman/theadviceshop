<?php require_once ('../private/initialize.php'); ?>
<?php $page_title = 'Subscribe'; ?>
<?php include(SHARED_PATH . '/head.php'); ?>
<?php include(SHARED_PATH . '/inc_header.php'); ?>
<?php include(SHARED_PATH . '/inc_nav.php'); ?>
<h2>Subscribe now for great advice!</h2>
<h3>We are so confident, we offer a money-back guarantee :)</h3>
<div id="content">
    <form action="../process.php" method="get">
  <p>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
  </p>
  <p>Gender:<br>
    <label>
      <input type="radio" name="gender" value="male" id="gender_male">
      Male</label>
    <br>
    <label>
      <input type="radio" name="gender" value="female" id="gender_female">
      Female</label>
    <br>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Subscribe">
  </p>
</form>
<p>Try us out. You won't be disappointed.</p>
</div>
<?php include(SHARED_PATH . '/inc_footer.php'); ?>
