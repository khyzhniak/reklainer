<?php
/**
 * Proceed to checkout button
 *
 * Contains the markup for the proceed to checkout button on the cart.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/proceed-to-checkout-button.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>
<div class="table-btns">

	<form class="table-btns__reset" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
		<button type="reset" onclick='javascript:if(!confirm("Удалить все товары из корзины?")) {return false;}'
			 class="btn-reset btn-reset_lg" name="clear-cart">Очистить корзину
		</button>
	</form>

	<div class="table-btns__back">
		<a href="/shop/" class="btn btn_second-st btn_lg btn_lg_sm-txt btn_min-width">Продолжить покупки</a>
	</div>
	<a href="<?php echo esc_url(wc_get_checkout_url()); ?>"
			class="checkout-button button alt wc-forward btn btn_lg btn_lg_sm-txt btn_min-width">
		<?php esc_html_e('Proceed to checkout', 'woocommerce'); ?>
	</a>
</div>

