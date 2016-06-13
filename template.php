<?php
/**
 * @file
 * Afterlight Tribute parent theme template functions
 *
*/

/**
 * Implements hook_preprocess_maintenance_page().
 */
function afterlight_tribute_preprocess_maintenance_page(&$variables) {
  backdrop_add_css(backdrop_get_path('theme', 'bartik') . '/css/maintenance-page.css');
}


/**
 * Implements template_preprocess_page().
 */
function afterlight_tribute_preprocess_page(&$variables) {

$current_layout_obj = layout_get_layout_by_path();
$current_layout = $current_layout_obj->name;
$uses_admin_width = config_get('afterlight_tribute.settings', 'use_max_width');
  if ($uses_admin_width) {

    $uses_layout_width1 = config_get('afterlight_tribute.settings', 'max_width_element1');
    if ($uses_layout_width1 < 1) {
      $max_width_layouts1 = config_get('afterlight_tribute.settings', 'site_layouts1');
      $max_width_number1 = config_get('afterlight_tribute.settings', 'max_width_number1');
      foreach ($max_width_layouts1 as $max_width_layout) {
        if (!empty($max_width_layout)) {
          if ( $max_width_layout == $current_layout ) {

            switch ($max_width_number1) {
              case "0":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-800';
              break;
              case "1":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-960';
              break;
              case "2":
              $variables['classes'][] = 'container';
              break;
              case "3":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1200';
              break;
              case "4":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1440';
              break;
              default:
              break;
              }
          }
        }
      }
    }


    $uses_layout_width2 = config_get('afterlight_tribute.settings', 'max_width_element2');
    if ($uses_layout_width2 < 1) {
      $max_width_layouts2 = config_get('afterlight_tribute.settings', 'site_layouts2');
      $max_width_number2 = config_get('afterlight_tribute.settings', 'max_width_number2');
      foreach ($max_width_layouts2 as $max_width_layout) {
        if (!empty($max_width_layout)) {
          if ( $max_width_layout == $current_layout ) {

            switch ($max_width_number2) {
              case "0":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-800';
              break;
              case "1":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-960';
              break;
              case "2":
              $variables['classes'][] = 'container';
              break;
              case "3":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1200';
              break;
              case "4":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1440';
              break;
              default:
              break;
              }
          }
        }
      }
    }



    $uses_layout_width3 = config_get('afterlight_tribute.settings', 'max_width_element3');
    if ($uses_layout_width3 < 1) {
      $max_width_layouts3 = config_get('afterlight_tribute.settings', 'site_layouts3');
      $max_width_number3 = config_get('afterlight_tribute.settings', 'max_width_number3');
      foreach ($max_width_layouts3 as $max_width_layout) {
        if (!empty($max_width_layout)) {
          if ( $max_width_layout == $current_layout ) {

            switch ($max_width_number3) {
              case "0":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-800';
              break;
              case "1":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-960';
              break;
              case "2":
              $variables['classes'][] = 'container';
              break;
              case "3":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1200';
              break;
              case "4":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1440';
              break;
              default:
              break;
              }
          }
        }
      }
    }



  }
}

function afterlight_tribute_preprocess_layout(&$variables) {
  if ($variables['is_front']) {
    $variables['classes'][] = 'layout-front';
  }

$current_layout = $variables["layout"]->name;
$uses_admin_width = config_get('afterlight_tribute.settings', 'use_max_width');
  if ($uses_admin_width) {

    $uses_layout_width1 = config_get('afterlight_tribute.settings', 'max_width_element1');
    if ($uses_layout_width1 > 0) {
      $max_width_layouts1 = config_get('afterlight_tribute.settings', 'site_layouts1');
      $max_width_number1 = config_get('afterlight_tribute.settings', 'max_width_number1');
      foreach ($max_width_layouts1 as $max_width_layout) {
        if (!empty($max_width_layout)) {
          if ( $max_width_layout == $current_layout ) {

            switch ($max_width_number1) {
              case "0":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-800';
              break;
              case "1":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-960';
              break;
              case "2":
              $variables['classes'][] = 'container';
              break;
              case "3":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1200';
              break;
              case "4":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1440';
              break;
              default:
              break;
              }
          }
        }
      }
    }


    $uses_layout_width2 = config_get('afterlight_tribute.settings', 'max_width_element2');
    if ($uses_layout_width2 > 0) {
      $max_width_layouts2 = config_get('afterlight_tribute.settings', 'site_layouts2');
      $max_width_number2 = config_get('afterlight_tribute.settings', 'max_width_number2');
      foreach ($max_width_layouts2 as $max_width_layout) {
        if (!empty($max_width_layout)) {
          if ( $max_width_layout == $current_layout ) {

            switch ($max_width_number2) {
              case "0":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-800';
              break;
              case "1":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-960';
              break;
              case "2":
              $variables['classes'][] = 'container';
              break;
              case "3":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1200';
              break;
              case "4":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1440';
              break;
              default:
              break;
              }
          }
        }
      }
    }



    $uses_layout_width3 = config_get('afterlight_tribute.settings', 'max_width_element3');
    if ($uses_layout_width3 > 0) {
      $max_width_layouts3 = config_get('afterlight_tribute.settings', 'site_layouts3');
      $max_width_number3 = config_get('afterlight_tribute.settings', 'max_width_number3');
      foreach ($max_width_layouts3 as $max_width_layout) {
        if (!empty($max_width_layout)) {
          if ( $max_width_layout == $current_layout ) {

            switch ($max_width_number3) {
              case "0":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-800';
              break;
              case "1":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-960';
              break;
              case "2":
              $variables['classes'][] = 'container';
              break;
              case "3":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1200';
              break;
              case "4":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1440';
              break;
              default:
              break;
              }
          }
        }
      }
    }


  }

// backgrounds
// body region
$var1 = theme_get_setting('body_main_background', 'afterlight_tribute');
$var2 = theme_get_setting('body_main_background_retina', 'afterlight_tribute');
$var3 = theme_get_setting('body_main_background_blurred', 'afterlight_tribute');

if (!empty($var1) && empty($var2) && !empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { html body::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && !empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { html body::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { html body::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && empty($var2) && empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { html body { background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { html body { background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { html body { background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}


// calltoaction region
$var1 = theme_get_setting('footer_main_background', 'afterlight_tribute');
$var2 = theme_get_setting('footer_main_background_retina', 'afterlight_tribute');
$var3 = theme_get_setting('footer_main_background_blurred', 'afterlight_tribute');

if (!empty($var1) && empty($var2) && !empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-calltoaction::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && !empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-calltoaction::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-calltoaction::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && empty($var2) && empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-calltoaction { background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-calltoaction { background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-calltoaction { background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}


// juiced_main region
$var1 = theme_get_setting('juiced_main_background', 'afterlight_tribute');
$var2 = theme_get_setting('juiced_main_background_retina', 'afterlight_tribute');
$var3 = theme_get_setting('juiced_main_background_blurred', 'afterlight_tribute');

if (!empty($var1) && empty($var2) && !empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .juiced-main::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center;  } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && !empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .juiced-main::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .juiced-main::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && empty($var2) && empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .juiced-main { background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .juiced-main { background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .juiced-main { background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}


// statement1 region
$var1 = theme_get_setting('statement1_background', 'afterlight_tribute');
$var2 = theme_get_setting('statement1_background_retina', 'afterlight_tribute');
$var3 = theme_get_setting('statement1_background_blurred', 'afterlight_tribute');

if (!empty($var1) && empty($var2) && !empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-statement1::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && !empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-statement1::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-statement1::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && empty($var2) && empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-statement1 { background: url($var1) no-repeat; background-size: cover; background-position: center;} }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-statement1 { background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-statement1 { background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}


// statement2 region
$var1 = theme_get_setting('statement2_background', 'afterlight_tribute');
$var2 = theme_get_setting('statement2_background_retina', 'afterlight_tribute');
$var3 = theme_get_setting('statement2_background_blurred', 'afterlight_tribute');

if (!empty($var1) && empty($var2) && !empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-statement2::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && !empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-statement2::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-statement2::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && empty($var2) && empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-statement2 { background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-statement2 { background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-statement2 { background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}


// statement3 region
$var1 = theme_get_setting('statement3_background', 'afterlight_tribute');
$var2 = theme_get_setting('statement3_background_retina', 'afterlight_tribute');
$var3 = theme_get_setting('statement3_background_blurred', 'afterlight_tribute');

if (!empty($var1) && empty($var2) && !empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-statement3::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && !empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-statement3::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-statement3::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && empty($var2) && empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-statement3 { background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-statement3 { background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-statement3 { background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

}

/**
 * Implements theme_menu_tree().
 */
function afterlight_tribute_menu_tree($variables) {
  return '<ul class="menu clearfix">' . $variables['tree'] . '</ul>';
}

/**
 * Implements theme_field__field_type().
 */
function afterlight_tribute_field__taxonomy_term_reference($variables) {
  $output = '';

  // Render the label, if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<h3 class="field-label">' . $variables['label'] . ': </h3>';
  }

  // Render the items.
  $output .= ($variables['element']['#label_display'] == 'inline') ? '<ul class="links inline">' : '<ul class="links">';
  foreach ($variables['items'] as $delta => $item) {
    $item_attributes = (isset($variables['item_attributes'][$delta])) ? backdrop_attributes($variables['item_attributes'][$delta]) : '';
    $output .= '<li class="taxonomy-term-reference-' . $delta . '"' . $item_attributes . '>' . backdrop_render($item) . '</li>';
  }
  $output .= '</ul>';

  // Render the surrounding DIV with appropriate classes and attributes.
  if (!in_array('clearfix', $variables['classes'])) {
    $variables['classes'][] = 'clearfix';
  }
  $output = '<div class="' . implode(' ', $variables['classes']) . '"' . backdrop_attributes($variables['attributes']) . '>' . $output . '</div>';

  return $output;
}


function afterlight_tribute_menu_link(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
  $sub_menu = backdrop_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . backdrop_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}


function afterlight_tribute_preprocess_image_style(&$vars) {
  $vars['attributes']['class'][] = 'pure-img';
}

function afterlight_tribute_button(&$vars) {
  $classes = array('button-success', 'pure-button-primary', 'button-xlarge', 'pure-button');
  if (!isset($vars['#attributes']['class'])) {
        $vars['#attributes'] = array('class' => $classes);
      }
      else {
        $vars['#attributes']['class'] = array_merge($vars['#attributes']['class'], $classes);
      }

  if (!isset($vars['element']['#attributes']['class'])) {
        $vars['element']['#attributes'] = array('class' => $classes);
      }
      else {
        $vars['element']['#attributes']['class'] = array_merge($vars['element']['#attributes']['class'], $classes);
      }

  return theme_button($vars);
}

/**
 * Implements hook_form_alter()
 */
function afterlight_tribute_form_alter(&$form, &$form_state, $form_id) {
  $classes = array('pure-form', 'pure-form-aligned');
  if (!isset($form['#attributes']['class'])) {
        $form['#attributes'] = array('class' => $classes);
      }
      else {
        $form['#attributes']['class'] = array_merge($form['#attributes']['class'], $classes);
      }
}
