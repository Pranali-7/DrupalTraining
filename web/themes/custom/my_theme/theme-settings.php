<?php
/*
theme settng in this file
*/

/*
implements hook_form_system_theme_settings_alter().
*/

function my_theme_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state, $form_id=NULL) {
  if (isset($form_id)) {
  	return;
		}

$form['dog_name']=[	
'#type' => 'textfield',
'#title' => t('Doggie_name'),
'#default_value' => theme_get_setting('dog_name'),
'#description' => 'Our cute doggie name here',
];
$form['fruit_name']=[	
'#type' => 'textfield',
'#title' => t('Fruit_name'),
'#default_value' => theme_get_setting('fruit_name'),
'#description' => 'Fruit Name here',
];

$form['seeting_image']=[	
'#type' => 'file',
'#title' => t('image_name'),
'#default_value' => theme_get_setting('image_name'),
'#description' => 'image here',
];
}
