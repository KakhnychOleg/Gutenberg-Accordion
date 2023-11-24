<?php
/*
Plugin Name: Gutenberg Accordion
Description: Custom Gutenberg Accordion Block.
Version: 1.0
Author: Kakhnych Oleg
*/

defined('ABSPATH') || exit;

function gutenberg_accordion_register_block() {
   register_block_type(
       'gutenberg-accordion/accordion',
       array(
           'editor_script' => 'gutenberg-accordion-editor',
       )
   );
}

add_action('init', 'gutenberg_accordion_register_block');


// Style & Script
function gutenberg_accordion_enqueue_assets() {
   wp_enqueue_style(
       'gutenberg-accordion-style',
       plugins_url('style.css', __FILE__),
       array('wp-edit-blocks')
   );

   wp_enqueue_script(
       'gutenberg-accordion-editor',
       plugins_url('editor.js', __FILE__),
       array('wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor'),
       true
   );
}

add_action('enqueue_block_editor_assets', 'gutenberg_accordion_enqueue_assets');