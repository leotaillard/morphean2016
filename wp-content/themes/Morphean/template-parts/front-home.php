<?php
// if the page have career, it's display them


// check if the repeater field has rows of data
if( have_rows('sections_home_morphean') ): ?>
	<div class="row">
		<div class="small-12 columns">

<?php while ( have_rows('sections_home_morphean') ) : the_row(); ?>
		<div class="row section-home" data-equalizer>

			<div class="small-12 medium-4 columns section-home-image" style="background-color:<?php the_sub_field('section_home_image_couleur_morphean'); ?>" data-equalizer-watch>
				<img src="<?php the_sub_field('Section_home_image_morphean'); ?>" alt="">
			</div>
			<div class="small-12 medium-8 columns section-home-content" data-equalizer-watch>
				<?php the_sub_field('section_home_content_morphean'); ?>
			</div>
		</div>
<?php endwhile; ?>
		</div>
	</div>

<?php 

else :
    // nothing at all

endif;

?>
