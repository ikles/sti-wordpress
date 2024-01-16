   <? $post_id = $args;
// проверяем есть ли данные в гибком содержании
   if( have_rows('blocks') ):
  //echo 'yes 1';
  // перебираем макеты гибкого содержания
    while ( have_rows('blocks') ) : the_row();
    // проверяем на нужный макет
      if( get_row_layout() == 'banner' ):      
        ?>
        <div class="banner">
          <div class="contain banner__inn">
            <h1><?the_sub_field('title');?></h1>
            <div class="banner_subtitle"><?the_sub_field('subtitle');?></div>            
            <?php if (get_sub_field('subtitle_2')): ?>
              <h4><?the_sub_field('subtitle_2');?></h4>
            <?php endif; ?>
            <?php if (get_sub_field('text')): ?>
              <?the_sub_field('text');?>
            <?php endif; ?>
            <div class="topcats__row">
              <a href="" class="tm-1">
                <div class="topcats__img-w"><img src="<? bloginfo('template_url') ?>/img/tcats-1.svg" /></div>
                <div class="topcats__text">Инфраструктурные решения</div>
              </a>
              <a href="" class="tm-2 hover">
                <div class="topcats__img-w"><img src="<? bloginfo('template_url') ?>/img/tcats-2.svg" /></div>
                <div class="topcats__text">Телекоммуникацио<wbr/>нные решения</div>
              </a>
              <a href="" class="tm-3">
                <div class="topcats__img-w"><img src="<? bloginfo('template_url') ?>/img/tcats-3.svg" /></div>
                <div class="topcats__text">Информационная безопасность</div>
              </a>
              <a href="" class="tm-4">
                <div class="topcats__img-w"><img src="<? bloginfo('template_url') ?>/img/tcats-4.svg" /></div>
                <div class="topcats__text">Системы электронного документооборота</div>
              </a>
              <a href="" class="tm-5">
                <div class="topcats__img-w"><img src="<? bloginfo('template_url') ?>/img/tcats-5.svg" /></div>
                <div class="topcats__text">Корпоративные порталы</div>
              </a>
              <a href="" class="tm-6">
                <div class="topcats__img-w"><img src="<? bloginfo('template_url') ?>/img/tcats-6.svg" /></div>
                <div class="topcats__text">Корпоративные хранилища данных</div>
              </a>
            </div>
          </div>
        </div>
        <?
      endif;
    endwhile;
  else :
  //echo 'макетов не найдено';
  endif;
  ?>
</header>
