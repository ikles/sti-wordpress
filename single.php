<?php get_header(); ?>
<div class="bread">
  <div class="contain">
    <div class="bread-w">
      <?php the_breadcrumb(); ?>
    </div>
  </div>
</div><!--bread-->
<div class="post">
  <div class="contain">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="post-img-w">
        <?php
        echo '<img src="';
        echo the_post_thumbnail_url('news-img');
        echo '" alt="news-img">';
        ?>
      </div><!--post-img-w-->
      <div class="post-title">
        <?php the_title(); ?>
      </div>
      <div class="post-cat-date">
        <div class="post-cat">
          <?php
          $category = get_the_category(); 
          $n_ID = $category[0]->cat_ID;            
          echo '<a href="';
          echo get_category_link($n_ID);
          echo '">';
          echo $category[0]->name;
          echo '</a>';
          ?>
        </div><!--post-cat-->
        <div class="post-sep">|</div>
        <div class="post-date">          
          <?php the_date('d M Y'); ?>
        </div><!--post-date-->
      </div><!--post-cat-date-->
      <div class="post-content">
        <?php the_content(); ?>
      </div><!--post-content-->
    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
  </div><!--cont-->

  <div class="comments">
    <div class="contain">
      <div class="comments-title">Comments</div>

      <div class="commentlist-w">

        <ul class="commentlist">
          <?php        
          $post_id = get_queried_object_id();              




          $args =  [
          //custom_comment( [
            'post_id' => $post_id,
            'status' => 'approve',
            'walker'            => null,
            'max_depth'         => '',
            'style'             => 'ul',
            'callback'          => null,
            'end-callback'      => null,
            'type'              => 'all',
            'reply_text'        => 'Reply',
            'page'              => '',
            'per_page'          => '',
            'avatar_size'       => 64,
            'reverse_top_level' => null,
            'reverse_children'  => '',
    'format'            => 'html5', // или xhtml, если HTML5 не поддерживается темой
    'short_ping'        => false,    // С версии 3.6,
    'echo'              => true,     // true или false
  ]; 
  $comments = get_comments( $args );
  foreach( $comments as $comment ){
  }        

  ?>
  <?php wp_list_comments( $args, $comments ); ?>
  <?

  ?>
</ul>
</div><!--commentlist-w-->

<?php

$commenter = wp_get_current_commenter();
$defaults = [
  'fields'               => [
    'author' => '<input placeholder="Name" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ). '"' . $aria_req . $html_req . ' />',
    'email'  => '<input placeholder="Your email*" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' />',      
    'cookies' => ''
  ],
  'comment_field'        => '<textarea placeholder="Comment" id="comment" name="comment" cols="45" rows="8"  aria-required="true" required="required"></textarea>',  
  'label_submit'         => __( 'Submit' ),
  'id_form'              => 'comments',       
  'comment_notes_before' => '',
  'comment_notes_after' => '',
  'title_reply'          => __( 'Leave a Comment' ),
];

comment_form( $defaults );
?>


</div>
</div><!--comments-->


<div class="related">
  <div class="related-head">
    <div class="contain">
      <h2 class="like-h2">You May Also Like</h2>
    </div>
  </div><!--related-head-->
  <div class="related-w">
    <div class="related-items">

      <?
      $args = array( 'posts_per_page' => 2, 'post__not_in' => array($post->ID) );
      $query = new WP_Query( $args );
      while ( $query->have_posts() ) {
        $query->the_post();


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


      }
      wp_reset_postdata();
      ?>



    </div><!--news-items-->
  </div>
</div>
</div><!--post-->
<div class="subscr">
  <?php
  $post = get_post(21);
  ?>  
  <div class="contain">
    <div class="subscr-w">
      <div class="subscr-desc"><?php echo get_field('subscribe_text'); ?></div>
      <div class="subscr-form-wrap">
        <div class="hor-form subscr-form">
          <div id="valid"></div>
          <?php echo do_shortcode('[contact-form-7 id="158" title="join-form"]'); ?>
        </div>
      </div><!--subscr-form-wrap-->
    </div>
  </div>    
</div>
<?php get_footer(); ?>