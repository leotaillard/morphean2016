<?php
// check if the repeater field has rows of data
if( have_rows('domaines_tkh') ):
?>
<sections id="domaines-tkh">
	<div class="row">
		<div class="small-12 medium-10 small-centered columuns">
			<div class="row small-up-1 medium-up-2">
<?php
    while ( have_rows('domaines_tkh') ) : the_row(); ?>
		<div class="column domaine-tkc">
				<div class="small-12 medium-12 columns shadow image-domaine-tkc">
					<img src="<?php the_sub_field('image_domaine_tkc'); ?>" alt="">
				</div>
				<div class="small-12 medium-12 columns shadow content-domaine-tkc">
					<div class="small-12 medium-10 small-centered columns">
						<h2><?php the_sub_field('titre_domain_tkc'); ?></h2>
						<h3><?php the_sub_field('sous_titre_domain_tkc'); ?></h3>
						<?php the_sub_field('content_domain_tkc'); ?>
					</div>
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
