<?php
/* Template Name: Resume Page Template */
get_header();
echo '<div class="resume-wrapper">';
?>

<h1 class="page-title"><?php echo single_post_title(); ?></h1> <?php
echo '<div class="row">';

echo '<div class="col-sm-6">';

/* EDUCATION SECTION */
echo '<div class="education">';

$post_id = 'education';

$obj = get_post_type_object( $post_id );

?>
<h2><?php echo $obj->labels->singular_name;?></h2>

<?php
$args = array( 'post_type' => $post_id );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
  echo '<div class="education-content-area">';
    $schoolname = get_post_meta( $post->ID, "schoolname", true );
    $educationname = get_post_meta( $post->ID, "educationname", true );
    $timeperiod = get_post_meta( $post->ID, "timeperiod", true );
    $description = get_post_meta( $post->ID, "description", true );


    ?><b> <?php echo $educationname; ?>  - </b> <b> <?php echo $schoolname; ?> </b> 
    <p><i><?php echo $timeperiod;?></i></p> 
    <p><?php echo $description;?></p> <?php 

    echo '</div>';

    echo '<br>';
endwhile;

echo '</div>';

/* SKILLS SECTION */

echo '<div class="skills">';
$post_id = 'skills';
$obj = get_post_type_object( $post_id );
?>
<h2><?php echo $obj->labels->name; ?></h2>
<?php
$args = array( 'post_type' => $post_id );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
    the_content();
endwhile;
echo '</div>';
echo '</div>';

echo '<div class="col-sm-6">';

/* WORK EXPERIENCE SECTION */

echo '<div class="work-experience">';

$post_id = 'work_experience';
$obj = get_post_type_object( $post_id );

?>
<h2><?php echo $obj->labels->singular_name; ?></h2>
<?php
$args = array( 'post_type' => $post_id );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();

    echo '<div class="work-content-area">';
    $rolename = get_post_meta( $post->ID, "rolename", true );
    $companyname = get_post_meta( $post->ID, "companyname", true );
    $timeperiod = get_post_meta( $post->ID, "timeperiod", true );
    $description = get_post_meta( $post->ID, "description", true );


    ?><b> <?php echo $rolename; ?>  - </b> <b> <?php echo $companyname; ?> </b> 
    <p><i><?php echo $timeperiod;?></i></p> 
    <p><?php echo $description;?></p> <?php 
    echo '</div>';


    echo '<br>';
endwhile;

echo '</div>';


echo '</div>';



echo '</div>';

echo '</div>';
?>