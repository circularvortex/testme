<?php
// $Id: node_gallery_access.views_default.inc,v 1.2.2.1 2010/01/13 03:07:18 justintime Exp $

/**
 * @file node_gallery_access.views_default.inc
 *
 * All included views for Node Gallery Access
 */

/**
 * Implementation of hook_views_default_views().
 */
function node_gallery_access_views_default_views() {
  /*
   * View 'public_galleries'
   */
	$view = new view;
	$view->name = 'public_galleries';
	$view->description = 'Displays all galleries marked as "Public" by Node Gallery Access';
	$view->tag = 'node_gallery_access';
	$view->view_php = '';
	$view->base_table = 'node';
	$view->is_cacheable = FALSE;
	$view->api_version = 2;
	$view->disabled = TRUE; /* Edit this to true to make a default view disabled initially */
	$handler = $view->new_display('default', 'Defaults', 'default');
	$handler->override_option('fields', array(
	  'gid_1' => array(
	    'label' => 'Cover Image',
	    'alter' => array(
	      'alter_text' => 0,
	      'text' => '',
	      'make_link' => 0,
	      'path' => 'node/[nid]',
	      'link_class' => '',
	      'alt' => '',
	      'prefix' => '',
	      'suffix' => '',
	      'target' => '',
	      'help' => '',
	      'trim' => 0,
	      'max_length' => '',
	      'word_boundary' => 1,
	      'ellipsis' => 1,
	      'strip_tags' => 0,
	      'html' => 0,
	    ),
	    'empty' => '',
	    'hide_empty' => 0,
	    'empty_zero' => 0,
	    'link_to_node' => 1,
	    'node_gallery_setting' => 'node_gallery_gallery',
	    'exclude' => 0,
	    'id' => 'gid_1',
	    'table' => 'node_galleries_gallery',
	    'field' => 'gid',
	    'override' => array(
	      'button' => 'Override',
	    ),
	    'relationship' => 'none',
	  ),
	  'title' => array(
	    'label' => 'Gallery',
	    'alter' => array(
	      'alter_text' => 0,
	      'text' => '[gid_1]',
	      'make_link' => 0,
	      'path' => 'node/[nid]',
	      'link_class' => '',
	      'alt' => '',
	      'prefix' => '',
	      'suffix' => '',
	      'help' => '',
	      'trim' => 0,
	      'max_length' => '',
	      'word_boundary' => 1,
	      'ellipsis' => 1,
	      'strip_tags' => 0,
	      'html' => 0,
	    ),
	    'link_to_node' => 1,
	    'exclude' => 0,
	    'id' => 'title',
	    'table' => 'node',
	    'field' => 'title',
	    'override' => array(
	      'button' => 'Override',
	    ),
	    'relationship' => 'none',
	  ),
	  'image_count' => array(
	    'label' => '',
	    'alter' => array(
	      'alter_text' => 0,
	      'text' => '',
	      'make_link' => 0,
	      'path' => '',
	      'link_class' => '',
	      'alt' => '',
	      'prefix' => '',
	      'suffix' => '',
	      'help' => '',
	      'trim' => 0,
	      'max_length' => '',
	      'word_boundary' => 1,
	      'ellipsis' => 1,
	      'strip_tags' => 0,
	      'html' => 0,
	    ),
	    'set_precision' => FALSE,
	    'precision' => 0,
	    'decimal' => '.',
	    'separator' => ',',
	    'prefix' => '(',
	    'suffix' => ' Photos)',
	    'exclude' => 0,
	    'id' => 'image_count',
	    'table' => 'node_galleries_gallery',
	    'field' => 'image_count',
	    'relationship' => 'none',
	    'override' => array(
	      'button' => 'Override',
	    ),
	  ),
	  'body' => array(
	    'label' => 'Description',
	    'alter' => array(
	      'alter_text' => 0,
	      'text' => '',
	      'make_link' => 0,
	      'path' => '',
	      'link_class' => '',
	      'alt' => '',
	      'prefix' => '',
	      'suffix' => '',
	      'help' => '',
	      'trim' => 0,
	      'max_length' => '',
	      'word_boundary' => 1,
	      'ellipsis' => 1,
	      'strip_tags' => 0,
	      'html' => 0,
	    ),
	    'exclude' => 0,
	    'id' => 'body',
	    'table' => 'node_revisions',
	    'field' => 'body',
	    'override' => array(
	      'button' => 'Override',
	    ),
	    'relationship' => 'none',
	  ),
	));
	$handler->override_option('sorts', array(
	  'changed' => array(
	    'order' => 'DESC',
	    'granularity' => 'minute',
	    'id' => 'changed',
	    'table' => 'node',
	    'field' => 'changed',
	    'relationship' => 'none',
	  ),
	));
	$handler->override_option('filters', array(
	  'status' => array(
	    'operator' => '=',
	    'value' => '1',
	    'group' => '0',
	    'exposed' => FALSE,
	    'expose' => array(
	      'operator' => FALSE,
	      'label' => '',
	    ),
	    'id' => 'status',
	    'table' => 'node',
	    'field' => 'status',
	    'override' => array(
	      'button' => 'Override',
	    ),
	    'relationship' => 'none',
	  ),
	  'type' => array(
	    'operator' => 'in',
	    'value' => array(
	      'node_gallery_gallery' => 'node_gallery_gallery',
	    ),
	    'group' => '0',
	    'exposed' => FALSE,
	    'expose' => array(
	      'operator' => FALSE,
	      'label' => '',
	    ),
	    'id' => 'type',
	    'table' => 'node',
	    'field' => 'type',
	    'override' => array(
	      'button' => 'Override',
	    ),
	    'relationship' => 'none',
	  ),
	  'access_type' => array(
	    'operator' => 'in',
	    'value' => array(
	      '0' => '0',
	    ),
	    'group' => '0',
	    'exposed' => FALSE,
	    'expose' => array(
	      'operator' => FALSE,
	      'label' => '',
	    ),
	    'id' => 'access_type',
	    'table' => 'node_gallery_access',
	    'field' => 'access_type',
	    'relationship' => 'none',
	  ),
	));
	$handler->override_option('access', array(
	  'type' => 'none',
	));
	$handler->override_option('cache', array(
	  'type' => 'none',
	));
	$handler->override_option('title', 'Public Galleries');
	$handler->override_option('items_per_page', 0);
	$handler->override_option('distinct', 1);
	$handler->override_option('style_plugin', 'table');
	$handler->override_option('style_options', array(
	  'grouping' => '',
	  'override' => 0,
	  'sticky' => 0,
	  'order' => 'asc',
	  'columns' => array(
	    'gid_1' => 'gid_1',
	    'title' => 'title',
	    'image_count' => 'title',
	    'body' => 'body',
	  ),
	  'info' => array(
	    'gid_1' => array(
	      'separator' => '',
	    ),
	    'title' => array(
	      'sortable' => 0,
	      'separator' => ' ',
	    ),
	    'image_count' => array(
	      'sortable' => 0,
	      'separator' => '',
	    ),
	    'body' => array(
	      'separator' => '',
	    ),
	  ),
	  'default' => '-1',
	));
	$handler->override_option('row_options', array(
	  'inline' => array(
	    'gid' => 'gid',
	    'title' => 'title',
	    'image_count' => 'image_count',
	    'body' => 'body',
	  ),
	  'separator' => '&nbsp; &nbsp;',
	));
	$handler = $view->new_display('page', 'Page', 'page_1');
	$handler->override_option('path', 'public_galleries');
	$handler->override_option('menu', array(
	  'type' => 'normal',
	  'title' => 'Public Galleries',
	  'description' => 'Public Galleries',
	  'weight' => '0',
	  'name' => 'navigation',
	));
	$handler->override_option('tab_options', array(
	  'type' => 'none',
	  'title' => '',
	  'description' => '',
	  'weight' => 0,
	));
	  
	  
  $views[$view->name] = $view;

  return $views;
}