<?php
/*
Template Name: Шаблон для корневых страниц
Template Post Type: page, post
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!--контент самой страницы-->
<?php endwhile; ?>
<?php endif; ?>

<?
$page_items = new WP_Query(array(
  'post_type' => 'solutions',
));

if ( $page_items->have_posts() ) : while ( $page_items->have_posts() ) : $page_items->the_post(); ?>
<? the_title()?>
<?php endwhile; ?>
<?php endif; ?>
<? wp_reset_query(); ?>
<?php get_footer(); ?>