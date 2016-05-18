<?php
/**
 * @file
 * Afterlight Tribute sub theme template functions
 *
*/

/**
 * Implements hook_preprocess_maintenance_page().
 */
function afterlight_tribute_subtheme_preprocess_maintenance_page(&$variables) {
  backdrop_add_css(backdrop_get_path('theme', 'bartik') . '/css/maintenance-page.css');
}




/**
 * Implements template_preprocess_page().
 */
function afterlight_tribute_subtheme_preprocess_page(&$variables) {


$current_layout = "default";
$uses_admin_width = config_get('afterlight_tribute_subtheme.settings', 'use_max_width');
  if ($uses_admin_width) {

    $uses_layout_width1 = config_get('afterlight_tribute_subtheme.settings', 'max_width_element1');
    if ($uses_layout_width1 < 1) {
      $max_width_layouts1 = config_get('afterlight_tribute_subtheme.settings', 'site_layouts1');
      $max_width_number1 = config_get('afterlight_tribute_subtheme.settings', 'max_width_number1');
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


    $uses_layout_width2 = config_get('afterlight_tribute_subtheme.settings', 'max_width_element2');
    if ($uses_layout_width2 > 0) {
      $max_width_layouts2 = config_get('afterlight_tribute_subtheme.settings', 'site_layouts2');
      $max_width_number2 = config_get('afterlight_tribute_subtheme.settings', 'max_width_number2');
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



    $uses_layout_width3 = config_get('afterlight_tribute_subtheme.settings', 'max_width_element3');
    if ($uses_layout_width3 > 0) {
      $max_width_layouts3 = config_get('afterlight_tribute_subtheme.settings', 'site_layouts3');
      $max_width_number3 = config_get('afterlight_tribute_subtheme.settings', 'max_width_number3');
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

function afterlight_tribute_subtheme_preprocess_layout(&$variables) {
  if ($variables['is_front']) {
    $variables['classes'][] = 'layout-front';
  }


$current_layout = $variables["layout"]->name;
$uses_admin_width = config_get('afterlight_tribute_subtheme.settings', 'use_max_width');
  if ($uses_admin_width) {

    $uses_layout_width1 = config_get('afterlight_tribute_subtheme.settings', 'max_width_element1');
    if ($uses_layout_width1 > 0) {
      $max_width_layouts1 = config_get('afterlight_tribute_subtheme.settings', 'site_layouts1');
      $max_width_number1 = config_get('afterlight_tribute_subtheme.settings', 'max_width_number1');
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


    $uses_layout_width2 = config_get('afterlight_tribute_subtheme.settings', 'max_width_element2');
    if ($uses_layout_width2 > 0) {
      $max_width_layouts2 = config_get('afterlight_tribute_subtheme.settings', 'site_layouts2');
      $max_width_number2 = config_get('afterlight_tribute_subtheme.settings', 'max_width_number2');
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



    $uses_layout_width3 = config_get('afterlight_tribute_subtheme.settings', 'max_width_element3');
    if ($uses_layout_width3 > 0) {
      $max_width_layouts3 = config_get('afterlight_tribute_subtheme.settings', 'site_layouts3');
      $max_width_number3 = config_get('afterlight_tribute_subtheme.settings', 'max_width_number3');
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

if (theme_get_setting('afterlight_tribute_subtheme_cdn') > 0)
{
backdrop_add_css('http://cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css', array('type' => 'external', 'every_page' => TRUE, 'group' => CSS_DEFAULT));
}

$var1 = theme_get_setting('afterlight_tribute_subtheme_juiced_main_background');
$var2 = theme_get_setting('afterlight_tribute_subtheme_juiced_big_statement_background');
$var3 = theme_get_setting('afterlight_tribute_subtheme_juiced_main_background_blurred');
$var4 = theme_get_setting('afterlight_tribute_subtheme_juiced_big_statement_background_blurred');

if ($var1 && $var3 > 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .juiced-main::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if ($var1 && $var3 == 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .juiced-main { background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if ($var2 && $var4 > 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .l-big-statement::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat fixed; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if ($var2 && $var4 == 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .l-big-statement { background: url($var2) no-repeat fixed; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}


$var5 = theme_get_setting('afterlight_tribute_subtheme_body_main_background');
$var6 = theme_get_setting('afterlight_tribute_subtheme_footer_main_background');
$var7 = theme_get_setting('afterlight_tribute_subtheme_body_main_background_blurred');
$var8 = theme_get_setting('afterlight_tribute_subtheme_footer_main_background_blurred');

if ($var5 && $var7 > 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .layout::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var5) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if ($var5 && $var7 == 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .layout { background: url($var5) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if ($var6 && $var8 > 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { footer.l-footer::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var6) no-repeat fixed; background-size: cover; background-position: center; } footer.l-footer { background: transparent; } }", array('type' => 'inline'));
}

if ($var6 && $var8 == 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { footer.l-footer { background: url($var6) no-repeat fixed; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (theme_get_setting('afterlight_tribute_subtheme_script1') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('afterlight_tribute_subtheme_script2') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('afterlight_tribute_subtheme_script3') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('afterlight_tribute_subtheme_script4') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.4/hammer.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

backdrop_add_js("themes/afterlight_tribute_subtheme/js/scripts.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
backdrop_add_js("document.write('<script src=\"http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1\"></' + 'script>')", array('type' => 'inline', 'scope' => 'footer', 'weight' => 9999));
}

/**
 * Implements theme_field__field_type().
 */
function afterlight_tribute_subtheme_field__taxonomy_term_reference($variables) {
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

/**
 * Implements theme_preprocess_image_style().
 */
function afterlight_tribute_subtheme_preprocess_image_style(&$vars) {
  $vars['attributes']['class'][] = 'pure-img';
}

function afterlight_tribute_subtheme_button(&$vars) {

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


function afterlight_tribute_subtheme_css_alter(&$css) {
  $css_to_remove = array();
  if (theme_get_setting('afterlight_tribute_subtheme_cdn') > 0)
  {
  $css_to_remove[] = backdrop_get_path('theme','afterlight_tribute') . '/css/pure.min.css';
  }

  if (theme_get_setting('afterlight_tribute_subtheme_sass') > 0)
  {
  $css_to_remove[] = backdrop_get_path('theme','afterlight_tribute') . '/css/style.css';
  $css_to_remove[] = backdrop_get_path('theme','afterlight_tribute') . '/css/pure.min.css';
  }

  foreach ($css_to_remove as $index => $css_file) {
      unset($css[$css_file]);
    }
}

/**
 * Implements hook_form_alter()
 */
function afterlight_tribute_subtheme_form_alter(&$form, &$form_state, $form_id) {
$classes = array('pure-form', 'pure-form-aligned');
if (!isset($form['#attributes']['class'])) {
        $form['#attributes'] = array('class' => $classes);
      }
      else {
        $form['#attributes']['class'] = array_merge($form['#attributes']['class'], $classes);
      }
}

function afterlight_tribute_subtheme_menu_tree($variables) {
return '<ul class="menu">' . $variables['tree'] . '</ul>';
}

/**
 * Overrides theme_form_element_label().
 */
function afterlight_tribute_subtheme_form_element_label(&$variables) {
  $element = $variables['element'];
  $title = filter_xss_admin($element['#title']);
 // If the element is required, a required marker is appended to the label.
  $required = !empty($element['#required']) ? theme('form_required_marker', array('element' => $element)) : '';
//   // This is also used in the installer, pre-database setup.
   $t = get_t();
   $attributes = array();

   if (!empty($element['#id'])) {
     $attributes['for'] = $element['#id'];
   }

   $output = '';
   if (isset($variables['#children'])) {

    if ($element['#type'] === "radio")
    {
    $output .= $variables['#children'];
    }

    if ($element['#type'] === "checkbox")
    {
    $output .= $variables['#children'];
    }

   }
   return ' <label' . backdrop_attributes($attributes) . '></label><div>' . $t('!title', array('!title' => $title)) .  "</div> \n";
}

/**
 * Implements theme_preprocess_menu_link().
 */
function afterlight_tribute_subtheme_menu_link(array $variables) {
$element = $variables['element'];

$classes = array('pure-menu-item');
$element['#attributes']['class'] = array_merge($element['#attributes']['class'], $classes);
$sub_menu = '';

if ($element['#below']) {
$sub_menu = backdrop_render($element['#below']);
}
$output = l($element['#title'], $element['#href'], $element['#localized_options']);
return '<li' . backdrop_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}
