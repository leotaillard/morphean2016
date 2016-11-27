<?php if (get_field('spotlight_usecase')) : ?>
	<div class="entry-spotlight">
		<div class="row">
			<div class="small-12 medium-10 small-centered columuns entry-spotlight-content">
				<div class="row">
					<div class="small-10 small-centered columns">
						<?php the_field('spotlight_usecase'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
