<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<section class="section-single">
	    <div class="section__body">
	        <div class="shell shell--small">
	            <div class="post">
	                <div class="post__title" data-aos="fade-up">
	                    <?php app_the_title( '<h1 class="h2 pagetitle">', '</h1>' ); ?>
	                </div><!-- /.post__title -->

					<?php if ( has_post_thumbnail() ) : ?>
						<div class="post__image">
							<?php the_post_thumbnail(); ?>
						</div><!-- /.post__image -->
					<?php endif; ?>

	                <div class="post__entry" data-aos="fade-up">
	                    <?php
						the_content();

						theme_pagination( 'custom' );

						edit_post_link( __( 'Edit this entry.', 'crb' ), '<p>', '</p>' );
						?>
	                </div><!-- /.post__entry -->
	            </div><!-- /.post -->
	        </div><!-- /.shell -->
	    </div><!-- /.section__body -->
	</section><!-- /.section-single -->
<?php endwhile; ?>

<?php get_template_part( 'fragments/section-callout' ); ?>

<?php get_footer(); ?>
