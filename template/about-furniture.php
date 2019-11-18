<?php /* Template Name: about-furniture */

get_header();
?>


	<div id="middle">

		<div class="banner-catalog banner-catalog_wrapp4" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/banner9.jpg);">
			<div class="container">
				<div class="banner-catalog-content">
					<div class="banner-catalog-content__right show-animation bounce-in-left">
						<div class="title-site text_uppercase title-site_big title-site_bodoni title-site_h1">Мебель на заказ</div>
					</div>
					<div class="banner-catalog-content__left show-animation bounce-in-right">
						<div class="title-site title-site_lg text_shadow text_gradient title-site_h1">Мебель на заказ </div>
						<ul class="bread-crumbs">
							<li><a href="#">Главная</a></li>
							<li>Мебель на заказ </li>
						</ul>
					</div>
				</div>
			</div>
		</div>


		<div class="section-carousel">
			<div class="container">

				<div class="main-carousel-wrapp main-carousel-wrapp_three-col">
					<div class="main-carousel owl-carousel owl-carousel_nav-grd owl-carousel_center">

						<a href="#" class="main-carousel-item prod-card">
							<div class="prod-card__img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider2.jpg" alt="slide">
							</div>
							<div class="prod-card__content">
								<div class="prod-card__tt">Финская мебель на заказ</div>
								<div class="prod-card__txt">Финская мебель Именитых Брендов со скидкой до 20%</div>
							</div>
						</a>

						<a href="#" class="main-carousel-item prod-card">
							<div class="prod-card__img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider3.jpg" alt="slide">
							</div>
							<div class="prod-card__content">
								<div class="prod-card__tt">Финская мебель на заказ</div>
								<div class="prod-card__txt">Финская мебель Именитых Брендов со скидкой до 20%</div>
							</div>
						</a>

						<a href="#" class="main-carousel-item prod-card">
							<div class="prod-card__img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider4.jpg" alt="slide">
							</div>
							<div class="prod-card__content">
								<div class="prod-card__tt">Финская мебель на заказ</div>
								<div class="prod-card__txt">Финская мебель Именитых Брендов со скидкой до 20%</div>
							</div>
						</a>

						<a href="#" class="main-carousel-item prod-card">
							<div class="prod-card__img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider2.jpg" alt="slide">
							</div>
							<div class="prod-card__content">
								<div class="prod-card__tt">Финская мебель на заказ</div>
								<div class="prod-card__txt">Финская мебель Именитых Брендов со скидкой до 20%</div>
							</div>
						</a>

					</div>
				</div>

			</div>
		</div>

		<div class="container">


			<div class="section-tabs section-tabs_product">
				<ul class="tabs tabs_product tabs_product_no-rad">
					<li class="current">Описание</li>
				</ul>

				<div class="box visible section-tabs__box">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
				</div>
			</div>

			<div class="callback">
				<div class="callback__cap">
					<div class="title-site title-site_h2">Оставайтесь на связи с нами</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce diam odio, suscipit non ornare in, tristique eu ligula. Quisque congue orci vitae leo imperdiet dictum.</p>
				</div>
				<form action="#" class="form-callback">
					<div class="form-group-grid">
						<div class="form-group-grid__three-col form-group">
							<input class="form-group__field" type="text" placeholder="Ваше имя">
						</div>
						<div class="form-group-grid__three-col form-group">
							<input class="form-group__field" type="email" placeholder="Ваш Email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
						</div>
						<div class="form-group-grid__three-col form-group">
							<input class="form-group__field mask-phone" type="tel" placeholder="Ваш номер">
						</div>
					</div>
					<div class="form-group">
						<input class="form-group__field" type="text" placeholder="Сообщение">
					</div>
				</form>
			</div>

		</div>



	</div><!-- #middle-->

<?php
get_footer();
