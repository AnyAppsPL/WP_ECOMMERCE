<?php


//override in mini cart widget "add to cart button"
if ( ! function_exists( 'woocommerce_widget_shopping_cart_button_view_cart' ) ) {
    /**
     * @inheritDoc
     */
    function woocommerce_widget_shopping_cart_button_view_cart() {
        echo '<a href="' . esc_url( wc_get_cart_url() ) . '" class="button wc-forward">' . esc_html__( 'Add to Basket', 'woocommerce' ) . '</a>';
    }
}
//override "add to cart button" in shop
add_filter('woocommerce_product_add_to_cart_text', 'woo_custom_cart_button_text');
function woo_custom_cart_button_text() {
    return __('Add to Basket', 'woocommerce');
}

//============================================= END ADD TO CART BUTTON ===============================================