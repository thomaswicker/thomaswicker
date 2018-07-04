<?php get_template_part('partials/header-portfolio-single'); ?>

<?php get_template_part('partials/superheroes/superhero-portfolio'); ?>

<?php get_template_part('partials/main-nav/main-nav-portfolio'); ?>

<section class='medium-12 columns body-portfolio no-scroll' role="main">
    <?php get_template_part('partials/portfolio-tiles'); ?>
</section>

<section class='body-portfolio-single' id='body-portfolio-single'>
    <section class="portfolio-navigation-buttons">
        <?php
        $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
        echo "<a href='$url' class='btn btn-purple btn-mini btn-back-to-portfolio'>
        <i class='fa fa-arrow-left' aria-hidden='true'></i>Back to Portfolio</a>"; 
        ?>
    </section>

    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <section class="portfolio-item-details">
            <?php if( get_field('itemcompany') ): ?>
                <h1><?php the_field( 'itemcompany' ); ?></h1>
            <?php endif; ?>

            <?php if( get_field('itemtype') ): ?>
                <h3><?php the_field( 'itemtype' ); ?></h3>
            <?php endif; ?>

            <?php if( get_field('item_type_category_options') ): ?>
                <h3><?php the_field('item_type_category_options'); ?></h3>
            <?php endif; ?>

            <!-- <span class="item-location"><?php the_field( 'itemcompanylocation' ); ?></span> -->
            <?php if( get_field('item_description') ): ?>
                <div class="portfolio-item-description">
                    <h2>Description of Project</h2>
                </div>
            <?php endif; ?>

            <p class="tech-used"><?php the_field( 'item_description' ); ?> Technologies used include: <?php the_field( 'itemcategories' ); ?></p>

            <ul class="portfolio-item-images">
                <?php if( get_field('itemimage') ): ?>
                    <li class="full-width">
                        <img class='image portfolio-image-1' src='<?php the_field( 'itemimage' ); ?>'>
                    </li>
                <?php endif; ?>

                <?php if(get_field('portfolio_item_images')): ?>
                    <?php while(has_sub_field('portfolio_item_images')): ?>
                        <li class="<?php the_sub_field('optional_class'); ?>">
                            <img src="<?php the_sub_field('portfolio_item_image'); ?>">
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>

            </ul>

            <?php if( get_field('wireframe_image_1') ): ?>
                <h3>Wireframe Images</h3>
                <img class='image wireframe-image-1' src='<?php the_field( 'wireframe_image_1' ); ?>'>
            <?php endif; ?>

            <?php if( get_field('wireframe_image_2') ): ?>
                <img class='image wireframe-image-2' src='<?php the_field( 'wireframe_image_2' ); ?>'>
            <?php endif; ?>

            <?php if( get_field('wireframe_image_3') ): ?>
                <img class='image wireframe-image-3' src='<?php the_field( 'wireframe_image_3' ); ?>'>
            <?php endif; ?>
        </section>

    <?php endwhile; ?>
</section>

<?php get_footer(); ?>
