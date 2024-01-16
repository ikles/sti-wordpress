<?php
/*
Template Name: Template for Single Team
Template Post Type: page
*/
?>
<?php get_header(); ?>
<div class="bread">
  <div class="contain">
    <div class="bread-w">
      <?php the_breadcrumb(); ?>
    </div>
  </div>
</div><!--bread-->
<div class="team-1">
  <div class="contain">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1 class="like-h1"><?php the_title() ?></h1>      
    </div><!--contain-->
  </div><!--how-1-->
  <div class="team-2">
    <div class="contain">
      <div class="team-title"><?php echo get_field('background'); ?></div>
      <div class="team-desc">
        <?php echo get_field('desc'); ?>
      </div><!--team-desc-->
    </div><!--contain-->
  </div><!--team-2-->

  <div class="team-3">
    <div class="contain">
      <div class="team-title-2"><?php echo get_field('board_of_directors_title'); ?></div>
      <?php
      $bo_dir_1 = get_field('board_of_directors_1');
      $bo_dir_2 = get_field('board_of_directors_2');
      $bo_dir_3 = get_field('board_of_directors_3');       
      ?>
      <div class="team-items">

        <?php if( $bo_dir_1 != '' ): ?>
          <div class="team-item-col">
            <div class="team-item">
              <div class="team-item-img-w">
                <img src="<?php echo $bo_dir_1['image'] ?>" alt="image">
              </div>
              <div class="team-item-texts">
                <div class="team-item-name"><?php echo $bo_dir_1['name'] ?></div>
                <div class="team-item-position"><?php echo $bo_dir_1['position'] ?></div>
                <div class="team-item-linkedin_link">
                  <a target="_blank" href="<?php echo $bo_dir_1['linkedin_link'] ?>">
                    <img src="<?php bloginfo('template_url') ?>/img/Lin.png" alt="clock-icon">
                  </a>              
                </div>
                <div class="team-item-nationality">
                  <div class="team-item-title">Nationality</div>              
                  <?php if( $bo_dir_1['nationality'] != '' ): ?>
                    <img src="<?php echo $bo_dir_1['nationality'] ?>" alt="image">
                  <?php endif; ?>
                </div>
                <div class="team-item-countries_of_experience">
                  <div class="team-item-title">Countries of experience:</div>
                  <div class="team-item-countries_of_experience-items">
                    <?php if( $bo_dir_1['countries_of_experience_1'] != '' ): ?>
                      <img src="<?php echo $bo_dir_1['countries_of_experience_1'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $bo_dir_1['countries_of_experience_2'] != '' ): ?>                      
                      <img src="<?php echo $bo_dir_1['countries_of_experience_2'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $bo_dir_1['countries_of_experience_3'] != '' ): ?>

                      <img src="<?php echo $bo_dir_1['countries_of_experience_3'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $bo_dir_1['countries_of_experience_4'] != '' ): ?>
                      <img src="<?php echo $bo_dir_1['countries_of_experience_4'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $bo_dir_1['countries_of_experience_5'] != '' ): ?>
                      <img src="<?php echo $bo_dir_1['countries_of_experience_5'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $bo_dir_1['countries_of_experience_6'] != '' ): ?>
                      <img src="<?php echo $bo_dir_1['countries_of_experience_6'] ?>" alt="image">
                    <?php endif; ?>
                  </div><!--team-item-countries_of_experience-items-->
                </div>            
              </div><!--team-item-texts-->
            </div><!--team-item-->
          </div><!--team-item-col-->
        <?php endif; ?>

        <?php if( $bo_dir_2 != '' ): ?>
          <div class="team-item-col">
            <div class="team-item">
              <div class="team-item-img-w">
                <img src="<?php echo $bo_dir_2['image'] ?>" alt="image">
              </div>
              <div class="team-item-texts">
                <div class="team-item-name"><?php echo $bo_dir_2['name'] ?></div>
                <div class="team-item-position"><?php echo $bo_dir_2['position'] ?></div>
                <div class="team-item-linkedin_link">
                  <a target="_blank" href="<?php echo $bo_dir_2['linkedin_link'] ?>">
                    <img src="<?php bloginfo('template_url') ?>/img/Lin.png" alt="clock-icon">
                  </a>              
                </div>
                <div class="team-item-nationality">
                  <div class="team-item-title">Nationality</div>              
                  <?php if( $bo_dir_2['nationality'] != '' ): ?>
                    <img src="<?php echo $bo_dir_2['nationality'] ?>" alt="image">
                  <?php endif; ?>
                </div>
                <div class="team-item-countries_of_experience">
                  <div class="team-item-title">Countries of experience:</div>
                  <div class="team-item-countries_of_experience-items">
                    <?php if( $bo_dir_2['countries_of_experience_1'] != '' ): ?>
                      <img src="<?php echo $bo_dir_2['countries_of_experience_1'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $bo_dir_2['countries_of_experience_2'] != '' ): ?>
                      <img src="<?php echo $bo_dir_2['countries_of_experience_2'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $bo_dir_2['countries_of_experience_3'] != '' ): ?>
                      <img src="<?php echo $bo_dir_2['countries_of_experience_3'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $bo_dir_2['countries_of_experience_4'] != '' ): ?>
                      <img src="<?php echo $bo_dir_2['countries_of_experience_4'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $bo_dir_2['countries_of_experience_5'] != '' ): ?>
                      <img src="<?php echo $bo_dir_2['countries_of_experience_5'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $bo_dir_2['countries_of_experience_6'] != '' ): ?>
                      <img src="<?php echo $bo_dir_2['countries_of_experience_6'] ?>" alt="image">
                    <?php endif; ?>
                  </div><!--team-item-countries_of_experience-items-->
                </div>            
              </div><!--team-item-texts-->
            </div><!--team-item-->
          </div><!--team-item-col-->
        <?php endif; ?>

        <?php if( $bo_dir_3 != '' ): ?>
          <div class="team-item-col">
            <div class="team-item">
              <div class="team-item-img-w">
                <img src="<?php echo $bo_dir_3['image'] ?>" alt="image">
              </div>
              <div class="team-item-texts">
                <div class="team-item-name"><?php echo $bo_dir_3['name'] ?></div>
                <div class="team-item-position"><?php echo $bo_dir_3['position'] ?></div>
                <div class="team-item-linkedin_link">
                  <a target="_blank" href="<?php echo $bo_dir_3['linkedin_link'] ?>">
                    <img src="<?php bloginfo('template_url') ?>/img/Lin.png" alt="clock-icon">
                  </a>              
                </div>
                <div class="team-item-nationality">
                  <div class="team-item-title">Nationality</div>              
                  <?php if( $bo_dir_3['nationality'] != '' ): ?>
                    <img src="<?php echo $bo_dir_3['nationality'] ?>" alt="image">
                  <?php endif; ?>
                </div>
                <div class="team-item-countries_of_experience">
                  <div class="team-item-title">Countries of experience:</div>
                  <div class="team-item-countries_of_experience-items">
                    <?php if( $bo_dir_3['countries_of_experience_1'] != '' ): ?>
                      <img src="<?php echo $bo_dir_3['countries_of_experience_1'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $bo_dir_3['countries_of_experience_2'] != '' ): ?>
                      <img src="<?php echo $bo_dir_3['countries_of_experience_2'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $bo_dir_3['countries_of_experience_3'] != '' ): ?>
                      <img src="<?php echo $bo_dir_3['countries_of_experience_3'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $bo_dir_3['countries_of_experience_4'] != '' ): ?>
                      <img src="<?php echo $bo_dir_3['countries_of_experience_4'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $bo_dir_3['countries_of_experience_5'] != '' ): ?>
                      <img src="<?php echo $bo_dir_3['countries_of_experience_5'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $bo_dir_3['countries_of_experience_6'] != '' ): ?>
                      <img src="<?php echo $bo_dir_3['countries_of_experience_6'] ?>" alt="image">
                    <?php endif; ?>
                  </div><!--team-item-countries_of_experience-items-->
                </div>
              </div><!--team-item-texts-->
            </div><!--team-item-->
          </div><!--team-item-col-->
        <?php endif; ?>

      </div><!--team-items-->

    </div><!--contain-->
  </div><!--team-3-->

  <div class="team-4">
    <div class="contain">
      <div class="team-title-2"><?php echo get_field('some_of_us_title'); ?></div>
      <?php
      $som_us_1 = get_field('some_of_us_1');
      $som_us_2 = get_field('some_of_us_2');
      $som_us_3 = get_field('some_of_us_3');
      $som_us_4 = get_field('some_of_us_4');
      $som_us_5 = get_field('some_of_us_5');
      $som_us_6 = get_field('some_of_us_6');            
      ?>
      <div class="team-items">

        <?php if( $som_us_1 != '' ): ?>
          <div class="team-item-col">
            <div class="team-item">
              <div class="team-item-img-w">
                <img src="<?php echo $som_us_1['image'] ?>" alt="image">
              </div>
              <div class="team-item-texts">
                <div class="team-item-name"><?php echo $som_us_1['name'] ?></div>
                <div class="team-item-position"><?php echo $som_us_1['position'] ?></div>
                <div class="team-item-linkedin_link">
                  <a target="_blank" href="<?php echo $som_us_1['linkedin_link'] ?>">
                    <img src="<?php bloginfo('template_url') ?>/img/Lin.png" alt="clock-icon">
                  </a>              
                </div>
                <div class="team-item-nationality">
                  <div class="team-item-title">Nationality</div>              
                  <?php if( $som_us_1['nationality'] != '' ): ?>
                    <img src="<?php echo $som_us_1['nationality'] ?>" alt="image">
                  <?php endif; ?>
                </div>
                <div class="team-item-countries_of_experience">
                  <div class="team-item-title">Countries of experience:</div>
                  <div class="team-item-countries_of_experience-items">
                    <?php if( $som_us_1['countries_of_experience_1'] != '' ): ?>
                      <img src="<?php echo $som_us_1['countries_of_experience_1'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_1['countries_of_experience_2'] != '' ): ?>
                      <img src="<?php echo $som_us_1['countries_of_experience_2'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_1['countries_of_experience_3'] != '' ): ?>
                      <img src="<?php echo $som_us_1['countries_of_experience_3'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_1['countries_of_experience_4'] != '' ): ?>
                      <img src="<?php echo $som_us_1['countries_of_experience_4'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_1['countries_of_experience_5'] != '' ): ?>
                      <img src="<?php echo $som_us_1['countries_of_experience_5'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_1['countries_of_experience_6'] != '' ): ?>
                      <img src="<?php echo $som_us_1['countries_of_experience_6'] ?>" alt="image">
                    <?php endif; ?>
                  </div><!--team-item-countries_of_experience-items-->
                </div>
              </div><!--team-item-texts-->
            </div><!--team-item-->
          </div><!--team-item-col-->
        <?php endif; ?>

        <?php if( $som_us_2 != '' ): ?>
          <div class="team-item-col">
            <div class="team-item">
              <div class="team-item-img-w">
                <img src="<?php echo $som_us_2['image'] ?>" alt="image">
              </div>
              <div class="team-item-texts">
                <div class="team-item-name"><?php echo $som_us_2['name'] ?></div>
                <div class="team-item-position"><?php echo $som_us_2['position'] ?></div>
                <div class="team-item-linkedin_link">
                  <a target="_blank" href="<?php echo $som_us_2['linkedin_link'] ?>">
                    <img src="<?php bloginfo('template_url') ?>/img/Lin.png" alt="clock-icon">
                  </a>              
                </div>
                <div class="team-item-nationality">
                  <div class="team-item-title">Nationality</div>              
                  <?php if( $som_us_2['nationality'] != '' ): ?>
                    <img src="<?php echo $som_us_2['nationality'] ?>" alt="image">
                  <?php endif; ?>
                </div>
                <div class="team-item-countries_of_experience">
                  <div class="team-item-title">Countries of experience:</div>
                  <div class="team-item-countries_of_experience-items">
                    <?php if( $som_us_2['countries_of_experience_1'] != '' ): ?>
                      <img src="<?php echo $som_us_2['countries_of_experience_1'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_2['countries_of_experience_2'] != '' ): ?>
                      <img src="<?php echo $som_us_2['countries_of_experience_2'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_2['countries_of_experience_3'] != '' ): ?>
                      <img src="<?php echo $som_us_2['countries_of_experience_3'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_2['countries_of_experience_4'] != '' ): ?>
                      <img src="<?php echo $som_us_2['countries_of_experience_4'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_2['countries_of_experience_5'] != '' ): ?>
                      <img src="<?php echo $som_us_2['countries_of_experience_5'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_2['countries_of_experience_6'] != '' ): ?>
                      <img src="<?php echo $som_us_2['countries_of_experience_6'] ?>" alt="image">
                    <?php endif; ?>
                  </div><!--team-item-countries_of_experience-items-->
                </div>
              </div><!--team-item-texts-->
            </div><!--team-item-->
          </div><!--team-item-col-->
        <?php endif; ?>

        <?php if( $som_us_3 != '' ): ?>
          <div class="team-item-col">
            <div class="team-item">
              <div class="team-item-img-w">
                <img src="<?php echo $som_us_3['image'] ?>" alt="image">
              </div>
              <div class="team-item-texts">
                <div class="team-item-name"><?php echo $som_us_3['name'] ?></div>
                <div class="team-item-position"><?php echo $som_us_3['position'] ?></div>
                <div class="team-item-linkedin_link">
                  <a target="_blank" href="<?php echo $som_us_3['linkedin_link'] ?>">
                    <img src="<?php bloginfo('template_url') ?>/img/Lin.png" alt="clock-icon">
                  </a>              
                </div>
                <div class="team-item-nationality">
                  <div class="team-item-title">Nationality</div>              
                  <?php if( $som_us_3['nationality'] != '' ): ?>
                    <img src="<?php echo $som_us_3['nationality'] ?>" alt="image">
                  <?php endif; ?>
                </div>
                <div class="team-item-countries_of_experience">
                  <div class="team-item-title">Countries of experience:</div>
                  <div class="team-item-countries_of_experience-items">
                    <?php if( $som_us_3['countries_of_experience_1'] != '' ): ?>
                      <img src="<?php echo $som_us_3['countries_of_experience_1'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_3['countries_of_experience_2'] != '' ): ?>
                      <img src="<?php echo $som_us_3['countries_of_experience_2'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_3['countries_of_experience_3'] != '' ): ?>
                      <img src="<?php echo $som_us_3['countries_of_experience_3'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_3['countries_of_experience_4'] != '' ): ?>
                      <img src="<?php echo $som_us_3['countries_of_experience_4'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_3['countries_of_experience_5'] != '' ): ?>
                      <img src="<?php echo $som_us_3['countries_of_experience_5'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_3['countries_of_experience_6'] != '' ): ?>
                      <img src="<?php echo $som_us_3['countries_of_experience_6'] ?>" alt="image">
                    <?php endif; ?>
                  </div><!--team-item-countries_of_experience-items-->
                </div>
              </div><!--team-item-texts-->
            </div><!--team-item-->
          </div><!--team-item-col-->
        <?php endif; ?>

        <?php if( $som_us_4 != '' ): ?>
          <div class="team-item-col">
            <div class="team-item">
              <div class="team-item-img-w">
                <img src="<?php echo $som_us_4['image'] ?>" alt="image">
              </div>
              <div class="team-item-texts">
                <div class="team-item-name"><?php echo $som_us_4['name'] ?></div>
                <div class="team-item-position"><?php echo $som_us_4['position'] ?></div>
                <div class="team-item-linkedin_link">
                  <a target="_blank" href="<?php echo $som_us_4['linkedin_link'] ?>">
                    <img src="<?php bloginfo('template_url') ?>/img/Lin.png" alt="clock-icon">
                  </a>              
                </div>
                <div class="team-item-nationality">
                  <div class="team-item-title">Nationality</div>              
                  <?php if( $som_us_4['nationality'] != '' ): ?>
                    <img src="<?php echo $som_us_4['nationality'] ?>" alt="image">
                  <?php endif; ?>
                </div>
                <div class="team-item-countries_of_experience">
                  <div class="team-item-title">Countries of experience:</div>
                  <div class="team-item-countries_of_experience-items">
                    <?php if( $som_us_4['countries_of_experience_1'] != '' ): ?>
                      <img src="<?php echo $som_us_4['countries_of_experience_1'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_4['countries_of_experience_2'] != '' ): ?>
                      <img src="<?php echo $som_us_4['countries_of_experience_2'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_4['countries_of_experience_3'] != '' ): ?>
                      <img src="<?php echo $som_us_4['countries_of_experience_3'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_4['countries_of_experience_4'] != '' ): ?>
                      <img src="<?php echo $som_us_4['countries_of_experience_4'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_4['countries_of_experience_5'] != '' ): ?>
                      <img src="<?php echo $som_us_4['countries_of_experience_5'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_4['countries_of_experience_6'] != '' ): ?>
                      <img src="<?php echo $som_us_4['countries_of_experience_6'] ?>" alt="image">
                    <?php endif; ?>
                  </div><!--team-item-countries_of_experience-items-->
                </div>
              </div><!--team-item-texts-->
            </div><!--team-item-->
          </div><!--team-item-col-->
        <?php endif; ?>

        <?php if( $som_us_5 != '' ): ?>
          <div class="team-item-col">
            <div class="team-item">
              <div class="team-item-img-w">
                <img src="<?php echo $som_us_5['image'] ?>" alt="image">
              </div>
              <div class="team-item-texts">
                <div class="team-item-name"><?php echo $som_us_5['name'] ?></div>
                <div class="team-item-position"><?php echo $som_us_5['position'] ?></div>
                <div class="team-item-linkedin_link">
                  <a target="_blank" href="<?php echo $som_us_5['linkedin_link'] ?>">
                    <img src="<?php bloginfo('template_url') ?>/img/Lin.png" alt="clock-icon">
                  </a>              
                </div>
                <div class="team-item-nationality">
                  <div class="team-item-title">Nationality</div>              
                  <?php if( $som_us_5['nationality'] != '' ): ?>
                    <img src="<?php echo $som_us_5['nationality'] ?>" alt="image">
                  <?php endif; ?>
                </div>
                <div class="team-item-countries_of_experience">
                  <div class="team-item-title">Countries of experience:</div>
                  <div class="team-item-countries_of_experience-items">
                    <?php if( $som_us_5['countries_of_experience_1'] != '' ): ?>
                      <img src="<?php echo $som_us_5['countries_of_experience_1'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_5['countries_of_experience_2'] != '' ): ?>
                      <img src="<?php echo $som_us_5['countries_of_experience_2'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_5['countries_of_experience_3'] != '' ): ?>
                      <img src="<?php echo $som_us_5['countries_of_experience_3'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_5['countries_of_experience_4'] != '' ): ?>
                      <img src="<?php echo $som_us_5['countries_of_experience_4'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_5['countries_of_experience_5'] != '' ): ?>
                      <img src="<?php echo $som_us_5['countries_of_experience_5'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_5['countries_of_experience_6'] != '' ): ?>
                      <img src="<?php echo $som_us_5['countries_of_experience_6'] ?>" alt="image">
                    <?php endif; ?>
                  </div><!--team-item-countries_of_experience-items-->
                </div>
              </div><!--team-item-texts-->
            </div><!--team-item-->
          </div><!--team-item-col-->
        <?php endif; ?>

        <?php if( $som_us_6 != '' ): ?>
          <div class="team-item-col">
            <div class="team-item">
              <div class="team-item-img-w">
                <img src="<?php echo $som_us_6['image'] ?>" alt="image">
              </div>
              <div class="team-item-texts">
                <div class="team-item-name"><?php echo $som_us_6['name'] ?></div>
                <div class="team-item-position"><?php echo $som_us_6['position'] ?></div>
                <div class="team-item-linkedin_link">
                  <a target="_blank" href="<?php echo $som_us_6['linkedin_link'] ?>">
                    <img src="<?php bloginfo('template_url') ?>/img/Lin.png" alt="clock-icon">
                  </a>              
                </div>
                <div class="team-item-nationality">
                  <div class="team-item-title">Nationality</div>              
                  <?php if( $som_us_6['nationality'] != '' ): ?>
                    <img src="<?php echo $som_us_6['nationality'] ?>" alt="image">
                  <?php endif; ?>
                </div>
                <div class="team-item-countries_of_experience">
                  <div class="team-item-title">Countries of experience:</div>
                  <div class="team-item-countries_of_experience-items">
                    <?php if( $som_us_6['countries_of_experience_1'] != '' ): ?>
                      <img src="<?php echo $som_us_6['countries_of_experience_1'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_6['countries_of_experience_2'] != '' ): ?>
                      <img src="<?php echo $som_us_6['countries_of_experience_2'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_6['countries_of_experience_3'] != '' ): ?>
                      <img src="<?php echo $som_us_6['countries_of_experience_3'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_6['countries_of_experience_4'] != '' ): ?>
                      <img src="<?php echo $som_us_6['countries_of_experience_4'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_6['countries_of_experience_5'] != '' ): ?>
                      <img src="<?php echo $som_us_6['countries_of_experience_5'] ?>" alt="image">
                    <?php endif; ?>
                    <?php if( $som_us_6['countries_of_experience_6'] != '' ): ?>
                      <img src="<?php echo $som_us_6['countries_of_experience_6'] ?>" alt="image">
                    <?php endif; ?>
                  </div><!--team-item-countries_of_experience-items-->
                </div>
              </div><!--team-item-texts-->
            </div><!--team-item-->
          </div><!--team-item-col-->
        <?php endif; ?>

      </div><!--team-items-->

    </div><!--contain-->
  </div><!--team-4-->
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>