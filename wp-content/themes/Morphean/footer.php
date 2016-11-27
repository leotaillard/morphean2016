<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
				<div class="row logo">
					<div class="small-12 medium-1 columns">&nbsp;</div>
					<div class="small-12 medium-11 columns">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php the_field('logo_morphean', 'option'); ?>" alt=""></a>
					</div>
				</div>
				<div class="row">
					<div class="small-12 medium-10 small-centered columns">
						<div class="row">
							<div class="small-12 medium-4 columns">
								<p>
									<?php the_field('adresse_morphean', 'option'); ?><br>
									<?php the_field('npa_morphean', 'option'); ?> <?php the_field('ville_morphean', 'option'); ?><br>
									<?php the_field('pays_morphean', 'option'); ?>
								</p>
							</div>
							<div class="small-12 medium-4 columns">
									<a href="callto:<?php the_field('telephone_morphean', 'option'); ?>"><?php the_field('telephone_morphean', 'option'); ?></a><br>
									<a href="mailto:<?php the_field('email_morphean', 'option'); ?>"><?php the_field('email_morphean', 'option'); ?></a>
							</div>
							<div class="small-12 medium-4 columns">
								<?php
								wp_nav_menu( array(
								    'theme_location' => 'social-nav'
								) );
								?>
							</div>
						</div>
					</div>
				</div>
				<!-- <?php dynamic_sidebar( 'footer-widgets' ); ?>  -->
			</footer>
			<div id="copyright">
				<p>© <?php echo the_date('Y'); ?> – <?php bloginfo('name'); ?>, <?php _e('all rights reserved','morphean'); ?></p>
			</div>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
