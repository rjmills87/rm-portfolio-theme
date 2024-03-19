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
                <?php

$icons = get_the_terms(get_the_ID(), 'project_icon');

if ($icons && !is_wp_error($icons)) :
    ?>
                <h3 class="tech-heading">Technology Used</h3>
                <div class="icons">
                    <?php
     
        foreach ($icons as $icon) :
            $icon_id = $icon->term_id;

            $icon_svg = get_template_directory_uri() . "/assets/images/" . $icon->name . '.svg';
            ?>

                    <div class="icon-container">
                        <img class="project-icon" src="<?php echo $icon_svg; ?>" alt="<?php echo $icon->name; ?>" />
                        <p class="icon-name"><?php echo $icon->name; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <div class="btn-container">
                    <button class="link-btn">GitHub Link</button>
                    <button class="link-btn">Live Link</button>
                </div>


            </div>
            <div class="return-home">
                <a href="/#projects"><span class="back">Back</span></a>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>