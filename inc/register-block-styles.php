<?php 


//Register block styles.
function chimera_register_block_styles() {

	$block_styles = array(
		'core/button'         => array(
			'shadow' => __( 'Shadow', 'chimera' ),
		),
		'core/group'           => array(
			'grey'       => __( 'Grey', 'chimera' ),
			'shadow' => __( 'Shadow', 'chimera' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'chimera_register_block_styles' );