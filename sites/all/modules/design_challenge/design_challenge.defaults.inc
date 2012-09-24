<?php

/**
 * Helper to implementation of hook_content_default_fields().
 */
function _design_challenge_content_default_fields() {
  $fields = array();

  // Exported field: field_challenge_rating_back
  $fields[] = array(
    'field_name' => 'field_challenge_rating_back',
    'type_name' => 'challenge_design',
    'display_settings' => array(
      'weight' => '-1',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '4' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '5' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'email_plain' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'email_html' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'fivestar',
    'required' => '0',
    'multiple' => '0',
    'module' => 'fivestar',
    'active' => '1',
    'stars' => '5',
    'dynamic_target' => '',
    'php_target' => '',
    'axis' => 'back',
    'widget' => array(
      'allow_clear' => 1,
      'default_value' => array(
        '0' => array(
          'rating' => '-',
          'target' => NULL,
          'axis' => '',
        ),
      ),
      'default_value_php' => NULL,
      'label' => 'Rating: Back',
      'weight' => '-1',
      'description' => '',
      'type' => 'stars',
      'module' => 'fivestar',
    ),
  );

  // Exported field: field_challenge_rating_front
  $fields[] = array(
    'field_name' => 'field_challenge_rating_front',
    'type_name' => 'challenge_design',
    'display_settings' => array(
      'weight' => '-2',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '4' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '5' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'email_plain' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'email_html' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'fivestar',
    'required' => '0',
    'multiple' => '0',
    'module' => 'fivestar',
    'active' => '1',
    'stars' => '5',
    'dynamic_target' => '',
    'php_target' => '',
    'axis' => 'front',
    'widget' => array(
      'allow_clear' => 1,
      'default_value' => array(
        '0' => array(
          'rating' => '-',
          'target' => NULL,
          'axis' => '',
        ),
      ),
      'default_value_php' => NULL,
      'label' => 'Rating: Front',
      'weight' => '-2',
      'description' => '',
      'type' => 'stars',
      'module' => 'fivestar',
    ),
  );

  // Exported field: field_challenge_rating_overall
  $fields[] = array(
    'field_name' => 'field_challenge_rating_overall',
    'type_name' => 'challenge_design',
    'display_settings' => array(
      'weight' => '-3',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '4' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '5' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'email_plain' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'email_html' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'fivestar',
    'required' => '0',
    'multiple' => '0',
    'module' => 'fivestar',
    'active' => '1',
    'stars' => '5',
    'dynamic_target' => '',
    'php_target' => '',
    'axis' => 'overall',
    'widget' => array(
      'allow_clear' => 1,
      'default_value' => array(
        '0' => array(
          'rating' => '-',
          'target' => NULL,
          'axis' => '',
        ),
      ),
      'default_value_php' => NULL,
      'label' => 'Rating: Overall',
      'weight' => '-3',
      'description' => '',
      'type' => 'stars',
      'module' => 'fivestar',
    ),
  );

  // Exported field: field_challenge_rating_side
  $fields[] = array(
    'field_name' => 'field_challenge_rating_side',
    'type_name' => 'challenge_design',
    'display_settings' => array(
      'weight' => 0,
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '4' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '5' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'email_plain' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'email_html' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'fivestar',
    'required' => '0',
    'multiple' => '0',
    'module' => 'fivestar',
    'active' => '1',
    'stars' => '',
    'dynamic_target' => '',
    'php_target' => '',
    'axis' => '',
    'widget' => array(
      'allow_clear' => NULL,
      'label' => 'Rating: Side',
      'weight' => 0,
      'description' => '',
      'type' => 'stars',
      'module' => 'fivestar',
    ),
  );

  // Exported field: field_challenge_rating_top
  $fields[] = array(
    'field_name' => 'field_challenge_rating_top',
    'type_name' => 'challenge_design',
    'display_settings' => array(
      'weight' => '1',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '4' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '5' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'email_plain' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'email_html' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'fivestar',
    'required' => '0',
    'multiple' => '0',
    'module' => 'fivestar',
    'active' => '1',
    'stars' => '5',
    'dynamic_target' => '',
    'php_target' => '',
    'axis' => 'top',
    'widget' => array(
      'allow_clear' => 1,
      'default_value' => array(
        '0' => array(
          'rating' => '-',
          'target' => NULL,
          'axis' => '',
        ),
      ),
      'default_value_php' => NULL,
      'label' => 'Rating: Top',
      'weight' => '1',
      'description' => '',
      'type' => 'stars',
      'module' => 'fivestar',
    ),
  );

  // Translatables
  array(
    t('Rating: Back'),
    t('Rating: Front'),
    t('Rating: Overall'),
    t('Rating: Side'),
    t('Rating: Top'),
  );

  return $fields;
}

/**
 * Helper to implementation of hook_ctools_plugin_api().
 */
function _design_challenge_ctools_plugin_api() {
  $args = func_get_args();
  $module = array_shift($args);
  $api = array_shift($args);
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => 1);
  }
  elseif ($module == "panels_mini" && $api == "panels_default") {
    return array("version" => 1);
  }
  elseif ($module == "strongarm" && $api == "strongarm") {
    return array("version" => 1);
  }
}

/**
 * Helper to implementation of hook_imagecache_default_presets().
 */
function _design_challenge_imagecache_default_presets() {
  $items = array(
    'challenge-gallery-cover' => array(
      'presetname' => 'challenge-gallery-cover',
      'actions' => array(
        '0' => array(
          'weight' => '0',
          'module' => 'imagecache',
          'action' => 'imagecache_scale_and_crop',
          'data' => array(
            'width' => '200',
            'height' => '120',
          ),
        ),
      ),
    ),
    'challenge-gallery-display' => array(
      'presetname' => 'challenge-gallery-display',
      'actions' => array(
        '0' => array(
          'weight' => '0',
          'module' => 'imagecache',
          'action' => 'imagecache_scale_and_crop',
          'data' => array(
            'width' => '700',
            'height' => '470',
          ),
        ),
      ),
    ),
    'challenge-gallery-lightbox' => array(
      'presetname' => 'challenge-gallery-lightbox',
      'actions' => array(
        '0' => array(
          'weight' => '0',
          'module' => 'imagecache',
          'action' => 'imagecache_scale_and_crop',
          'data' => array(
            'width' => '1000',
            'height' => '700',
          ),
        ),
      ),
    ),
    'challenge-gallery-thumbnail' => array(
      'presetname' => 'challenge-gallery-thumbnail',
      'actions' => array(
        '0' => array(
          'weight' => '0',
          'module' => 'imagecache',
          'action' => 'imagecache_scale_and_crop',
          'data' => array(
            'width' => '200',
            'height' => '120',
          ),
        ),
      ),
    ),
  );
  return $items;
}

/**
 * Helper to implementation of hook_default_page_manager_handlers().
 */
function _design_challenge_default_page_manager_handlers() {
  $export = array();
  $handler = new stdClass;
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view_panel_context';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Challenge Design',
    'no_blocks' => 1,
    'css_id' => 'challenge-design',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'access' => array(
      'plugins' => array(
        '0' => array(
          'name' => 'node_type',
          'settings' => array(
            'type' => array(
              'challenge_design' => 'challenge_design',
            ),
          ),
          'context' => 'argument_nid_1',
        ),
      ),
      'logic' => 'or',
    ),
  );
  $display = new panels_display;
  $display->layout = 'flexible';
  $display->layout_settings = array(
    'items' => array(
      'canvas' => array(
        'type' => 'row',
        'contains' => 'column',
        'children' => array(
          '0' => 'main',
          '1' => 1,
        ),
        'parent' => NULL,
      ),
      'main' => array(
        'type' => 'column',
        'width' => '77.12183090922257',
        'width_type' => '%',
        'children' => array(
          '0' => 'main-row',
        ),
        'parent' => 'canvas',
      ),
      'main-row' => array(
        'type' => 'row',
        'contains' => 'region',
        'children' => array(
          '0' => 'center',
        ),
        'parent' => 'main',
      ),
      'center' => array(
        'type' => 'region',
        'title' => 'Center',
        'width' => 100,
        'width_type' => '%',
        'parent' => 'main-row',
      ),
      '1' => array(
        'type' => 'column',
        'width' => '22.878169090777426',
        'width_type' => '%',
        'parent' => 'canvas',
        'children' => array(
          '0' => 2,
        ),
      ),
      '2' => array(
        'type' => 'row',
        'contains' => 'region',
        'children' => array(
          '0' => 'right_sidebar',
        ),
        'parent' => '1',
      ),
      'right_sidebar' => array(
        'type' => 'region',
        'title' => 'Right Sidebar',
        'width' => 100,
        'width_type' => '%',
        'parent' => '2',
      ),
    ),
  );
  $display->panel_settings = array();
  $display->cache = array();
  $display->title = '%node:title';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass;
    $pane->pid = 'new-1';
    $pane->panel = 'center';
    $pane->type = 'node_content';
    $pane->subtype = 'node_content';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'links' => 1,
      'page' => 1,
      'no_extras' => 0,
      'override_title' => 1,
      'override_title_text' => '%title',
      'teaser' => 0,
      'identifier' => '',
      'link' => 0,
      'leave_node_title' => 1,
      'context' => 'argument_nid_1',
    );
    $pane->cache = array();
    $pane->style = array();
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $display->content['new-1'] = $pane;
    $display->panels['center'][0] = 'new-1';
    $pane = new stdClass;
    $pane->pid = 'new-2';
    $pane->panel = 'right_sidebar';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => 'Fivestar Ratings',
      'title' => 'Rating',
      'body' => '<?php
        $nid = arg(1);
        $output = \'\';
        $tags = array(
          \'vote\' => t(\'Overall\'),
          \'front\' => t(\'Front\'),
          \'back\' => t(\'Back\'),
          \'side\' => t(\'Side\'),
          \'top\' => t(\'Top\'),
        );
      
        foreach ($tags as $tag => $title) {
          $votes = fivestar_get_votes(\'node\', $nid, $tag);
        
          $values = array(
            \'user\' => isset($votes[\'user\'][\'value\']) ? $votes[\'user\'][\'value\'] : NULL,
            \'average\' => isset($votes[\'average\'][\'value\']) ? $votes[\'average\'][\'value\'] : NULL,
            \'count\' => isset($votes[\'count\'][\'value\']) ? $votes[\'count\'][\'value\'] : NULL,
          );
        
          $settings = array(
            \'stars\' => 5,
            \'allow_clear\' => TRUE,
            \'style\' => \'user\',
            \'text\' => \'user\',
            \'content_type\' => \'node\',
            \'content_id\' => $nid,
            \'tag\' => $tag,
            \'autosubmit\' => TRUE,
            \'title\' => $title,
            \'feedback_enable\' => TRUE,
            \'labels_enable\' => TRUE,
            \'labels\' => array(t(\'Cancel Vote\'),t(\'Weak\'), t(\'Okay\'), t(\'Good\'), t(\'Great\'), t(\'Awesome\')),
          );
        
          $output .= drupal_get_form(\'fivestar_custom_widget\', $values, $settings);
        }
      
        print $output;
      ?>',
      'format' => '3',
      'substitute' => 0,
    );
    $pane->cache = array();
    $pane->style = array();
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $display->content['new-2'] = $pane;
    $display->panels['right_sidebar'][0] = 'new-2';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;

  $export['node_view_panel_context'] = $handler;
  return $export;
}

/**
 * Helper to implementation of hook_default_panels_mini().
 */
function _design_challenge_default_panels_mini() {
  $export = array();
  $mini = new stdClass;
  $mini->disabled = FALSE; /* Edit this to true to make a default mini disabled initially */
  $mini->api_version = 1;
  $mini->name = 'fivestar_challenge';
  $mini->category = '';
  $mini->title = 'Challenge Ratings';
  $mini->requiredcontexts = FALSE;
  $mini->contexts = FALSE;
  $mini->relationships = FALSE;
  $display = new panels_display;
  $display->layout = 'onecol';
  $display->layout_settings = array();
  $display->panel_settings = array();
  $display->cache = array();
  $display->title = '';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass;
    $pane->pid = 'new-1';
    $pane->panel = 'middle';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => 'Challenge Design Ratings',
      'title' => 'Ratings',
      'body' => '<?php
        $nid = arg(1);
        $output = \'\';
        $tags = array(
          \'vote\' => t(\'Overall\'),
          \'front\' => t(\'Front\'),
          \'back\' => t(\'Back\'),
          \'side\' => t(\'Side\'),
          \'top\' => t(\'Top\'),
        );
      
        foreach ($tags as $tag => $title) {
          $votes = fivestar_get_votes(\'node\', $nid, $tag);
        
          $values = array(
            \'user\' => isset($votes[\'user\'][\'value\']) ? $votes[\'user\'][\'value\'] : NULL,
            \'average\' => isset($votes[\'average\'][\'value\']) ? $votes[\'average\'][\'value\'] : NULL,
            \'count\' => isset($votes[\'count\'][\'value\']) ? $votes[\'count\'][\'value\'] : NULL,
          );
        
          $settings = array(
            \'stars\' => 5,
            \'allow_clear\' => TRUE,
            \'style\' => \'average\',
            \'text\' => \'dual\',
            \'content_type\' => \'node\',
            \'content_id\' => $nid,
            \'tag\' => $tag,
            \'autosubmit\' => TRUE,
            \'title\' => $title,
            \'feedback_enable\' => TRUE,
            \'labels_enable\' => TRUE,
            \'labels\' => array(t(\'Poor\'), t(\'Okay\'), t(\'Good\'), t(\'Great\'), t(\'Awesome\')),
          );
        
          $output .= drupal_get_form(\'fivestar_custom_widget\', $values, $settings);
        }
      
        print $output;
      ?>',
      'format' => '3',
      'substitute' => TRUE,
    );
    $pane->cache = array();
    $pane->style = array();
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $display->content['new-1'] = $pane;
    $display->panels['middle'][0] = 'new-1';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $mini->display = $display;

  $export['fivestar_challenge'] = $mini;
  return $export;
}

/**
 * Helper to implementation of hook_user_default_permissions().
 */
function _design_challenge_user_default_permissions() {
  $permissions = array();

  // Exported permission: rate content
  $permissions[] = array(
    'name' => 'rate content',
    'roles' => array(
      '0' => 'staff',
    ),
  );

  return $permissions;
}

/**
 * Helper to implementation of hook_strongarm().
 */
function _design_challenge_strongarm() {
  $export = array();
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'content_extra_weights_challenge_design';
  $strongarm->value = array(
    'title' => '-5',
    'body_field' => '-4',
    'revision_information' => '3',
    'comment_settings' => '6',
    'menu' => '2',
    'path' => '4',
    'print' => '5',
  );

  $export['content_extra_weights_challenge_design'] = $strongarm;
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'fivestar_challenge_design';
  $strongarm->value = 1;

  $export['fivestar_challenge_design'] = $strongarm;
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'fivestar_comment_challenge_design';
  $strongarm->value = '0';

  $export['fivestar_comment_challenge_design'] = $strongarm;
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'fivestar_feedback_challenge_design';
  $strongarm->value = 1;

  $export['fivestar_feedback_challenge_design'] = $strongarm;
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'fivestar_labels_challenge_design';
  $strongarm->value = array(
    '0' => 'Cancel rating',
    '1' => 'Weak',
    '2' => 'Okay',
    '3' => 'Nice',
    '4' => 'Great',
    '5' => 'Awesome',
    '6' => 'Give it @star/@count',
    '7' => 'Give it @star/@count',
    '8' => 'Give it @star/@count',
    '9' => 'Give it @star/@count',
    '10' => 'Give it @star/@count',
  );

  $export['fivestar_labels_challenge_design'] = $strongarm;
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'fivestar_labels_enable_challenge_design';
  $strongarm->value = 1;

  $export['fivestar_labels_enable_challenge_design'] = $strongarm;
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'fivestar_position_challenge_design';
  $strongarm->value = 'hidden';

  $export['fivestar_position_challenge_design'] = $strongarm;
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'fivestar_position_teaser_challenge_design';
  $strongarm->value = 'hidden';

  $export['fivestar_position_teaser_challenge_design'] = $strongarm;
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'fivestar_stars_challenge_design';
  $strongarm->value = '5';

  $export['fivestar_stars_challenge_design'] = $strongarm;
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'fivestar_style_challenge_design';
  $strongarm->value = 'user';

  $export['fivestar_style_challenge_design'] = $strongarm;
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'fivestar_text_challenge_design';
  $strongarm->value = 'user';

  $export['fivestar_text_challenge_design'] = $strongarm;
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'fivestar_title_challenge_design';
  $strongarm->value = 1;

  $export['fivestar_title_challenge_design'] = $strongarm;
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'fivestar_unvote_challenge_design';
  $strongarm->value = 1;

  $export['fivestar_unvote_challenge_design'] = $strongarm;
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'fivestar_widget';
  $strongarm->value = 'sites/default/files/fivestar/basic/basic.css';

  $export['fivestar_widget'] = $strongarm;
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_gallery_challenge_gallery';
  $strongarm->value = array(
    'gallery_type' => 'challenge_gallery',
    'image_type' => 'challenge_design',
    'name' => 'Design Challenge Gallery',
    'gallery_directory' => 'images/gallery/%gallery_name',
    'default_cover' => '',
    'number_uploads' => '5',
    'display_fields' => array(
      'title' => 'title',
      'body_field' => 'body_field',
      'revision_information' => 0,
      'comment_settings' => 0,
      'path' => 0,
      'print' => 0,
    ),
    'content_display' => 'image',
    'image_comment' => 'image',
    'image_size' => array(
      'cover' => 'challenge-gallery-cover',
      'thumbnail' => 'challenge-gallery-thumbnail',
      'preview' => 'challenge-gallery-display',
    ),
    'original' => array(
      'view_original' => 'lightbox2',
      'view_original_text' => 'Download the Original Image',
      'lightbox2' => 'challenge-gallery-lightbox',
    ),
    'teaser' => array(
      'gallery_display_type' => 'cover',
      'thumbnails_num' => '',
      'image' => 'node-gallery-thumbnail',
      'lightbox2_gallery' => 'avatar_blog',
    ),
    'gallery' => array(
      'gallery_display_type' => 'thumbnails',
      'lightbox2_gallery_preset' => 'avatar_blog',
    ),
    'upload_limits' => array(
      'general' => array(
        'file_extension' => 'jpg jpeg gif png',
        'file_resolution' => '0',
        'file_max_size' => '1',
        'user_max_size' => '128',
        'user_max_number' => '0',
      ),
      'roles' => array(),
    ),
  );

  $export['node_gallery_challenge_gallery'] = $strongarm;
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_node_challenge_design_pattern';
  $strongarm->value = '[parent-node-gallery-path-raw]/[title-raw]';

  $export['pathauto_node_challenge_design_pattern'] = $strongarm;
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_node_challenge_gallery_pattern';
  $strongarm->value = 'challenge/[title-raw]';

  $export['pathauto_node_challenge_gallery_pattern'] = $strongarm;
  return $export;
}
