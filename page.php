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
<!--end while-->
<? endwhile; else : /*echo 'макетов не найдено';*/ endif; ?>
<!--end while-->




<section class="imp">      
  <div class="contain">
    <h2>Импортозамеще<wbr/>ние в ИТ</h2>
    <p>
      <a href="">ИТ решения</a>, системы и инструменты, которые способны прямо сейчас решить самые горящие задачи по замещению западных приложений. Они помогут не потерять в устойчивости бизнеса, продолжить критично важные
      процессы и поддержать бесперебойную работу.
    </p>
    <div class="imp__row">
      <div class="imp__item">
        <div class="imp__top">
          <div class="imp__img-w"><img src="<? bloginfo('template_url') ?>/img/imp-1.svg" class="imp__img" /></div>
          <div class="imp__title">Проанализируем ИТ-инфраструктуру</div>
        </div>
        <p>Проведем аудит существующего ИТ-ландшафта, чтобы понять, какие системы перспективно развивать и поддерживать, а какие — заменять на российские.</p>
      </div>
      <div class="imp__item">
        <div class="imp__top">
          <div class="imp__img-w"><img src="<? bloginfo('template_url') ?>/img/imp-2.svg" class="imp__img" /></div>
          <div class="imp__title">Подберем российские аналоги ПО и «железа»</div>
        </div>
        <p>Сформируем целевую архитектуру и программу проектов с четким таймингом и приоритетами.</p>
      </div>
      <div class="imp__item">
        <div class="imp__top">
          <div class="imp__img-w"><img src="<? bloginfo('template_url') ?>/img/imp-3.svg" class="imp__img" /></div>
          <div class="imp__title">Обеспечим перевнедрение, настройку и запуск систем</div>
        </div>
        <p>Создадим решения на базе отечественного ПО и оборудования, перенесем данные, настроим интеграции и обучим пользователей.</p>
      </div>
    </div>
    <div class="imp__btn-w">
      <a href="" class="btn">Отправить запрос</a>
    </div>
  </div>
</section>
<section class="tabs-partners">
  <div class="contain">
    <div class="tabs partners__tabs">
      <ul class="tabs__list">
        <li class="tabs__list-item active">Партнеры</li>
        <li class="tabs__list-item">Заказчики</li>
      </ul>
      <ul class="tabs__content-list">
        <li class="tabs__content-list-item active">
          <div class="partners__row">
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-1.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-2.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-3.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-4.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-5.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-6.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-7.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-8.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-9.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-10.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-11.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-12.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-13.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-14.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-15.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-16.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-17.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-18.png" />
            </a>
          </div>
        </li>
        <li class="tabs__content-list-item">
          <div class="partners__row">
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-4.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-5.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-6.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-7.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-8.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-9.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-7.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-8.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-9.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-10.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-11.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-12.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-13.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-14.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-15.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-16.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-17.png" />
            </a>
            <a href="" class="partners__item">
              <img src="<? bloginfo('template_url') ?>/img/logo-18.png" />
            </a>               
          </div>
        </li>
      </ul>
    </div>
  </div>
</section> 
</main>
<?php get_footer(); ?>