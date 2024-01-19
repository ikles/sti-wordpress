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
		<header class="header <? if(is_front_page()) {echo 'index-header';} ?>  <?php if (get_field('vysota') == 'auto') {echo 'auto';}?>" id="header">       
			<div class="top" id="top">
				<div class="contain">
					<div class="top__row">
						<a href="<?php echo home_url('/') ?>" class="logo"><img src="<? bloginfo('template_url') ?>/img/logo.png" /></a>
						<div class="header__col">
							<div class="top__menus">
								<?php wp_nav_menu(array( 'theme_location' => 'top-mnu', 'menu_class' => 'top__mnu-1' )); ?>								
								<?php wp_nav_menu(array( 'theme_location' => 'top-mnu2', 'menu_class' => 'top__mnu-2' )); ?>
							</div>
							<a href="tel:<?php the_field('phone', 'option'); ?>" class="top__phone"><?php the_field('phone', 'option'); ?></a>
						</div>
						<span class="burger"></span>

					</div>
				</div>
			</div>


			<?php if (get_field('banner_show') == 'yes'): ?>

				<img src="<?php if (! get_field('banner_bg')): ?>
				<? echo bloginfo('template_url').'/img/header-bg6.jpg'; ?>
			<?php endif; ?>
			<? the_field('banner_bg');?>" alt="" class="header__bg">
			<div class="banner">
				<div class="contain banner__inn">
					<? $group = get_field('banner_group'); ?>						
					<h1><? echo $group['banner_title']; ?></h1>

					<?php if (!$group['banner_subtitle'] == ''): ?>
						<div class="banner_subtitle"><? echo $group['banner_subtitle'];?></h4></div>
					<?php endif; ?>

					
					<?php if (!$group['banner_subtitle_2'] == ''): ?>
						<h4><? echo $group['banner_subtitle_2'];?></h4>
					<?php endif; ?>
					<?php if (!$group['banner_text'] == ''): ?>
						<p><? echo $group['banner_text']; ?></p>
					<?php endif; ?>				
					<?php if (!$group['banner_btn_text'] == ''): ?>
						<a href="<? echo $group['banner_btn_link'] ;?>" class="btn"><? echo $group['banner_btn_text'];?></a>
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
		<?php endif; ?> 
	</header>