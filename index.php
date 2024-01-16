<?php get_header(); ?>
<?php
while (have_posts() ): the_post();
  get_template_part('parts/banner', '', $post->ID);
endwhile;
?>
<div class="wrapper">    
  <header class="header index-header" id="header">
    <img src="<? bloginfo('template_url') ?>/img/index-header-bg.jpg" alt="" class="header__bg">    
    <div class="top" id="top">
      <div class="contain">
        <div class="top__row">
          <a href="index.html" class="logo"><img src="<? bloginfo('template_url') ?>/img/logo.png" /></a>
          <div class="header__col">
            <div class="top__menus">
              <ul class="top__mnu-1">
                <li><a href="" class="active">О компании</a></li>
                <li><a href="">Импортозамещение</a></li>
                <li><a href="">Партнеры и Заказчики</a></li>
                <li><a href="#conts">Контакты</a></li>
              </ul>
              <ul class="top__mnu-2">
                <li class="li__parent">
                  <a href="">Услуги и Решения</a>
                  <i></i>
                  <div class="mnu__cild">
                    <ul>
                      <li><a href="">Инфраструктурные решения</a></li>
                      <li><a href="">Телекоммуникационные решения</a></li>
                      <li><a href="">Информационная безопасность</a></li>
                      <li><a href="">Системы электронного документооборота</a></li>
                      <li><a href="">Корпоративные порталы </a></li>
                      <li><a href="">Корпоративные хранилища данных</a></li>
                      <li><a href="">BI Аналитика данных</a></li>
                      <li><a href="">Системы Big Data </a></li>
                    </ul>
                  </div>
                </li>
                <li class="li__parent">
                  <a href="">Направления</a>
                  <i></i>
                  <div class="mnu__cild">
                    <ul>
                      <li><a href="">Инфраструктурные решения</a></li>
                      <li><a href="">Телекоммуникационные решения</a></li>
                      <li><a href="">Информационная безопасность</a></li>
                      <li><a href="">Системы электронного документооборота</a></li>
                      <li><a href="">Корпоративные порталы </a></li>
                      <li><a href="">Корпоративные хранилища данных</a></li>
                      <li><a href="">BI Аналитика данных</a></li>
                      <li><a href="">Системы Big Data </a></li>
                    </ul>
                  </div>
                </li>
                <li class="li__parent">
                  <a href="">Отрасли</a>
                  <i></i>
                  <div class="mnu__cild">
                    <ul>
                      <li><a href="">Инфраструктурные решения</a></li>
                      <li><a href="">Телекоммуникационные решения</a></li>
                      <li><a href="">Информационная безопасность</a></li>
                      <li><a href="">Системы электронного документооборота</a></li>
                      <li><a href="">Корпоративные порталы </a></li>
                      <li><a href="">Корпоративные хранилища данных</a></li>
                      <li><a href="">BI Аналитика данных</a></li>
                      <li><a href="">Системы Big Data </a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            <a href="tel:+7 (499) 703-41-91" class="top__phone">+7 (499) 703-41-91</a>
          </div>
          <span class="burger"></span>

        </div>
      </div>
    </div>
    <div class="banner">
      <div class="contain banner__inn">
        <h1>Надежный Российский <br> ИТ-Интегратор</h1>
        <div class="banner_subtitle">Цифровая трансформация <br> и импортозамещение</div>
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
  </header>
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