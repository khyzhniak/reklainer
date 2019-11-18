<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');
?>
<div class="sss">
<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');

?>
</div>
<div id="middle">
<!--	--><?php //the_breadcrumb() ?>


	<div class="container">
		<div class="inner-grid inner-grid_push">
			<div class="inner-grid__aside inner-grid__aside_filter">
				<?php
				do_action('woocommerce_sidebar');; ?>
			</div>
			<div class="inner-grid__content">
					<?php
					do_action('woocommerce_before_shop_loop');; ?>
				<?php
				if (woocommerce_product_loop()) {
					woocommerce_product_loop_start();
					while (have_posts()) {
						the_post();
//					получаем символ валюты
						$currency_symbol = html_entity_decode(get_woocommerce_currency_symbol());
//					получаем цены
						$price = get_post_meta(get_the_ID(), '_regular_price', true);
						$sale = get_post_meta(get_the_ID(), '_price', true);
//					получаем дату добавления товара
						date_default_timezone_set('Europe/Moscow');//часовой пояс мск
						$t1 = $post->post_date;
						$t2 = date("Y-m-d H:i:s");
						$diff = (strtotime($t2) - strtotime($t1)) / 3600;
						?>
						<li class="prod-cards__item show-animation">
							<div class="prod prod_st">
								<a href="<?php echo do_shortcode('[add_to_cart_url id="' . get_the_ID() . '"]'); ?>"
										class="prod__icon"><span class="icon icon-basket-prod"></span></a>
								<div
										class="prod__preview"><?php echo carbon_get_post_meta(get_the_ID(), 'product_my_top_text'); ?></div>
								<a href="<? the_permalink(); ?>" class="prod__img">
									<?php the_post_thumbnail() ?>
								</a>
								<a href="<? the_permalink(); ?>" class="prod__tt"><?php the_title();; ?></a>
								<div class="prod__text"> Ширина - 90 см;<br> длина - 95 см; высота - 98 см</div>
								<div class="prod__price">      <?php if ($sale < $price) { ?>
										<span
												class="regular-price"><span><?php echo $currency_symbol; ?></span><span><?php echo $sale; ?></span></span>
										<span
												class="discount-price"><span><?php echo $currency_symbol; ?></span><span><?php echo $price; ?></span></span>
									<?php } elseif ($price == '') { ?>
										<span class="regular-price"><?php echo $price; ?></span>
									<?php } else { ?>
										<span
												class="regular-price"><span><?php echo $currency_symbol; ?></span><span><?php echo $price; ?></span></span>
									<?php } ?></div>
							</div>
						</li>
						<?php
						do_action('woocommerce_shop_loop');
					}
					woocommerce_product_loop_end();
					do_action('woocommerce_after_shop_loop');
				} else {
					do_action('woocommerce_no_products_found');
				} ?>
			</div>
		</div>
	</div>

</div>
<?php
get_footer('shop'); ?>
