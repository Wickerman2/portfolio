<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Christian Wickerström - UX Designer and Developer</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css"">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css">

<?php wp_head(); 

?>

</head>

<body> 

<header class="header">  

  <nav class="navbar navbar-expand-md navbar-dark bg-dark custom-nav-bar" role="navigation">
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <?php
      wp_nav_menu( array(
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
      ) );
      ?>
  </nav>

</header>