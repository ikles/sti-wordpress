<? get_header(); ?> <!--Подключаем шапку-->  
		<div id="bread"><b>Записи по метке : "<? single_tag_title(); ?>"</b></div><!--Тайтл тэга-->
		<div class="content">		
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!--Цикл вордпресс-->
			<div class="post-main">			
			<h1><a href="<? the_permalink();?>"><? the_title(); ?></a> <span><? the_time('d.m.Y'); ?></span></h1>
				<div class="post">
				<? the_post_thumbnail('full','class=imgstyle'); ?>
				<?php the_content(); ?>	
<p><a href="<? the_permalink();?>">Подробнее</a></p>
<p><? the_tags(); ?></p>
				</div>
				</div>
				<?php endwhile; ?>
	<div class="pagination">
<?php
//Комментарии
$big = 999999999; // need an unlikely integer
echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages
) );
?>
</div>
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
			</div>
		<? get_sidebar(); ?>	
	</div>
	<? get_footer(); ?>
</div>
<? wp_footer(); ?>
</body>
</html>