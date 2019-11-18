<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_cart'); ?>
<div id="middle">

	<div class="banner-catalog"
			style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/banner6.jpg);">
		<div class="container">
			<div class="banner-catalog-content">
				<div class="banner-catalog-content__right show-animation bounce-in-left">
					<div class="title-site text_uppercase title-site_big title-site_bodoni title-site_h1">Корзина</div>
				</div>
				<div class="banner-catalog-content__left show-animation bounce-in-right">
					<div class="title-site title-site_lg text_shadow text_gradient title-site_h1">Корзина товаров</div>
					<ul class="bread-crumbs">
						<li><a href="#">Главная</a></li>
						<li>Корзина</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<!--	<div class="table-wrapp">-->
<!--		<div class="container">-->
<!--			<div class="table-basket">-->
<!--				<div class="table-cap">-->
<!--					<div class="t-row">-->
<!--						<div class="t-th">Фото</div>-->
<!--						<div class="t-th">Название</div>-->
<!--						<div class="t-th">Цена</div>-->
<!--						<div class="t-th">Колличество</div>-->
<!--						<div class="t-th">Итого</div>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="table-body">-->
<!--					<div class="t-row">-->
<!--						<div class="t-td">-->
<!--							<div class="basket-img-box">-->
<!--								<div class="basket-value">1</div>-->
<!--								<div class="basket-foto">-->
<!--									<img src="img/basket1.jpg" alt="img">-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="t-td t-td_name">Кресло Гдайдер DENVER</div>-->
<!--						<div class="t-td t-td_price">46 000 руб.</div>-->
<!--						<div class="t-td t-td_value">-->
<!--							<div class="col-panel-tc">-->
<!--								<span class="minus-input"><i class="fa fa-minus"></i></span>-->
<!--								<input type="text" value="2">-->
<!--								<span class="plus-input"><i class="fa fa-plus"></i></span>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="t-td t-td_last">-->
<!--							<span class="total">46 000 руб.</span>-->
<!--							<button class="btn-delete"><span class="icon icon-delet"></span></button>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="t-row">-->
<!--						<div class="t-td">-->
<!--							<div class="basket-img-box">-->
<!--								<div class="basket-value">2</div>-->
<!--								<div class="basket-foto">-->
<!--									<img src="img/basket1.jpg" alt="img">-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="t-td t-td_name">Кресло Гдайдер DENVER</div>-->
<!--						<div class="t-td t-td_price">46 000 руб.</div>-->
<!--						<div class="t-td t-td_value">-->
<!--							<div class="col-panel-tc">-->
<!--								<span class="minus-input"><i class="fa fa-minus"></i></span>-->
<!--								<input type="text" value="2">-->
<!--								<span class="plus-input"><i class="fa fa-plus"></i></span>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="t-td t-td_last">-->
<!--							<span class="total">46 000 руб.</span>-->
<!--							<button class="btn-delete"><span class="icon icon-delet"></span></button>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="t-row">-->
<!--						<div class="t-td">-->
<!--							<div class="basket-img-box">-->
<!--								<div class="basket-value">3</div>-->
<!--								<div class="basket-foto">-->
<!--									<img src="img/basket1.jpg" alt="img">-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="t-td t-td_name">Кресло Гдайдер DENVER</div>-->
<!--						<div class="t-td t-td_price">46 000 руб.</div>-->
<!--						<div class="t-td t-td_value">-->
<!--							<div class="col-panel-tc">-->
<!--								<span class="minus-input"><i class="fa fa-minus"></i></span>-->
<!--								<input type="text" value="2">-->
<!--								<span class="plus-input"><i class="fa fa-plus"></i></span>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="t-td t-td_last">-->
<!--							<span class="total">46 000 руб.</span>-->
<!--							<button class="btn-delete"><span class="icon icon-delet"></span></button>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="t-row">-->
<!--						<div class="t-td">-->
<!--							<div class="basket-img-box">-->
<!--								<div class="basket-value">4</div>-->
<!--								<div class="basket-foto">-->
<!--									<img src="img/basket1.jpg" alt="img">-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="t-td t-td_name">Кресло Гдайдер DENVER</div>-->
<!--						<div class="t-td t-td_price">46 000 руб.</div>-->
<!--						<div class="t-td t-td_value">-->
<!--							<div class="col-panel-tc">-->
<!--								<span class="minus-input"><i class="fa fa-minus"></i></span>-->
<!--								<input type="text" value="2">-->
<!--								<span class="plus-input"><i class="fa fa-plus"></i></span>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="t-td t-td_last">-->
<!--							<span class="total">46 000 руб.</span>-->
<!--							<button class="btn-delete"><span class="icon icon-delet"></span></button>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!---->
<!--			</div>-->
<!---->
<!--			<div class="table-output">-->
<!--				<div class="table-output__name">Всего к оплате:</div>-->
<!--				<div class="table-output__value">184 000 руб.</div>-->
<!--			</div>-->
<!---->
<!--			<div class="table-btns">-->
<!--				<div class="table-btns__reset">-->
<!--					<button type="reset" class="btn-reset btn-reset_lg">Очистить корзину</button>-->
<!--				</div>-->
<!--				<div class="table-btns__back">-->
<!--					<a href="#" class="btn btn_second-st btn_lg btn_lg_sm-txt btn_min-width">Продолжить покупки</a>-->
<!--				</div>-->
<!--				<div class="table-btns__next">-->
<!--					<button type="submit" class="btn btn_lg btn_lg_sm-txt btn_min-width">Оформить заказ</button>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
	<div class="table-wrapp">
		<div class="container">
			<form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
				<?php do_action('woocommerce_before_cart_table'); ?>

				<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents table-basket"
						cellspacing="0">
					<thead class="table-cap">
					<tr>
						<th class="product-thumbnail t-th">Фото</th>
						<th class="product-name t-th">Название</th>
						<th class="product-price t-th"><?php esc_html_e('Price', 'woocommerce'); ?></th>
						<th class="product-quantity t-th"><?php esc_html_e('Quantity', 'woocommerce'); ?></th>
						<th class="product-subtotal t-th">Итого</th>
						<th class="product-remove t-th">&nbsp;ss</th>
					</tr>
					</thead>
					<tbody class="table-body">
					<?php do_action('woocommerce_before_cart_contents'); ?>

					<?php
					foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
						$_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
						$product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

						if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
							$product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
							?>
							<tr class="woocommerce-cart-form__cart-item t-row <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">


								<td class="product-thumbnail t-td basket-img-box">
									<?php
									$thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

									if (!$product_permalink) {
										echo $thumbnail; // PHPCS: XSS ok.
									} else {
										printf('<a class="basket-foto" href="%s">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
									}
									?>
								</td>

								<td class="product-name t-td" data-title="<?php esc_attr_e('Product', 'woocommerce'); ?>">
									<?php
									if (!$product_permalink) {
										echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;');
									} else {
										echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a class=" t-td_name" href="%s">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
									}

									do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);

									// Meta data.
									echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.

									// Backorder notification.
									if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
										echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
									}
									?>
								</td>

								<td class="product-price t-td" data-title="<?php esc_attr_e('Price', 'woocommerce'); ?>">
									<?php
									echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); // PHPCS: XSS ok.
									?>
								</td>

								<td class="product-quantity t-td t-td_value"
										data-title="<?php esc_attr_e('Quantity', 'woocommerce'); ?>">

									<?php
									if ($_product->is_sold_individually()) {
										$product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
									} else {
										$product_quantity = woocommerce_quantity_input(
											 array(
													'input_name' => "cart[{$cart_item_key}][qty]",
													'input_value' => $cart_item['quantity'],
													'max_value' => $_product->get_max_purchase_quantity(),
													'min_value' => '0',
													'product_name' => $_product->get_name(),
											 ),
											 $_product,
											 false
										);
									}

									echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
									?>
								</td>

								<td class="product-subtotal t-td" data-title="<?php esc_attr_e('Subtotal', 'woocommerce'); ?>">
									<?php
									echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); // PHPCS: XSS ok.
									?>
								</td>
								<td class="product-remove t-td">
									<?php
									echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
										 'woocommerce_cart_item_remove_link',
										 sprintf(
												'<a href="%s" class="remove btn-delete" aria-label="%s" data-product_id="%s" data-product_sku="%s"><span class="icon icon-delet"></a>',
												esc_url(wc_get_cart_remove_url($cart_item_key)),
												esc_html__('Remove this item', 'woocommerce'),
												esc_attr($product_id),
												esc_attr($_product->get_sku())
										 ),
										 $cart_item_key
									);
									?>
								</td>

							</tr>
							<?php
						}
					}
					?>

					<?php do_action('woocommerce_cart_contents'); ?>

					<tr>
						<td colspan="6" class="actions">

							<?php if (wc_coupons_enabled()) { ?>
								<div class="coupon">
									<label for="coupon_code"><?php esc_html_e('Coupon:', 'woocommerce'); ?></label> <input type="text"
											name="coupon_code" class="input-text" id="coupon_code" value=""
											placeholder="<?php esc_attr_e('Coupon code', 'woocommerce'); ?>"/>
									<button type="submit" class="button" name="apply_coupon"
											value="<?php esc_attr_e('Apply coupon', 'woocommerce'); ?>"><?php esc_attr_e('Apply coupon', 'woocommerce'); ?></button>
									<?php do_action('woocommerce_cart_coupon'); ?>
								</div>
							<?php } ?>

							<button type="submit" class="button btn btn_lg btn_lg_sm-txt btn_min-width" name="update_cart"
									value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>"><?php esc_html_e('Update cart', 'woocommerce'); ?></button>

							<?php do_action('woocommerce_cart_actions'); ?>

							<?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
						</td>
					</tr>

					<?php do_action('woocommerce_after_cart_contents'); ?>
					</tbody>
				</table>
				<?php do_action('woocommerce_after_cart_table'); ?>
			</form>
			<?php do_action('woocommerce_before_cart_collaterals'); ?>
<!--			<div class="table-output">-->
<!--				<div class="table-output__name">Всего к оплате:</div>-->
<!--				<div class="table-output__value">184 000 руб.</div>-->
<!--			</div>-->
			<div class="cart-collaterals table-output">
				<?php
				/**
				 * Cart collaterals hook.
				 *
				 * @hooked woocommerce_cross_sell_display
				 * @hooked woocommerce_cart_totals - 10
				 */
				do_action('woocommerce_cart_collaterals');
				?>
			</div>

			<?php do_action('woocommerce_after_cart'); ?>

		</div>
	</div>
</div>

