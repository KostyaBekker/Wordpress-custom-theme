<?php get_header();?>
<main>
  страница блога

  <?php 
    while ( have_posts() ) {
      the_post();

      echo '<div class="post-title">' . get_the_title() . '</div>';
      echo '<div class="post-content">' . get_the_content() . '</div>';
      echo '<a href="' . get_the_permalink() . '" class="post-permalink">Подробнее</a>';
    }
  ?>
</main>
<?php get_footer();