<?php
/**
 * Template Name: Contact Us
 * Static: Yes # Remove this line once the template is integrated with the CMS
 */
?>

<?php get_header(); ?>

<section class="section-intro">
    <div class="section__image image-fit">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/images/temp/jpg/section-intro-2.jpg" alt="" />
    </div><!-- /.section__image -->

    <div class="section__body">
        <div class="shell">
            <div class="section__body-holder">
                <blockquote data-aos="fade-up">
                    <h1>Contact Us</h1>
                </blockquote>
            </div><!-- /.section__body-holder -->
        </div><!-- /.shell -->
    </div><!-- /.section__body -->
</section><!-- /.section-intro -->

<section class="section-content-and-form">
    <div class="shell shell--grid">
        <div class="section__content" data-aos="fade-up">
            <h3>Have a Question for Us?</h3>

            <p>Connect with our team to learn how Allvision can help you reach your advertising goals, or assist with any other questions or queries.</p>

            <p>Please complete this form and we’ll be in touch shortly.</p>
        </div><!-- /.section__content -->

        <div class="section__form" data-aos="fade-down">
            <?php app_render_gform( 1, true ); ?>
        </div><!-- /.section__form -->
    </div><!-- /.shell -->
</section><!-- /.section-content-and-form -->

<?php get_footer(); ?>
