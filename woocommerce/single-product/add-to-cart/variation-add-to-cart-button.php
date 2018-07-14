<?php
/**
 * Single variation cart button
 *
 * @see 	http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<div class="woocommerce-variation-add-to-cart variations_buttonx">
	<div class="item-price1">
		<?php if ( ! $product->is_sold_individually() ) : ?>
			<?php woocommerce_quantity_input( array( 'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 ) ); ?>
		<?php endif; ?>
	</div>

	<div class="item-line">
	    <div></div>
	</div>
	<div class="item-price">
		<p><?php echo $product->get_price_html(); ?></p>
		<button type="submit" class="cart-button single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
		<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->id ); ?>" />
		<input type="hidden" name="product_id" value="<?php echo absint( $product->id ); ?>" />
		<input type="hidden" name="variation_id" class="variation_id" value="0" />
	</div>
</div>

<script>
    jQuery( document ).ready( function( $ ) {
		/* изменяем цену налету */
		$( document ).on( 'change', '.quantity .qty', function() {
			var al = $( this ).val();
			var price = <?php echo $product->get_price(); ?>;
			var currency = '<?php echo get_woocommerce_currency_symbol(); ?>';
			//$( ".amount" ).html( al * price + currency );
			//$( this ).parent( '.quantity' ).next( '.add_to_cart_button' ).attr( 'data-quantity', $( this ).val() );
			//$( 'amount' ).parent( '.quantity' ).next( '.add_to_cart_button' ).attr( 'data-quantity', $( this ).val() );
		});
    });
</script>
