<?php /* Template Name: contacts */

get_header();
?>


	<div id="middle">

		<div class="banner-catalog" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/banner5.jpg);">
			<div class="container">
				<div class="banner-catalog-content">
					<div class="banner-catalog-content__right show-animation bounce-in-left">
						<div class="title-site text_uppercase title-site_big title-site_bodoni title-site_h1">Контакты</div>
					</div>
					<div class="banner-catalog-content__left show-animation bounce-in-right">
						<div class="title-site title-site_lg text_shadow text_gradient title-site_h1">Контакты</div>
						<ul class="bread-crumbs">
							<li><a href="#">Главная</a></li>
							<li>Контакты</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="section-st section-st_md">
			<div class="container">
				<div class="my-tt show-animation fadeInUp">
					<span>reklainer</span>
				</div>

				<div class="title-site text_center title-site_h2 show-animation fadeInUp">Контактная информация</div>

				<div class="contact-point">
					<div class="contact-point-item show-animation fadeInUp">
						<div class="contact-point-item__icon"><span class="icon icon-contact1"></span></div>
						<div class="title-site title-site_h4">Адрес:</div>
						<ul class="contact-txt">
							<li>55.827994, 37.489451,</li>
							<li>Россия, Москва,</li>
							<li>Ленинградское шоссе, д. 25,</li>
							<li>ТРЦ Ленинградский, 3 этаж</li>
						</ul>
					</div>
					<div class="contact-point-item show-animation fadeInUp delay-300ms">
						<div class="contact-point-item__icon"><span class="icon icon-contact2"></span></div>
						<div class="title-site title-site_h4">Телефон:</div>
						<ul class="contact-txt">
							<li>+7(915) 255-11-65</li>
							<li>+7(495) 211-85-95 </li>
						</ul>
					</div>
					<div class="contact-point-item show-animation fadeInUp delay-600ms">
						<div class="contact-point-item__icon"><span class="icon icon-contact3"></span></div>
						<div class="title-site title-site_h4">Почта:</div>
						<ul class="contact-txt">
							<li>info@reklainer.ru</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="banner-contact">
				<div class="banner-contact__tt"> Режим работы:</div>
				<div class="banner-contact__md-txt">ежедневно с 10:00-21:00</div>
				<div class="banner-contact__txt">
					<b>Внимание: </b>не забудьте согласовать время вашего приезда с менеджером.
				</div>
			</div>

			<div class="callback">
				<div class="callback__cap show-animation bounce-in-left">
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
					<div class="text_center form-group">
						<input type="submit" value="Отправить" class="btn btn_min-width btn_lg">
					</div>
				</form>
			</div>

		</div>


</div>
<?php
get_footer();
