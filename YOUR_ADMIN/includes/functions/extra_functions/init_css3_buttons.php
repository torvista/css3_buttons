<?php
// -----
// Add the font-awesome controls to Configuration->My Store, in support of CSS3 Buttons v1.1.0 and later.
//
if (!defined ('CSS3_BUTTONS_INCLUDE_FONT_AWESOME')) {
  $db->Execute ("INSERT INTO " . TABLE_CONFIGURATION . " ( configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function ) VALUES ( 'Include a link to the Font Awesome stylesheet?', 'CSS3_BUTTONS_INCLUDE_FONT_AWESOME', 'false', 'If true, a link to the Font Awesome CSS file will be included in each page\'s header.  If your template already includes Font Awesome, leave this setting <em>false</em>.', 19, 148, NULL , 'zen_cfg_select_option(array(\'true\', \'false\'),')");
  
  $db->Execute ("INSERT INTO " . TABLE_CONFIGURATION . " ( configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function ) VALUES ( 'Font Awesome version number', 'CSS3_BUTTONS_FONT_AWESOME_VERSION', '4.2.0', 'Enter the Font Awesome version number to load, if the previous setting is set to <em>true</em>. Default: 4.2.0', 19, 150, NULL, NULL)");
   
  $db->Execute ("INSERT INTO " . TABLE_CONFIGURATION . " ( configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function ) VALUES ( 'Submit-button HTML Tag', 'CSS3_BUTTONS_SUBMIT_TYPE', 'input', 'Identify the type of HTML tag to use for CSS-generated submit buttons, either <em>input</em> (default) or <em>button</em>.  Please note that the <em>button</em> tag is not fully supported on older browsers.', 19, 152, NULL , 'zen_cfg_select_option(array(\'button\', \'input\'),')");

}