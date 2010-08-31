<?php
// $Id: node_gallery_access.views.inc,v 1.2 2010/01/12 22:26:13 justintime Exp $

/**
 * @file node_gallery_access.views.inc
 *
 * All views plugins for Node Gallery Access
 */

function node_gallery_access_views_data() {
  $data = array(
    'node_gallery_access' => array(
      'table' => array(
        'group' => t("Node Gallery Access"),
        // This join can be read as: "In order to join to the node table, the node_gallery_access table
        // must first link to the node_galleries table, and they join on the nid field"
        'join'  => array(
          'node' => array(
            'left_field' => 'nid',
            'field'      => 'nid',
          ),
        ),
      ),
      'access_type_id' => array(
        'title' => t("Access Type ID"),
        'real field' => 'access_type',
        'help'  => t("The access type ID on a gallery."),
        'argument' => array(
		      'handler' => 'views_handler_argument',
        ),
      ),
      'access_type' => array(
        'title' => t("Access Type"),
        'help'  => t("The access type on a gallery - (Public, Private, or Password)."),
        'field' => array(
		      'handler' => 'node_gallery_access_handler_field_access_type',
        ),
        'filter' => array(
		      'handler' => 'node_gallery_access_handler_filter_access_type',
        ),
      ),    
    ),
  );
  return $data;
}

/**
 * Implementation of hook_views_handlers().
 */

function node_gallery_access_views_handlers() {
  return array(
    'info' => array(
      'path' => drupal_get_path('module', 'node_gallery_access') .'/views2inc',
    ),
    'handlers' => array(
      'node_gallery_access_handler_field_access_type' => array(
        'parent' => 'views_handler_field',
      ),
      'node_gallery_access_handler_filter_access_type' => array(
        'parent' => 'views_handler_filter_in_operator',
      ),
    ),
  );
}