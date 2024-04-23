<?php
/*
Template Name: Home Page
*/

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php
          get_template_part('template-parts/hero-service');
          get_template_part('template-parts/our-services');
    ?>
  </main>
</div>

<?php
get_footer();
?>
