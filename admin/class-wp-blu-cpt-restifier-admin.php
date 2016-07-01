<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       facebook.com/Bface.Style
 * @since      1.0.0
 *
 * @package    Wp_Blu_Cpt_Restifier
 * @subpackage Wp_Blu_Cpt_Restifier/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Blu_Cpt_Restifier
 * @subpackage Wp_Blu_Cpt_Restifier/admin
 * @author     Dan T. Ngossinga <bface007@gmail.com>
 */
class Wp_Blu_Cpt_Restifier_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Blu_Cpt_Restifier_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Blu_Cpt_Restifier_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-blu-cpt-restifier-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Blu_Cpt_Restifier_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Blu_Cpt_Restifier_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-blu-cpt-restifier-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function blu_custom_post_type_rest_support(  ) {
		global $wp_post_types;

		foreach ($wp_post_types as $post_type_key => $post_type) {
			$post_type->show_in_rest = true;
			$post_type->rest_base = $post_type_key;
			$post_type->rest_controller_class = 'WP_REST_Posts_Controller';
		}
	}

	public function blu_custom_taxonomy_rest_support(  ) {
		global $wp_taxonomies;

		foreach ($wp_taxonomies as $taxonomy_key => $taxonomy) {
			$taxonomy->show_in_rest = true;
			$taxonomy->rest_base = $taxonomy_key;
			$taxonomy->rest_controller_class = 'WP_REST_Terms_Controller';
		}
	}
}
