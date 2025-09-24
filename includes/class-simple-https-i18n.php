<?php
/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link https://kallisteo.com
 * @since 1.0.0
 *
 * @package Simple_HTTPS
 * @subpackage Simple_HTTPS/includes
*/

/**
 * Class `Simple_HTTPS_i18n`
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 * @since 1.0.0
 * @package Simple_HTTPS
 * @subpackage Simple_HTTPS/includes
 * @author Kallisteo <contact@kallisteo.com>
*/
class Simple_HTTPS_i18n
{
	/**
	 * Load the plugin text domain for translation
	 * @since 1.0.0
	*/
	public function load_plugin_textdomain()
	{
		load_plugin_textdomain('simple-https', false, dirname(dirname(plugin_basename(__FILE__))).'/languages/');
	}
}

?>