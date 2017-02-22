<?php
class Slider{
	/**
 	* add some options when plugin activate
 	*/
	static function activate(){
	}

	/**
 	 * do something when plugin dactivates
 	 */
	static function deactivate(){
		//do something
	}

	/**
	 * delete created during activation options
	 */
	static function uninstall(){
		
	}

	/**
	 * handle creating menu for plugin in admin part of site
	 */
	static function createAdminMenu(){
		add_menu_page('Gladiolus web studio popup plugin options', 'GL Slider', 'manage_options', 'gl-slider', ['Slider', 'renderMenuPage'], '', 6);
	}

	/**
	 * render menu page in admin panel
	 */
	static function renderMenuPage(){
		wp_enqueue_style('', '//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');
		wp_enqueue_script('', '//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js');
		
		require_once dirname(dirname(__FILE__))."/includes/settings-page.php";

	}

	/** 
	 * create new post type
	 */
	static function initAction(){

		$name = 'slider';

		$labels = [
			'name' 				 => 'Slider',
			'singular_name' 	 => 'Slider',
			'menu_name' 		 => 'Slider',
			'name_admin_bar' 	 => 'Slider admin',
			'add_new' 			 => 'Add new slider',
			'add_new_item' 		 => 'Add new slider',
			'new_item' 			 => 'New slider',
			'edit_item' 		 => 'Edit slider',
			'view_item' 		 => 'View slider',
			'all_items' 		 => 'All sliders',
			'search_items' 		 => 'Search sliders',
			'parent_item_colon'  => 'Parent sliders',
			'not_found' 		 => 'Sliders not found',
			'not_found_in_trash' => 'No sliders in trash',
		];

		$args = [
			'labels' => $labels,
			'description' => '',
			'public' => true,
			'publicly_querible' => true,
			'show_ui' => true,
			'show_ui_menu' => true,
			'query_var' => true,
			'rewrite' => ['slug' => 'slider'],
			'capability_type' => 'post',
			'has_archive' => false,
			'hierarchical' => true,
			'menu_position' => 5,
			'supports' => [
				'title', 
				'author', 
				'custom_fields',
				'thumbnail',
			],
		];

		// new custom post type
		register_post_type($name, $args);

		$t_labels = [
			'name'                       => 'Sliders',
			'singular_name'              => 'Slider',
			// 'search_items'               => __( 'Search Writers', 'textdomain' ),
			// 'popular_items'              => __( 'Popular Writers', 'textdomain' ),
			// 'all_items'                  => __( 'All Writers', 'textdomain' ),
			// 'parent_item'                => null,
			// 'parent_item_colon'          => null,
			'edit_item'                  => 'Edit sliders',
			'update_item'                => 'Update sliders',
			'add_new_item'               => 'Add slider',
			// 'new_item_name'              => __( 'New Writer Name', 'textdomain' ),
			// 'separate_items_with_commas' => __( 'Separate writers with commas', 'textdomain' ),
			// 'add_or_remove_items'        => __( 'Add or remove writers', 'textdomain' ),
			// 'choose_from_most_used'      => __( 'Choose from the most used writers', 'textdomain' ),
			// 'not_found'                  => __( 'No writers found.', 'textdomain' ),
			'menu_name'                  => 'Sliders',
		];

		$t_args = [
			'hierarchical'          => false,
			'labels'                => $t_labels,
			'show_ui'               => true,
			'show_admin_column'     => true,
			//'update_count_callback' => '_update_post_term_count',
			'query_var'             => true,
			'rewrite'               => array( 'slug' => 'sliders' ),
		];

		register_taxonomy('sliders', 'slider', $t_args);

	}
}