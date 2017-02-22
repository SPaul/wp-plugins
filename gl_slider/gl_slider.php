<?php
/**
 * Plugin Name: Gladiolus Popup plugin
 * Plugin URI: http://webgladiolus.com
 * Description: Плагин, позволяющий выводить на выбранных страницах всплывающее окно с нужным текстом и заголовком через указанный промежуток времени
 * Version: 20022017
 * Author: Paul Strelkovsky
 * Author URI: https://vk.com/sormait
 * 
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

define('GL_SLIDER_DIR', plugin_dir_path(__FILE__));

/**
 * plugin options
 * @gl_popup_title - заголовок всплывающего окна
 * @gl_popup_content - текст окна
 * @gl_popup_display_timeout - задержка перед показом окна
 * @gl_popup_display_time - время показа окна
 * @gl_popup_has_close_btn - наличие кнопки закрытия
 * @gl_popup_close_on_esc_btn - закрывать при ажатии на esc
 * @gl_popup_close_on_lining_click - закрывать при клике за пределами окна
 */

require_once(GL_SLIDER_DIR.'/classes/slider-class.php');

/**
 * on plugin activation handler
 * 
 * create a few options in global scope for future uses
 */
register_activation_hook(__FILE__, ['Slider', 'activate']);

/**
 *	on plugin deactivate handler
 */
register_deactivation_hook(__FILE__, ['Slider', 'deactivate']);

/** 
 * on plugin uninstall handler
 * 
 * delete created options to prevent its usage
 */
register_uninstall_hook(__FILE__, ['Slider', 'uninstall']);

/**
 * new post_type and taxonomy assigned to init hook
 */
add_action('init', ['Slider', 'initAction']);

add_action('admin_menu', ['Slider', 'createAdminMenu']);