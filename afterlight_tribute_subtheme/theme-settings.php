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
        '#title' => t('For this page area.  For this to work correctly on -page content- option, you must enable it on a layout of the B4 Full Radix or Zurb 6 Toolkit contrib layouts or similar. '),
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
        '#title' => t('For this page area.  For this to work correctly on -page content- option, you must enable it on a layout of the B4 Full Radix or Zurb 6 Toolkit contrib layouts or similar. '),
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
        '#title' => t('For this page area.  For this to work correctly on -page content- option, you must enable it on a layout of the B4 Full Radix or Zurb 6 Toolkit contrib layouts or similar. '),
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





// backgrounds
$form['afterlight_tribute_backgrounds'] = array(
        '#title' => t('Set background images for site regions'),
        '#type' => 'fieldset',
    );

// body area
$form['afterlight_tribute_backgrounds']["disclaimer"] = array(
  '#markup' => '<p>' . t('An image style such as [mywebsite.com/]files/styles/[large or custom]/[path to image] or one of these services may be helpful here: imgix.com, imagefly.io, cloudinary.com, imageresizer.io or aws.amazon.com/s3.') . '</p>',
);

$form['afterlight_tribute_backgrounds']['body_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the main page area in a layout.'),
      '#default_value' => theme_get_setting('body_main_background', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_backgrounds']['body_main_background_retina'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for high resolution screens for the main page area in a layout.'),
      '#default_value' => theme_get_setting('body_main_background_retina', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_backgrounds']['body_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('body_main_background_blurred', 'afterlight_tribute_subtheme'),
    );




//l-calltoaction area
$form['afterlight_tribute_backgrounds']['footer_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the call to action area in a layout.'),
      '#default_value' => theme_get_setting('footer_main_background', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_backgrounds']['footer_main_background_retina'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for high resolution screens for the call to action area in a layout.'),
      '#default_value' => theme_get_setting('footer_main_background_retina', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_backgrounds']['footer_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('footer_main_background_blurred', 'afterlight_tribute_subtheme'),
    );


//juiced-main area
$form['afterlight_tribute_backgrounds']['juiced_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the main page area when you are using a Juiced layout'),
      '#default_value' => theme_get_setting('juiced_main_background', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_backgrounds']['juiced_main_background_retina'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for high resolution screens for the main page area when you are using a Juiced layout'),
      '#default_value' => theme_get_setting('juiced_main_background_retina', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_backgrounds']['juiced_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('juiced_main_background_blurred', 'afterlight_tribute_subtheme'),
    );






//statement 1
$form['afterlight_tribute_backgrounds']['statement1_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the big statement 1 area in a layout.'),
      '#default_value' => theme_get_setting('statement1_background', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_backgrounds']['statement1_background_retina'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for high resolution screens for the big statement 1 area in a layout.'),
      '#default_value' => theme_get_setting('statement1_background_retina', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_backgrounds']['statement1_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('statement1_background_blurred', 'afterlight_tribute_subtheme'),
    );






//statement 2
$form['afterlight_tribute_backgrounds']['statement2_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the big statement 2 area in a layout.'),
      '#default_value' => theme_get_setting('statement2_background', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_backgrounds']['statement2_background_retina'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for high resolution screens for the big statement 2 area in a layout.'),
      '#default_value' => theme_get_setting('statement2_background_retina', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_backgrounds']['statement2_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('statement2_background_blurred', 'afterlight_tribute_subtheme'),
    );





//statement 3
$form['afterlight_tribute_backgrounds']['statement3_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the big statement 3 area in a layout.'),
      '#default_value' => theme_get_setting('statement3_background', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_backgrounds']['statement3_background_retina'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for high resolution screens for the big statement 3 area in a layout.'),
      '#default_value' => theme_get_setting('statement3_background_retina', 'afterlight_tribute_subtheme'),
    );

$form['afterlight_tribute_backgrounds']['statement3_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('statement3_background_blurred', 'afterlight_tribute_subtheme'),
    );

$form['sass'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Only load the your-custom.css sub-theme file and remove the parent theme styles.  Use caution:  this setting is for if you are trying to make a smaller download by compiling with Sass'),
    '#default_value' => theme_get_setting('sass', 'afterlight_tribute_subtheme'),
  );

}
