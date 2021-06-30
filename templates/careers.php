<?php
/**
 * Template Name: Careers
 * Static: Yes # Remove this line once the template is integrated with the CMS
 */
?>

<?php get_header(); ?>

<section class="section-intro">
    <div class="section__image image-fit">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/images/temp/jpg/section-intro-13.jpg" alt="" />
    </div><!-- /.section__image -->

    <div class="section__body">
        <div class="shell">
            <div class="section__body-holder">
                <blockquote data-aos="fade-up">
                    <h1>Careers</h1>

                    <p>Join the Allvision Team.</p>
                </blockquote>
            </div><!-- /.section__body-holder -->
        </div><!-- /.shell -->
    </div><!-- /.section__body -->
</section><!-- /.section-intro -->

<section class="section-content-grid" data-bg="gray">
    <div class="section__body">
        <div class="shell">
            <div class="section__body-row">
                <div class="section__body-col" data-aos="fade-up">
                    <blockquote>
                        <h2>Currently Hiring</h2>

                        <p>We’re looking for people the coin the Allvision team who are as excited as we are to help build the future of the digital out-of-home industry.</p>
                    </blockquote>
                </div><!-- /.section__body-col -->

                <div class="section__body-col" data-aos="fade-up">
                    <div class="accordion-main js-accordion">
                        <div class="accordion__group active">
                            <div class="accordion__head js__head">
                                <h4>National Sales Associate</h4>
                            </div><!-- /.accordion__head -->

                            <div class="accordion__body">
                                <p>
                                    <a href="#" class="btn-link">
                                        <span>Learn More</span>

                                        <i class="ico-arrow">
                                            <svg viewBox="0 0 13.99 13.99">
                                                <path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
                                            </svg>
                                        </i>
                                    </a>
                                </p>
                            </div><!-- /.accordion__body -->
                        </div><!-- /.accordion__group -->

                        <div class="accordion__group">
                            <div class="accordion__head js__head">
                                <h4>Location Coordinator</h4>
                            </div><!-- /.accordion__head -->

                            <div class="accordion__body">
                                <p>
                                    <a href="#" class="btn-link">
                                        <span>Learn More</span>

                                        <i class="ico-arrow">
                                            <svg viewBox="0 0 13.99 13.99">
                                                <path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
                                            </svg>
                                        </i>
                                    </a>
                                </p>
                            </div><!-- /.accordion__body -->
                        </div><!-- /.accordion__group -->
                    </div><!-- /.accordion-main -->
                </div><!-- /.section__body-col -->
            </div><!-- /.section__body-row -->
        </div><!-- /.shell -->
    </div><!-- /.section__body -->
</section><!-- /.section-content-grid -->

<?php get_template_part( 'fragments/section-callout' ); ?>

<?php get_footer(); ?>
