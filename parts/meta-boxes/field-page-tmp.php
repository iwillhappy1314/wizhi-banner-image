<?php
/*;
Title: Banner Image
Post Type: page
Context: side
Order: 0
Collapse: false
*/;

piklist( 'field', [
		'type'    => 'file',
		'field'   => 'subimg',
		'options' => [
			'modal_title' => __( 'Set Banner Image', 'wizhi' ),
			'button'      => __( 'Set Banner Image', 'wizhi' ),
		],
	] );

?>