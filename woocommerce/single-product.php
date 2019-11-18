<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see      https://docs.woocommerce.com/document/template-structure/
 * @package  WooCommerce/Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

get_header('shop'); ?>
single-product.php
<div id="middle">
	<div class="inner-cap-page hidden-mobile">
		<div class="container">
			<ul class="bread-crumbs bread-crumbs_st">
				<li><a href="#">Главная</a></li>
				<li><a href="#">Кресла</a></li>
				<li>Кресло реклайнер Marsel (БОРДО)</li>
			</ul>
		</div>
	</div>
	<?php
	/**
	 * woocommerce_before_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 */
	do_action('woocommerce_before_main_content');
	?>
	<!--			<ul class="bread-crumbs bread-crumbs_st">-->
	<!--				<li><a href="#">Главная</a></li>-->
	<!--				<li><a href="#">Кресла</a></li>-->
	<!--				<li>Кресло реклайнер Marsel (БОРДО)</li>-->
	<!--			</ul>-->

	<div class="product-section">
		<div class="container">


			<?php while (have_posts()) : the_post(); ?>

				<?php wc_get_template_part('content', 'single-product'); ?>

			<?php endwhile; // end of the loop. ?>

			<?php
			/**
			 * woocommerce_after_main_content hook.
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action('woocommerce_after_main_content');
			?>

			<?php
			//			/**
			//			 * woocommerce_sidebar hook.
			//			 *
			//			 * @hooked woocommerce_get_sidebar - 10
			//			 */
			//		do_action( 'woocommerce_sidebar' );
			?>
			<div class="product-order-box">

				<div class="product-card">
					<div class="thumb-carousel-wrapp">

						<div class="thumb-carousel-card-wrapp">
							<select class="slct-st">
								<option class="hideme" value="v1">Цвет</option>
								<option value="v2">Цвет 1</option>
								<option value="v3">Цвет 2</option>
								<option value="v4">Цвет 3</option>
								<option value="v5">Цвет 4</option>
							</select>
							<div class="thumb-carousel-card owl-carousel owl-carousel_thumb-card owl-carousel_nav-grd">
								<a href="img/product1.jpg" data-fancybox="images" class="thumb-carousel-card-item open-fancy">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/product1.jpg" alt="img">
								</a>
								<a href="img/product1.jpg" data-fancybox="images" class="thumb-carousel-card-item open-fancy">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/product1.jpg" alt="img">
								</a>
								<a href="img/product1.jpg" data-fancybox="images" class="thumb-carousel-card-item open-fancy">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/product1.jpg" alt="img">
								</a>
								<a href="img/product1.jpg" data-fancybox="images" class="thumb-carousel-card-item open-fancy">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/product1.jpg" alt="img">
								</a>
								<a href="img/product1.jpg" data-fancybox="images" class="thumb-carousel-card-item open-fancy">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/product1.jpg" alt="img">
								</a>
								<a href="img/product1.jpg" data-fancybox="images" class="thumb-carousel-card-item open-fancy">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/product1.jpg" alt="img">
								</a>
							</div>
						</div>

						<div class="thumb-carousel-list-wrapp">
							<div class="thumb-carousel-list owl-carousel owl-carousel_thumb-list">
								<div class="thumb-carousel-list-item">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb4.jpg" alt="img">
								</div>
								<div class="thumb-carousel-list-item">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb5.jpg" alt="img">
								</div>
								<div class="thumb-carousel-list-item">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb6.jpg" alt="img">
								</div>
								<div class="thumb-carousel-list-item">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb5.jpg" alt="img">
								</div>
								<div class="thumb-carousel-list-item">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb4.jpg" alt="img">
								</div>
								<div class="thumb-carousel-list-item">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb6.jpg" alt="img">
								</div>
							</div>
						</div>

					</div>
				</div><!-- .product-card -->

				<div class="product-order">
					<div class="product-order__cap">
						<div
								class="title-site text_uppercase title-site_bold title-site_h1 show-animation bounce-in-right">Кресло реклайнер Marsel (БОРДО)
						</div>
						<div class="p-model">CHEERS CHINA (91*80-165*100см)</div>
						<div class="p-price-bl">
							<div class="p-price-bl__inline">
								<div class="p-price-value">40 000 руб.</div>
								<div class="p-price-value-old">45 000 руб.</div>
							</div>
						</div>
					</div>
					<div class="product-order__body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						<div class="p-order-btns">
							<div class="p-order-btns__quantity">
								<div class="col-panel-tc">
									<span class="minus-input"><i class="fa fa-minus"></i></span>
									<input type="text" value="2">
									<span class="plus-input"><i class="fa fa-plus"></i></span>
								</div>
							</div>
							<div class="p-order-btns__basket">
								<button class="btn btn_lg btn_icon btn_min-width">
									<span class="btn__icon-text">В корзину</span>
									<span class="btn__icon btn__icon_right icon icon-basket-prod2"></span>
								</button>
							</div>
						</div>
					</div>
					<div class="product-order__footer">
						<div class="p-order-grid">
							<ul class="p-list">
								<li><a href="#">- Способы оплаты</a></li>
								<li><a href="#">- Доставка</a></li>
								<li><a href="#">- Гарантия</a></li>
								<li><a href="#">- Сборка мебели</a></li>
							</ul>
							<ul class="p-btns">
								<li>
									<a href="#" class="btn btn_lg btn_min-width btn_second-st">Купить в один клик</a>
								</li>
								<li>
									<a href="#" class="btn btn_lg btn_min-width btn_second-st">Купить в кредит</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div><!-- .product-order-box -->

			<div class="section-tabs section-tabs_product">
				<ul class="tabs tabs_product">
					<li class="current">Описание</li>
					<li>Характеристики</li>
					<li>Инструкция по сборке</li>
					<li>Информация по уходу</li>
				</ul>

				<div class="box visible section-tabs__box">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
				</div>

				<div class="box section-tabs__box">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
				</div>

				<div class="box section-tabs__box">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
				</div>

				<div class="box section-tabs__box">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
				</div>
			</div><!-- .tabs -->
		</div>
	</div>


	<div class="section-carousel section-carousel_lg">
		<div class="container">
			<div class="main-tt">
				<div class="title-site title-site_h2">Рекомендуем</div>
				<div class="main-tt__duplicate main-tt__duplicate_style4">Рекомендуем</div>
			</div>
		</div>
		<div class="container container_lg">

			<div class="main-carousel-wrapp main-carousel-wrapp_md">
				<div class="main-carousel main-carousel_st owl-carousel owl-carousel_five-col">

					<a href="#" class="main-carousel-item prod">
						<div class="prod__icon"><span class="icon icon-basket-prod"></span></div>
						<div class="prod__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/prod1.jpg" alt="product">
						</div>
						<div class="prod__tt">Кресло Гдайдер DENVER</div>
						<div class="prod__price">46 000 руб.</div>
					</a>

					<a href="#" class="main-carousel-item prod">
						<div class="prod__icon"><span class="icon icon-basket-prod"></span></div>
						<div class="prod__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/prod1.jpg" alt="product">
						</div>
						<div class="prod__tt">Кресло Гдайдер DENVER</div>
						<div class="prod__price">46 000 руб.</div>
					</a>

					<a href="#" class="main-carousel-item prod">
						<div class="prod__icon"><span class="icon icon-basket-prod"></span></div>
						<div class="prod__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/prod1.jpg" alt="product">
						</div>
						<div class="prod__tt">Кресло Гдайдер DENVER</div>
						<div class="prod__price">46 000 руб.</div>
					</a>

					<a href="#" class="main-carousel-item prod">
						<div class="prod__icon"><span class="icon icon-basket-prod"></span></div>
						<div class="prod__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/prod1.jpg" alt="product">
						</div>
						<div class="prod__tt">Кресло Гдайдер DENVER</div>
						<div class="prod__price">46 000 руб.</div>
					</a>

					<a href="#" class="main-carousel-item prod">
						<div class="prod__icon"><span class="icon icon-basket-prod"></span></div>
						<div class="prod__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/prod1.jpg" alt="product">
						</div>
						<div class="prod__tt">Кресло Гдайдер DENVER</div>
						<div class="prod__price">46 000 руб.</div>
					</a>

					<a href="#" class="main-carousel-item prod">
						<div class="prod__icon"><span class="icon icon-basket-prod"></span></div>
						<div class="prod__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/prod1.jpg" alt="product">
						</div>
						<div class="prod__tt">Кресло Гдайдер DENVER</div>
						<div class="prod__price">46 000 руб.</div>
					</a>

				</div>
			</div>

		</div>
	</div>

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
						<li><a class="list-pic__bl" href="#"><img
										src="<?php echo get_template_directory_uri(); ?>/assets/img/pic1.jpg" alt="picture"></a></li>
						<li><a class="list-pic__bl" href="#"><img
										src="<?php echo get_template_directory_uri(); ?>/assets/img/pic2.jpg" alt="picture"></a></li>
						<li><a class="list-pic__bl" href="#"><img
										src="<?php echo get_template_directory_uri(); ?>/assets/img/pic3.jpg" alt="picture"></a></li>
						<li><a class="list-pic__bl" href="#"><img
										src="<?php echo get_template_directory_uri(); ?>/assets/img/pic4.jpg" alt="picture"></a></li>
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

</div>


<?php get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
?>
<script>
    jQuery(function ($) {

        //----------------------------------------------------
        // owl carousel thumb
        //

        var sync1 = $(".owl-carousel_thumb-card");
        var sync2 = $(".owl-carousel_thumb-list");
        var slidesPerPage = 3; //globaly define number of elements per page
        var syncedSecondary = true;

        sync1.owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: true,
            navText: false,
            // autoplay: true,
            dots: false,
            loop: true,
            responsiveRefreshRate: 200,
        }).on('changed.owl.carousel', syncPosition);

        sync2
            .on('initialized.owl.carousel', function () {
                sync2.find(".owl-item").eq(0).addClass("current");
            })
            .owlCarousel({
                items: slidesPerPage,
                dots: false,
                nav: false,
                // center: true,
                // autoWidth: true,
                margin: 15,
                smartSpeed: 200,
                slideSpeed: 500,
                slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                responsiveRefreshRate: 100
            }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {
            //if you set loop to false, you have to restore this next line
            //var current = el.item.index;

            //if you disable loop you have to comment this block
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - (el.item.count / 2) - .5);

            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }

            //end block

            sync2
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current");
            var onscreen = sync2.find('.owl-item.active').length - 1;
            var start = sync2.find('.owl-item.active').first().index();
            var end = sync2.find('.owl-item.active').last().index();

            if (current > end) {
                sync2.data('owl.carousel').to(current, 100, true);
            }
            if (current < start) {
                sync2.data('owl.carousel').to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                sync1.data('owl.carousel').to(number, 100, true);
            }
        }

        sync2.on("click", ".owl-item", function (e) {
            e.preventDefault();
            var number = $(this).index();
            sync1.data('owl.carousel').to(number, 300, true);
        });

        //
        // end owl carousel thumb
        //----------------------------------------------------


    });
</script>
