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
/*
wp_nav_menu( $arg = array(
  'menu_class' => 'main-navigation',
  'theme_location' => 'primary'
) );
*/
?>
<div id="main_navbar" class="navbar navbar-expand-md navbar-light bg-light">
    <!-- you can remove this container wrapper if you want things full width -->
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerNav" aria-controls="headerNav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'best-reloaded' ); ?>">
            <span class="navbar-toggler-icon"></span><span class="sr-only"><?php esc_html_e( 'Toggle Navigation', 'themeslug' ); ?></span>
        </button>
        <nav class="collapse navbar-collapse" id="headerNav" role="navigation" aria-label="Main Menu">
            <span class="sr-only"><?php esc_html_e( 'Main Menu', 'themeslug' ); ?></span>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'depth' => 1,
                'container' => false,
                'menu_class' => 'main-navigation',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker(),
            ) );
        ?>
        </nav>
    </div>
</div>

</header>