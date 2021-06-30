 <?php
/**
 * Template Name: Faq
 * Static: Yes # Remove this line once the template is integrated with the CMS
 */
?>

<?php get_header(); ?>

<section class="section-intro">
    <div class="section__image image-fit">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/images/temp/jpg/section-intro-8.jpg" alt="" />
    </div><!-- /.section__image -->

    <div class="section__body">
        <div class="shell">
            <div class="section__body-holder">
                <blockquote data-aos="fade-up">
                    <h1>FAQ</h1>
                </blockquote>
            </div><!-- /.section__body-holder -->
        </div><!-- /.shell -->
    </div><!-- /.section__body -->
</section><!-- /.section-intro -->

<section class="section-faq">
    <div class="section__body">
        <div class="shell shell--small">
            <div class="accordion-faq js-accordion">
                <div class="accordion__group">
                    <div class="accordion__head js__head">
                        <h4>What is your loop length?</h4>
                    </div><!-- /.accordion__head -->

                    <div class="accordion__body">
                        <p>Allvision launched without a loop. With the application of cadence logic, each spot will appear 56 times per hour.</p>
                    </div><!-- /.accordion__body -->
                </div><!-- /.accordion__group -->

                <div class="accordion__group">
                    <div class="accordion__head js__head">
                        <h4>What is the length of your spot?</h4>
                    </div><!-- /.accordion__head -->

                    <div class="accordion__body">
                        <p>8 seconds</p>
                    </div><!-- /.accordion__body -->
                </div><!-- /.accordion__group -->

                <div class="accordion__group">
                    <div class="accordion__head js__head">
                        <h4>Can I transact both programmatically and direct I/O?</h4>
                    </div><!-- /.accordion__head -->

                    <div class="accordion__body">
                        <p>Yes</p>
                    </div><!-- /.accordion__body -->
                </div><!-- /.accordion__group -->

                <div class="accordion__group">
                    <div class="accordion__head js__head">
                        <h4>What ad exchanges are you integrated with?</h4>
                    </div><!-- /.accordion__head -->

                    <div class="accordion__body">
                        <p>Hivestack | Vistar | Place Exchange</p>
                    </div><!-- /.accordion__body -->
                </div><!-- /.accordion__group -->

                <div class="accordion__group">
                    <div class="accordion__head js__head">
                        <h4>Can I buy site specific?</h4>
                    </div><!-- /.accordion__head -->

                    <div class="accordion__body">
                        <p>Yes, with a direct I/O.</p>
                    </div><!-- /.accordion__body -->
                </div><!-- /.accordion__group -->

                <div class="accordion__group">
                    <div class="accordion__head js__head">
                        <h4>How often will I receive a proof of performance report?</h4>
                    </div><!-- /.accordion__head -->

                    <div class="accordion__body">
                        <p>The beginning of each week.</p>
                    </div><!-- /.accordion__body -->
                </div><!-- /.accordion__group -->
            </div><!-- /.accordion-faq -->
        </div><!-- /.shell -->
    </div><!-- /.section__body -->
</section><!-- /.section-faq -->

<?php get_template_part( 'fragments/section-callout' ); ?>

<?php get_footer(); ?>
