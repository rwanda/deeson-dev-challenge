<?php
/**
 * @file
 * Node template functions.
 */

/**
 * Implements hook_preprocess_node().
 */
function ddc_theme_preprocess_node(&$variables) {
  $node_type = $variables['node']->type;

  // We want to theme nodes by type and display mode.
  $variables['theme_hook_suggestions'][] = 'node__' . $node_type . '__' . $variables['view_mode'];

  $function_names = array(
    'ddc_theme_preprocess_node__' . $node_type . '__' . $variables['view_mode'],
    'ddc_theme_preprocess_node__' . $node_type,
  );

  foreach ($function_names as $function_name) {
    if (function_exists($function_name)) {
      $function_name($variables);
    }
  }
}

function ddc_theme_preprocess_node__article__teaser(&$variables) {

  // Create linked title.
  $variables['linked_title'] = l($variables['title'], 'node/' . $variables['nid']);
}

//function hook_node_access($node, $op, $account) {
//  if (is_object($node)) {
//    $bool = (
//      ($node->type == 'article') &&
//      ($op == 'view') &&
//      ($field_special_article == 1)
//    );
//    if ($bool) {
//      if ($account->uid == 0) {
//        return NODE_ACCESS_DENY;
//      }
//      else {
//        return NODE_ACCESS_ALLOW;
//      }
//    }
//  }
//}





