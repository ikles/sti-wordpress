<?php get_header(); ?>

<div class="blog">  
  <div class="bread">
    <div class="contain">
      <div class="bread-w">
        <?php the_breadcrumb(); ?>
      </div>
    </div>
  </div><!--bread-->
  <div class="blog-head">
    <div class="contain">
      <?php
      $parent_id = get_queried_object_id();      
      ?>      
      <h1><?php echo single_cat_title(); ?></h1>
    </div>
  </div><!--blog-head-->
  <div class="blog-sort-search">
    <div class="contain">
      <div class="sort-w">
        <div class="sort-wrap">
          <div class="sort-span"><div>Show me: </div> <span></span></div>
          <ul class="sort">
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
          </ul><!--sort-->
        </div><!--sort-wrap-->
        <div class="search-w">
          <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">            
            <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />            
            <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
          </form>
        </div>
      </div><!--sort-w-->
    </div><!--contain-->
  </div><!--blog-sort-search-->
  <div class="blog-items">  
    <div class="blog-w">
      <div class="blog-news-items">
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

       <div class="more_block">      
        <div class="btn_more_blocks contain" id="true_loadmore"><span>Load more posts</span></div>      
      </div>
    <?php endif; ?>     

  </div><!--news-items-->
</div>
</div><!--blog-cat-->
</div><!--blog-->
<?php get_footer(); ?>






