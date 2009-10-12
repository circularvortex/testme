<?php
// $Id: tweetmeme.admin.inc,v 1.2 2009/04/27 04:34:26 robloach Exp $

function tweetmeme_admin_settings() {
  $form['tweetmeme_types'] = array(
    '#type' => 'checkboxes',
    '#title' => t('Content types'),
    '#description' => t('Which content types to apply the TweetMeme button to.'),
    '#options' => node_get_types('names'),
    '#default_value' => variable_get('tweetmeme_types', array()),
  );
  $form['tweetmeme_location'] = array(
    '#type' => 'checkboxes',
    '#title' => t('Location'),
    '#description' => t('Where to show the TweetMeme button.'),
    '#options' => array(
      'content' => t('Full view'),
      'teasers' => t('Teasers'),
    ),
    '#default_value' => variable_get('tweetmeme_location', array()),
  );
  $form['tweetmeme_style'] = array(
    '#type' => 'select',
    '#title' => t('Style'),
    '#description' => t('The style of the button to use.'),
    '#options' => array(
      'normal' => t('Normal'),
      'compact' => t('Compact'),
    ),
    '#default_value' => variable_get('tweetmeme_style', 'normal'),
  );
  return system_settings_form($form);
}
