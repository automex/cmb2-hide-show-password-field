<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 * Plugin Name: Hide/Show Password Field for CMB2
 * Plugin URI: https://github.com/automex/cmb2-hide-show-password-field
 * GitHub Plugin URI: https://github.com/automex/cmb2-hide-show-password-field
 * Description: Hide/Show Password Field for CMB2
 * Version: 1.0.0
 * Author: Automex.website
 * Author URI: http://automex.website
 * License: GPLv3
 * Text Domain: amex-hide-show-password
 * Domain Path: /languages
 */

class AMEX_Hide_Show_Password {


	const VERSION = '1.0.0';


	public function __construct() {
		add_filter( 'cmb2_render_hide_show_password', array( $this, 'render_callback_for_hide_show_password' ), 10, 5 );
		add_filter( 'cmb2_render_hide_show_password_medium', array( $this, 'render_callback_for_hide_show_password_medium' ), 10, 5 );
	}
	
	/* CMB2 Hide/Show Password Field */
	public function render_callback_for_hide_show_password( $field, $escaped_value, $object_id, $object_type, $field_type_object ) { 
		$this->amex_hide_show_password_css_js( $field ); ?> 
		<span id="show_hide_password">
			<?php echo $field_type_object->input( array( 
				'type' => 'password',
				'name' => 'hide_show_password',
				'id'   => 'hide_show_password',
				'data-lpignore' => true,
				'autocomplete' => 'off',
				'desc' => ''
			) ); ?>
			<a id="toggle-password" name="toggle-password"><span class="dashicons dashicons-hidden"></span></a>
		</span>
		<?php echo $field_type_object->_desc( true );
	}
	
	/* CMB2 Hide/Show Password Field Medium */
	public function render_callback_for_hide_show_password_medium( $field, $escaped_value, $object_id, $object_type, $field_type_object ) { 
		$this->amex_hide_show_password_css_js( $field ); ?> 
		<span id="show_hide_password_medium">
			<?php echo $field_type_object->input( array( 
				'type' => 'password',
				'name' => 'hide_show_password_medium',
				'id'   => 'hide_show_password_medium',
				'data-lpignore' => true,
				'autocomplete' => 'off',
				'desc' => ''
			) ); ?>
			<a id="toggle-password" name="toggle-password"><span class="dashicons dashicons-hidden"></span></a>
		</span>
		<?php echo $field_type_object->_desc( true );
	}

	public function amex_hide_show_password_css_js( $field ) {	
		$asset_path = apply_filters( 'amex_hide_show_password_asset_path', plugins_url( '', __FILE__ ) );
		wp_enqueue_style('amex_hide_show_password_css', $asset_path . '/assets/css/style.min.css', array(), self::VERSION );
		wp_enqueue_script('amex_hide_show_password_js', $asset_path . '/assets/js/hide-show.min.js', array( 'jquery' ), self::VERSION, true );
	} 

}

new AMEX_Hide_Show_Password();

?>