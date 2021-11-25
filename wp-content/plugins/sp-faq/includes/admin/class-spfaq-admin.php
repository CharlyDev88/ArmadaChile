<?php
/**
 * Admin Class
 *
 * Handles the admin functionality of plugin
 *
 * @package WP FAQ
 * @since 3.2.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Spfaq_Admin {

	function __construct() {

		// Action to add admin menu
		add_action( 'admin_menu', array($this, 'sp_faq_register_menu'), 12 );

		// Action to add metabox
		add_action( 'add_meta_boxes', array($this, 'sp_faq_post_sett_metabox') );

		// Admin Init Processes
		add_action( 'admin_init', array($this, 'sp_faq_admin_init_process') );

		// Manage Category Shortcode Columns
		add_filter("manage_faq_cat_custom_column", array($this, 'sp_faq_cat_columns'), 10, 3);
		add_filter("manage_edit-faq_cat_columns", array($this, 'sp_faq_cat_manage_columns') );
	}

	/**
	 * Function to add menu
	 * 
	 * @package WP FAQ
	 * @since 3.2.5
	 */
	function sp_faq_register_menu() {

		// How it work Page
		add_submenu_page( 'edit.php?post_type='.SP_FAQ_POST_TYPE, __('How it works, our plugins and offers', 'sp-faq'), __('How It Works', 'sp-faq'), 'manage_options', 'spfaq-designs', array($this, 'spfaq_designs_page') );

		// Premium Feature Page
		add_submenu_page( 'edit.php?post_type='.SP_FAQ_POST_TYPE, __('Upgrade to PRO - WP FAQ', 'sp-faq'), '<span style="color:#ff2700">'.__('Upgrade to PRO', 'sp-faq').'</span>', 'edit_posts', 'wpfcas-premium', array($this, 'sp_faq_premium_page') );
	}

	/**
	 * Getting Started Page Html
	 * 
	 * @package WP FAQ
	 * @since 3.2.6
	 */
	function spfaq_designs_page() {
		include_once( SP_FAQ_DIR . '/includes/admin/spfaq-how-it-work.php' );
	}

	/**
	 * Premium Page Html
	 * 
	 * @package WP FAQ
	 * @since 3.2.6
	 */
	function sp_faq_premium_page() {
		include_once( SP_FAQ_DIR . '/includes/admin/settings/premium.php' );
	}

	/**
	 * Post Settings Metabox
	 * 
	 * @package WP FAQ
	 * @since 3.5.1
	 */
	function sp_faq_post_sett_metabox() {
		add_meta_box( 'spfaq-post-metabox-pro', __('More Premium - Settings', 'sp-faq'), array($this, 'sp_faq_post_sett_box_callback_pro'), SP_FAQ_POST_TYPE, 'normal', 'high' );
	}

	/**
	 * Function to handle 'premium ' metabox HTML
	 * 
	 * @package WP FAQ
	 * @since 3.5.1
	 */
	function sp_faq_post_sett_box_callback_pro( $post ) {		
		include_once( SP_FAQ_DIR .'/includes/admin/metabox/spfaq-post-setting-metabox-pro.php');
	}

	/**
	 * Function to notification transient
	 * 
	 * @package WP FAQ
	 * @since 3.2.5
	 */
	function sp_faq_admin_init_process() {
		// If plugin notice is dismissed
		if( isset($_GET['message']) && $_GET['message'] == 'sp-faq-plugin-notice' ) {
			set_transient( 'sp_faq_install_notice', true, 604800 );
		}
	}

	/**
	 * Function to add category column
	 * 
	 * @package WP FAQ
	 * @since 1.0.0
	 */
	function sp_faq_cat_manage_columns($theme_columns) {
	    $new_columns = array(
						'cb'						=> '<input type="checkbox" />',
						'name'						=> __('Name'),
						'faq_category_shortcode'	=> __( 'FAQ Category Shortcode', 'sp-faq' ),
						'slug'						=> __('Slug'),
						'posts'						=> __('Posts')
					);
	    return $new_columns;
	}

	/**
	 * Function to add category column data
	 * 
	 * @package WP FAQ
	 * @since 1.0.0
	 */
	function sp_faq_cat_columns($out, $column_name, $cat_id) {
	    $theme = get_term($cat_id, 'faq_cat');
	    switch ($column_name) {

	        case 'title':
	            echo get_the_title();
	        break;

	        case 'faq_category_shortcode':
	             echo '[sp_faq category="' . $cat_id. '"]';
	        break;

	        default:
	            break;
	    }
	    return $out;
	}
}

$sp_faq_Admin = new Spfaq_Admin();