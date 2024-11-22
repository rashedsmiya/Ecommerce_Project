<?php 

require_once('medic-walker-navmenu.php');

add_action('after_setup_theme','medic_theme_setup');
function medic_theme_setup(){
    add_theme_support('title-tag');

    // Main Menu
    register_nav_menu('main-menu', 'Main Menu');
}

// Top lebel Menu 
 
add_action('admin_menu', 'sh_personal_data');
function sh_personal_data(){
    add_menu_page( 
        'Personal data',           // Page title
        'Personal data all',       // Menu title
        'manage_options',          // Capability
        'personal_data_slug',      // Slug
        'personal_data_callback',  // Callback function
        'dashicons-menu',          // Dashicon
        25                         // Position
    );


function personal_data_callback(){
    ?>
      <h3><?php echo get_admin_page_title();?></h3>
      <form action="option.php" method="post">
    <?php
        settings_fields('custom_setting_group');  // Corrected function name
        do_settings_sections('custom_pages');
        submit_button(__('Save data', 'textdomain')); 
    ?>
    </form>
    <?php
 }

}

add_action('admin_init','sh_data_callect_area');
function sh_data_callect_area(){
  // Register a new setting
  register_setting('custom_setting_group','call');
  register_setting('custom_setting_group','ages');
  add_settings_section(
    'setting_section_id', // section id
    'personal data enter', // section title
    'section_callback', // calback
    'custom_pages', // page
  );

  add_settings_field(
    'setting_field_id_cell', // field id
    'Enter Your call Number', // feild title
    'setting_field_callback', // call back
    'custom_pages', // custom page
    'setting_section_id', // section id

  );

  add_settings_field(
    'setting_field_id_age', // field id
    'Enter Your Age Number', // feild title
    'setting_age_field_callback', // call back
    'custom_pages', // custom page
    'setting_section_id', // section id

  ); 

}

/*
 callback function
*/

// section callback content

function section_callback(){
    echo "Give your all personal data below";
}
 
// field callback content
function setting_field_callback(){
    ?>
     <input type="text" name="call" id="call" value="<?php echo get_option('call');?>">
    <?php  
} 

// Field Callback content for me

function setting_age_field_callback(){
    ?>
     <input type="text" name="ages" id="agenumber" value="<?php echo get_option('ages');?>">
    <?php 
    # object oriented
    $from = new DateTime('1970-02-01');
    $to   = new DateTime('today');
    echo $from->diff($to)->y;

    # procedural
    echo date_diff(date_create('1970-02-01'), date_create('today'))->y;

}

