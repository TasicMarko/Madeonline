

<section class="clients">


<div class="marquee">
  <div class="marquee__item">

  <!-- Clients repeater 1 -->
  <?php if (have_rows('clients_repeater')) {
        while (have_rows('clients_repeater')) {
                the_row();
        $logo_img = get_sub_field('image');
        $link =  get_sub_field('link');    ?>

    <span class="marquee__seperator">
        <a href="<?php echo $link; ?>">
            <img src="<?php  echo $logo_img['url']; ?>">
        </a>
        </span>

    <?php } }?>
    <!-- WClients repeater 1 END -->


  </div><div class="marquee__item">

    <!-- Clients repeater 2 -->
    <?php if (have_rows('clients_repeater')) {
        while (have_rows('clients_repeater')) {
                the_row();
        $logo_img = get_sub_field('image');
        $link =  get_sub_field('link');    ?>

    <span class="marquee__seperator">
        <a href="<?php echo $link; ?>">
            <img src="<?php  echo $logo_img['url']; ?>">
        </a>
        </span>

    <?php } }?>
    <!-- WClients repeater 2 END -->

  </div>
</div>


</section>