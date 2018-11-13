<?php

get_header(); ?>
<h1 class="page-title"><?php echo single_post_title(); ?></h1>

<div class="project-wrapper">
	<div class="project-post-content">

			<?php
				while ( have_posts() ) : the_post();
				
					echo '<br>';
					the_content();

				endwhile; // End of the loop.
			?>
	</div>
</div>

