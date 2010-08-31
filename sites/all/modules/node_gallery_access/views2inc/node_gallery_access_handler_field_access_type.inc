<?php
// $Id: node_gallery_access_handler_field_access_type.inc,v 1.2 2010/01/12 22:26:13 justintime Exp $

/**
 * @file node_gallery_access_handler_field_access_type.inc
 *
 * This converts the ID from the access_type column into a displayable string
 * 
 */
 
class node_gallery_access_handler_field_access_type extends views_handler_field {
  
  function render($values) {
    $value = $values->{$this->field_alias};
    switch ($value) {
    	case NODE_GALLERY_ACCESS_TYPE_PUBLIC:
    	  $value = t("Public");    	
	    	break;
    	case NODE_GALLERY_ACCESS_TYPE_PRIVATE:
    	  $value = t("Private");    	
	    	break;
    	case NODE_GALLERY_ACCESS_TYPE_PASSWORD:
    	  $value = t("Password");    	
	    	break;
    	default:
    	  drupal_set_message("Unknown access type '$value', unable to stringify.", 'warning');
	    	break;
    }
    return check_plain($value);
  }
}