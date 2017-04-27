<?php get_header(); ?>
<?php get_template_part('partials/superheroes/superhero-blog'); ?>
<?php get_template_part('partials/main-nav/main-nav-inner-page-2'); ?>

<section id="body-post" class=" medium-12 body-post">
	<section class="bp--inner">
		<article class="bp--left medium-8 columns">

			<?php if (have_posts()) : ?>
		 		<?php if (is_category()) { ?>

				<h2><?php _e('Archive for the', 'thomaswicker-theme'); ?> &#8216;<?php single_cat_title(); ?>&#8217; <?php _e('Category', 'thomaswicker-theme'); ?></h2>

				<?php } elseif(is_tag()) { ?>

				<h2><?php _e('Posts Tagged', 'thomaswicker-theme'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>

				<?php } elseif (is_day()) { ?>

				<h2><?php _e('Archive for', 'thomaswicker-theme'); ?> <?php the_time('F jS, Y'); ?></h2>

				<?php } elseif (is_month()) { ?>

				<h2><?php _e('Archive for', 'thomaswicker-theme'); ?> <?php the_time('F, Y'); ?></h2>

				<?php } elseif (is_year()) { ?>

				<h2><?php _e('Archive for', 'thomaswicker-theme'); ?> <?php the_time('Y'); ?></h2>

				<?php } elseif (is_author()) { ?>

				<h2><?php _e('Author Archive for', 'thomaswicker-theme'); ?> <?php the_post(); echo get_the_author(); rewind_posts(); ?></h2>

				<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

				<h2><?php _e('Blog Archives', 'thomaswicker-theme'); ?></h2>

				<?php } ?>

				<?php get_template_part('inc/nav'); ?>

				<?php while (have_posts()) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class() ?>>

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<?php get_template_part('inc/meta'); ?>

					<div class="post-content">
						<?php the_excerpt(); ?>
					</div>
					<a href="<?php echo get_permalink(); ?>" class="btn btn-secondary btn-read-more"> Read More...</a>

				</div>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part('inc/gone'); ?>

			<?php endif; ?>
		</article>

		<div class="bp--right medium-4 columns">
			<section class="alt-sidebar">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('alt-sidebar')) : else : ?>

				<div class="pre-widget">
						<p><strong>Error loading...</strong></p>
						<p>Sidebar is not loading correctly.</p>
				</div>

				<?php endif; ?>
			</section>
		</div>
	</section>

</section>
