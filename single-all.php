<?php
/*
Template Name: Шаблон для корневых страниц
Template Post Type: post, page, solutions, directions, industries
*/
?>
<?php wp_reset_postdata(); ?>
<?php get_header(); ?>  
<img src="<? the_field('banner_bg');?>" alt="" class="header__bg">
<div class="banner">
  <div class="contain banner__inn">
    <h1><?the_field('banner_title');?></h1>
    <div class="banner_subtitle"><?the_field('banner_subtitle');?></div>            
    <?php if (get_field('banner_subtitle_2')): ?>
      <h4><?the_field('banner_subtitle_2');?></h4>
    <?php endif; ?>
    <?php if (get_field('banner_text')): ?>
      <?the_field('banner_text');?>
    <?php endif; ?>
    <?php if (get_field('banner_btn_text')): ?>
      <a href="<?the_field('banner_btn_link');?>" class="btn"><?the_field('banner_btn_text');?></a>
    <?php endif; ?>    
    <?php if (get_field('banner_icons')): ?>
      <div class="topcats__row">
        <?
        $banner_icons = get_field('banner_icons');
        foreach($banner_icons as $banner_id): ?>          
          <a href="<? the_permalink($banner_id); ?>">
            <div class="topcats__img-w"><img src="<? echo get_the_post_thumbnail_url($banner_id, 'large'); ?>" /></div>
            <div class="topcats__text"><? echo get_the_title($banner_id); ?></div>
          </a>
        <? endforeach ?>
      </div>
    <?php endif; ?>    
  </div>
</div>  
</header>
<main class="main">
  <?
// проверяем есть ли данные в гибком содержании
  if( have_rows('blocks') ):
  //echo 'yes 1';
  // перебираем макеты гибкого содержания
    while ( have_rows('blocks') ) : the_row(); ?>    
<? // проверяем на нужный макет
if( get_row_layout() == 'babout'): ?>
  <section class="about">
    <div class="contain">
      <div class="about__row">
        <div class="about__l">                
          <?php if (get_sub_field('title')): ?>
            <h1><?the_sub_field('title');?></h1>
          <?php endif; ?>
          <?the_sub_field('txt_1');?>
        </div>
        <div class="about__r">
          <?the_sub_field('txt_2');?>
        </div>
      </div>
      <div class="res">
        <div class="res__row">
          <div class="res__l">
            <?the_sub_field('subtitle');?>
          </div>
          <div class="res__r">
            <?the_sub_field('txt_3');?>
          </div>
        </div>      
      </div>
    </div>
  </section>
<? endif; ?> 
<?if( get_row_layout() == 'resitems'): ?>
<section class="resitems">
  <div class="contain">
    <div class="res__items">
      <?php if (get_sub_field('resitem')): ?>      
        <?
        $resitem_icons = get_sub_field('resitem');
        foreach($resitem_icons as $resitem_id): ?>          
          <a href="<? the_permalink($resitem_id); ?>" class="resitem">
            <div><img src="<? echo get_the_post_thumbnail_url($resitem_id, 'large'); ?>"/></div>
            <p><? echo get_the_title($resitem_id); ?></p>
          </a>
        <? endforeach ?>      
      </div>
    </div>
  </section>
<?php endif; ?>
<?php endif; ?>
<? if( get_row_layout() == 'direct'): ?>
  <section class="direct">      
    <div class="contain">
      <h2><?the_sub_field('title')?></h2>
      <div class="direct__row">
        <?php if (get_sub_field('list')): ?>      
          <?
          $list_icons = get_sub_field('list');
          foreach($list_icons as $list_id): ?>          
            <a href="<? the_permalink($list_id); ?>" class="direct__item">
              <div class="direct__img-w"><img src="<? the_field('direct_img', $list_id)?>" /></div>
              <div class="direct__title"><? echo get_the_title($list_id); ?></div>
              <div class="direct__text">              
                <? the_field('direct_desc', $list_id)?>
              </div>
            </a>
          <? endforeach ?>      
        <?php endif; ?>
      </div>
    </div>
  </section>
<? endif; ?> 
<? if( get_row_layout() == 'imp'): ?>
  <section class="imp">      
    <div class="contain">
      <h2><?the_sub_field('title')?></h2>
      <?the_sub_field('text')?>    
      <div class="imp__row">
        <?php if (get_sub_field('element')): ?>      
          <? $element_icons = get_sub_field('element');
          foreach($element_icons as $value): ?>                                              
            <div class="imp__item">
              <div class="imp__top">
                <div class="imp__img-w"><img src="<? echo $value['icon'] ?>" class="imp__img" /></div>
                <div class="imp__title"><? echo $value['title'] ?></div>
              </div>
              <? echo $value['text'] ?>
            </div>
          <? endforeach ?>      
        <?php endif; ?>
      </div>
      <div class="imp__btn-w">
        <?php if (get_sub_field('btn')): ?>
          <a href="<?the_sub_field('btn_link')?>" class="btn"><?the_sub_field('btn')?></a>
        <?php endif; ?>
      </div>
    </div>
  </section>
<? endif; ?>
<? if( get_row_layout() == 'partners'): ?>
  <section class="tabs-partners">
    <div class="contain">
      <div class="tabs partners__tabs">
        <ul class="tabs__list">
          <li class="tabs__list-item active"><?the_sub_field('title1')?></li>
          <li class="tabs__list-item"><?the_sub_field('title2')?></li>
        </ul>
        <ul class="tabs__content-list">
          <li class="tabs__content-list-item active">
            <div class="partners__row">
              <?php if (get_sub_field('list_1')): ?>      
                <? $list_icons = get_sub_field('list_1');
                foreach($list_icons as $value): ?>                                    
                  <a href="<? echo $value['link'] ?>" class="partners__item">
                    <img src="<? echo $value['logo'] ?>" />
                  </a>
                <? endforeach ?>      
              <?php endif; ?>             
            </div>
          </li>
          <li class="tabs__content-list-item">
            <div class="partners__row">
              <?php if (get_sub_field('list_2')): ?>      
                <? $list_icons = get_sub_field('list_2');
                foreach($list_icons as $value): ?>                                    
                  <a href="<? echo $value['link'] ?>" class="partners__item">
                    <img src="<? echo $value['logo'] ?>" />
                  </a>
                <? endforeach ?>      
              <?php endif; ?>               
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
<? endif; ?>
<? if( get_row_layout() == 'row'): ?>
  <div class="section__row">
    <div class="contain">
      <div class="row">
        <div class="col-50">
          <?php if (get_sub_field('where') == 'left'): ?>
            <div class="sol__bl">
            <?php endif; ?>
            <?php if (get_sub_field('where') == 'all'): ?>
              <div class="sol__bl">
              <?php endif; ?>
              <?the_sub_field('left')?> 
              <?php if (get_sub_field('where') == 'all'): ?>
              </div>
            <?php endif; ?>
            <?php if (get_sub_field('where') == 'left'): ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="col-50">
          <?php if (get_sub_field('where') == 'right'): ?>
            <div class="sol__bl">
            <?php endif; ?>
            <?php if (get_sub_field('where') == 'all'): ?>
              <div class="sol__bl">
              <?php endif; ?>
              <?the_sub_field('right')?>          
              <?php if (get_sub_field('where') == 'all'): ?>
              </div>
            <?php endif; ?>
            <?php if (get_sub_field('where') == 'right'): ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
<? endif; ?>
<? if( get_row_layout() == 'h5'): ?>
  <section class="editor">
    <div class="contain">
      <?the_sub_field('title')?>
    </div>
  </section>
<? endif; ?>
<? if( get_row_layout() == 'table'): ?>
  <section class="tables">
    <div class="contain">
      <?the_sub_field('title_subtitle')?>      
    </div>  
  </section>
<? endif; ?>
<? if( get_row_layout() == 'uniq'): ?>
  <section class="uniq">      
    <div class="contain">
      <h2 class="h2"><?the_sub_field('title')?></h2>
      <div class="uniq__w">


        <?php if (get_sub_field('block')): ?>      
          <? $block_icons = get_sub_field('block');
          foreach($block_icons as $value): ?>                        
            <!--get_sub_field('width') == 'uz'-->
            <div class="<? if ($value['width'] == 'uz') echo 'val__col' ?><? if ($value['width'] == 'shir') echo 'val__col-50' ?>">
            <div class="val__item">
              <div><img src="<? echo $value['icon'] ?>"></div>
              <span><? echo $value['title'] ?></span>
              <p><? echo $value['text'] ?></p>
            </div>   
          </div>
        <? endforeach ?>
      <?php endif; ?>











    </div>
  </div>
</section>
<? endif; ?>



<!--end while-->
<? endwhile; else : /*echo 'макетов не найдено';*/ endif; ?>
<!--end while-->
</main>
<?php get_footer(); ?>