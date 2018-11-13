<?php
/* Template Name: Contact Page Template */
get_header();

?>

<h1 class="page-title"><?php echo single_post_title(); ?></h1> <?php

while ( have_posts() ) : the_post(); ?> 
<div class="contact-wrapper">
    <?php the_content(); ?> 
</div>

<?php
endwhile; 
wp_reset_query(); 
?>
