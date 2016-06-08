<?php require_once('WP_Materialize_Nav_Menu.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php bloginfo('name'); ?></title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  
  <?php wp_enqueue_script('jquery'); ?>
  <?php wp_head(); ?>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
        <?php 
          wp_nav_menu(array(
            'menu'                  => 'sample',
            'menu_class'          => 'right hide-on-med-and-down',
            'container'             => '',
            'walker'                => new WP_Materialize_Nav_Menu()
          )); 
        ?>

        <?php 
        /*
          wp_nav_menu(array(
            'menu' => 'sample',
            'container' => 'ul',
            'container_id' => 'nav-mobile',
						'container_class' => 'side-nav',
            'walker' => new WP_Materialize_Nav_Menu()
          )); 
          */
        ?>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>