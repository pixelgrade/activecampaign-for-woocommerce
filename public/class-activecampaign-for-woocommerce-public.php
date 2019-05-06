<?php
/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.activecampaign.com/
 * @since      1.0.0
 *
 * @package    Activecampaign_For_Woocommerce
 * @subpackage Activecampaign_For_Woocommerce/public
 */

use Activecampaign_For_Woocommerce_Admin as Admin;

use Activecampaign_For_Woocommerce_User_Meta_Service as User_Meta_Service;

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Activecampaign_For_Woocommerce
 * @subpackage Activecampaign_For_Woocommerce/public
 * @author     acteamintegrations <team-integrations@activecampaign.com>
 */
class Activecampaign_For_Woocommerce_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * An instance of the Admin class to handle communicating with the options table.
	 *
	 * @var    Admin
	 * @since  1.0.0
	 * @access private
	 */
	private $admin;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since 1.0.0
	 *
	 * @param string $plugin_name The name of the plugin.
	 * @param string $version     The version of this plugin.
	 * @param Admin  $admin       An instantiated admin class to optionally use.
	 */
	public function __construct( $plugin_name, $version, Admin $admin ) {
		$this->plugin_name = $plugin_name;
		$this->version     = $version;
		$this->admin       = $admin;
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
		wp_enqueue_style(
			$this->plugin_name,
			plugin_dir_url( __FILE__ ) . 'css/activecampaign-for-woocommerce-public.css',
			array(),
			$this->version,
			'all'
		);
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		wp_register_script(
			$this->plugin_name,
			plugin_dir_url( __FILE__ ) . 'js/activecampaign-for-woocommerce-public.js',
			array( 'jquery' )
		);

		$sync_guest_abandoned_cart_nonce = wp_create_nonce( 'sync_guest_abandoned_cart_nonce' );

		wp_localize_script(
			$this->plugin_name,
			'public_vars',
			array(
				'ajaxurl' => admin_url( "admin-ajax.php?nonce=$sync_guest_abandoned_cart_nonce" ),
			)
		);

		wp_enqueue_script(
			$this->plugin_name,
			plugin_dir_url( __FILE__ ) . 'js/activecampaign-for-woocommerce-public.js',
			array( 'jquery' ),
			$this->version,
			false
		);
	}

	/**
	 * If a user is logged in, adds an accepts marketing checkbox to the checkout form.
	 *
	 * Called as part of the WooCommerce action hooks when the checkout form is being built. The
	 * owner of the site is able to customize on which hook this method should be called.
	 */
	public function handle_woocommerce_checkout_form() {
		if ( isset( $this->admin->get_options()['checkbox_display_option'] ) ) {
			$setting = $this->admin->get_options()['checkbox_display_option'];

			/**
			 * There are three settings available, but only this one results in not displaying the checkbox at all.
			 */
			if ( 'not_visible' === $setting ) {
				return;
			}
		}

		require_once __DIR__ . '/partials/activecampaign-for-woocommerce-accepts-marketing-checkbox.php';
	}

	/**
	 * Returns a boolean to control whether or not the accepts marketing checkbox should be shown as checked.
	 *
	 * This determination is based on whether the user has previously accepted marketing and
	 * whether or not the site owner has set the checkbox to be checked by default.
	 *
	 * @return bool
	 */
	public function accepts_marketing_checkbox_is_checked() {
		if ( $this->current_user_has_accepted_marketing() ) {
			return true;
		}

		$checked = true;

		if ( isset( $this->admin->get_options()['checkbox_display_option'] ) ) {
			$setting = $this->admin->get_options()['checkbox_display_option'];

			/**
			 * There are three settings, but only this one results in a checked box by default.
			 */
			$checked = 'visible_checked_by_default' === $setting;
		}

		return $checked;
	}

	/**
	 * Returns whether or not the current user has already accepted marketing.
	 *
	 * @return boolean
	 */
	public function current_user_has_accepted_marketing() {
		if ( ! is_user_logged_in() ) {
			return false;
		}

		return User_Meta_Service::get_current_user_accepts_marketing();
	}

	/**
	 * Returns the label to be added to the accepts marketing checkbox.
	 *
	 * The user can either set this string in their settings, or the
	 * default will be returned.
	 *
	 * @return string
	 */
	public function label_for_accepts_marketing_checkbox() {
		return isset( $this->admin->get_options()['optin_checkbox_text'] ) ?
			$this->admin->get_options()['optin_checkbox_text'] :
			esc_attr__(
				'Keep me up to date on news and exclusive offers.',
				ACTIVECAMPAIGN_FOR_WOOCOMMERCE_LOCALIZATION_DOMAIN
			);
	}
}
