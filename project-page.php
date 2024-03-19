<?php
/*
 * Template Name: Project Page
 * Template Post Type: project
 */
get_header(); ?>

<div class="container">
    <main id="main" class="site-main" role="main">
        <section class="project">
            <h2 class="project-heading"><?php the_title(); ?></h2>
            <div class="project-container">
                <div class="project-card">
                    <img class="project-image" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"
                        alt="<?php the_title(); ?>">

                    <?php
                    // Retrieve and display each paragraph of the post content individually
                    $post_content = get_the_content();
                    $paragraphs = explode("</p>", $post_content);
                    foreach ($paragraphs as $paragraph) {
                        // Strip any remaining HTML tags and trim whitespace
                        $clean_paragraph = trim(wp_strip_all_tags($paragraph));
                        // Check if the paragraph is not empty
                        if (!empty($clean_paragraph)) {
                            echo "<p class='project-description'>" . $clean_paragraph . "</p>";
                        }
                    }
                    ?>
                    <a class="project-link" href="<?php the_permalink(); ?>">View Project</a>
                </div>
                <?php
                
                ?>
            </div>
            <a href="/"><span class="return-home">Back </span></a>
        </section>
    </main>

    <?php get_footer(); ?>