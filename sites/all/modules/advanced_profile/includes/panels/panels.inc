<?php
// $Id: panels.inc,v 1.1.4.11 2010/03/14 05:38:17 michellec Exp $

/**
 * @file
 * Handles integration with the CTools module.

/**
* Implementation of hook_ctools_plugin_directory().
*/
function advanced_profile_ctools_plugin_directory($module, $plugin) {
  if ($module == 'ctools') {
    return 'includes/panels/' . $plugin;
  }
}

function advanced_profile_ctools_plugin_api($module, $api) {
  if ($module == 'page_manager' && $api == 'pages_default') {
    $module_path = drupal_get_path('module', 'advanced_profile');
    return array('version' => 1, 'path' => $module_path . '/includes/panels');
  }
}
