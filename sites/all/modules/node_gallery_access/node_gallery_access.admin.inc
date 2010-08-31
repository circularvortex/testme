<?php
// $Id: node_gallery_access.admin.inc,v 1.2 2010/01/12 22:26:13 justintime Exp $

/**
 * @file node_gallery_access.admin.inc
 *
 * Building the administrative settings
 */

function node_gallery_access_settings() {
  $form['node_gallery_access_types'] = array(
    '#type' => 'checkboxes',
    '#title' => t('Set Node Gallery Access Types'),
    '#options' => drupal_map_assoc(node_gallery_get_types()),
    '#default_value' => variable_get('node_gallery_access_types', array()),
    '#weight' => -1,
    '#description' => t('Specify which Node Gallery types you want allow access controls for.'),
  );
  $form['ng_access_pass_gallery'] = array(
    '#type' => 'textfield',
    '#title' => t('Password Mode Gallery File'),
    '#description' => t("Specify the image to display when viewing a gallery that needs a password. The root is the web root. The default file is %default", array('%default' => node_gallery_access_default_pass_image('gallery'))),
    '#default_value' => node_gallery_access_default_pass_image('gallery'),
  );
  $form['ng_access_pass_image'] = array(
    '#type' => 'textfield',
    '#title' => t('Password Mode Image File'),
    '#description' => t("Specify the image to display when viewing a gallery that needs a password. The root is the web root. The default file is %default", array('%default' => node_gallery_access_default_pass_image())),
    '#default_value' => node_gallery_access_default_pass_image(),
  );
  $form['ng_access_priority'] = array(
    '#type' => 'weight',
    '#title' => t('Give Node Gallery Access priority'),
    '#default_value' => variable_get('ng_access_priority', 0),
    '#description' => t('If you are only using this access control module, you can safely ignore this. If you are using multiple access control modules you can adjust the priority of this module.'),
  );  
  $form = system_settings_form($form);
  // We prepend our callback to the submit callback so we can rebuild access permissions if necessary
  array_unshift($form['#submit'],'node_gallery_access_settings_form_submit');
  return $form;
}

function node_gallery_access_settings_form_submit($form, &$form_state) {
  $rebuild_variables = array('node_gallery_access_types','ng_access_priority');
  foreach ($rebuild_variables as $var) {
    $new = $form_state['values'][$var];
    $old = variable_get($var,NULL);
    if ($new != $old) {
      node_access_needs_rebuild(TRUE);
    }
  }
}