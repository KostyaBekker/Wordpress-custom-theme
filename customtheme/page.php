<?php get_header();?>
<main>
  Это page.php - хардкод

  <?php 
    while ( have_posts() ) {
      the_post();
      
      the_title();
      the_content();
    }
  ?>
</main>
<?php get_footer();