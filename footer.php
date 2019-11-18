<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reklainer
 */

?>
<div class="section-contacts section-contacts_dark">
	<div class="container">
		<div class="contact-grid">
			<div class="contact-grid__one">
				<div class="logo-second">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logotype"></a>
				</div>
				<div class="inst-bl">
					<span class="text_uppercase">Наш instagram: </span>
					<a class="inst-bl__link" href="#">@reklainer.ru</a>
				</div>

				<ul class="list-pic">
					<li><a class="list-pic__bl" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pic1.jpg" alt="picture"></a></li>
					<li><a class="list-pic__bl" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pic2.jpg" alt="picture"></a></li>
					<li><a class="list-pic__bl" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pic3.jpg" alt="picture"></a></li>
					<li><a class="list-pic__bl" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pic4.jpg" alt="picture"></a></li>
				</ul>

				<div class="soc-bl">
					<div class="soc-bl__tt">Подписывайтесь:</div>
					<ul class="soc-bl__list">
						<li><a href="#" class="icon icon-inst"></a></li>
						<li><a href="#" class="icon icon-fb"></a></li>
						<li><a href="#" class="icon icon-vk"></a></li>
					</ul>
				</div>
			</div>

			<div class="contact-grid__two">
				<ul class="contact-blocks">
					<li>
						<div class="contact-icon">
							<span class="icon icon-marker-dark"></span>
							<span>Москва, <br>Ленинградское шоссе, д. 25 </span>
						</div>
					</li>
					<li>
						<div class="contact-icon">
							<span class="fa fa-envelope-o"></span>
							<span>info@reklainer.ru</span>
						</div>
					</li>
					<li>
						<div class="contact-icon contact-icon_sm">
							<span class="fa fa-phone"></span>
							<span>+7(915) 255-11-65  </span>
						</div>
						<div class="contact-icon contact-icon_sm">
							<span class="fa fa-phone"></span>
							<span>+7(495) 211-85-95</span>
						</div>
					</li>
					<li>
						<a href="#" class="btn btn_sm btn_border">Заказать звонок</a>
					</li>
				</ul>
			</div>

			<div class="contact-grid__three">
				<div id="mainMap" class="main-map"></div>
			</div>
		</div>
	</div>
</div>

</div><!-- #middle-->

</div><!-- #wrapper -->
<!-- footer -->
<footer id="footer" class="footer">
	<div class="container">
		<ul class="f-list">
			<li><a href="#">Заявление о конфиденциальности</a></li>
			<li><a href="#">Договор публичной оферты</a></li>
			<li><a href="#">Разработка сайта: AVenue</a></li>
			<li>&copy; 2019 Все права защищены</li>
		</ul>
	</div>
</footer>
<!-- end footer -->

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/libs/jcf.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/libs/jquery.fancybox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/libs/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/libs/nouislider.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3tFdp0jspaUq9Q4vGloG7r7Znf6Z-naI&callback=initMap"></script>

<!--	</div>-->
<!---->
<!--	<footer id="colophon" class="site-footer">-->
<!--		<div class="site-info">-->
<!--			<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'reklainer' ) ); ?><!--">-->
<!--				--><?php
//				/* translators: %s: CMS name, i.e. WordPress. */
//				printf( esc_html__( 'Proudly powered by %s', 'reklainer' ), 'WordPress' );
//				?>
<!--			</a>-->
<!--			<span class="sep"> | </span>-->
<!--				--><?php
//				/* translators: 1: Theme name, 2: Theme author. */
//				printf( esc_html__( 'Theme: %1$s by %2$s.', 'reklainer' ), 'reklainer', '<a href="https://www.facebook.com/ihorkhyzhniak">hyzhniak ihor</a>' );
//				?>
<!--		</div>-->
<!--	</footer>-->
<!--</div>-->

<?php wp_footer(); ?>

</body>
</html>
