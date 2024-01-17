   <? $post_id = $args;
// проверяем есть ли данные в гибком содержании
   if( have_rows('blocks') ):
  //echo 'yes 1';
  // перебираем макеты гибкого содержания
    while ( have_rows('blocks') ) : the_row();
    // проверяем на нужный макет
      if( get_row_layout() == 'babout' ):      
        ?>
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
                  <h2>СОЗДАЕМ IT-РЕШЕНИЯ, КОТОРЫЕ ПРИНОСЯТ ИЗМЕРИМЫЙ РЕЗУЛЬТАТ</h2>
                </div>
                <div class="res__r"><p>Ежедневно мы помогаем крупнейшим компаниям страны ответить на вопросы о развитии бизнеса и ключевых бизнес-процессов.</p></div>
              </div>
              <div class="res__items">
                <a href="" class="resitem">
                  <div><img src="<? bloginfo('template_url') ?>/img/res-1.svg"/></div>
                  <p>Инфраструктурные решения</p>
                </a>
                <a href="" class="resitem">
                  <div><img src="<? bloginfo('template_url') ?>/img/res-2.svg"/></div>
                  <p>Телекоммуникационные решения</p>
                </a>
                <a href="" class="resitem">
                  <div><img src="<? bloginfo('template_url') ?>/img/res-3.svg"/></div>
                  <p>Информационная безопасность</p>
                </a>
                <a href="" class="resitem">
                  <div><img src="<? bloginfo('template_url') ?>/img/res-4.svg"/></div>
                  <p>Информационная безопасность</p>
                </a>
                <a href="" class="resitem">
                  <div><img src="<? bloginfo('template_url') ?>/img/res-5.svg"/></div>
                  <p>Корпоративные порталы</p>
                </a>
                <a href="" class="resitem">
                  <div><img src="<? bloginfo('template_url') ?>/img/res-6.svg"/></div>
                  <p>Корпоративные хранилища данных</p>
                </a>
                <a href="" class="resitem">
                  <div><img src="<? bloginfo('template_url') ?>/img/res-7.svg"/></div>
                  <p>BI Аналитика данных</p>
                </a>
                <a href="" class="resitem">
                  <div><img src="<? bloginfo('template_url') ?>/img/res-8.svg"/></div>
                  <p>Системы Big Data</p>
                </a>
              </div>
            </div>
          </div>
        </section>   
        <?
      endif;
    endwhile;
  else :
  //echo 'макетов не найдено';
  endif;
  ?>
</header>