<?php

/**
 * BootstrapPress - Twitter Bootstrap for WordPress
 *
 * @author Abid Omar
 * @version 0.0.1
 * @package Main
 */
/*
  Plugin Name: BootstrapPress
  Plugin URI: http://bootstrappress.com
  Description: BootstrapPress gives you the Twitter Bootstrap framework styles in WordPress.
  Author: Abid Omar
  Author URI: http://omarabid.com
  Version: 0.0.1
  Text Domain: wp-bs
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
        public $version = "0.0.1";

        /**
         * Minimal WordPress version required
         * @var string
         */
        public $wp_version = "3.5";
    }
}

new wp_bs();
