<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Christian Wickerström - UX Designer and Developer</title>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css">
<?php wp_head(); ?>

</head>

<body> 

<header class="header">  
<?php 

wp_nav_menu( $arg = array(
  'menu_class' => 'main-navigation',
  'theme_location' => 'primary'
) );

?>

</header>