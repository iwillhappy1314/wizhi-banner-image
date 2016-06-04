<?php
/*
Title: Banner Image
Taxonomy: category
Order: 0
*/

piklist( 'field', [
		'type'    => 'file',
		'field'   => 'subimg',
		'label'   => __( 'Set Banner Image', 'wizhi' ),
		'options' => [
			'modal_title' => __( 'Set Banner Image', 'wizhi' ),
			'button'      => __( 'Set Banner Image', 'wizhi' ),
		],
	] );

?>