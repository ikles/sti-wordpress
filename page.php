<?php wp_reset_postdata(); ?>
<?php get_header(); ?>

<?php
while (have_posts() ): the_post();
  get_template_part('parts/banner', '', $post->ID);
endwhile;
?>
<main class="main">
 <section class="about">
  <div class="contain">
    <div class="about__row">
      <div class="about__l">
        <h1>О компании</h1>
        <p>
          Разработка, внедрение и поддержка сложных информационных систем и инфраструктурных решений федерального и регионального значения. Развитие и адаптация передовых технологий с учетом текущих и перспективных потребностей
          Заказчиков.
        </p>
      </div>
      <div class="about__r">
        <p>
          Все работы, выполняемые&nbsp; «СТИ ИНЖИНИРИНГ», осуществляются в соответствии с государственными стандартами и требованиями регулирующих органов в области построения информационных систем. «СТИ ИНЖИНИРИНГ» входит в
          реестр аккредитованных организаций, осуществляющих деятельность в области информационных технологий.
        </p>
        <p class="bloq">
          Одним из преимуществ компании «СТИ ИНЖИНИРИНГ» является большой опыт в области создания и сопровождения сложных систем федерального масштаба, в том числе опыт реализации проектов в области информационной безопасности
        </p>
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
<section class="direct">      
  <div class="contain">
    <h2>Направления</h2>
    <div class="direct__row">
      <a href="" class="direct__item">
        <div class="direct__img-w"><img src="<? bloginfo('template_url') ?>/img/direct-1.jpg" /></div>
        <div class="direct__title">Монтаж компьютерных и телефонных сетей</div>
        <div class="direct__text">
          Заметное событие в отрасли информационной безопасности, благодаря высокой деловой репутации и её членов, компаний-лидеров рынка и лучших экспертов.
        </div>
      </a>
      <a href="" class="direct__item">
        <div class="direct__img-w"><img src="<? bloginfo('template_url') ?>/img/direct-2.jpg" /></div>
        <div class="direct__title">Решение вопросов информационной безопасности</div>
        <div class="direct__text">
          Заметное событие в отрасли информационной безопасности, благодаря высокой деловой репутации и её членов, компаний-лидеров рынка и лучших экспертов.
        </div>
      </a>
      <a href="" class="direct__item">
        <div class="direct__img-w"><img src="<? bloginfo('template_url') ?>/img/direct-3.jpg" /></div>
        <div class="direct__title">Поставка серверов, систем хранения данных и систем резервного копирования</div>
        <div class="direct__text">
          Заметное событие в отрасли информационной безопасности, благодаря высокой деловой репутации и её членов, компаний-лидеров рынка и лучших экспертов.
        </div>
      </a>
      <a href="" class="direct__item">
        <div class="direct__img-w"><img src="<? bloginfo('template_url') ?>/img/direct-4.jpg" /></div>
        <div class="direct__title">Проектирование, монтаж систем видеонаблюдения, систем учета рабочего времени, систем контроля доступа</div>
        <div class="direct__text">
          Заметное событие в отрасли информационной безопасности, благодаря высокой деловой репутации и её членов, компаний-лидеров рынка и лучших экспертов.
        </div>
      </a>
      <a href="" class="direct__item">
        <div class="direct__img-w"><img src="<? bloginfo('template_url') ?>/img/direct-5.jpg" /></div>
        <div class="direct__title">Подбор и поставка необходимого оборудования</div>
        <div class="direct__text">
          Заметное событие в отрасли информационной безопасности, благодаря высокой деловой репутации и её членов, компаний-лидеров рынка и лучших экспертов.
        </div>
      </a>
      <a href="" class="direct__item">
        <div class="direct__img-w"><img src="<? bloginfo('template_url') ?>/img/direct-6.jpg" /></div>
        <div class="direct__title">Внедрение электронных систем документооборота и средств коллективной работы</div>
        <div class="direct__text">
          Заметное событие в отрасли информационной безопасности, благодаря высокой деловой репутации и её членов, компаний-лидеров рынка и лучших экспертов.
        </div>
      </a>
      <a href="" class="direct__item">
        <div class="direct__img-w"><img src="<? bloginfo('template_url') ?>/img/direct-7.jpg" /></div>
        <div class="direct__title">Автоматизация учета</div>
        <div class="direct__text">
          Заметное событие в отрасли информационной безопасности, благодаря высокой деловой репутации и её членов, компаний-лидеров рынка и лучших экспертов.
        </div>
      </a>
      <a href="" class="direct__item">
        <div class="direct__img-w"><img src="<? bloginfo('template_url') ?>/img/direct-8.jpg" /></div>
        <div class="direct__title">Аудит IT-инфраструктуры и проектов</div>
        <div class="direct__text">
          Заметное событие в отрасли информационной безопасности, благодаря высокой деловой репутации и её членов, компаний-лидеров рынка и лучших экспертов.
        </div>
      </a>
      <a href="" class="direct__item">
        <div class="direct__img-w"><img src="<? bloginfo('template_url') ?>/img/direct-9.jpg" /></div>
        <div class="direct__title">Внедрение систем управления взаимоотношениями с клиентами (CRM)</div>
        <div class="direct__text">
          Заметное событие в отрасли информационной безопасности, благодаря высокой деловой репутации и её членов, компаний-лидеров рынка и лучших экспертов.
        </div>
      </a>
      <a href="" class="direct__item">
        <div class="direct__img-w"><img src="<? bloginfo('template_url') ?>/img/direct-10.jpg" /></div>
        <div class="direct__title">Внедрение систем повышения эффективности (CPM)</div>
        <div class="direct__text">
          Заметное событие в отрасли информационной безопасности, благодаря высокой деловой репутации и её членов, компаний-лидеров рынка и лучших экспертов.
        </div>
      </a>
      <a href="" class="direct__item">
        <div class="direct__img-w"><img src="<? bloginfo('template_url') ?>/img/direct-11.jpg" /></div>
        <div class="direct__title">Поставка оборудования ведущих мировых производителей</div>
        <div class="direct__text">
          Заметное событие в отрасли информационной безопасности, благодаря высокой деловой репутации и её членов, компаний-лидеров рынка и лучших экспертов.
        </div>
      </a>
    </div>
  </div>
</section>
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