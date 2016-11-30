<?php
/*
Template Name: Technology & know-how
*/
 get_header(); ?>

 <?php get_template_part( 'template-parts/featured-image' ); ?>

 <div id="page" class="page-usecases" role="main">
 <?php while ( have_posts() ) : the_post(); ?>
 <?php
	$classes = array(
		'small-12',
		'medium-8',
		'small-centered',
		'columns',
		'entry-content'
	);
 ?>
	<header class="entry-header">
		<div class="row">
			<div class="small-12 medium-6 small-centered columns">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</div>
		</div>
	</header>
	<?php if (get_field('sous-titre_page')) : ?>
		<div class="entry-subtitle">
			<div class="row">
				<div class="small-12 medium-10 small-centered columuns entry-subtitle-content">
					<div class="row">
						<div class="small-10 small-centered columns">
							<?php the_field('sous-titre_page'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php get_template_part( 'template-parts/tkc/options-tkc'); ?> <!-- OPTIONS -->

	<section id="image-tkc">
		<div class="row image-tkc shadow">
			<div class="small-12 medium-10 small-centered columns">
				<img src="<?php the_field('image_tkc'); ?>" alt="">
			</div>
		</div>
	</section>
	<?php if (get_field('subtitle_tkc')) : ?>
		<section id="sous-titre-tkc">
			<div class="row">
				<div class="small-12 medium-10 small-centered columuns subtitle_tkc">
					<div class="row">
						<div class="small-10 small-centered columns">
							<?php the_field('subtitle_tkc'); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<?php get_template_part( 'template-parts/tkc/domaines-tkc'); ?> <!-- Domaines -->
 <?php endwhile;?>
 </div>

 <?php get_footer();
