<?php

// $Id: node_gallery_access.pages.inc,v 1.1 2010/01/08 19:32:13 justintime Exp $

/**
 * @file
 * Node gallery access pages. 
 *
 */

function node_gallery_access_setting_form_js() {
  $cached_form_state = array();
  
  // Load the form from the Form API cache.
  if (!($cached_form = form_get_cache($_POST['form_build_id'], $cached_form_state)) || !isset($cached_form['#node']) || !isset($cached_form['ng_access'])) {
    form_set_error('form_token', t('Validation error, please try again. If this error persists, please contact the site administrator.'));
    $output = theme('status_messages');
    print drupal_to_js(array('status' => TRUE, 'data' => $output));
    exit();
  }
  
  $form_state = array('values' => $_POST);
  
  if ($form_state['values']['access_type'] < NODE_GALLERY_ACCESS_TYPE_PASSWORD ) {
     print drupal_to_js(array('status' => TRUE, 'data' => ''));
     exit;
   }
  
  $form['password'] = array(
    '#type' => 'password_confirm',
    '#title' => t('Enter Password'),
    '#description' => t('If you set a password previously, this will reset it.'),
  );
  
  form_set_cache($_POST['form_build_id'], $cached_form + $form, $cached_form_state);
  // Render the form for output.
  $form += array(
    '#post' => $_POST,
    '#programmed' => FALSE,
    '#tree' => FALSE,
    '#parents' => array(),
  );
  $form_state = array('submitted' => FALSE);
  $form = form_builder('node_gallery_upload_js', $form, $form_state);
  
  print drupal_to_js(array('status' => TRUE, 'data' => drupal_render($form)));
  exit;
}

function node_gallery_access_enterpassword($form_state) {
  if (!isset($_GET['destination'])) {
    // Illegal call
    watchdog('node_gallery_access', 'Illegal call to node_gallery_access/enterpassword', array(), WATCHDOG_WARNING);
    drupal_access_denied();
  }
  
  $form['nid'] = array(
    '#type' => 'value',
    '#value' => empty($_SESSION['_node_gallery']['current']) ? $_GET['check'] : $_SESSION['_node_gallery']['current'],
  );

  $form['protected_node_enterpassword'] = array(
      '#type' => 'fieldset',
      '#description' => t('The gallery you are trying to view is password protected. Please enter the password below to proceed.'),
      '#collapsible' => FALSE
  );
  $form['protected_node_enterpassword']['password'] = array(
      '#type' => 'password',
      '#title' => t('Gallery password'),
      '#size' => 20
  );
  $form['protected_node_enterpassword']['submit'] = array(
      '#type' => 'submit',
      '#value' => t('OK'),
  );

  return $form;
}

function node_gallery_access_enterpassword_validate($form, &$form_state) {
  $result = node_gallery_access_get_node_access($form_state['values']['nid']);
  $form_state['ng_access_password'] = $result->password;
  if (node_gallery_access_set_password($form_state['values']['password']) != $result->password) {
    form_set_error('password', t('Incorrect password!'));
  }
}

function node_gallery_access_enterpassword_submit($form, &$form_state) {
  $_SESSION['_node_gallery']['passwords'][$form_state['values']['nid']] = $form_state['ng_access_password'];
  unset($_SESSION['_node_gallery']['current']);
}

function node_gallery_access_private() {
  return t('This is a private gallery, only the owner of the gallery can view it.');
}