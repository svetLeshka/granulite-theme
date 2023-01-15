<?php get_header(); ?>
    <main>
        <?php while (have_posts()) :
            the_post(); ?>
            <div class="content wp-content">
                <div class="container">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
    </main>
<?php get_footer();