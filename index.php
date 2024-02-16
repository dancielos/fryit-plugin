<?php

/*
  Plugin Name: Fry It Custom Plugin
  Description: Custom blocks for fry it..
  Version: 1.0
  Author: Dan Cielos
  Author URI: https://dancielos.com/
*/

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class FryItPlugin {
  function __construct() {
    add_action('enqueue_block_editor_assets', array($this, 'adminAssets'));
  }

  function adminAssets() {
    wp_enqueue_script('newblock', plugin_dir_url(__FILE__) . 'test.js', array('wp-blocks', 'wp-element'));
  }
}

$fryItPlugin = new FryItPlugin();