<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--meta name="viewport" content="width=device-width, initial-scale=1"-->
	<meta name="viewport" content="width=device-width, maximum-scale=1">
	<!--meta name="viewport" content="width=1920px"-->
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>	
	<!--script src="<? bloginfo('template_url') ?>/js/jquery-3.4.1.min.js"></script-->	
	<?php wp_head(); ?>
	<script>
		jQuery.noConflict();
	</script>	
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<? bloginfo('template_url') ?>/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<? bloginfo('template_url') ?>/css/main.css">
	<!--link rel="icon" type="image/png" href="http://ikles.ru/wp-content/themes/mif/img/icon.png" /-->
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body <?php body_class(); ?>>	

<div class="wrapper">    
  <header class="header <? if(is_front_page()) {echo 'index-header';} ?>" id="header">       
    <div class="top" id="top">
      <div class="contain">
        <div class="top__row">
          <a href="<?php echo home_url('/') ?>" class="logo"><img src="<? bloginfo('template_url') ?>/img/logo.png" /></a>
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