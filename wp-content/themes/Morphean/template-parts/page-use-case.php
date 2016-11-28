<?php
$args = array(
    // Arguments for your query.
    'post_type' => 'use_case'
);
 
$the_query = new WP_Query( $args ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
    <!-- the loop -->
   <div class="row usecases small-up-1 medium-up-2 large-up-3">
    	
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		  <div class="column usecase">
		    <div class="usecase-image shadow">
			    <img src="<?php the_field('image_usecase'); ?>" class="" alt="">
	          <a href="<?php the_permalink(); ?>"><div class="full"></div></a>
		    </div>
		    <div class="usecase-content shadow">
		    	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		    </div>
		  </div>
    <?php endwhile; ?>

    </div>

    <!-- end of the loop -->
    <!-- pagination here -->
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no use case can be display.','morphean' ); ?></p>
<?php endif; ?>
