<?php
// if the page have career, it's display them


// check if the repeater field has rows of data
if( have_rows('jobs_morphean') ):
?>
    <section id="jobs">
    	<ul class="accordion shadow" data-accordion data-allow-all-closed="true">

<?php
    while ( have_rows('jobs_morphean') ) : the_row(); ?>
		<li class="accordion-item" data-accordion-item>
			<a href="#" class="accordion-title"><?php the_sub_field('titre_job_morphean'); ?></a>
			<div class="accordion-content" data-tab-content>
				<?php the_sub_field('content_job_morphean'); ?>
			</div>
		</li>
<?php endwhile; ?>
		</ul>

		<div class="apply-to shadow">
			<h3><?php _e('Apply here :','morphean'); ?></h3>
			<p>
				<strong><?php the_field('nom_morphean', 'option'); ?></strong></br>
				<?php the_field('adresse_morphean', 'option'); ?></br>
				<?php the_field('npa_morphean', 'option'); ?> <?php the_field('ville_morphean', 'option'); ?></br>
				<?php the_field('pays_morphean', 'option'); ?> </br>
				<a href="callto:<?php the_field('telephone_morphean', 'option'); ?>"><?php the_field('telephone_morphean', 'option'); ?></a></br>
				<a href="mailto:<?php the_field('email_jobs_morphean', 'option'); ?>"><?php the_field('email_jobs_morphean', 'option'); ?></a>
			</p>
		</div>
    </section>
<?php 

else :
    // nothing at all

endif;

?>
