<?php
class Popup{
	/**
 	* add some options when plugin activate
 	*/
	static function activate(){
		add_option('gl_popup_title', 'Hi, I\'m gladiolus popup');
		add_option('gl_popup_content', 'Some content here');
		add_option('gl_popup_display_timeout', 0);
		add_option('gl_popup_display_time', 10);
		add_option('gl_popup_has_close_btn', true);
		add_option('gl_popup_close_on_esc_btn', true);
		add_option('gl_popup_close_on_lining_click', true);
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
		delete_option('gl_popup_title');
		delete_option('gl_popup_content');
		delete_option('gl_popup_display_timeout');
		delete_option('gl_popup_display_time');
		delete_option('gl_popup_has_close_btn');
		delete_option('gl_popup_close_on_esc_btn');
		delete_option('gl_popup_close_on_lining_click');
	}

	/**
	 * handle creating menu for plugin in admin part of site
	 */
	static function createAdminMenu(){
		add_menu_page('Gladiolus web studio popup plugin options', 'GL Popup', 'manage_options', 'gl-popup', ['Popup', 'renderMenuPage'], '', 6);
	}

	/**
	 * render menu page in admin panel
	 */
	static function renderMenuPage(){
		wp_enqueue_style('', '//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');
		wp_enqueue_script('', '//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js');
		
		require_once dirname(dirname(__FILE__))."/includes/settings-page.php";

	}
}