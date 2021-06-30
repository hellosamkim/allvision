<?php

function app_load_menu_field_choices( $field ) {
	$menus                = get_terms( 'nav_menu' );
	$field['choices'][''] = __( 'Select a Menu', 'app' );

	if ( ! empty( $menus ) ) {
		foreach( $menus as $menu ) {
			$field['choices'][ $menu->term_id ] = $menu->name;
		}
	}
	// return the field
	return $field;

}
add_filter( 'acf/load_field/name=app_menu', 'app_load_menu_field_choices' );

function app_load_gf_field_choices( $field ) {
	// reset choices
	$field['choices'] = array();

	if ( ! class_exists( 'GFCommon' ) ) {
		return $field;
	}

	$forms = GFAPI::get_forms();


	if ( is_array( $forms ) ) {
		$field['choices'][''] = __( 'Select a Form', 'app' );

		foreach( $forms as $form ) {
			$field['choices'][ $form['id'] ] = $form['title'];
		}
	}

	// return the field
	return $field;

}
add_filter( 'acf/load_field/name=app_gform', 'app_load_gf_field_choices' );