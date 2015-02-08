<?php

function skeletoncraft_preprocess_page(&$vars) {
 // Generate menu tree from source of Primary Links
 //$vars['main_menu_tree'] = menu_tree(variable_get('menu_main_menu_source','main-menu'));
 // Generate menu tree from source of Secondary Links
 //$vars['secondary_menu_tree'] = menu_tree(variable_get('menu_secondary_menu_source','secondary-menu'));
 // Render menu tree from main-menu
  $menu_tree = menu_tree('main-menu');
  $vars['main_menu_tree'] = render($menu_tree);
  drupal_add_library('system', 'ui');
}

/**
 * Implements hook_html_head_alter().
 * This will overwrite the default meta character type tag with HTML5 version.
 */
function skeletoncraft_html_head_alter(&$head_elements) {
  $head_elements['system_meta_content_type']['#attributes'] = array(
    'charset' => 'utf-8',
	'name' => 'viewport',
	'content' => 'width=device-width,initial-scale=1.0',
  );
}

function skeletoncraft_theme(&$existing, $type, $theme, $path){
  $hooks = array();
   // Make user-register.tpl.php available
  $hooks['user_register_form'] = array (
     'render element' => 'form',
     'path' => drupal_get_path('theme','skeletoncraft'),
     'template' => 'user-register',
     'preprocess functions' => array('skeletoncraft_preprocess_user_register_form'),
  );
  return $hooks;
}

function skeletoncraft_preprocess_user_register_form(&$vars) {
  $args = func_get_args();
  array_shift($args);
  $form_state['build_info']['args'] = $args; 
  $vars['form'] = drupal_build_form('user_register_form', $form_state['build_info']['args']);
}
