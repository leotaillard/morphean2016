<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

 <?php get_template_part( 'template-parts/featured-image' ); ?>

 <div id="usecase" role="main">
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
			<div class="small-12 medium-10 small-centered columns">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<h4 class="entry-subtitle"><?php the_field('sous-titre_usecase'); ?></h4>
			</div>
		</div>
	</header>
	<?php if (get_field('showcase_usecase')) : ?>
		<div class="entry-showcase">
			<div class="row">
				<div class="small-12 medium-10 small-centered columuns entry-showcase-content">
					<div class="row">
						<div class="small-10 small-centered columns">
							<?php the_field('showcase_usecase'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	   <article <?php post_class($classes) ?> id="post-<?php the_ID(); ?>">
       <div class="entry-content">
           <?php the_content(); ?>
       </div>
   </article>
   <section id="entry-assets-usecase">
		<?php get_template_part( 'template-parts/assets-usecase' ); ?> <!-- ASSETS USECASE -->
   </section>
   <section id="entry-spotlight-usecase">
		<?php get_template_part( 'template-parts/spotlight-usecase' ); ?> <!-- ASSETS USECASE -->
   </section>
   <section id="entry-howtos-usecase">
		<?php get_template_part( 'template-parts/howtos-usecase' ); ?> <!-- ASSETS USECASE -->
   </section>
 <?php endwhile;?>


 </div>

 <?php get_footer();
