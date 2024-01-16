<? get_header(); ?>
  <div class="bread">
    <div class="contain">
      <div class="bread-w">
        <a href="/">Main</a> <i><span class="bread-arr"></span></i> <?php _e( 'Search results for: '); ?>
			<span class="bread-search"><?php echo get_search_query(); ?>...</span>
      </div>
    </div>
  </div><!--bread-->
<div class="blog-head">
	<div class="contain">   
		<h1>
			<?php _e( 'Search results for: ', 'twentynineteen' ); ?>
			<span class="page-description"><?php echo get_search_query(); ?>...</span>
		</h1>
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
<div class="blog-items blog-items-search">  
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
				echo '<div class="news-l">';
				echo '<img src="';
				echo the_post_thumbnail_url('news-img');
				echo '" alt="news-img"></div>';
				echo '</div></div></div>';

				?>        
			<?php endwhile; ?>
			<?php else: ?>
				<div class="blog-items">  
					<div class="blog-w">
						<div class="blog-news-items">
							<div class="contain">
								<div class="no-res">
									<p>No results, try again...</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>    
		</div><!--news-items-->
	</div>
</div>


<div class="pagination">
	<div class="contain">
		<div class="pagination-w">
			<?php
//Пагинация
			$big = 999999999; 
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages
			) );
			?>
		</div>
	</div>
</div>



<? get_footer(); ?>
