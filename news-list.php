<?php
/*
Template Name: Список новостей / проектов
Template Post Type: page, post
*/
?>
<?php wp_reset_postdata(); ?>
<?php get_header(); ?>  
<main class="main">
  <section class="news">
    <div class="contain">
      <div class="news__list">
        <?php

        global $post;       
        $post_type = $post->post_type;

        if ($post->post_name == 'news') {
          $args = array( 'post_type' => 'news', 'posts_per_page' => 100 );          
        }
        if ($post->post_name == 'projects') {
          $args = array( 'post_type' => 'projects', 'posts_per_page' => 100 );          
        }



        //echo $post_type;


        $the_query = new WP_Query( $args );
        ?>
        <?php if ( $the_query->have_posts() ) : ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>            
            <div class="news__col">
              <a href="<? the_permalink(); ?>" class="news__item">
                <div class="news__cont"><?php the_title(); ?></div>
                <div class="news__date"><?php echo get_the_date(); ?></div>
              </a>      
            </div>            
            <?php wp_reset_postdata(); ?>
          <? endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>    
</main>
<?php get_footer(); ?>