<?php 
/*
* Template Name: Homepage
* Description: A custom template for the homepage.
*/
get_header(); ?>
<div class="container">
    <main id="main" class="site-main" role="main">
        <section class="hero">
            <h1 class="hero-heading">Hi, I'm Rhys.
                <br>Web
                Developer.
            </h1>
            <a href="#contact"><button class="hero-button">Contact</button></a>
        </section>
        <section id="about-me" class="about-me">
            <h2 class="about-heading">About Me</h2>
            <p class="about-para">Hi! I'm Rhys, a passionate Web Developer based in Ipswich, UK. I have a passion for
                creating engaging and functional digital experiences. With an eye for detail and an ongoing commitment
                to
                learning and personal development and an in an interest in staying at the forefront of web
                technologies, I love to bring
                designs to life by
                creating sleek, responsive websites that captivate users with a seamless experience.</p>
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
                    <p class="skill-name">React</p>
                </div>
                <div class="skill">
                    <img class="skill-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/tailwind.svg"
                        alt="Tailwind CSS Logo">
                    <p class="skill-name">Tailwind</p>
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
<section id="contact" class="contact-section">
    <h2 class="contact-heading">Contact</h2>
    <p class="contact-para">I am available for freelance work. If you are interested in hiring me for your project,
        please contact me.</p>
    <div class="contact-form-container">
        <?php echo do_shortcode('[contact-form-7 id="950ab4d" title="Contact form 1"]'); ?>
    </div>
    </main>
    </div>
    <div class="back-to-top">
        <a href=" #header">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fast-arrow-up.svg" alt="Return to top">
        </a>
    </div>
</section>
<?php get_footer(); ?>