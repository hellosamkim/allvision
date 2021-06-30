<?php
/**
 * Template Name: Small Busines Support
 * Static: Yes # Remove this line once the template is integrated with the CMS
 */
?>

<?php get_header(); ?>

<section class="section-intro">
    <div class="section__image image-fit">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/images/temp/jpg/section-intro-12.jpg" alt="" />
    </div><!-- /.section__image -->

    <div class="section__body">
        <div class="shell">
            <div class="section__body-holder">
                <blockquote data-aos="fade-up">
                    <h1>Small Business Support</h1>
                </blockquote>
            </div><!-- /.section__body-holder -->
        </div><!-- /.shell -->
    </div><!-- /.section__body -->
</section><!-- /.section-intro -->

<section class="section-content-grid">
    <div class="section__body">
        <div class="shell">
            <div class="section__body-row">
                <div class="section__body-col" data-aos="fade-up">
                    <h2>Let Us Help Your Small Business</h2>
                </div><!-- /.section__body-col -->

                <div class="section__body-col" data-aos="fade-up">
                    <p>Allvision is committed to helping small businesses in our communities grow and thrive.</p>

                    <p>With the devastating impact of COVID-19 on small businesses across the country, we understand that the right brand exposure is more crucial than ever.</p>
                </div><!-- /.section__body-col -->
            </div><!-- /.section__body-row -->
        </div><!-- /.shell -->
    </div><!-- /.section__body -->
</section><!-- /.section-content-grid -->

<section class="section-counters">
    <div class="section__head" data-aos="fade-up">
        <div class="shell">
            <h2>How We’ve Helped</h2>
        </div><!-- /.shell -->
    </div><!-- /.section__head -->

    <div class="section__body">
        <div class="shell">
            <div class="list-counters">
                <ul>
                    <li data-aos="fade-up">
                        <h2 data-prefix="" data-suffix="" data-count="200" class="h1 js-counter"></h2><!-- /.h1 -->

                        <p>small businesses helped</p>
                    </li>

                    <li data-aos="fade-up">
                        <h2 data-prefix="$" data-suffix="k" data-count="700" class="h1 js-counter"></h2><!-- /.h1 -->

                        <p>dollars matched</p>
                    </li>
                </ul>
            </div><!-- /.list-counters -->
        </div><!-- /.shell -->
    </div><!-- /.section__body -->
</section><!-- /.section-counters -->

<section class="section-form">
    <div class="section__body">
        <div class="shell shell--grid">
            <div class="section__body-content" data-aos="fade-up">
                <h3>Let Us Help Your Small Business</h3>

                <p>Allvision is committed to helping small businesses in our communities grow and thrive.</p>

                <p>With the devastating impact of COVID-19 on small businesses across the country, we understand that the right brand exposure is more crucial than ever.</p>
            </div><!-- /.section__body-content -->

            <div class="section__body-form" data-aos="fade-up">
                <?php app_render_gform( 3, true ); ?>
            </div><!-- /.section__body-form -->
        </div><!-- /.shell -->
    </div><!-- /.section__body -->
</section><!-- /.section-form -->

<?php get_footer(); ?>
