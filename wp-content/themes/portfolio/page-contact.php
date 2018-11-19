<?php
/* Template Name: Contact Page Template */
get_header();

?>
<div class="contact-wrapper">
<?php

    while ( have_posts() ) : the_post(); ?> 
    <div class="contact-wrapper">
        <?php the_content(); ?> 
    </div>
</div>
<?php
endwhile; 
wp_reset_query(); 
?>
