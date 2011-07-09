<?php
/**
 * Sets the body-tag class attribute.
 *
 * Adds 'sidebar-left', 'sidebar-right' or 'sidebars' classes as needed.
 */
function tws_v4_preprocess_html(&$variables) {

  // Add information about the number of sidebars.
  if (!empty($variables['page']['sidebar_right'])) {
    $variables['classes_array'][] = 'sidebar-right';
  }
  else {
    $variables['classes_array'][] = 'no-sidebars';
  }
}


function tws_v4_preprocess_page(&$variables) {
  $variables['top_link'] = true;
}