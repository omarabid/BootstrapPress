<?php

/**
 * BootstrapPress - Twitter Bootstrap for WordPress
 *
 * @author Abid Omar
 * @version 0.0.2
 * @package Main
 */
/*
  Plugin Name: BootstrapPress
  Plugin URI: http://costartpress.com
  Description: BootstrapPress gives you the Twitter Bootstrap framework styles in WordPress.
  Author: Abid Omar
  Author URI: http://omarabid.com
  Version: 0.0.2
  Text Domain: wp-bs
  License: GPLv3
 */

if (!class_exists('wp_bs')) {
    /**
     * BootstrapPress Starter Class
     *
     * This is the plug-in Backbone class. This class is used to Initialize,
     * Install, Activate, Deactivate and Uninstall the plug-in.
     */
    class wp_bs
    {
        /**
         * Plug-in Version
         * @var string
         */
        public $version = "0.0.2";

        /**
         * Minimal WordPress version required
         * @var string
         */
        public $wp_version = "3.5";

        function __construct()
        {
            //
            // 1. Check plugin requirements
            //
            if (!$this->check_requirements()) {
                return;
            }

            //
            // 2. Define constants and load dependencies
            //
            $this->define_constants();
            $this->load_dependencies();

            //
            // 3. Activation hooks
            //
            register_activation_hook(__FILE__, array(&$this, 'activate'));
            register_deactivation_hook(__FILE__, array(&$this, 'deactivate'));
            register_uninstall_hook(__FILE__, 'wp_bs::uninstall');

            //
            // 4. i18n
            //
            add_action('init', array(&$this, 'i18n'));

            //
            // 5. Load Bootstrap files
            //
            add_action('wp_enqueue_scripts', array(&$this, 'load_bootstrap'));


            //
            // 6. Run the plugin!
            //
            add_action('plugins_loaded', array(&$this, 'start'));
        }

        /**
         * Checks that the WordPress setup meets the plugin requirements
         * @global string $wp_version
         * @return boolean
         */
        private function check_requirements()
        {
            global $wp_version;
            if (!version_compare($wp_version, $this->wp_version, '>=')) {
                add_action('admin_notices', 'wp_bs::display_req_notice');
                return false;
            }
            return true;
        }

        /**
         * Display the requirement notice
         * @static
         */
        static function display_req_notice()
        {
            global $wp_bs;
            echo '<div id="message" class="error"><p><strong>';
            echo __('Sorry, BootstrapPress re requires WordPress ' . $wp_bs->wp_version . ' or higher.
            Please upgrade your WordPress setup', 'wp-bs');
            echo '</strong></p></div>';
        }

        /**
         * Define Global Constants for the plug-in
         */
        private function define_constants()
        {
            /* [bootstrappress/plugin.php] */
            define('BS_BASENAME', plugin_basename(__FILE__));
            /* [/devl/dev/wp-content/plugins/bootstrappress] */
            define('BS_DIR', dirname(__FILE__));
            /* [bootstrappress] */
            define('BS_FOLDER', plugin_basename(dirname(__FILE__)));
            /* [/devl/dev/wp-content/plugins/bootstrappress/] */
            define('BS_ABSPATH', trailingslashit(str_replace("\\", "/", WP_PLUGIN_DIR . '/' . plugin_basename(dirname(__FILE__)))));
            /* [http://bootstrappress.com/dev/wp-content/plugins/bootstrappress/] */
            define('BS_URLPATH', trailingslashit(WP_PLUGIN_URL . '/' . plugin_basename(dirname(__FILE__))));
            /* [http://bootstrappress.com/dev/wp-admin/] */
            define('BS_ADMINPATH', get_admin_url());
        }

        /**
         * Load required files for the plug-in
         */
        private function load_dependencies()
        {
            // Admin Panel
            if (is_admin()) {
            }
            // Front-End Site
            require_once('shortcodes/sc.php');
        }

        /**
         * Activate the plugin
         */
        public function activate()
        {

        }

        /**
         * Deactivate the plugin
         */
        public function deactivate()
        {

        }

        /**
         * First time activation
         */
        public function install()
        {

        }

        /**
         * Uninstall the plugin
         */
        static function uninstall()
        {

        }

        /**
         * Plugin Internationalization
         */
        public function i18n()
        {
            load_plugin_textdomain('wp-bs', false, basename(dirname(__FILE__)) . '/lang/');
        }

        /**
         * Load Bootstrap files
         */
        public function load_bootstrap()
        {
            wp_enqueue_script('bs-core', BS_URLPATH . 'client/js/bootstrap.js', array('jquery'));
            wp_enqueue_style('bs-core', BS_URLPATH . 'client/css/bootstrap.css');
        }

        /**
         * Run the plugin!
         */
        public function start()
        {

        }

    }
}

$wp_bs = new wp_bs();
