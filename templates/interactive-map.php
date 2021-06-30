<?php
/**
 * Template Name: Interactive Map
 */

get_header();

the_post();

app_render_fragment( 'map-hero' );

app_render_fragment( 'map-content' );

app_render_fragment( 'map' );

get_template_part( 'fragments/section-callout' );

get_footer();
