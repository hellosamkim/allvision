<?php
/**
 * Template Name: Search Results
 * Static: Yes # Remove this line once the template is integrated with the CMS
 */
?>

<?php get_header(); ?>

<section class="section-intro section-intro--sample">
    <div class="section__body">
        <div class="shell">
            <div class="section__body-holder">
                <blockquote data-aos="fade-up">
                    <h1 class="h1">Search <br /> Results</h1>
                </blockquote>
            </div><!-- /.section__body-holder -->
        </div><!-- /.shell -->
    </div><!-- /.section__body -->
</section><!-- /.section-intro -->

<section class="section-search">
    <div class="shell">
        <div class="section__head">
            <h2>Searched: Toronto</h2>
        </div><!-- /.section__head -->

        <div class="section__body">
            <div class="list-search">
                <div class="list__body">                
                    <ul>
                        <li data-aos="fade-up">
                            <accordion class="accordion-search">
                                <div class="accordion__body">
                                    <h4>Locations</h4>

                                    <p>Allvision has nearly 40 Premium Large Format digital out-of-home screens in Canada’s largest and wealthiest city…</p>

                                    <a href="#" class="btn-link">
                                        <span>Explore</span>

                                        <i class="ico-arrow">
                                            <svg viewBox="0 0 13.99 13.99">
                                                <path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
                                            </svg>
                                        </i>
                                    </a>
                                </div><!-- /.accordion__body -->
                            </accordion><!-- /.accordion-search -->
                        </li>

                        <li data-aos="fade-up">
                            <accordion class="accordion-search">
                                <div class="accordion__body">
                                    <h4>Location Map</h4>

                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt…</p>

                                    <a href="#" class="btn-link">
                                        <span>Explore</span>

                                        <i class="ico-arrow">
                                            <svg viewBox="0 0 13.99 13.99">
                                                <path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
                                            </svg>
                                        </i>
                                    </a>
                                </div><!-- /.accordion__body -->
                            </accordion><!-- /.accordion-search -->
                        </li>

                        <li data-aos="fade-up">
                            <accordion class="accordion-search">
                                <div class="accordion__body">
                                    <h4>Inspiration</h4>

                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt…</p>

                                    <a href="#" class="btn-link">
                                        <span>Explore</span>

                                        <i class="ico-arrow">
                                            <svg viewBox="0 0 13.99 13.99">
                                                <path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
                                            </svg>
                                        </i>
                                    </a>
                                </div><!-- /.accordion__body -->
                            </accordion><!-- /.accordion-search -->
                        </li>

                        <li data-aos="fade-up">
                            <accordion class="accordion-search">
                                <div class="accordion__body">
                                    <h4>Insight Post Title Here</h4>

                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt…</p>

                                    <a href="#" class="btn-link">
                                        <span>Explore</span>

                                        <i class="ico-arrow">
                                            <svg viewBox="0 0 13.99 13.99">
                                                <path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
                                            </svg>
                                        </i>
                                    </a>
                                </div><!-- /.accordion__body -->

                                <div class="accordion__image">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/images/temp/jpg/article-search-1.jpg" alt="" />
                                </div><!-- /.accordion__image -->
                            </accordion><!-- /.accordion-search -->
                        </li>

                        <li data-aos="fade-up">
                            <accordion class="accordion-search">
                                <div class="accordion__body">
                                    <h4>Insight Post Title Here</h4>

                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt…</p>

                                    <a href="#" class="btn-link">
                                        <span>Explore</span>

                                        <i class="ico-arrow">
                                            <svg viewBox="0 0 13.99 13.99">
                                                <path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
                                            </svg>
                                        </i>
                                    </a>
                                </div><!-- /.accordion__body -->

                                <div class="accordion__image">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/images/temp/jpg/article-search-1.jpg" alt="" />
                                </div><!-- /.accordion__image -->
                            </accordion><!-- /.accordion-search -->
                        </li>
                    </ul>
                </div><!-- /.list__body -->

                <div class="list__actions">
                    <nav class="nav-pagination">
                        <p>END OF SEARCH RESULTS</p>
                    </nav><!-- /.nav-pagination -->
                </div><!-- /.list__actions -->
            </div><!-- /.list-search -->
        </div><!-- /.section__body -->
    </div><!-- /.shell -->
</section><!-- /.section-search -->

<?php get_template_part( 'fragments/section-callout' ); ?>

<?php get_footer(); ?>
