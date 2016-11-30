<?php


// check if the repeater field has rows of data
if( have_rows('options_tkh') ): ?>
<section id="options-tkc">
	<div class="row">
		<div class="small-12 medium-10 small-centered columuns">
			<div class="row small-up-1 medium-up-2">

<?php
    while ( have_rows('options_tkh') ) : the_row(); ?>
		<div class="column option-tkc">
			<div class="small-12 medium-4 columns shadow image-tkc">
				<img src="<?php the_sub_field('image_option_tkc'); ?>" alt="">
			</div>
			<div class="small-12 medium-8 columns shadow content-tkc">
				<h2><?php the_sub_field('titre_option_tkc'); ?></h2>
				<?php the_sub_field('content_option_tkc'); ?>
			</div>
		</div>
<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>
<?php 

else :
    // nothing at all

endif;

?>
