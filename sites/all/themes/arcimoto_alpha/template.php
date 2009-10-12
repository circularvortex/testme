<?php

function hook_theme($existing, $type, $theme, $path) {

}


/**
 * Preprocess functions ============================================================
 */
 
function phptemplate_preprocess_page(&$vars) {
  
  $is_landing_page = ( !empty($vars['node']) && ($vars['node']->type == 'landing_page') );


  // Set up templates for each node type
  if($node = menu_get_object()) {
    $vars['node'] = $node;
    $suggestions = array();
    $template_filename = 'page';
    $template_filename = $template_filename . '-' . $vars['node']->type;
    $suggestions[] = $template_filename;
    $vars['template_files'] = $suggestions;
  }
  

  // Set the logo 
  $logo = $vars['base_path'] . $vars['directory'] . '/images/arcimoto_logo.png';
  $vars['logo'] = $logo;
  
  // Fix up the primary links
  $primary_links = $vars['primary_links'];
  foreach($primary_links as $key=>&$link) {
    $link['attributes']['class'] = _hyphenate($link['title']);
  }
  $vars['primary_links'] = $primary_links;
  
  // Include the sub navigation links
  $vars['sub_navigation'] = arcimoto_alpha_sub_navigation();
  
  // Include the user box
  $vars['user_box'] = arcimoto_alpha_user_box($vars['user']);
  
  // Add preorder counter
  $vars['preorder_counter'] = get_preorder_count();
  
}

function phptemplate_preprocess_node(&$vars) {
  $node = $vars['node'];
  
  // Add a NODE template suggestion for the specific region and node type
  $current_region = variable_get('current_region', null);
  if(!empty($node->type) && !empty($current_region)) {
    $template_name = 'node-'.$node->type.'-region-' . $current_region;
    $vars['template_files'][] = $template_name;
  }

  
  // If this is a landing_page_block node that specifies the number of 960 columns, set that variable
  //  so the block knows what to usefor it's width before loading a node/view template
  if(!empty($node->type) && $node->type == 'landing_page_box') {
    $ninesixty_cols = $node->field_box_size[0]['value'];
    $vars['ns_field'] = $ninesixty_cols;
    $delta = $node->nid;
    variable_set('block_960_cols_'.$delta, $ninesixty_cols);
  }
  
}

function phptemplate_preprocess_block(&$vars) {
  $block = $vars['block'];
  
  $region = $block->region;
  
  
  $delta = $block->delta;
  $cols_variable = 'block_960_cols_'.$delta;
  $block_960_cols = variable_get($cols_variable, 0);
  
  if(!empty($block_960_cols)) {
    $vars['block_960_cols'] = $block_960_cols;
    $vars['ninesixty_grid_class'] = arcimoto_alpha_960_cols($block_960_cols);
    
    // reset the variable after using it
    variable_set($cols_variable, 0);
  } else {
    // If the size has not been set, use defaults based on the region
    if($region == 'branding_upper_bar') {
      $vars['ninesixty_grid_class'] = 'grid_8';
    } elseif($region == 'branding_middle_bar') {
      $vars['ninesixty_grid_class'] = 'grid_8';
    } else {
      $vars['ninesixty_grid_class'] = 'grid_4';
    }
  }
  
  
}


/**
 * Hook functions ============================================================
 */
 
function arcimoto_alpha_blocks($region) {
  variable_set('current_region', $region);
  
  $output = '';

  if ($list = block_list($region)) {
    foreach ($list as $key => $block) {
      // $key == <i>module</i>_<i>delta</i>
      $output .= theme('block', $block);
    }
  }

  // Add any content assigned to this region through drupal_set_content() calls.
  $output .= drupal_get_content($region);

  return $output;
}




/**
 * Sub navigation ============================================================
 */
 
function arcimoto_alpha_sub_navigation() {
  //$menu_tree = menu_navigation_links('primary-links', 1);
  
  $menu_tree = arcimoto_alpha_menu_navigation_links('primary-links', 1);

  //dsm($menu_tree);
  //dsm(arcimoto_alpha_menu_navigation_links('primary-links', 0));
  /*
  $tree_2 = menu_tree('primary-links');
  $output = theme_menu_tree($menu_tree);
*/

  $output = theme_links($menu_tree, array('id' => 'sub_navigation', 'class' => 'links'));
  return $output;
}


/** copy pasted (and MODIFIED) from includes/menu.inc line 1260 in Drupal 6.13 **/
function arcimoto_alpha_menu_navigation_links($menu_name, $level = 0) {
  // Don't even bother querying the menu table if no menu is specified.
  if (empty($menu_name)) {
    return array();
  }
  
  /// MODIFICATION: 
  $q = drupal_get_path_alias($_GET['q']);
  
  $is_forum_subpage = strpos($q, 'community/forum') !== FALSE;
  if(!$is_forum_subpage) {
    /// DEFAULT STUFF (NOT MODIFIED): 
    // Get the menu hierarchy for the current page.
    $tree = menu_tree_page_data($menu_name);
  } else {
    // Get everything for forum subpages so we can load community sublinks
    $tree = menu_tree_all_data($menu_name);
    $keys = array_keys($tree);
    
    // Make Community Active
    $key = '49953 The Community 7165'; //$keys[1];
    $tree[$key]['link']['in_active_trail'] = true;
    
    // Make 'discussion forum' active
    $key2 = '49950 Discussion Forum 4970';
    $tree[$key]['below'][$key2]['link']['in_active_trail'] = true;
  } 
  
  
  /// MODIFICATION: Force the currently active item to be "in_active_trail" IF it is the front page
  //$is_front = drupal_get_path_alias($_GET['q']) == variable_get('site_frontpage', drupal_get_path_alias('node'));
  //$is_front = drupal_get_path_alias($_GET['q']) == variable_get('site_frontpage', drupal_get_path_alias('node'));
  $is_front = drupal_get_path_alias($_GET['q']) == 'vehicle';
  if($is_front) {
    $keys = array_keys($tree);
    $first_key = $keys[0];
    $tree[$first_key]['link']['in_active_trail'] = true;
  }
  
  
  
  // Go down the active trail until the right level is reached.
  while ($level-- > 0 && $tree) {
    // Loop through the current level's items until we find one that is in trail.
    while ($item = array_shift($tree)) {
      if ($item['link']['in_active_trail']) {
        // If the item is in the active trail, we continue in the subtree.
        $tree = empty($item['below']) ? array() : $item['below'];
        break;
      }
    }
  }

  // Create a single level of links.
  $links = array();
  foreach ($tree as $item) {
    if (!$item['link']['hidden']) {
      $class = '';
      $l = $item['link']['localized_options'];
      $l['href'] = $item['link']['href'];
      $l['title'] = $item['link']['title'];
      if ($item['link']['in_active_trail']) {
        $class = ' active-trail';
      }
      // Keyed with the unique mlid to generate classes in theme_links().
      $links['menu-'. $item['link']['mlid'] . $class] = $l;
    }
  }
  return $links;
}



/**
 * User Box ============================================================
 */

/**
 * A custom form for the user box or the "join a movement" box
 */
function arcimoto_alpha_user_box($user) {
  
  if(user_is_anonymous()) {
    $output = '
          <h3 id="join_community_image">Join the community</h3>
          <form name="join_email_form" action="'.url('user/register').'" method="post">
            <div id="join_email">
              <label for="join_email_field" id="join_email_overlabel" class="overlabel overlabel-apply">email</label>
              <input type="text" name="mail" id="join_email_field" />
            </div>
            <!--<input type="image" src="sites/all/themes/arcimoto_alpha/images/.gif" name="submit" width="35" height="23" alt="Go" id="join_email_submit_button" />-->
            <input type="submit" id="join_email_submit_utton" class="form-submit" value="JOIN" />
            <!--<a href="#" id="join_email_submit_button" onclick="document.join_email_form.submit(); return false">Go</a>-->
            <span id="user_box_login_link">or <a href="'.url('user/register').'">Login</a></span>
          </form>
          ';
  } else {
    $output = '
          <div id="user_box_logged_in">
            <span class="forums">'.l('Forums', 'community/forum/arcimoto-pulse').'</span> &bull;
            <span class="name">'.l('Profile','user').'</span> &bull;
            <span class="logout">'.l('Logout', 'logout').'</span>
          </div>
        ';
  }
  /*$output = '<div id="panel">
      <div id="panel_contents"> </div>
      <div class="border" id="login">
        '.drupal_get_form('user_login').'
      </div>
    </div>
    <div class="panel_button" style="display: visible;"><a href="#">Login Here</a> </div>
    <div class="panel_button" id="hide_button" style="display: none;"><a href="#">Hide</a> </div>
    ';*/
  
  //$join_form = _arcimoto_alpha_join_form();
  //$output = drupal_render_form('arcimoto_alpha_join_form', $join_form);
  
  
  //$output = drupal_get_form('user_register');
  return $output;
}

/**
 * Theme hook overrides ============================================================
 */
 
function _arcimoto_alpha_join_form() {
  $form['#method'] = 'get';
  $form['#action'] = url('user/register');
  $form['name'] = array(
    '#prefix' => '<label for="join_email_field" id="join_email_overlabel" class="overlabel overlabel-apply">email</label>',
    '#type' => 'textfield',
    //'#title' => t('e-mail'),
    '#size' => 30,
    '#maxlength' => 64,
    '#attributes' => array('class' => 'join-email-input', 'id' => 'join_email'),
    '#weight' => '-10',
  );
  $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('GO'),
      '#weight' => '5',
    );
  return $form;
}


/**
 * Override of theme_node_form().
 */
function arcimoto_alpha_node_form($form) {
  //$buttons = '<div class="buttons">'. drupal_render($form['buttons']) .'</div>';
  
  // Allow modules to insert form elements into the sidebar,
  // defaults to showing taxonomy in that location.
  if (!$sidebar_fields = module_invoke_all('node_form_sidebar', $form, $form['#node'])) {
    $sidebar_fields = array('buttons',  'taxonomy','author', 'options', 'revision_information', 'menu', 'comment_settings', 'xmlsitemap');
  }
  foreach ($sidebar_fields as $field) {
    $sidebar .= drupal_render($form[$field]);
  }
  
  $main = drupal_render($form);
  return "<div class='node-form clear-block'>
    <div class='right grid_5 omega'>{$buttons}{$sidebar}</div>
    <div class='left grid_11 alpha'><div class='main'>{$main}{$buttons}</div></div>
  </div>";
}

/**
 * Override of theme_fieldset().
 */
function arcimoto_alpha_fieldset(&$element) {
  $attr = isset($element['#attributes']) ? $element['#attributes'] : array();
  $attr['class'] = !empty($attr['class']) ? $attr['class'] : '';
  $attr['class'] .= ' fieldset';
  $attr['class'] .= !empty($element['#collapsible']) || !empty($element['#collapsed']) ? ' collapsible' : '';
  $attr['class'] .= !empty($element['#collapsed']) ? ' collapsed' : '';
  $attr = drupal_attributes($attr);

  $description = !empty($element['#description']) ? "<div class='description'>{$element['#description']}</div>" : '';
  $children = !empty($element['#children']) ? $element['#children'] : '';
  $value = !empty($element['#value']) ? $element['#value'] : '';
  $content = $description . $children . $value;

  $title = !empty($element['#title']) ? $element['#title'] : '';
  if (!empty($element['#collapsible']) || !empty($element['#collapsed'])) {
    $title = l($title, $_GET['q'], array('fragment' => 'fieldset'));
  }

  $output = "<div $attr>";
  $output .= $title ? "<h2 class='fieldset-title'>$title</h2>" : '';
  $output .= "<div class='fieldset-content clear-block'>$content</div>";
  $output .= "</div>";
  return $output;
}


function get_preorder_count() {
  $view = views_get_view_result('preorder_counter', 1);
  return count($view);
}


/**
 * Custom helpers ============================================================
 */

/**
* Investigate the result of a view.
*
* @param string $viewname
*      The name of the view to retrieve the data from.
* @param string $display_id
*      The display id. On the edit page for the view in question, you'll find
*      a list of displays at the left side of the control area. "Defaults"
*      will be at the top of that list. Hover your cursor over the name of the
*      display you want to use. An URL will appear in the status bar of your
*      browser. This is usually at the bottom of the window, in the chrome.
*      Everything after #views-tab- is the display ID, e.g. page_1.
* @param array $args
*      Array of arguments.
* @return
*      array
*          An array containing an object for each view item.
*      string
*          If the view is not found a message is returned.
*/
function views_get_view_result($viewname, $display_id = NULL, $args = NULL) {
  $view = views_get_view($viewname);
  if (is_object($view)) {
    if (is_array($args)) {
      $view->set_arguments($args);
    }
    if (is_string($display_id)) {
      $view->set_display($display_id);
    }
    else {
      $view->init_display();
    }
    $view->pre_execute();
    $view->execute();
    return $view->result;
  }
  else {
    return t('View %viewname not found.', array('%viewname' => $viewname));
  }
}



/**
 * Contextually adds 960 Grid System classes.
 *
 * The first parameter passed is the *default class*. All other parameters must
 * be set in pairs like so: "$variable, 3". The variable can be anything available
 * within a template file and the integer is the width set for the adjacent box
 * containing that variable.
 *
 *  class="<?php print ns('grid-16', $var_a, 6); ?>"
 *
 * If $var_a contains data, the next parameter (integer) will be subtracted from
 * the default class. See the README.txt file.
 */
function ns() {
  $args = func_get_args();
  $default = array_shift($args);
  // Get the type of class, i.e., 'grid', 'pull', 'push', etc.
  // Also get the default unit for the type to be procesed and returned.
  list($type, $return_unit) = explode('_', $default);

  // Process the conditions.
  $flip_states = array('var' => 'int', 'int' => 'var');
  $state = 'var';
  foreach ($args as $arg) {
    if ($state == 'var') {
      $var_state = !empty($arg);
    }
    elseif ($var_state) {
      $return_unit = $return_unit - $arg;
    }
    $state = $flip_states[$state];
  }

  $output = '';
  // Anything below a value of 1 is not needed.
  if ($return_unit > 0) {
    $output = $type . '_' . $return_unit;
  }
  return $output;
}





// Calculate the number of 960 columns that a box will take up
// 1 = 16 cols; 2 = 12 cols; 3 = 8 cols; 4 = 4 cols
function arcimoto_alpha_960_cols($index) {
  if($index == 0) {
    $columns = 0;
  } else {
    $columns = 16 - ($index-1)*4;
  }
  
  return 'grid_'.$columns;
}




function _hyphenate($text) {
  $text = strtolower($text);
  $text = str_replace(' ', '-', $text);
  return $text;
}
