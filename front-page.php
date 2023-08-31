<?php
/* 
Template Name: Homepage
*/

get_header();

$fields = get_fields();

?>
<div class="main">

<div class="main">


<!-- Hero section -->
<?php require_once(dirname(__FILE__) . '/template-parts/content-hero.php'); ?>
<!-- Hero section END -->


<!-- Why section -->
<?php require_once(dirname(__FILE__) . '/template-parts/content-why.php'); ?>
<!-- Why section END -->

<!-- Services section -->
<?php require_once(dirname(__FILE__) . '/template-parts/content-services.php'); ?>
<!-- Services section END -->

<!-- Choose section -->
<?php // require_once(dirname(__FILE__) . '/template-parts/content-choose.php'); ?>
<!-- Choose section END -->

<!-- Choose TEST section -->
<?php  require_once(dirname(__FILE__) . '/template-parts/content-choose-test.php'); ?>
<!-- Choose section END -->

<!-- Clients section -->
<?php require_once(dirname(__FILE__) . '/template-parts/content-clients.php'); ?>
<!-- Clients section END -->

<!-- Form section -->
<?php require_once(dirname(__FILE__) . '/template-parts/content-form.php'); ?>
<!-- Form section END -->


</div>

<?php get_footer(''); ?>

