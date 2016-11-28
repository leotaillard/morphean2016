<?php
 
$args = array(
    // Arguments for your query.
    'post_type' => 'use_case'
);
 
$the_query = new WP_Query( $args ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
    <!-- the loop -->
    <div class="owl-carousel">
    	
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="owl-use-case shadow <?php the_field('couleur_usecase'); ?>" style="background-image:url('<?php the_field('image_usecase'); ?>')">
          	<div class="owl-use-case-content">
	          	<a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
	          	<a href="<?php the_permalink(); ?>" class="discover"><?php _e( 'Discover more >','morphean' ); ?></a>
          	</div>
          	<div class="full"></div>
          </div>
    <?php endwhile; ?>

    </div>

    <!-- end of the loop -->
    <!-- pagination here -->
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no use case can be display.','morphean' ); ?></p>
<?php endif; ?>
<script>
$(document).ready(function(){
	$(".owl-carousel").owlCarousel({
		loop:true,
		stagePadding:50,
	    nav:true,
	    dots:true,
        responsive:{
	        0:{
	            items:1
	        },
	        480:{
	            items:3
	        },
	        1200:{
	            items:5
        }
    }

	});
});
</script>