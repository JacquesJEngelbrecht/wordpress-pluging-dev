<?php

/**
 * @package JacquesPluging
 */
/**
 * Plugin Name: Jacques Plugin
 * Description: Plugin development
 * Version: 1.0.0 
 * Author: Jacques Engelbrecht
 * License: GPLv2 or later 
 */

defined ('ABSPATH') or die('Unauthorised!');

if(file_exists(dirname(__FILE__) . '/vendor/autoload.php')){
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

use Inc\Activate;
use Inc\Deactivate;

if(!class_exists('JacquesPluging')){

    class JacquesPluging 
    {
        public $plugin;

        function __construct(){
            $this->plugin  = plugin_basename(__FILE__);
        }

        function register() {
            add_action('admin_enqueue_scripts', array($this, 'enqueue'));
            add_action('admin_menu', array($this, 'add_admin_pages'));
            add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
        }

        public function settings_link($links) {
            $settings_link = '<a href="admin.php?page=jacquesj_plugin">Settings</a>';
            array_push($links, $settings_link);
            return $links;
        }

        public function add_admin_pages() {
            add_menu_page('Jacques Plugin', 'JacquesJ', 'manage_options', 'jacquesj_plugin', array($this, 'admin_index'), 'dashicons-store', 110);
        }

        public function admin_index() {
            require_once plugin_dir_path(__FILE__). 'templates/admin.php';
        }

        function custom_post_type() {
            register_post_type('book', ['public' =>  true, 'label' => 'Books']);
        }

        function enqueue() {
            //Enqueue all scripts
            wp_enqueue_style('customstyles', plugins_url('/assets/customStyles.css', __FILE__));
            wp_enqueue_script('customscripts', plugins_url('/assets/customScripts.js', __FILE__));
        }  
        
        function activate(){
            Activate::activate();
        }
    }

    $jacquesPluging = new JacquesPluging();  
    $jacquesPluging->register();  

    //activation
    register_activation_hook(__FILE__, array( $jacquesPluging, 'activate'));

    //deactivation
    register_deactivation_hook(__FILE__, array('Deactivate', 'deactivate'));
}