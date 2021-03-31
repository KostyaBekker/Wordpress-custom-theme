<?php get_header();?>
<main>
  Страница поста

  <?php 
    if ( have_posts() ) {
      the_post();

      echo '<div class="post-title">' . get_the_title() . '</div>';
      the_content();

      if (the_post_thumbnail()) {
        the_post_thumbnail();
      } else {

      }
    
    }
  ?>
</main>
<?php get_footer();