<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php do_action( 'woocommerce_before_mini_cart' ); ?>


<div class="cart-window">
    <div class="cart-header">
        <h1>Корзина</h1>
    </div>	
	<div class="cart-list">

	<?php if ( ! WC()->cart->is_empty() ) : ?>

		<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {

					$product_name  = apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );
					$thumbnail     = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
					$product_price = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
					?>

                        <div class="cart-item">
                            <div class="cart-item-img">
                                <?php if ( ! $_product->is_visible() ) : ?>
							<?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ) . '&nbsp;'; ?>
						<?php else : ?>
							<a href="<?php echo esc_url( $_product->get_permalink( $cart_item ) ); ?>">
								<?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ) . '&nbsp;'; ?>
							</a>
						<?php endif; ?>
                            </div>
                            <div class="cart-item-text">
                                <div class="cart-item-name"><?php echo $product_name ?></div>
                                <div class="cart-item-price"><?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); ?></div>
                                <div class="cart-item-about"><a href="<?php echo esc_url( $_product->get_permalink( $cart_item ) ); ?>">Подробнее</a></div>
                            </div>
                            <div class="cart-item-buttons">
                                <div class="cart-item-edit"><a href="<?php echo esc_url( $_product->get_permalink( $cart_item ) ); ?>" title="Открыть товар"><img src="/img/info.png"/></a></div>

									<?php
									echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(	
										'<a href="%s" class="remove" title="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
										esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
										__( 'Remove this item', 'woocommerce' ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									), $cart_item_key );
									?>
                            </div>
                        </div>

						<?php //echo WC()->cart->get_item_data( $cart_item ); ?>
					<!--<li class="<?php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key ) ); ?>">
					</li>-->
					<?php
				}
			}
		?>

	<?php else : ?>

		<li class="empty"><?php _e( 'No products in the cart.', 'woocommerce' ); ?></li>

	<?php endif; ?>

<!--</ul> end product list -->

	</div> 
	<!-- end cart-list -->


<?php if ( ! WC()->cart->is_empty() ) : ?>

	<?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>



                    <div class="cart-line"></div>
                    <div class="cart-footer">
                        <div class="cart-score"><?php //_e( 'Subtotal', 'woocommerce' ); ?>Итого к оплате: <?php echo WC()->cart->get_cart_subtotal(); ?></div>
                        <div class="cart-footer-buttons">
                            <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class=""><div class="btn">Подробнее<?php //_e( 'View Cart', 'woocommerce' ); ?></div></a>
                            <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class=""><div class="btn active">Оплатить<?php //_e( 'Checkout', 'woocommerce' ); ?></div></a>
                        </div>
                    </div>

</div>
<!-- end cart-windows -->

<?php endif; ?>

<?php do_action( 'woocommerce_after_mini_cart' ); ?>