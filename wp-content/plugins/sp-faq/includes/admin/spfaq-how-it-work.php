<?php
/**
 * Pro Designs and Plugins Feed
 *
 * @package WP FAQ
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<div class="wrap spfaq-wrap">
	<h2>
		<?php _e( 'How It Works', 'sp-faq' ); ?>
	</h2>
	<style type="text/css">
		.wpos-pro-box .hndle{background-color:#0073AA; color:#fff;}
		.wpos-pro-box.postbox{background:#dbf0fa none repeat scroll 0 0; border:1px solid #0073aa; color:#191e23;}
		.postbox-container .wpos-list li:before{font-family: dashicons; content: "\f139"; font-size:20px; color: #0073aa; vertical-align: middle;}
		.spfaq-wrap .wpos-button-full{display:block; text-align:center; box-shadow:none; border-radius:0;}
		.spfaq-shortcode-preview{background-color: #e7e7e7; font-weight: bold; padding: 2px 5px; display: inline-block; margin:0 0 2px 0;}
		.upgrade-to-pro{font-size:18px; text-align:center; margin-bottom:15px;}
		.wpos-copy-clipboard{-webkit-touch-callout: all; -webkit-user-select: all; -khtml-user-select: all; -moz-user-select: all; -ms-user-select: all; user-select: all;}
		.wpos-new-feature{ font-size: 10px; margin-left:3px; color: #fff; font-weight: bold; background-color: #03aa29; padding:1px 4px; font-style: normal; }
		.button-orange{background: #ff2700 !important;border-color: #ff2700 !important; font-weight: 600;}
	</style>

	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">

			<!--How it workd HTML -->
			<div id="post-body-content">
				<div class="meta-box-sortables">
					<div class="postbox">
						<div class="postbox-header"> 
							<h2 class="hndle">
								<span><?php _e( 'How It Works - Display and shortcode', 'sp-faq' ); ?></span>
							</h2>
						</div>
						<div class="inside">
							<table class="form-table">
								<tbody>
									<tr>
										<th>
											<label><?php _e('Getting Started with FAQ', 'sp-faq'); ?>:</label>
										</th>
										<td>
											<ul>
												<li><?php _e('Step-1. Go to "FAQ --> Add New".', 'sp-faq'); ?></li>
												<li><?php _e('Step-2. Add Title, Description and featured image', 'sp-faq'); ?></li>
												<li><?php _e('Step-3. Display multiple FAQs, create categories under "FAQ --> category" and create categories.', 'sp-faq'); ?></li>
												<li><?php _e('Step-4. Assign FAQ post to respective categories and use the category shortcode under "FAQ --> category"', 'sp-faq'); ?></li>
											</ul>
										</td>
									</tr>

									<tr>
										<th>
											<label><?php _e('How Shortcode Works', 'sp-faq'); ?>:</label>
										</th>
										<td>
											<ul>
												<li><?php _e('Step-1. Create a page like FAQ OR add the shortcode in any page.', 'sp-faq'); ?></li>
												<li><?php _e('Step-2. Put below shortcode as per your need.', 'sp-faq'); ?></li>
											</ul>
										</td>
									</tr>

									<tr>
										<th>
											<label><?php _e('All Shortcodes', 'sp-faq'); ?>:</label>
										</th>
										<td>
											<span class="wpos-copy-clipboard spfaq-shortcode-preview">[sp_faq]</span> – <?php _e('FAQ Shortcode', 'sp-faq'); ?>
										</td>
									</tr>
									<tr>
										<th>
											<label><?php _e('Documentation', 'sp-faq'); ?>:</label>
										</th>
										<td>
											<a class="button button-primary" href="https://docs.essentialplugin.com/wp-responsive-faq-with-category-plugin/" target="_blank"><?php _e('Check Documentation', 'sp-faq'); ?></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div><!-- .inside -->
					</div><!-- #general -->

					<div class="postbox">
						<div class="postbox-header">
							<h2 class="hndle">
								<span><?php _e( 'Gutenberg Support', 'sp-faq' ); ?></span>
							</h2>
						</div>
						<div class="inside">
							<table class="form-table">
								<tbody>
									<tr>
										<th>
											<label><?php _e('How it Work', 'sp-faq'); ?>:</label>
										</th>
										<td>
											<ul>
												<li><?php _e('Step-1. Go to the Gutenberg editor of your page.', 'sp-faq'); ?></li>
												<li><?php _e('Step-2. Search "faq" keyword in the Gutenberg block list.', 'sp-faq'); ?></li>
												<li><?php _e('Step-3. Add any block of FAQ and you will find its relative options on the right end side.', 'sp-faq'); ?></li>
											</ul>
										</td>
									</tr>
								</tbody>
							</table>
						</div><!-- .inside -->
					</div><!-- #general -->

					<div class="postbox">
						<div class="postbox-header">
							<h2 class="hndle">
								<span><?php _e( 'Need Support & Solutions?', 'sp-faq' ); ?></span>
							</h2>
						</div>
						<div class="inside">
							<table class="form-table">
								<tbody>
									<tr>
										<td>
											<p><?php _e('Boost design and best solution for your website.', 'sp-faq'); ?></p> <br/>											
											<a class="button button-primary button-orange" href="<?php echo SP_FAQ_SITE_LINK; ?>/essential-bundle/?utm_source=WP&utm_medium=FAQ&utm_campaign=Check-Designs-Solutions" target="_blank"><?php _e('Boost Design', 'sp-faq'); ?></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div><!-- .inside -->
					</div><!-- #general -->

					<!-- Help to improve this plugin! -->
					<div class="postbox">
						<div class="postbox-header">
							<h2 class="hndle">
								<span><?php _e( 'Help to improve this plugin!', 'sp-faq' ); ?></span>
							</h2>
						</div>
						<div class="inside">
							<p>Enjoyed this plugin? You can help by rate this plugin <a href="https://wordpress.org/support/plugin/sp-faq/reviews/" target="_blank">5 stars!</a></p>
						</div><!-- .inside -->
					</div><!-- #general -->
				</div><!-- .meta-box-sortables -->
			</div><!-- #post-body-content -->

			<!--Upgrad to Pro HTML -->
			<div id="postbox-container-1" class="postbox-container">
				<div class="meta-box-sortables">
					<div class="postbox wpos-pro-box">
						<div class="postbox-header">
							<h3 class="hndle">
								<span><?php _e( 'Upgrate to Pro', 'sp-faq' ); ?></span>
							</h3>
						</div>
						<div class="inside">
							<ul class="wpos-list">
								<li>15+ predefined design and Custom Colors option as in shortcode parameter.</li>
								<li>FAQ with accordion</li>
								<li>FAQ with categories grid</li>
								<li>WP Templating Features.</li>
								<li>WPBakery Page Builder Supports</li>
								<li>Gutenberg, Elementor, Beaver and SiteOrigin Page Builder Support. <span class="wpos-new-feature">New</span></li>
								<li>Divi Page Builder Native Support. <span class="wpos-new-feature">New</span></li>
								<li>Fusion Page Builder (Avada) native support. <span class="wpos-new-feature">New</span></li>
								<li>Custom ordering with drag and drop</li>
								<li>WooCommerce FAQ support. Now you can add Product FAQ to WooCommerce Product page easily.</li>
								<li>Various shortcode parameter for FAQ like Order, Orderby, Limit, Color, Backgrond color, Border color, Active FAQ color, Display specific FAQ, Exclude some FAQ and many more.</li>
								<li>Remain open FAQ on page load</li>
								<li>Custom CSS option</li>
								<li>Fully responsive</li>
								<li>100% Multi language</li>
							</ul>
							<div class="upgrade-to-pro">Gain access to <strong>WP FAQ</strong> included in <br /><strong>Essential Plugin Bundle</div>
							<a class="button button-primary wpos-button-full button-orange" href="<?php echo SP_FAQ_SITE_LINK; ?>/pricing/?utm_source=WP&utm_medium=Faq&utm_campaign=How-It-Work" target="_blank"><?php _e('Go Premium ', 'sp-faq'); ?></a>
							<p><a class="button button-primary wpos-button-full" href="https://demo.essentialplugin.com/prodemo/pro-faq-plugin-demo/?utm_source=WP&utm_medium=Faq&utm_campaign=PRO-Demo" target="_blank"><?php _e('View PRO Demo ', 'sp-faq'); ?></a></p>
						</div><!-- .inside -->
					</div><!-- #general -->
				</div><!-- .meta-box-sortables -->
			</div><!-- #post-container-1 -->

		</div><!-- #post-body -->
	</div><!-- #poststuff -->
</div><!-- .spfaq-wrap -->