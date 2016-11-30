<?php
/*
 * Created on Sep 9, 2016
 * Plugin Name: Kunta API Announcements
 * Description: Kunta API Announcements plugin for Wordpress
 * Version: 0.1
 * Author: Antti Leppä / Otavan Opisto
 */
defined ( 'ABSPATH' ) || die ( 'No script kiddies please!' );

require_once ('constants.php');

add_action ('init', function () {
  register_post_type ( 'announcement', array (
    'labels' => array (
      'name'               => __( 'Header Announcements', KUNTA_API_ANNOUNCEMENTS_I18N_DOMAIN ),
      'singular_name'      => __( 'Header Announcement', KUNTA_API_ANNOUNCEMENTS_I18N_DOMAIN ),
      'add_new'            => __( 'Add Announcement', KUNTA_API_ANNOUNCEMENTS_I18N_DOMAIN ),
      'add_new_item'       => __( 'Add New Announcement', KUNTA_API_ANNOUNCEMENTS_I18N_DOMAIN ),
      'edit_item'          => __( 'Edit Announcement', KUNTA_API_ANNOUNCEMENTS_I18N_DOMAIN ),
      'new_item'           => __( 'New Announcement', KUNTA_API_ANNOUNCEMENTS_I18N_DOMAIN ),
      'view_item'          => __( 'View Announcement', KUNTA_API_ANNOUNCEMENTS_I18N_DOMAIN ),
      'search_items'       => __( 'Search Announcements', KUNTA_API_ANNOUNCEMENTS_I18N_DOMAIN ),
      'not_found'          => __( 'No Announcements found', KUNTA_API_ANNOUNCEMENTS_I18N_DOMAIN ),
      'not_found_in_trash' => __( 'No Announcements in trash', KUNTA_API_ANNOUNCEMENTS_I18N_DOMAIN ),
      'menu_name'          => __( 'Announcements', KUNTA_API_ANNOUNCEMENTS_I18N_DOMAIN ),
      'all_items'          => __( 'Announcements', KUNTA_API_ANNOUNCEMENTS_I18N_DOMAIN )
    ),
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'supports' => array (
      'title',
      'editor',
      'thumbnail'
     )
   ));
});

add_action ('plugins_loaded', function () {
  load_plugin_textdomain(KUNTA_API_ANNOUNCEMENTS_I18N_DOMAIN);
});

?>