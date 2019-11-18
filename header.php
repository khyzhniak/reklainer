<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reklainer
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
	<meta name="format-detection" content="telephone=no">
	<link
			href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,900&display=swap&subset=cyrillic"
			rel="stylesheet">
	<!--	<link rel="stylesheet" href="--><?php //echo get_template_directory_uri(); ?><!--/assets/css/main.css">-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrapper">
	<header id="header" class="header">
		<div class="header-cap">
			<div class="container">
				<div class="header-cap-inner">
					<div class="header-cap-inner__info">
						<ul class="point-list">
							<li>
								<a href="mailto:info@reklainer.ru" class="point-icon">
									<span class="fa fa-envelope-o"></span>
									<span>info@reklainer.ru</span>
								</a>
							</li>
							<li>
								<a href="#" class="point-icon">
									<span class="icon icon-marker"></span>
									<span>Москва, Ленинградское шоссе, д. 25 </span>
								</a>
							</li>
						</ul>
					</div>
					<div class="header-cap-inner__search">
						<form role="search" method="get" id="searchform"
								action="<?php echo esc_url(home_url('/')); ?>" class="search-box">
							<input class="search-box__field" type="text"  value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Поиск">
							<button class="search-box__btn" id="searchsubmit"
									value="<?php echo esc_attr_x('Search', 'submit button'); ?>"><span class="fa fa-search"></span></button>
						</form>
					</div>
					<div class="header-cap-inner__phone">
						<ul class="point-list">
							<li>
								<a href="tel:+79152551165" class="point-icon">
									<span class="fa fa-phone"></span>
									<span>+7(915) 255-11-65</span>
								</a>
							</li>
							<li>
								<a href="tel:+79152551165" class="point-icon">
									<span class="fa fa-phone"></span>
									<span>+7(915) 255-11-65</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container">

			<div class="header-middle group">
				<div class="logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"
								alt="logotype"></a></div>

				<div class="basket-bl">
					<a href="<?php echo esc_url(home_url('/cart/')); ?>" class="basket-link">
						<span class="basket-link__value"><?php echo wp_kses_data(sprintf(_n('%d ', '%d ', WC()->cart->get_cart_contents_count(), 'storefront'), WC()->cart->get_cart_contents_count())); ?></span>
						<span class="icon icon-basket"></span>
					</a>
				</div>

				<div class="head-menu">
					<div class="burger-menu">
						<div class="burger-menu-box">
							<div class="burger-menu-inner"></div>
						</div>
					</div>


					<div class="menu-wrapper-fixed">
						<div class="menu-open-wrapper">
							<?php wp_nav_menu(); ?>

							<!--							<nav class="header-nav">-->
							<!--								<ul class="menu">-->
							<!--									<li class="menu-item">-->
							<!--										<a href="#" class="menu-item__link">Кресла</a>-->
							<!--									</li>-->
							<!--									<li class="menu-item">-->
							<!--										<a href="#" class="menu-item__link">Диваны</a>-->
							<!--									</li>-->
							<!--									<li class="menu-item">-->
							<!--										<a href="#" class="menu-item__link">Скидки</a>-->
							<!--									</li>-->
							<!--									<li class="menu-item">-->
							<!--										<a href="#" class="menu-item__link">Аксессуары</a>-->
							<!--									</li>-->
							<!--									<li class="menu-item">-->
							<!--										<a href="#" class="menu-item__link">Мебель на заказ</a>-->
							<!--									</li>-->
							<!--									<li class="menu-item">-->
							<!--										<a href="#" class="menu-item__link">Отзывы</a>-->
							<!--									</li>-->
							<!--									<li class="menu-item">-->
							<!--										<a href="#" class="menu-item__link">Доставка и оплата</a>-->
							<!--									</li>-->
							<!--									<li class="menu-item">-->
							<!--										<a href="#" class="menu-item__link">О нас</a>-->
							<!--									</li>-->
							<!--									<li class="menu-item">-->
							<!--										<a href="#" class="menu-item__link">Контакты</a>-->
							<!--									</li>-->
							<!--								</ul>-->
							<!--							</nav>-->

						</div>
					</div>
				</div>
			</div>

		</div>
	</header>
