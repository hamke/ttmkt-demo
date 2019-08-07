<?php
/*
Plugin Name: RedWeb WP Basic
Plugin URI: https://www.redweb.kr/plugin/
Description: RedWeb WP Basic WordPress Plugin.
Author: RedWeb
Version: 1.0.0
Author URI: https://www.redweb.kr/
*/

/*===========================================*/
// Contents

// - 1. Custom Menu & Admin Page
// - 2. Footer Message For Admin Panel
// - 3. Dashboard Widgets
// - 4. Sidebar Widgets
// - 5. For WP Security
// - 6. Custom Logo For Login Page
// - 7. WooCommerce : Theme Support
// - 8. WooCommerce : Product Page Layout
// - 9. WooCommerce : Checkout Page Layout
// - 10. WooCommerce : Add To Cart Button
// - 11. WooCommerce : Cart Page Message
// - 12. WooCommerce : Place Order Button
// - 13. WooCommerce : Continue Shopping Link
// - 14. WooCommerce : Return to Shop Button
// - 15. WooCommerce : Thank You Page Layout
// - 16. WooCommerce : Automatically Redirect After Order Received
// - 17. WooCommerce : Blind Carbon Copy
// - 18. Send Email When Plugin is Active

/*===========================================*/

defined('ABSPATH') || exit;

/*===========================================*/

add_filter( 'auto_update_theme', '__return_false' );

add_filter( 'auto_update_plugin', '__return_false' );

/*===========================================*/
// 1. Custom Menu & Admin Page

function rw_custom_menu() {

     $page_title = 'RedWeb Settings';
     $menu_title = 'RedWeb';
     $capability = 'manage_options';
     $menu_slug = 'redweb-settings.php';
     $function = 'rw_admin_page';
     $icon_url = 'dashicons-dashboard';
     $position = '100';

     add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
}

function rw_admin_page(){
	?>
	<div class="wrap">
		<h2>Welcome To RedWeb Settings</h2>
    <hr/>
      <?php
      if (isset($_POST['awesome_text'])) {
        $value = $_POST['awesome_text'];
        update_option('awesome_text', $value);
      }
      $value = get_option('awesome_text', 'hey-ho');
      include 'input.php';
      submit_button();
      ?>
	</div>
	<?php
}

function rw_register_settings() {
   add_option( 'rw_option_name', 'This is Option Test Value.');
   register_setting( 'rw_options_group', 'rw_option_name', 'rw_callback' );
}

add_action('admin_menu', 'rw_custom_menu');
add_action( 'admin_init', 'rw_register_settings' );

/*===========================================*/
// 2. Footer Message For Admin Panel

function rw_remove_footer_admin () {

echo 'Developed by <a href="https://www.redweb.kr/" target="_blank" rel="noopener noreferrer"_>RedWeb</a>';

}
add_filter('admin_footer_text', 'rw_remove_footer_admin');

/*===========================================*/
// 3. Dashboard Widgets

function rw_dashboard_help() {
echo '<p>워드프레스(WP)에 대한 도움이 필요하시면, 레드웹(<a href="https://www.redweb.kr/" target="_blank" rel="noopener noreferrer"_>www.redweb.kr</a>)으로 연락 부탁드립니다.</p>';
}

function rw_dashboard_widgets() {

global $wp_meta_boxes;

wp_add_dashboard_widget('custom_help_widget', '레드웹(RedWeb) 공지 사항', 'rw_dashboard_help');

}
add_action('wp_dashboard_setup', 'rw_dashboard_widgets');

/*===========================================*/
// 4. Sidebar Widgets

function rw_sidebars() {

    $args = array(
        'id'            => 'rw_sidebar',
        'name'          => __( '레드웹(RedWeb) 공지 사항', 'text_domain' ),
        'description'   => __( '레드웹(RedWeb) 공지 내용을 알려 드립니다.', 'text_domain' ),
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
    );
    register_sidebar( $args );

}
add_action( 'widgets_init', 'rw_sidebars' );

/*===========================================*/
// 5. For WP Security

add_filter('xmlrpc_enabled', '__return_false');

remove_action('wp_head', 'wp_generator');

/*===========================================*/
// 6. Custom Logo For Login Page

function rw_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(https://hellotblog.files.wordpress.com/2018/11/wptalk-logo-150x150.png);
		        background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'rw_logo' );

function rw_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'rw_logo_url' );

function rw_logo_url_title() {
    return '레드웹(RedWeb)';
}
add_filter( 'login_headertitle', 'rw_logo_url_title' );

/*===========================================*/
// 7. WooCommerce : Theme Support

function wptalk_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'wptalk_add_woocommerce_support' );

/*===========================================*/
// 8. WooCommerce : Product Page Layout

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );

remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

/*===========================================*/
// 9. WooCommerce : Checkout Page Layout

function my_override_checkout_fields( $fields ) {
    unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_phone']);
    unset($fields['billing']['billing_postcode']);
    $fields['billing']['billing_first_name']['class'][0] = 'form-row-wide';
    $fields['billing']['billing_first_name']['label'] = '주문자명';
    $fields['billing']['billing_email']['label'] = '이메일 (영수증 수신용)';
    $fields['order']['order_comments']['label'] = '참고 사항';
    // $fields['order']['order_comments']['placeholder'] = '남기고 싶은 말';
    return $fields;
}
add_filter( 'woocommerce_checkout_fields' , 'my_override_checkout_fields' );

/*===========================================*/
// 10. WooCommerce : Add To Cart Button

function woo_redirect_to_checkout() {
    global $woocommerce;
    $checkout_url = $woocommerce->cart->get_checkout_url();
    return $checkout_url;
}
add_filter ( 'woocommerce_add_to_cart_redirect', 'woo_redirect_to_checkout');

function woo_custom_cart_button_text() {
    return __('구매하기', 'woocommerce');
}
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' ); // single Product Page
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_cart_button_text' ); // Archive Page

/*===========================================*/
// 11. WooCommerce : Cart Page Message

function wptalk_empty_cart_page( $old_title ){
 	return '현재 신청하신 아이템이 없습니다.';
}
add_filter( 'wc_empty_cart_message', 'wptalk_empty_cart_page' );

/*===========================================*/
// 12. WooCommerce : Place Order Button

function woo_custom_order_button_text() {
    return __( '결제하기', 'woocommerce' );
}
add_filter( 'woocommerce_order_button_text', 'woo_custom_order_button_text' );

/*===========================================*/
// 13. WooCommerce : Continue Shopping Link

function woo_custom_redirect_continue_shopping() {
  return WC()->cart->get_cart_url();
}
add_filter( 'woocommerce_continue_shopping_redirect', 'woo_custom_redirect_continue_shopping' );

function woo_add_to_cart_message_html($message_continue_shopping){

  	$message_continue_shopping = sprintf(
      '<a href="%s" class="button wc-forward">%s</a> %s',
      esc_url( wc_get_page_permalink( 'cart' ) ),
      esc_html__( '장바구니', 'woocommerce' ),
      esc_html( '선택하신 아이템이 추가되었습니다.', 'woocommerce' ) );
    return $message_continue_shopping;
}
add_filter( 'wc_add_to_cart_message_html', 'woo_add_to_cart_message_html', 10, 2 );

/*===========================================*/
// 14. WooCommerce : Return to Shop Button

function woo_empty_cart_redirect_url() {
  $url = site_url( '/item/' );
	return $url;
}
add_filter( 'woocommerce_return_to_shop_redirect', 'woo_empty_cart_redirect_url' );

function woo_return_to_shop_text( $translated_text, $text, $domain ) {
   switch ( $translated_text ) {
      case 'Return to shop' :
      $translated_text = __( '아이템 리스트 보기', 'woocommerce' );
      break;
  }
 return $translated_text;
}
add_filter( 'gettext', 'woo_return_to_shop_text', 20, 3 );

/*===========================================*/
// 15. WooCommerce : Thank You Page Layout

function wptalk_thank_you_title( $old_title ){
 	return '주문 완료';
}
add_filter( 'woocommerce_endpoint_order-received_title', 'wptalk_thank_you_title' );

/*===========================================*/
// 16. WooCommerce : Automatically Redirect After Order Received

// function wptalk_redirect_depending_on_gateway(){
// 	if( !is_wc_endpoint_url( 'order-received' ) || empty( $_GET['key'] ) ) {
// 		return;
// 	}
// 	$order_id = wc_get_order_id_by_order_key( $_GET['key'] );
// 	$order = wc_get_order( $order_id );
// 	if( 'bacs' == $order->get_payment_method() ) { /* WC 3.0+ */
// 		wp_redirect( 'https://www.trendtalk.kr/pay/' );
// 		exit;
// 	}
// }
// add_action( 'template_redirect', 'wptalk_redirect_depending_on_gateway' );

/*===========================================*/
// 17. WooCommerce : Blind Carbon Copy

function woo_bcc_emails() {
  return 'Bcc: mutualwide@163.com' . "\r\n";
}
add_filter('woocommerce_email_headers', 'woo_bcc_emails' );

/*===========================================*/
// 18. Send Email When Plugin is Active

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

function send_email_plugin_active() {
  // if ( is_plugin_active( 'redweb-wp-basic/redweb-wp-basic.php' ) ) {
    $to = 'mutualwide@163.com';
    $subject = 'RedWeb WP Basic Plugin : Active in ' . get_bloginfo();
    $message = 'RedWeb WP Basic Plugin is Active in ' . site_url();
    wp_mail( $to, $subject, $message );
  // }
}
register_activation_hook(__FILE__, 'send_email_plugin_active');
// add_action('init', 'send_email_plugin_active');

/*===========================================*/
