<?php
/*
Template Name: Отдельная новость
Template Post Type: projects, news
*/
?>
<?php wp_reset_postdata(); ?>
<?php get_header(); ?>  
<main class="main">
  <section class="content">
    <div class="contain">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php
        if( has_post_thumbnail() ) {
          echo '<div class="post-img-w"><img src="';
          echo the_post_thumbnail_url('news-img');
          echo '" alt="news-img"></div>';
        }      
        ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>   
  </div>
</section>
</main>
<?php get_footer(); ?>