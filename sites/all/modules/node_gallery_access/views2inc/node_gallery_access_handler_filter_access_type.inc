<?php
// $Id: node_gallery_access_handler_filter_access_type.inc,v 1.2 2010/01/12 22:26:13 justintime Exp $

/**
 * @file node_gallery_access_handler_filter_access_type.inc
 *
 * This converts the displayable string into an ID 
 * 
 */
 
class node_gallery_access_handler_filter_access_type extends views_handler_filter_in_operator {
  
  function get_value_options() {
    $this->value_options = array(
      NODE_GALLERY_ACCESS_TYPE_PUBLIC => t('Public'),
      NODE_GALLERY_ACCESS_TYPE_PRIVATE => t('Private'),
      NODE_GALLERY_ACCESS_TYPE_PASSWORD => t('Password'),
    );
  }
  
}