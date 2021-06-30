<?php get_header(); ?>
<?php
$btn = '<a href="%1$s" class="btn btn--size-large">
    <span class="btn__body">
        <span>home page</span>

        <i class="ico-arrow">
            <svg viewBox="0 0 13.99 13.99">
                <path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
            </svg>
        </i>
    </span>

    <span class="btn__hover">
        <span>home page</span>

        <i class="ico-arrow">
            <svg viewBox="0 0 13.99 13.99">
                <path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
            </svg>
        </i>
    </span>
</a>';
?>

<section class="section-default section-default--404">
	<div class="shell">
		<div class="section__content">
			<?php
			app_the_title( '<h2 class="pagetitle">', '</h2>' );

			printf( __( '<p>Please check the URL for proper spelling and capitalization.<br />If you\'re having trouble locating a destination, try visiting the:<br /><br />' . $btn, 'crb' ), home_url( '/' ) );
			?>
		</div><!-- /.section__content -->
	</div><!-- /.shell -->
</section><!-- /.section-default -->

<?php get_footer(); ?>
