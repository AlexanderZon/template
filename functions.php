<?php

include(ABSPATH.'wp-content/themes/template/admin/class_admin_menu.php');

add_action( 'after_setup_theme', 'gravura_setup' );

if(!function_exists('gravura_setup')):

	function gravura_setup(){

		if((!get_option('default_pages_activate') == 'true')):

		add_theme_support( 'woocommerce' );

		register_nav_menus( array(

			'topbar' => 'Topbar',

			'header' => 'Header',

			'footer' => 'Footer',

		) );

		$default_pages = array(
			array(
				'title' => 'Inicio',
				'content' => 'Esta es la página de inicio',
				'slug' => 'inicio'
				),
			array(
				'title' => 'El Taller',
				'content' => 'Esta es la página de taller',
				'slug' => 'el_taller'
				),
			array(
				'title' => 'Localización',
				'content' => 'Ésta es la localización',
				'slug' => 'localizacion'
				),
			array(
				'title' => 'Paco Aguilar',
				'content' => 'Ésta es la página de Paco Aguilar',
				'slug' => 'paco_aguiar'
				),
			array(
				'title' => 'Pintura',
				'content' => 'Éstas son las pinturas',
				'slug' => 'pintura'
				),
			array(
				'title' => 'Escultura',
				'content' => 'Éstas son las esculturas',
				'slug' => 'escultura'
				),
			array(
				'title' => 'Exposiciones',
				'content' => 'Éstas son las exposiciones',
				'slug' => 'exposiciones'
				),
			array(
				'title' => 'Dseño Gráfico',
				'content' => 'Aquí está el Diseño Gráfico',
				'slug' => 'diseno_grafico'
				),
			array(
				'title' => 'Proyectos',
				'content' => 'Aquí están los proyectos',
				'slug' => 'proyectos'
				),
			array(
				'title' => 'Datos Biográficos',
				'content' => 'Aquí están los datos biograficos',
				'slug' => 'datos_biograficos'
				),
			array(
				'title' => 'Fondos del Taller',
				'content' => 'Mega Fondos',
				'slug' => 'fondos_del_taller'
				),
			array(
				'title' => 'Artistas',
				'content' => 'Aqui estan los artistas',
				'slug' => 'artistas'
				),
			array(
				'title' => 'Edición de Carpetas',
				'content' => 'Aqui a editar las carpetas',
				'slug' => 'edicion_de_carpetas'
				),
			array(
				'title' => 'ExposicionesActuales',
				'content' => 'Aquí están las Actuales',
				'slug' => 'exposiciones_actuales'
				),
			array(
				'title' => 'Exposiciones Proximas',
				'content' => 'Aquí estan las proximas',
				'slug' => 'exposiciones_proximas'
				),
			array(
				'title' => 'Exposiciones Anteriores',
				'content' => 'Aquí están las anteriores',
				'slug' => 'exposiciones anteriores'
				),
			array(
				'title' => 'Cursos',
				'content' => 'Aquí estan los cursos',
				'slug' => 'cursos'
				),
			array(
				'title' => 'Cursos Próximos',
				'content' => 'Aquí estan los cursos próximos',
				'slug' => 'cursos_proximos'
				),
			array(
				'title' => 'Cursos Anteriores',
				'content' => 'Aquí estan los cursos anteriores',
				'slug' => 'cursos_anteriores'
				),
			array(
				'title' => 'Suscripción o Compra',
				'content' => 'Aquí puedes suscribirte',
				'slug' => 'suscripcion'
				),
			array(
				'title' => 'Blog',
				'content' => 'Aquí está el blog',
				'slug' => 'blog'
				),
			array(
				'title' => 'Formulario',
				'content' => 'Aquí está el formulario de suscripción',
				'slug' => 'formulario'
				)
			);
		
		$post = array(
			'post_title' => '',
			'post_content' => '',
			'post_type' => 'page',
			'post_status' => 'publish',
			'post_name' => '',
			);

		for($i = 0; $i < count($default_pages); $i++):
			$post['post_title'] = $default_pages[$i]['title'];
			$post['post_content'] = $default_pages[$i]['content'];
			$post['post_name'] = $default_pages[$i]['slug'];
			wp_insert_post($post);
		endfor;

		add_option('default_pages_activate', 'true');

		endif;

	}

endif;

?>