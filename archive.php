<?php get_header(); ?>


        <?php the_breadcrumb(); ?>

      <?php
      $parent_id = get_queried_object_id();      
      ?>      
     <?php echo single_cat_title(); ?>

            <?php             
    //link to news cat    
    //$news_cat_link = get_category_link($parent_id);
            $news_cat_link = get_category_link(4);
            echo "<li class='cat-item current-all'><a href='$news_cat_link'>All posts</a></li>";
            $args = array(
              'child_of' => 4,
              'title_li' => false
            );
            ?>
            <?php wp_list_categories( $args ); ?>
      


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>   
          <?php
          echo '<div class="news-item"><div class="contain"><div class="blog-item-w">';
          echo '<div class="news-r blog-r"><div class="join-txt-3 news-txt-3">';
          $category = get_the_category(); 
          $n_ID = $category[0]->cat_ID;
        //p_a($category);        
          echo '<a href="';
          echo get_category_link($n_ID);
          echo '">';
          echo $category[0]->name;
          echo '</a>';

          echo '</div><div class="join-txt-2">';
          echo the_title();
          echo '</div><div class="news-desc">';
          echo get_field('short_description');
          echo '</div> <div class="news-butt-wrap">';
          echo '<a href="';
          echo the_permalink();
          echo '" class="butt-o">Read more</a></div></div><!--news-r-->';
          echo '<div class="news-l blog-l">';
          echo '<img src="';
          echo the_post_thumbnail_url('news-img');
          echo '" alt="news-img"></div>';
          echo '</div></div></div>';

          ?>        
        <?php endwhile; ?>
      <?php endif; ?>    
      <?php if ( $wp_query->max_num_pages > 1 ) : ?>
       <script>
         var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
         var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
         var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
         var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
       </script>


    <?php endif; ?>     


<?php get_footer(); ?>






