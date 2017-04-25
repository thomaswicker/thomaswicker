<?php get_header(); ?>
<?php get_template_part('partials/superheroes/superhero-blog'); ?>
<?php get_template_part('partials/main-nav/main-nav-inner-page'); ?>


<section id="body-post" class=" medium-12 body-post">
	<section class="bp--inner">
		<div class="bp--left medium-8 columns">

			<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>

				<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1>
						<?php the_title(); ?>
					</h1>

					<?php the_tags('<p>Tags: ', ', ', '</p>'); ?>

					<p class="post-categories">
						<?php _e('Posted in', 'thomaswicker'); ?> <?php the_category(' '); ?>
					</p>

					<?php get_template_part('inc/meta'); ?>

					<?php if (has_post_thumbnail()) the_post_thumbnail(); ?>

					<div class="post-content">
						<?php the_content(); ?>
						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
					</div>

				</section>

				<?php endwhile; ?>

				<?php get_template_part('inc/nav'); ?>

			<?php else : ?>

			<?php endif; ?>
		</div>

		<div class="bp--right medium-4 columns">
			<section class="alt-sidebar">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('alt-sidebar')) : else : ?>

				<div class="pre-widget">
						<p><strong>Widgetized Area</strong></p>
						<p>Something went wrong... widgets are not loading.</p>
				</div>

				<?php endif; ?>
			</section>
		</div>
	</section>

</section>

<?php get_footer(); ?>
