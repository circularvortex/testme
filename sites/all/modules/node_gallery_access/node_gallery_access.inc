<?php
// $Id: node_gallery_access.inc,v 1.2 2010/01/12 22:26:13 justintime Exp $

/**
 * @file Node gallery access API file
 *
 * @param unknown_type $nid
 * @return unknown
 */

function node_gallery_access_get_node_access($nid) {
  return db_fetch_object(db_query("SELECT * FROM {node_gallery_access} WHERE nid = %d", $nid));
}

function node_gallery_access_delete_node_access($nid) {
  return db_query("DELETE FROM {node_gallery_access} WHERE nid = %d", $nid);
}

function node_gallery_access_exists($nid) {
  return db_fetch_object(db_query("SELECT * FROM {node_gallery_access} WHERE nid = %d", $nid));
}

function node_gallery_access_save_node_access($node) {
  $access->nid = $node->nid;
  $access->uid = $node->uid;
  $access->access_type = $node->access_type;
  if ($access->access_type == NODE_GALLERY_ACCESS_TYPE_PASSWORD) {
    $access->password = !empty($node->password) ? node_gallery_access_set_password($node->password) : $node->old_password;
  }
  //can't rely on the nodeapi's $op value, need to check it out here.
  $access_exist = db_result(db_query('SELECT nid FROM {node_gallery_access} WHERE nid = %d', $node->nid));
  if ($access_exist) {
    drupal_write_record('node_gallery_access', $access, array('nid'));
  }
  else {
    drupal_write_record('node_gallery_access', $access);
  }
}

function node_gallery_access_set_password($raw) {
  $salt = 'fslkj131rlkjl';
  return sha1($salt . $raw);
}

function node_gallery_access_get_types() {
  $types = array_keys(variable_get('node_gallery_access_types', array()));
  foreach ($types as $type) {
    if (!empty($type)) {
      $items[] = $type;
    }
  }
  return $items;
}