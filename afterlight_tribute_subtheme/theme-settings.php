<?php
/**
 * @file
 * Theme settings for Afterlight Tribute sub theme
 *
*/

function afterlight_tribute_subtheme_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {

if (isset($form_id)) {
   return;
  }

$form['disclaimer01'] = array(
  '#markup' => '<p><strong>' . t('These settings for the subtheme do NOT extend into the parent theme.') . '</strong></p>',
);

$form['use_max_width'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<b>Check to use the admin settings below </b> to control the theme max-width. <b>Uncheck</b> to write CSS to control the theme max-width.'),
    '#default_value' => theme_get_setting('use_max_width', 'afterlight_tribute_subtheme'),
  );

$layouts = layout_load_all();
$layout_items = array();
$options = array();
foreach ($layouts as $layout => $item) {
    $options[$item->name] = check_plain($item->title);
}


$form['maxwidth1'] = array(
        '#title' => t('Theme Max-Width 1'),
        '#type' => 'fieldset',
    );
$default_layout_items = config_get('afterlight_tribute_subtheme.settings', 'site_layouts1');
$default_value = array();
foreach ($default_layout_items as $default_layout_item) {
   if (isset($options[$default_layout_item])) {
       $default_value[$default_layout_item] = $default_layout_item;
   }
}

  $form['maxwidth1']['site_layouts1'] = array(
        '#title' => t('Set a site max-width on these layouts:'),
        '#type' => 'checkboxes',
        '#options' => $options,
        '#default_value' => $default_value
    );

  $form['maxwidth1']["max_width_element1"] = array(
        '#title' => t('For this page area:'),
        '#type' => 'select',
        '#options' => array("full page", "page content"),
        '#default_value' => config_get('afterlight_tribute_subtheme.settings', 'max_width_element1')
    );

  $form['maxwidth1']["max_width_number1"] = array(
        '#title' => t('At: '),
        '#type' => 'select',
        '#options' => array("800px", "960px", "Bootstrap container default", "1200px", "1440px"),
        '#default_value' => config_get('afterlight_tribute_subtheme.settings', 'max_width_number1')
    );




$form['maxwidth2'] = array(
        '#title' => t('Theme Max-Width 2'),
        '#type' => 'fieldset',
    );
$default_layout_items = config_get('afterlight_tribute_subtheme.settings', 'site_layouts2');
$default_value = array();
foreach ($default_layout_items as $default_layout_item) {
   if (isset($options[$default_layout_item])) {
       $default_value[$default_layout_item] = $default_layout_item;
   }
}

  $form['maxwidth2']['site_layouts2'] = array(
        '#title' => t('Set another site max-width on these layouts:'),
        '#type' => 'checkboxes',
        '#options' => $options,
        '#default_value' => $default_value
    );

  $form['maxwidth2']["max_width_element2"] = array(
        '#title' => t('For this page area:'),
        '#type' => 'select',
        '#options' => array("full page", "page content"),
        '#default_value' => config_get('afterlight_tribute_subtheme.settings', 'max_width_element2')
    );

  $form['maxwidth2']["max_width_number2"] = array(
        '#title' => t('At: '),
        '#type' => 'select',
        '#options' => array("800px", "960px", "Bootstrap container default", "1200px", "1440px"),
        '#default_value' => config_get('afterlight_tribute_subtheme.settings', 'max_width_number2')
    );




$form['maxwidth3'] = array(
        '#title' => t('Theme Max-Width 3'),
        '#type' => 'fieldset',
    );
$default_layout_items = config_get('afterlight_tribute_subtheme.settings', 'site_layouts3');
$default_value = array();
foreach ($default_layout_items as $default_layout_item) {
   if (isset($options[$default_layout_item])) {
       $default_value[$default_layout_item] = $default_layout_item;
   }
}

  $form['maxwidth3']['site_layouts3'] = array(
        '#title' => t('Set another site max-width on these layouts:'),
        '#type' => 'checkboxes',
        '#options' => $options,
        '#default_value' => $default_value
    );

  $form['maxwidth3']["max_width_element3"] = array(
        '#title' => t('For this page area:'),
        '#type' => 'select',
        '#options' => array("full page", "page content"),
        '#default_value' => config_get('afterlight_tribute_subtheme.settings', 'max_width_element3')
    );

  $form['maxwidth3']["max_width_number3"] = array(
        '#title' => t('At: '),
        '#type' => 'select',
        '#options' => array("800px", "960px", "Bootstrap container default", "1200px", "1440px"),
        '#default_value' => config_get('afterlight_tribute_subtheme.settings', 'max_width_number3')
    );

$form['afterlight_tribute_subtheme_cdn'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<b>Use Cloudflare CDN</b> instead of this website to serve the base CSS file.'),
    '#default_value' => theme_get_setting('afterlight_tribute_subtheme_cdn', 'afterlight_tribute_subtheme'),
  );

$form['afterlight_tribute_subtheme_sass'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Only load the your-custom.css sub-theme file and remove the parent theme styles.  Use caution:  this setting is for if you are trying to make a smaller download by compiling with Sass'),
    '#default_value' => theme_get_setting('afterlight_tribute_subtheme_sass', 'afterlight_tribute_subtheme'),
  );

$form['disclaimer'] = array(
  '#markup' => '<p>' . t('You may choose to include these Javascript files into your page to help enable these certain components.  WARNING: some of the components may rely on multiple scripts, and you are responsible for adding the theme template functions to utilize these functionalities.  If you do not need these functionalities for this website, you may leave each unchecked.') . '</p>',
);

$form['afterlight_tribute_subtheme_script1'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script modernizr.js'),
      '#default_value' => theme_get_setting('afterlight_tribute_subtheme_script1', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_subtheme_script2'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script jquery-validate.js'),
      '#default_value' => theme_get_setting('afterlight_tribute_subtheme_script2', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_subtheme_script3'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script fastclick.js'),
      '#default_value' => theme_get_setting('afterlight_tribute_subtheme_script3', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_subtheme_script4'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script hammer.js'),
      '#default_value' => theme_get_setting('afterlight_tribute_subtheme_script4', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_subtheme_juiced_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the main page area when you are using a Juiced layout'),
      '#default_value' => theme_get_setting('afterlight_tribute_subtheme_juiced_main_background', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_subtheme_juiced_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('afterlight_tribute_subtheme_juiced_main_background_blurred', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_subtheme_juiced_big_statement_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the big statement page area when you are using a Juiced layout'),
      '#default_value' => theme_get_setting('afterlight_tribute_subtheme_juiced_big_statement_background', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_subtheme_juiced_big_statement_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('afterlight_tribute_subtheme_juiced_big_statement_background_blurred', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_subtheme_body_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the main page area in a core layout.'),
      '#default_value' => theme_get_setting('afterlight_tribute_subtheme_body_main_background', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_subtheme_body_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('afterlight_tribute_subtheme_body_main_background_blurred', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_subtheme_footer_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the footer area in a core layout.'),
      '#default_value' => theme_get_setting('afterlight_tribute_subtheme_footer_main_background', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_subtheme_footer_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('afterlight_tribute_subtheme_footer_main_background_blurred', 'afterlight_tribute_subtheme'),
    );

}
