<?php

function monportefolio_widgets_init() {
	//require get_template_directory() . '/inc/widgets.php';
	//register_widget( 'MonPortefolio_Sidebar' );

	register_sidebar(
		array(
			'name'          => __( 'Barre latérale', 'monportefolio' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Main sidebar that appears on the left.', 'monportefolio' ),
			'before_widget' => '<div id="text-3" class="widget widget_text">',
			'after_widget'  => '</div><hr class="divider-green">',
			'before_title'  => '<div class="widget-title">',
			'after_title'   => '</div>',
		)
	);

}
//add_action( 'widgets_init', 'monportefolio_widgets_init' );