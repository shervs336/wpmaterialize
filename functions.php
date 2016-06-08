 <?php
 
 function wpmaterialize_scripts_with_jquery(){
   // Register the script like this for theme
  wp_register_script('materialize-script', get_template_directory_uri().'/materialize/js/materialize.min.js', array('jquery'));
   // For either a plugin or a theme you can then enqueue the script:
	wp_enqueue_script('materialize-script');
   // Register the script like this for theme
  wp_register_script('init-script', get_template_directory_uri().'/materialize/js/init.js', array('jquery'));
   // For either a plugin or a theme you can then enqueue the script:
	wp_enqueue_script('init-script');
 }
 
 add_action('wp_enqueue_scripts', 'wpmaterialize_scripts_with_jquery');
 