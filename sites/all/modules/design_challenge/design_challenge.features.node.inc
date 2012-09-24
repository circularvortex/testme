<?php

/**
 * Helper to implementation of hook_node_info().
 */
function _design_challenge_node_info() {
  $items = array(
    'challenge_design' => array(
      'name' => t('Challenge Design'),
      'module' => 'features',
      'description' => t('This content type is for vehicle design submissions, for use by designers to upload their designs and for users to vote on them.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '1',
      'body_label' => t('Body'),
      'min_word_count' => '0',
      'help' => '',
    ),
    'challenge_gallery' => array(
      'name' => t('Challenge Gallery'),
      'module' => 'features',
      'description' => t('This gallery is for display and organization of design challenge nodes.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '1',
      'body_label' => t('Body'),
      'min_word_count' => '0',
      'help' => '',
    ),
  );
  return $items;
}
