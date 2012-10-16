<?php

/**
 * @file
 */

/**
 * Process a cart links using Ubercart Cart Links module and redirect.
 *
 * @param $arg1
 *   Contains encrypted cart links.
 */
function uc_better_cart_links_process($arg1) {
  $decrypt = uc_better_cart_links_decrypt($arg1);

  $parts = explode('-', drupal_strtolower($decrypt));

  if (count($parts)) {
    foreach ($parts as $key => $part) {
      if ($part == 'e') {
        // If an empty command is received, make shopping cart empty and remove it from the $parts so it won't be emptied again.
        uc_cart_empty(uc_cart_get_id());
        unset($parts[$key]);
      }
    }

    // Use process function from uc_cart_links module.
    require_once(drupal_get_path('module', 'uc_cart_links') . '/uc_cart_links.pages.inc');
    uc_cart_links_process(implode('-', $parts));
  }

  // Send to front page if link is empty or invalid.
  drupal_set_message(t('There are no items in your cart.'), 'error');
  drupal_goto();
}

/**
 * Helper function for nodereference autocomplete.
 */
function uc_better_cart_links_nodereference_autocomplete($string) {
  $matches = array();

  if (!empty($string)) {
    $result = db_query_range(db_rewrite_sql("SELECT n.nid, n.title FROM {node} AS n WHERE (n.title LIKE '%%%s%%' OR n.nid = '%d') AND n.type IN ('%s') AND n.status = 1"), array('%%%s%%' => $string, '%d' => $string, '%s' => implode(',', uc_product_types())), 0, 10);

    while ($node = db_fetch_object($result)) {
      $matches[$node->nid] = $node->title . ' [nid: ' . $node->nid . ']';
    }
  }

  drupal_json($matches);
}
