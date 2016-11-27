<?php
// if the page have career, it's display them


// check if the repeater field has rows of data
if( have_rows('howtos_usecase') ):
?>
	<div class="row">
		<div class="small-12 medium-10 small-centered columuns">

<?php
    while ( have_rows('howtos_usecase') ) : the_row(); ?>
			<div class="howto">
				<img src="<?php the_sub_field('image_howto_usecase'); ?>" alt="">
			</div>
<?php endwhile; ?>
		</div>
	</div>

<?php 

else :
    // nothing at all

endif;

?>
