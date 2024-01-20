<?php wp_reset_postdata(); ?>
<?php get_header(); ?>
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

<? if( get_row_layout() == 'imp2'): ?>
  <section class="imp">      
    <div class="contain">
      <h2><?the_sub_field('title1')?></h2>
      <?the_sub_field('tekst')?>
    </div>    
    <div class="imp__bg">
      <div class="contain">
        <div class="imp__w">
          <?the_sub_field('list')?>
        </div>
      </div>
    </div>
  </section>
<? endif; ?>

<? if( get_row_layout() == 'platform'): ?>
  <section class="platform">
    <div class="contain">
      <div class="platform__w">
        <div class="platform__l">
          <h2><?php the_sub_field('title'); ?></h2>
          <p><?php the_sub_field('text'); ?></p>
          <a href="<?php the_sub_field('btn_link'); ?>" class="platform__btn"><?php the_sub_field('btn_txt'); ?></a>
        </div>
        <div class="platform__img">
          <img src="<?php the_sub_field('img'); ?>">
        </div>
      </div>
    </div>
  </section>
<? endif; ?>


<? if( get_row_layout() == 'stor'): ?>
  <section class="stor">
    <div class="contain">
      <h2><?php the_sub_field('title'); ?></h2>
      <div class="stor__row">

        <?php if (get_sub_field('stors')): ?>      
          <? $stor_icons = get_sub_field('stors');
          foreach($stor_icons as $value): ?>
            <div class="stor__item">
              <div class="stor__title"><? echo $value['title'] ?></div>
              <p><? echo $value['text'] ?></p>
            </div>
          <? endforeach ?>      
        <?php endif; ?>

        
      </div>
    </div>
  </section>
<? endif; ?>



<? if( get_row_layout() == 'get'): ?>
  <section class="get">      
    <div class="contain">
      <h2><?php the_sub_field('title'); ?></h2>
      <div class="get__row">
        <?php if (get_sub_field('element')): ?>      
          <? $element_icons = get_sub_field('element');
          foreach($element_icons as $value): ?>
            <div class="get__item">
              <div class="get__img"><img src="<? echo $value['icon'] ?>"></div>
              <div class="get__title"><? echo $value['title'] ?></div>
              <? echo $value['text'] ?>
            </div>
          <? endforeach ?>      
        <?php endif; ?>


      </div>
      <div class="get__btn-w">
        <a href="" class="get__btn">Узнать больше</a>
      </div>
    </div>
  </section>
<? endif; ?>

<? if( get_row_layout() == 'catlist'): ?>

  <section class="sol">      
    <div class="contain">

      <?php if (get_sub_field('list')): ?>      
        <?
        $list_icons = get_sub_field('list');
        foreach($list_icons as $list_id): ?>          
          <div class="sol__it">
            <a href="<? the_permalink($list_id); ?>" class="sol__img">
              <img src="<? echo get_the_post_thumbnail_url($list_id, 'large'); ?>" />
            </a>
            <div class="sol__col">
              <a href="<? the_permalink($list_id); ?>" class="sol__title">
                <? echo get_the_title($list_id); ?>
              </a>
              <? the_field('direct_desc', $list_id)?>
            </div>
          </div>
        <? endforeach ?>      
      <?php endif; ?>


    </div>
  </section>


<? endif; ?>

<? if( get_row_layout() == 'customers'): ?>

  <section class="customers">
    <div class="contain">
      <h2><?php the_sub_field('title'); ?></h2>
      <?php if (!the_sub_field('text') == ''): ?>
        <?php the_sub_field('text'); ?>
      <?php endif; ?>
      <div class="partners__row">
        <?php if (get_sub_field('customer')): ?>      
          <? $customer_icons = get_sub_field('customer');
          foreach($customer_icons as $value): ?>            
            <a href="<? echo $value['link'] ?>" class="partners__item">
              <img src="<? echo $value['logo'] ?>">
            </a>           
          <? endforeach ?>      
        <?php endif; ?>
      </div>
    </div>
  </section>
<? endif; ?>
<? if( get_row_layout() == 'bnews'): ?>  
  <section class="news">
    <div class="contain">
      <h2><?php the_sub_field('title'); ?></h2>
      <div class="news__row">
        <?php if (get_sub_field('newsrepeat')): ?>      
          <?
          $newsrepeat_icons = get_sub_field('newsrepeat');
          foreach($newsrepeat_icons as $newsrepeat_id): ?>          
            <div class="news__col">              
              <a href="<? the_permalink($newsrepeat_id); ?>" class="news__item">
                <div class="news__cont"><? echo get_the_title($newsrepeat_id); ?></div>
                <div class="news__date"><?php echo get_the_date('', $newsrepeat_id); ?></div>
              </a>
            </div>
          <? endforeach ?>      
        <?php endif; ?>
      </div>
    </div>
  </section>
<? endif; ?>


<? if( get_row_layout() == 'bcerts'): ?>
  <section class="certs">
    <div class="contain">
      <h2><?php the_sub_field('title'); ?></h2>
      <div class="<?if (get_sub_field('count') == 'three') {echo 'rev__row';} if (get_sub_field('count') == 'four') {echo 'certs__row';}?>">
        <?php if (get_sub_field('certs_list')): ?>      
          <? $certs_icons = get_sub_field('certs_list');
          foreach($certs_icons as $value): ?>            
            <div class="rev__item">
              <a data-fancybox="gallery" href="<? print_r($value['img']['sizes']['1536x1536']) ?>" class="rev__img"><img src="<? print_r($value['img']['sizes']['medium_large']) ?>"></a>
              <a href="<? echo $value['link'] ?>" class="rev__name"><? echo $value['text'] ?></a>
            </div>
          <? endforeach ?>      
        <?php endif; ?>
      </div>
      <?php if (!get_sub_field('btn_txt') == ''): ?>
        <div class="rev__btn-w">
          <a href="<?php the_sub_field('btn_link'); ?>" class="rev__btn"><?php the_sub_field('btn_txt'); ?></a>
        </div>
      <?php endif; ?>

    </div>
  </section>
<? endif; ?>

<? if( get_row_layout() == 'plus'): ?>
  <section class="plus">     
    <div class="contain">
      <div class="plus__w">
        <div class="plus__l">
          <div class="plus__desc">
            <?php the_sub_field('left_txt'); ?>            
          </div>
          <div class="plus__numbs">
            <?php if (get_sub_field('punkty')): ?>      
              <? $punkty_icons = get_sub_field('punkty');
              foreach($punkty_icons as $value): ?>                                
                <div class="plus__numbs-col">
                  <div class="plus__numb">                    
                    <? echo $value['zagolovok'] ?>
                  </div>
                  <div class="plus__numb-txt">            
                    <? echo $value['podzagolovok'] ?>
                  </div>
                </div> 
              <? endforeach ?>      
            <?php endif; ?>          
          </div>
        </div>
        <div class="plus__r">
          <?php the_sub_field('right_txt'); ?>          
        </div>
      </div>
    </div>
  </section>
<? endif; ?>

<? if( get_row_layout() == 'rul'): ?>
  <section class="rul">    
    <div class="contain">
      <?php the_sub_field('editor'); ?>      
      <div class="rul__w">
        <?php if (get_sub_field('bloki')): ?>      
          <? $bloki_icons = get_sub_field('bloki');
          foreach($bloki_icons as $value): ?>
            <div href="" class="sol__it">
              <div class="sol__img">                
                <img src="<? echo $value['ikonka'] ?>"></div>
                <div class="sol__col">
                  <div class="sol__title"><? echo $value['zagolovok'] ?></div>
                  <div class="sol__content">
                    <? echo $value['tekst'] ?>
                  </div>
                </div>
              </div>
            <? endforeach ?>
          <?php endif; ?>
        </div>
      </div>    
    </section>
  <? endif; ?>
  <? if( get_row_layout() == 'rel'): ?>    
    <section class="rel">    
      <div class="contain">
        <h2>
          <?php the_sub_field('zagolovok'); ?>
        </h2>
        <div class="rel__w">
          <?php if (get_sub_field('blok')): ?>      
            <? $blok_icons = get_sub_field('blok');
            foreach($blok_icons as $value): ?>
              <a href="<? echo $value['ssylka'] ?>" class="rel__item">
                <img src="<? echo $value['fon'] ?>" alt="">
                <div class="rel__title">
                  <? echo $value['title'] ?>                  
                </div>
                <div class="rel__txt"><? echo $value['tekst'] ?></div>
              </a>
            <? endforeach ?>      
          <?php endif; ?>
        </div>
      </div>
    </section>

  <? endif; ?>
  <? if( get_row_layout() == 'qual'): ?>
    <section class="qual">      
      <div class="contain">
        <h2><?php the_sub_field('zagolovok'); ?></h2>
        <div class="qual__row row">
          <div class="col-50">
            <?php the_sub_field('tekst_sleva'); ?>            
          </div>
          <div class="col-50">
            <div class="qual__gal">
              <?php if (get_sub_field('sertifikaty')): ?>      
                <? $sertifikaty_icons = get_sub_field('sertifikaty');
                foreach($sertifikaty_icons as $value): ?>
                  <a data-fancybox="gallery" href="<? echo $value['sertifikat']['sizes']['1536x1536'] ?>"><img src="<? echo $value['sertifikat']['sizes']['medium_large'] ?>"></a>
                <? endforeach ?>      
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

  <? endif; ?>
  <? if( get_row_layout() == 'impttttttttttttttt'): ?>
  <? endif; ?>
  <? if( get_row_layout() == 'impttttttttttttttt'): ?>
  <? endif; ?>
  <? if( get_row_layout() == 'impttttttttttttttt'): ?>
  <? endif; ?>





  <!--end while-->
<? endwhile; else : /*echo 'макетов не найдено';*/ endif; ?>
<!--end while-->
</main>
<?php get_footer(); ?>