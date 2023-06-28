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




</div>

<?php get_footer(''); ?>

