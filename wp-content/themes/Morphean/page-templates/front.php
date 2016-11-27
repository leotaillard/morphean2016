<?php
/*
Template Name: Front
*/
 get_header(); ?>

 <?php get_template_part( 'template-parts/featured-image' ); ?>

 <div id="page" role="main">
 <?php while ( have_posts() ) : the_post(); ?>
	<header class="entry-header">
		<div class="row">
			<div class="small-12 medium-8 small-centered columns">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="entry-subtitle"><?php the_field('subtitle_morphean'); ?></div>
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

	<section id="sections-home">
	   <?php get_template_part( 'template-parts/front-home' ); ?> <!-- SECTIONS HOME -->
	</section>
	<section id="demo-home">
		<div class="row">
			<div class="small-12 medium-10 small-centered columns">
				<div class="want-to-try-it">
					<img src="<?php bloginfo( 'template_url' ); ?>/assets/images/front/want-to-try-it.png" width="80" alt="Want to try it ?">
					<h1><?php _e('Want to try it ?','morphean'); ?></h1>
					<h2><a href="#"><?php _e('Discover our demo >','morphean'); ?></a></h2>
				</div>
			</div>
		</div>
	</section>
 <?php endwhile;?>


 </div>
	<section id="use-cases-home">
		<div class="row use-cases-intro">
			<div class="small-12 columns">
				<div class="row">
					<div class="small-12 medium-10 small-centered columns">
						<h2><?php _e('Use cases','morphean'); ?></h2>
						<p><?php _e('Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam.','morphean'); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="use-cases-carousel">
		   <?php get_template_part( 'template-parts/front-use-case' ); ?> <!-- FRONT USE CASE -->
		</div>
	</section>

 <?php get_footer();
