<?php

/**
 * Implements hook_preprocess_maintenance_page().
 */
function pure_css_mobile_preprocess_maintenance_page(&$variables) {
  backdrop_add_css(backdrop_get_path('theme', 'topcoat_mobile') . '/css/maintenance-page.css');
}

/**
 * Implements hook_preprocess_layout().
 */
function pure_css_mobile_preprocess_layout(&$variables) {
  if ($variables['content']['header']) {
    $variables['content']['header'] = '<div class="l-header-inner">' . $variables['content']['header'] . '</div>';
  }
}

/**
 * Implements theme_menu_tree().
 */
function pure_css_mobile_menu_tree($variables) {
  return '<ul class="menu clearfix">' . $variables['tree'] . '</ul>';
}

/**
 * Implements theme_field__field_type().
 */
function pure_css_mobile_field__taxonomy_term_reference($variables) {
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


function pure_css_preprocess_image_style(&$vars) {
  $vars['attributes']['class'][] = 'pure-img';
}

function pure_css_button(&$vars) {

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
dsm($vars);
}


/**
 * Implements hook_form_alter()
 */
function pure_css_form_alter(&$form, &$form_state, $form_id) {
$classes = array('pure-form', 'pure-form-aligned');
if (!isset($form['#attributes']['class'])) {
        $form['#attributes'] = array('class' => $classes);
      }
      else {
        $form['#attributes']['class'] = array_merge($form['#attributes']['class'], $classes);
      }
}


function pure_css_menu_tree($variables) {
return '<ul class="menu">' . $variables['tree'] . '</ul>';
}

function pure_css_menu_link(array $variables) {
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


function pure_css_breadcrumb($variables) {

if (theme_get_setting('pure_css_cdn') > 0)
{
backdrop_add_css('http://cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css', array('type' => 'external', 'every_page' => TRUE, 'preprocess' => TRUE));
backdrop_add_css('themes/pure_css/css/style.css', array('every_page' => TRUE, 'preprocess' => TRUE));

if (theme_get_setting('pure_css_script1') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('pure_css_script2') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('pure_css_script3') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('pure_css_script4') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.4/hammer.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

}
else
{
backdrop_add_css('themes/pure_css/css/pure.min.css', array('type' => 'file', 'every_page' => TRUE, 'preprocess' => TRUE));
backdrop_add_css('themes/pure_css/css/style.css', array('type' => 'file', 'every_page' => TRUE, 'preprocess' => TRUE));
}

backdrop_add_js("themes/pure_css/js/scripts.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
backdrop_add_js("document.write('<script src=\"http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1\"></' + 'script>')", array('type' => 'inline', 'scope' => 'footer', 'weight' => 9999));

}
