<?php
/**
 * Template Name: Real Estate
 * Static: Yes # Remove this line once the template is integrated with the CMS
 */
?>

<?php get_header(); ?>

<section class="section-intro">
    <div class="section__image image-fit">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/images/temp/jpg/section-intro-1.jpg" alt="" />
    </div><!-- /.section__image -->

    <div class="section__body">
        <div class="shell">
            <div class="section__body-holder">
                <blockquote data-aos="fade-up">
                    <h1>Real Estate</h1> 
                </blockquote>
            </div><!-- /.section__body-holder -->
        </div><!-- /.shell -->
    </div><!-- /.section__body -->
</section><!-- /.section-intro -->

<section class="section-content-grid" data-bg="white">
    <div class="section__body">
        <div class="shell">
            <div class="section__body-row">
                <div class="section__body-col" data-aos="fade-up">
                    <h2>Premium Site Selection</h2>
                </div><!-- /.section__body-col -->

                <div class="section__body-col" data-aos="fade-up">
                    <p>Allvision is Canada’s premium digital outdoor media company.</p>

                    <p>We have achieved this through exceptional site selection, cultivating the best locations in top markets.</p>

                    <p>This allows us to sell each sign based on the extraordinary qualities of each location, maximizing the highest revenue potential for each face.</p>

                    <p>
                        <a href="#" class="btn btn--size-large">
                            <span class="btn__body">
                                <span>Contact Our Real Estate Team</span>

                                <i class="ico-arrow">
                                    <svg viewBox="0 0 13.99 13.99">
                                        <path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
                                    </svg>
                                </i>
                            </span>

                            <span class="btn__hover">
                                <span>Contact Our Real Estate Team</span>

                                <i class="ico-arrow">
                                    <svg viewBox="0 0 13.99 13.99">
                                        <path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
                                    </svg>
                                </i>
                            </span>
                        </a>
                    </p>
                </div><!-- /.section__body-col -->
            </div><!-- /.section__body-row -->
        </div><!-- /.shell -->
    </div><!-- /.section__body -->
</section><!-- /.section-content-grid -->

<section class="section-slider-brands" data-bg="gray">
    <div class="section__head" data-aos="fade-up">
        <div class="shell">
            <h3>A Selection of Our Valued Partners</h3>
        </div><!-- /.shell -->
    </div><!-- /.section__head -->

    <div class="section__body" data-aos="fade-up">
        <div class="shell">
            <div class="slider-brands js-slider-brands">
                <div class="slides js__slides">
                    <div class="slide">
                        <a href="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/images/temp/png/slider-brands-1.png" alt="" />
                        </a>
                    </div><!-- /.slide -->

                    <div class="slide">
                        <a href="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/images/temp/png/slider-brands-2.png" alt="" />
                        </a>
                    </div><!-- /.slide -->

                    <div class="slide">
                        <a href="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/images/temp/png/slider-brands-3.png" alt="" />
                        </a>
                    </div><!-- /.slide -->

                    <div class="slide">
                        <a href="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/images/temp/png/slider-brands-4.png" alt="" />
                        </a>
                    </div><!-- /.slide -->

                    <div class="slide">
                        <a href="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/images/temp/png/slider-brands-5.png" alt="" />
                        </a>
                    </div><!-- /.slide -->
                </div><!-- /.slides -->
            </div><!-- /.slider-brands -->
        </div><!-- /.shell -->
    </div><!-- /.section__body -->
</section><!-- /.section-slider-brands -->

<section class="section-image-and-content" data-image-position="right" data-id="must-have-locations" data-bg="white">
    <div class="section__image">
        <span data-parallax="true" data-position="top" data-move="200" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/resources/images/temp/jpg/section-content-and-image-3.jpg);"></span>
    </div><!-- /.section__image -->

    <div class="section__body">
        <div class="shell">
            <div class="section__body-holder">
                <blockquote data-aos="fade-up">
                    <h6>Featured Location • ADT103</h6>

                    <h3>Hwy 407 & Yonge St.</h3>

                    <p>A prime example of Allvision’s digital out-of-home dominance can be found on the award winning highway 407 ETR (Express Toll Route). Considered a luxury highway that avoids congestion of other routes, the 407 ETR is the world’s first electronically operated toll highway.</p>
                </blockquote>
            </div><!-- /.section__body-holder -->
        </div><!-- /.shell -->
    </div><!-- /.section__body -->
</section><!-- /.section-image-and-content -->

<?php get_template_part( 'fragments/section-callout' ); ?>

<?php get_footer(); ?>
