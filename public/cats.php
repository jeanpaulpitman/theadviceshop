
<?php require_once ('../private/initialize.php'); ?>
<?php $page_title = 'Cats Advice'; ?>
<?php include(SHARED_PATH . '/head.php'); ?>
<?php include(SHARED_PATH . '/inc_header.php'); ?>
<?php include(SHARED_PATH . '/inc_nav.php'); ?>
<h2>Cats Advice</h2>
<div id="content">
    <p>We need more cats on this website</p>
</div>
<p>&nbsp;</p>
<?php
$img_class = "img-circle";
$img_width = "250";
$cats = array (
    array("Carter","first","images/carter.jpg","Carter","meow meow"),
    array("Mittens","second","images/mittens.jpg","Mittens","His Royal Floofyness"),
    array("Maximus","third","images/maximus.jpg","Maximus","Maximus thinks he is better than you."),
);?>

<section id="features" class="clearfix">
    <?php
    foreach ($cats as $value) {
        echo " <div id=$value[1] ", "<h2>", $value[0], "</h2>", "<br><img class=$img_class src=$value[2] height=$img_width alt=$value[3]><blockquote>$value[4]</blockquote>", "</div>";
    }
    ?>
    <div id="first">
        <h2>Carter</h2>
        <img class="img-circle lean" src="images/carter.jpg" height="250" alt="Carter">
        <blockquote>meow meow</blockquote>
        <button class="button">Click Me</button>
    </div>
    <div id="second">
        <h2 class="lean">Mittens</h2>
        <img class="img-circle" src="images/mittens.jpg" height="250" alt="Dalai Lama">
        <blockquote>His Royal Floofyness </blockquote>
        <button class="inverse-button">Click Me</button>
    </div>
    <div id="third">
        <h2>Maximus</h2>
        <img class="img-circle" src="images/maximus.jpg" height="250" alt="Vanilla Ice">
        <blockquote class="lean">Maximus thinks he is better than you.</blockquote>
        <button class="button">Click Me</button>
    </div>
</section>
<?php include(SHARED_PATH . '/inc_footer.php'); ?>
