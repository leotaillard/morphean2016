<?php
// if the page have career, it's display them


// check if the repeater field has rows of data
if( have_rows('assets_usecase') ):
?>
	<div class="row">
		<div class="small-12 medium-10 small-centered columuns">
			<div class="row small-up-1 medium-up-2" data-equalizer="foo">

<?php
    while ( have_rows('assets_usecase') ) : the_row(); ?>
		<div class="column entry-asset-usecase" data-equalizer-watch="foo" data-equalizer="bar">
				<div class="small-12 medium-3 columns shadow asset-image" data-equalizer-watch="bar">
					<img src="<?php the_sub_field('asset_image_usecase'); ?>" alt="">
				</div>
				<div class="small-12 medium-9 columns shadow asset-content" data-equalizer-watch="bar">
					<?php the_sub_field('asset_content_usecase'); ?>
				</div>
		</div>
<?php endwhile; ?>
			</div>
		</div>
	</div>

<?php 

else :
    // nothing at all

endif;

?>
