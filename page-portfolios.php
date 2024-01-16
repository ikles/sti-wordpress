<?php
/*
Template Name: Template for Portfolios
*/
?>
<?php get_header(); ?>
<div class="bread">
  <div class="contain">
    <div class="bread-w">
      <?php
      $post = get_post(173);
      ?>
      <?php the_breadcrumb(); ?>
    </div>
  </div>
</div><!--bread-->
<div class="portfolios-2-content content">
  <div class="contain">
    <h1><?php the_title(); ?></h1>
    <div class="portfolios-2-desc">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
        <?php the_content(); ?>
      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>   
    </div><!--portfolios-2-desc-->
  </div>
</div><!--portfolios-2-content-->
<div class="portfolios-2">  
  <div class="portfolios-w-2">
    <div class="portfolios-items-2">      
      <?php $i = 0; ?>
      <?php if ( have_posts() ) : query_posts(array('posts_per_page' => 100, 'cat' => 3)); ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php            
          $i++;
          ?>
          <div class="portfolios-item-2">
            <div class="contain contain-portfolios">
              <div class="portfolios-item-w portfolios-item-w-2 wrap">              
                <div class="portfolios-item-l">
                  <div class="portfolios-item-txt-1">               
                    <?php echo get_field('status'); ?>
                  </div>
                  <div class="portfolios-item-txt-2">
                    <?php the_title(); ?>         
                  </div>
                  <div class="portfolios-item-txt-3">
                    <?php echo get_field('interest_distribution_frequency'); ?>                    
                  </div>
                  <div class="portfolios-item-txt-4">
                    <?php echo get_field('short_description'); ?>                    
                  </div>                  
                  <a href="<?php the_permalink(); ?>" class="butt-o hide-768">View details</a>
                </div><!--portfolios-item-l-->
                <div class="portfolios-item-r">
                  <div class="graph graph-portfolios graph-portfolios-<?php echo $i ?>">
                    <div class="graph-txt-1"><?php echo get_field('latest_dividends_distributions_text'); ?></div>
                    <div class="graph-info">
                      <div class="graph-info-l">
                        <div class="graph-info-txts">
                          <span>Period</span>
                          <span>Interest Rate</span>
                        </div>
                        <span class="info-line"></span>
                      </div>
                      <div class="graph-info-r">
                        <div class="period period-1">
                          <span class="week"><?php echo get_field('period_1'); ?></span>
                          <span class="perc"><?php echo get_field('interest_rate_1'); ?></span>
                        </div>
                        <div class="period period-2">
                          <span class="week"><?php echo get_field('period_2'); ?></span>
                          <span class="perc"><?php echo get_field('interest_rate_2'); ?></span>
                        </div>
                        <div class="period period-3">
                          <span class="week"><?php echo get_field('period_3'); ?></span>
                          <span class="perc"><?php echo get_field('interest_rate_3'); ?></span>
                        </div>
                      </div>
                    </div><!--graph-info-->
                    <div class="chart">
                      <div class="chart-l">
                        <div class="chart-txt">Max</div>
                        <div class="chart-txt">Hi</div>
                        <div class="chart-txt">Med</div>
                        <div class="chart-txt">Lo</div>
                        <div class="chart-txt">Min</div>
                      </div>
                      <div class="chart-r">
                        <div class="lines">
                          <div class="line line-1"></div>
                          <div class="line line-2"></div>
                          <div class="line line-3"></div>
                        </div>
                        <div class="chart-cols">
                          <div class="chart-col-w chart-col-w-1">
                            <div class="chart-col chart-col-<?php echo $i ?>" data-height="<?php echo get_field('scale_height_1'); ?>px"></div>
                            <div class="chart-date"><?php echo get_field('scale_date_1'); ?></div>
                          </div><!--chart-col-w-->
                          <div class="chart-col-w chart-col-w-2">
                            <div class="chart-col chart-col-<?php echo $i ?>" data-height="<?php echo get_field('scale_height_2'); ?>px"></div>
                            <div class="chart-date"><?php echo get_field('scale_date_2'); ?></div>
                          </div><!--chart-col-w-->
                          <div class="chart-col-w chart-col-w-3">
                            <div class="chart-col chart-col-<?php echo $i ?>" data-height="<?php echo get_field('scale_height_3'); ?>px"></div>
                            <div class="chart-date"><?php echo get_field('scale_date_3'); ?></div>
                          </div><!--chart-col-w-->
                          <div class="chart-col-w chart-col-w-4">
                            <div class="chart-col chart-col-<?php echo $i ?>" data-height="<?php echo get_field('scale_height_4'); ?>px"></div>
                            <div class="chart-date"><?php echo get_field('scale_date_4'); ?></div>
                          </div><!--chart-col-w-->
                          <div class="chart-col-w chart-col-w-5">
                            <div class="chart-col chart-col-<?php echo $i ?>" data-height="<?php echo get_field('scale_height_5'); ?>px"></div>
                            <div class="chart-date"><?php echo get_field('scale_date_5'); ?></div>
                          </div><!--chart-col-w-->
                        </div><!--chart-cols-->
                      </div>
                    </div>
                  </div><!--graph-->
                  <div class="show-768 graph-butt-wrap">
                    <a href="<?php the_permalink(); ?>" class="butt-o">Discover More</a>
                  </div>
                </div><!--portfolios-item-r-->              
              </div><!--portfolios-item-w-->
            </div><!--contain-->
          </div><!--portfolios-item-->
        <?php endwhile; ?>
      <?php endif; wp_reset_query(); ?>
    </div><!--portfolios-items-->
  </div><!--portpholios-w-->  
</div><!--portpholios-->
<?php
$post = get_post(128);
?>
<?php if( get_field('show_block_2') == 'yes' ): ?>
  <div class="join">
    <div class="contain">
      <div class="join-w">
        <div class="join-l">
          <img
          src="<? bloginfo('template_url') ?>/img/join-phone@2x.png"
          alt="join-phone"
          srcset="<? bloginfo('template_url') ?>/img/join-phone.png 1x,
          <? bloginfo('template_url') ?>/img/join-phone@2x.png 2x"
          >
        </div>      
        <div class="join-r">
          <div class="join-txt-1"><?php the_title(); ?></div> 
          <div class="join-txt-2"><?php echo get_field('join_now_text_1'); ?></div> 
          <div class="join-txt-3"><?php echo get_field('join_now_text_2'); ?></div> 
          <div class="join-txt-4"><?php echo get_field('join_now_text_3'); ?></div> 
          <div class="hor-form join-form">
            <div id="valid"></div>
            <?php echo do_shortcode('[contact-form-7 id="158" title="join-form"]'); ?>    
          </div>
        </div>
      </div>
    </div>
  </div><!--join-->
<?php endif; ?>

<?php
$post = get_post(126);
?>
<?php if( get_field('show_block') == 'yes' ): ?>
  <div class="join join-2">
    <div class="contain">
      <div class="join-w">
        <div class="join-l">
          <img
          src="<? bloginfo('template_url') ?>/img/join-phone@2x.png"
          alt="join-phone"
          srcset="<? bloginfo('template_url') ?>/img/join-phone.png 1x,
          <? bloginfo('template_url') ?>/img/join-phone@2x.png 2x"
          >
        </div>
        <div class="join-r">
          <div class="join-txt-1"><?php the_title(); ?></div>
          <ul class="join-list">                              
            <li class="join-list-item"><?php echo get_field('for_the_only_1'); ?></li>
            <li class="join-list-item"><?php echo get_field('for_the_only_2'); ?></li>
            <li class="join-list-item"><?php echo get_field('for_the_only_3'); ?></li>
          </ul><!--join-list-->
          <div class="join-apps">
            <a href="<?php echo get_field('appstore_link'); ?>" class="join-app">
              <svg class="icon">
                <use xlink:href="<? bloginfo('template_url') ?>/img/sprite.svg#appstore"></use>
              </svg>
            </a>
            <a href="<?php echo get_field('google_play_link'); ?>" class="join-app">
              <img src="<? bloginfo('template_url') ?>/img/goo-play.svg" alt="goo-play">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div><!--join-2-->
<?php endif; ?>
<?php get_footer(); ?>