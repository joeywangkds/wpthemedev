<?php

/**
 * 
 * Template Name: Contact Us template
 * 
 */
get_header();
?>

<div class="container">
    <section class="page-wrap">
        <h1><?php the_title(); ?></h1>

        <div class="row">
            <div class="col-lg-6">This is where the contact form go</div>
            <div class="col-lg-6"><?php get_template_part('includes/section', 'content') ?></div>
        </div>
    </section>
</div>

<?php
get_footer();
?>