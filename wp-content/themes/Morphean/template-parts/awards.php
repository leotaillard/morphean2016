<?php
// if the page have awards, it's display them


// check if the repeater field has rows of data
if( have_rows('awards_morphean') ):
?>
    <section id="awards">
<?php
    while ( have_rows('awards_morphean') ) : the_row(); ?>
		<div class="award shadow row">
			<div class="small-12 medium-10 small-centered columns">
				<div class="logo-award">
					<img src="<?php the_sub_field('logo_award_morphean'); ?>" alt="">
				</div>
				<div class="text-award">
					<?php the_sub_field('texte_award_morphean'); ?>
				</div>
			</div>
		</div>

<?php    endwhile; ?>
    </section>
<?php 

else :
    // nothing at all

endif;

?>
