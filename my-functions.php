<?php  

// ----------------------------------------------------------------------------
// Enqueue scripts essential for Zurb Foundation functionality
// ----------------------------------------------------------------------------

function foundation_scripts_basic() {

  // Register the required scripts for Foundation  
  wp_deregister_script('jquery');

  wp_register_script('zepto', get_template_directory_uri() . '/js/vendor/zepto.js',true );
  wp_register_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', true );
  wp_register_script('jquery', get_template_directory_uri() . '/js/vendor/jquery.js',true );

  wp_register_script('foundation-main',        get_template_directory_uri() . '/js/foundation/foundation.js',true );  
  wp_register_script('foundation-abide',       get_template_directory_uri() . '/js/foundation/foundation.abide.js',true ); 
  wp_register_script('foundation-alerts',      get_template_directory_uri() . '/js/foundation/foundation.alerts.js',true ); 
  wp_register_script('foundation-clearing',    get_template_directory_uri() . '/js/foundation/foundation.clearing.js',true ); 
  wp_register_script('foundation-cookie',      get_template_directory_uri() . '/js/foundation/foundation.cookie.js',true ); 
  wp_register_script('foundation-dropdown',    get_template_directory_uri() . '/js/foundation/foundation.dropdown.js',true ); 
  wp_register_script('foundation-forms',       get_template_directory_uri() . '/js/foundation/foundation.zoot.forms',true ); 
  wp_register_script('foundation-interchange', get_template_directory_uri() . '/js/foundation/foundation.interchange.js',true ); 
  wp_register_script('foundation-joyride',     get_template_directory_uri() . '/js/foundation/foundation.joyride.js',true ); 
  wp_register_script('foundation-magellan',    get_template_directory_uri() . '/js/foundation/foundation.magellan.js',true ); 
  wp_register_script('foundation-orbit',       get_template_directory_uri() . '/js/foundation/foundation.orbit.js',true ); 
  wp_register_script('foundation-placeholder', get_template_directory_uri() . '/js/foundation/foundation.placeholder.js',true ); 
  wp_register_script('foundation-reveal',      get_template_directory_uri() . '/js/foundation/foundation.reveal.js',true ); 
  wp_register_script('foundation-section',     get_template_directory_uri() . '/js/foundation/foundation.section.js',true ); 
  wp_register_script('foundation-tooltips',    get_template_directory_uri() . '/js/foundation/foundation.tooltips.js',true ); 
  wp_register_script('foundation-topbar',      get_template_directory_uri() . '/js/foundation/foundation.topbar.js',true ); 


  // These 3 are pre-requisites
  wp_enqueue_script( 'zepto');
  wp_enqueue_script( 'jquery');
  wp_enqueue_script( 'foundation-main' );  

  // Uncomment the scripts you need

  // wp_enqueue_script( 'foundation-abide' );  
  // wp_enqueue_script( 'foundation-alerts' );  
  // wp_enqueue_script( 'foundation-clearing' );    
  // wp_enqueue_script( 'foundation-cookie' );  
  // wp_enqueue_script( 'foundation-dropdown' );  
  // wp_enqueue_script( 'foundation-forms' );  
  // wp_enqueue_script( 'foundation-interchange' );  
  // wp_enqueue_script( 'foundation-joyride' );  
  // wp_enqueue_script( 'foundation-magellan' );  
  wp_enqueue_script( 'foundation-orbit' );  
  // wp_enqueue_script( 'foundation-placeholder' );  
  // wp_enqueue_script( 'foundation-reveal' );  
  // wp_enqueue_script( 'foundation-section' );  
  wp_enqueue_script( 'foundation-tooltips' );  
  // wp_enqueue_script( 'foundation-topbar');

}  

add_action( 'wp_enqueue_scripts', 'foundation_scripts_basic' ); 







// ----------------------------------------------------------------------------
//  Enque the custom.js file 
//  - Add all of your additional JavaScript code there 
// ----------------------------------------------------------------------------
function custom_javascript() {  
    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js',true );
    wp_enqueue_script( 'custom');
}
add_action( 'wp_enqueue_scripts', 'custom_javascript' ); 





