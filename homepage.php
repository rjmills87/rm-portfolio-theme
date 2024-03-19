<?php 
/*
* Template Name: Homepage
* Description: A custom template for the homepage.
*/
get_header(); ?>
<div class="container">
    <main id="main" class="site-main" role="main">
        <section class="hero">
            <h1 class="hero-heading">Hi, I'm <span class="red-text">Rhys</span>. <br>Web<span class="red-text">
                    Developer</span>.</h1>
            <a href="#contact"><button class="hero-button">Contact</button></a>
        </section>
        <section id="about-me" class="about-me">
            <h2 class="about-heading">About Me</h2>
            <p class="about-para">I am a web developer with a passion for creating beautiful and functional websites. I
                have experience
                with HTML, CSS, JavaScript, and WordPress. I am always looking to learn new things and improve my
                skills.</p>
        </section>
        <section id="skills" class="skills">
            <h2 class="skills-heading">Skills</h2>
            <div class="skills-container">
                <div class="skill">
                    <img class="skill-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/html5.svg"
                        alt="HTML5 Logo">
                    <p class="skill-name">HTML5</p>
                </div>
                <div class="skill">
                    <img class="skill-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/css3.svg"
                        alt="CSS3 Logo">
                    <p class="skill-name">CSS3</p>
                </div>
                <div class="skill">
                    <img class="skill-icon"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/javascript.svg"
                        alt="JavaScript Logo">
                    <p class="skill-name">JavaScript</p>
                </div>
                <div class="skill">
                    <img class="skill-icon"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/wordpress.svg"
                        alt="WordPress Logo">
                    <p class="skill-name">WordPress</p>
                </div>
            </div>
            <div class="skills-container">
                <div class="skill">
                    <img class="skill-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/react.svg"
                        alt="React JS Logo">
                    <p class="skill-name">React JS</p>
                </div>
                <div class="skill">
                    <img class="skill-icon"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/tailwindcss.svg"
                        alt="Tailwind CSS Logo">
                    <p class="skill-name">Tailwind CSS</p>
                </div>
                <div class="skill">
                    <img class="skill-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/git.svg"
                        alt="Git Logo">
                    <p class="skill-name">Git</p>
                </div>
                <div class="skill">
                    <img class="skill-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/php.svg"
                        alt="PhP Logo">
                    <p class="skill-name">PhP</p>
                </div>
            </div>
</div>
<section id="projects" class="projects-section">
    <h2 class="projects-section-heading">Projects</h2>
    <div class="projects-section-container">
        <?php
                $args = array(
                    'post_type' => 'project',
                    'posts_per_page' => 3
                );
                $projects = new WP_Query($args);
                if ($projects->have_posts()) {
                    while ($projects->have_posts()) {
                        $projects->the_post();
                        ?>
        <div class="projects-section-project">
            <a href="<?php the_permalink(); ?>">
                <h3 class="projects-section-project-title"><?php the_title(); ?></h3>
                <div class="projects-section-project-thumbnail">
                    <img class="projects-section-project-thumbnail"
                        src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>">
                </div>
            </a>
        </div>
        <?php
                    }
                }
                wp_reset_postdata();
                ?>
    </div>
</section>
<section id="contact" class="contact">
    <h2 class="contact-heading">Contact</h2>
    <p class="contact-para">I am available for freelance work. If you are interested in hiring me for your project,
        please contact me.</p>
    <div class="contact-form-container">
        <?php echo do_shortcode('[contact-form-7 id="950ab4d" title="Contact form 1"]'); ?>
    </div>
    </main>
    </div>
    <?php get_footer(); ?>