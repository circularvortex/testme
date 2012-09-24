<?php

/**
 * Implementation of hook_content_default_fields().
 */
function design_challenge_content_default_fields() {
  module_load_include('inc', 'design_challenge', 'design_challenge.defaults');
  $args = func_get_args();
  return call_user_func_array('_design_challenge_content_default_fields', $args);
}

/**
 * Implementation of hook_ctools_plugin_api().
 */
function design_challenge_ctools_plugin_api() {
  module_load_include('inc', 'design_challenge', 'design_challenge.defaults');
  $args = func_get_args();
  return call_user_func_array('_design_challenge_ctools_plugin_api', $args);
}

/**
 * Implementation of hook_imagecache_default_presets().
 */
function design_challenge_imagecache_default_presets() {
  module_load_include('inc', 'design_challenge', 'design_challenge.defaults');
  $args = func_get_args();
  return call_user_func_array('_design_challenge_imagecache_default_presets', $args);
}

/**
 * Implementation of hook_node_info().
 */
function design_challenge_node_info() {
  module_load_include('inc', 'design_challenge', 'design_challenge.features.node');
  $args = func_get_args();
  return call_user_func_array('_design_challenge_node_info', $args);
}

/**
 * Implementation of hook_default_page_manager_handlers().
 */
function design_challenge_default_page_manager_handlers() {
  module_load_include('inc', 'design_challenge', 'design_challenge.defaults');
  $args = func_get_args();
  return call_user_func_array('_design_challenge_default_page_manager_handlers', $args);
}

/**
 * Implementation of hook_default_panels_mini().
 */
function design_challenge_default_panels_mini() {
  module_load_include('inc', 'design_challenge', 'design_challenge.defaults');
  $args = func_get_args();
  return call_user_func_array('_design_challenge_default_panels_mini', $args);
}

/**
 * Implementation of hook_user_default_permissions().
 */
function design_challenge_user_default_permissions() {
  module_load_include('inc', 'design_challenge', 'design_challenge.defaults');
  $args = func_get_args();
  return call_user_func_array('_design_challenge_user_default_permissions', $args);
}

/**
 * Implementation of hook_strongarm().
 */
function design_challenge_strongarm() {
  module_load_include('inc', 'design_challenge', 'design_challenge.defaults');
  $args = func_get_args();
  return call_user_func_array('_design_challenge_strongarm', $args);
}
