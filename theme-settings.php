<?php
/**
 * @file
 * Theme settings for Afterlight Tribute parent theme
 *
*/

function afterlight_tribute_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {

if (isset($form_id)) {
   return;
  }

$form['disclaimer00'] = array(
  '#markup' => '<p><strong>' . t('These settings for the parent theme do NOT extend into the subtheme.') . '</strong></p>',
);

$form['afterlight_tribute_cdn'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<b>Use Cloudflare CDN</b> instead of this website to serve the base CSS file.'),
    '#default_value' => theme_get_setting('afterlight_tribute_cdn', 'afterlight_tribute'),
  );

$form['afterlight_tribute_dynamic_menu'] = array(
      '#type' => 'checkbox',
      '#title' => t('Use dynamic site main menu.  Uncheck to use a fixed main menu.'),
      '#default_value' => theme_get_setting('afterlight_tribute_dynamic_menu', 'afterlight_tribute'),
    );

$form['disclaimer'] = array(
  '#markup' => '<p>' . t('You may choose to include these Javascript files into your page to help enable these certain components.  WARNING: some of the components may rely on multiple scripts, and you are responsible for adding the theme template functions to utilize these functionalities.  If you do not need these functionalities for this website, you may leave each unchecked.') . '</p>',
);

$form['afterlight_tribute_script1'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script modernizr.js'),
      '#default_value' => theme_get_setting('afterlight_tribute_script1', 'afterlight_tribute'),
    );

$form['afterlight_tribute_script2'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script jquery-validate.js'),
      '#default_value' => theme_get_setting('afterlight_tribute_script2', 'afterlight_tribute'),
    );

$form['afterlight_tribute_script3'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script fastclick.js'),
      '#default_value' => theme_get_setting('afterlight_tribute_script3', 'afterlight_tribute'),
    );

$form['afterlight_tribute_script4'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script hammer.js'),
      '#default_value' => theme_get_setting('afterlight_tribute_script4', 'afterlight_tribute'),
    );

$form['afterlight_tribute_juiced_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the main page area when you are using a Juiced layout'),
      '#default_value' => theme_get_setting('afterlight_tribute_juiced_main_background', 'afterlight_tribute'),
    );

$form['afterlight_tribute_juiced_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('afterlight_tribute_juiced_main_background_blurred', 'afterlight_tribute'),
    );

$form['afterlight_tribute_juiced_big_statement_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the big statement page area when you are using a Juiced layout'),
      '#default_value' => theme_get_setting('afterlight_tribute_juiced_big_statement_background', 'afterlight_tribute'),
    );

$form['afterlight_tribute_juiced_big_statement_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('afterlight_tribute_juiced_big_statement_background_blurred', 'afterlight_tribute'),
    );

$form['afterlight_tribute_body_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the main page area in a core layout.'),
      '#default_value' => theme_get_setting('afterlight_tribute_body_main_background', 'afterlight_tribute'),
    );

$form['afterlight_tribute_body_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('afterlight_tribute_body_main_background_blurred', 'afterlight_tribute'),
    );

$form['afterlight_tribute_footer_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the footer area in a core layout.'),
      '#default_value' => theme_get_setting('afterlight_tribute_footer_main_background', 'afterlight_tribute'),
    );

$form['afterlight_tribute_footer_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('afterlight_tribute_footer_main_background_blurred', 'afterlight_tribute'),
    );

$form['recommended'] = array(
  '#markup' => '<p>' . t('Looking for additional theme features?  You might find what you are looking in layouts or modules.  Some common items to add to your site might be:<br><a href="https://backdropcms.org/modules">Modules</a><br><a href="https://backdropcms.org/layouts">Layouts</a><br>Menus<br><a href="https://backdropcms.org/project/mobile_navigation">Mobile Navigation</a><br><a href="https://backdropcms.org/project/responsive_menus">Responsive Menus</a><br><a href="https://backdropcms.org/project/wpmenu">WPMenu</a><br>Widgets<br><a href="https://backdropcms.org/project/google_fonts">Google Fonts</a><br><a href="https://backdropcms.org/project/back_to_top">Back To Top</a><br><a href="https://backdropcms.org/project/fanciblock">FanciBlock</a><br><a href="https://backdropcms.org/project/flexslider">FlexSlider</a><br>Parallax<br><a href="https://backdropcms.org/project/parallax_bg">Parallax_BG</a><br><a href="https://backdropcms.org/project/scrollreveal">Scroll Reveal</a><br><a href="https://backdropcms.org/project/void_menu">Void Menu</a> ') . '</p>',
);

}
