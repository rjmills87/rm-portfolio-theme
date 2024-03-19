<?php get_header(); ?>

<div class="container">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
        <?php endwhile; ?>
        <?php else : ?>
        <p><?php esc_html_e('No posts found', 'custom-theme'); ?></p>
        <?php endif; ?>

    </main>
</div>

<?php get_footer(); ?>