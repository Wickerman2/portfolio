<?php
/* Template Name: Projects Page Template */
get_header();
echo '<div class="projects-wrapper">';?>
<h1 class="page-title"><?php echo single_post_title(); ?></h1> <?php

$post_id = 'project';

$obj = get_post_type_object( $post_id );
?>

<?php
$args = array( 'post_type' => $post_id );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();

    $description = get_post_meta( $post->ID, "description", true );
    $cover_image = get_post_meta( $post->ID, "cover_image", true );
    
    $img = wp_get_attachment_image_src($cover_image);
    ?>
  
  <section>
    <div class="container py-3">
      <a href="<?php echo get_page_link(); ?>" class="custom-card">
        <div class="card card-hover h-100 project-container">
          <div class="row">
            <div class="col-md-4">
                <img src="<?php echo $img[0] ?>" class="w-100">
              </div>
              <div class="col-md-8 px-3">
              <div class="project-details">
                <div class="card-block px-3">
                  <h2 class="card-title"><?php echo the_title(); ?></h2>
                  <p class="card-text"><?php echo $description ?> </p>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
  </section>
  <?php


    echo '</div>';

    echo '<br>';
endwhile;

echo '</div>';


echo '</div>';

// Inspiration:
// UX + Frontend-dev: http://erikbue.com/
// http://joshuataylordesign.com/projects/
// http://suzanchoy.com/
// http://idxpo.se/2017/the-great-reforestation-game/


//Picture + Title + Category (UX Design, Frontend dev etc)

?>