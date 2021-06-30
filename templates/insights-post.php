<?php
/**
 * Template Name: Insights Post
 * Static: Yes # Remove this line once the template is integrated with the CMS
 */
?>

<?php get_header(); ?>

<section class="section-intro section-intro--sample">
    <div class="section__body">
        <div class="shell">
            <div class="section__body-holder">
                <blockquote data-aos="fade-up">
                    <a href="#" class="btn-link-secondary btn-link-secondary--color-white">
                        <i class="ico-arrow ico-arrow--reverse">
                            <svg viewBox="0 0 13.99 13.99">
                                <path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
                            </svg>
                        </i>

                        <span>Back to Insights</span>
                    </a>

                    <h1>Toronto Traffic Levels Surge <br /> To Almost Pre-Pandemic Levels.</h1>
                </blockquote>
            </div><!-- /.section__body-holder -->
        </div><!-- /.shell -->
    </div><!-- /.section__body -->
</section><!-- /.section-intro -->

<section class="section-single-author">
    <div class="section__body">
        <div class="shell">
            <div class="section__body-holder">
                <div class="section__body-author" data-aos="fade-up">
                    <div class="block-author">
                        <div class="block__image">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/images/temp/jpg/list-team-3.jpg" alt="" />
                        </div><!-- /.block__image -->

                        <div class="block__body">
                            <h6>Author Name</h6>

                            <p>MAY 23, 2021</p>
                        </div><!-- /.block__body -->
                    </div><!-- /.block-author -->
                </div><!-- /.section__body-author -->

                <div class="section__body-entry" data-aos="fade-up">
                    <div class="post">
                        <div class="post__entry">
                            <p>New data shows that Toronto driving patterns are rising to within 10% of pre-pandemic travel benchmarks, and sometimes exceeding them, and are expected to continue to grow throughout the summer months.</p>

                            <p>As the province and city move to ease restrictions, travel and commuter patterns are expected to grow dramatically. Historical data indicates that lockdown-weary Torontonians will transition outside and capitalize on the spring and summer month’s activities at impressive levels.</p>

                            <p>Analyzing Apple Mobility post-lockdown data from 2020 shows surges to 60% over baseline travel rates between July and October, with predictable high points around long weekends such as the August Civic Holiday and Labour Day. With foreign and air travel still restricted, and the US border closed indefinitely, hyperlocal travel is expected to continue dominating Canadian travel patterns.</p>

                            <p>Last summer’s increase in travel also lead to a surge in demand for out-of-home advertising, particularly digital-out-of-home inventory, with sell-outs in some markets. As Torontonians start hitting the road again, now is the perfect time to start planning and locking down out-of-home inventory for spring and summer campaigns.</p>

                            <div class="wp-caption">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/images/temp/jpg/post-entry-1.jpg" alt="" />

                                <span class="wp-caption-text">Apple Mobility Trends (https://covid19.apple.com/mobility), March 25, 2021</span>
                            </div><!-- /.wp-caption -->
                        </div><!-- /.post__entry -->
                    </div><!-- /.post -->
                </div><!-- /.section__body-entry -->
            </div><!-- /.section__body-holder -->
        </div><!-- /.shell -->
    </div><!-- /.section__body -->
</section><!-- /.section-single-author -->

<section class="section-share">
    <div class="section__body" data-aos="fade-up">
        <div class="shell">
            <nav class="nav-share">
                <p>Share</p>

                <ul>
                    <li>
                        <a href="#">
                            <i class="fas fa-share-alt"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                </ul>
            </nav><!-- /.nav-share -->
        </div><!-- /.shell -->
    </div><!-- /.section__body -->
</section><!-- /.section-share -->

<?php get_template_part( 'fragments/section-callout' ); ?>

<?php get_footer(); ?>
