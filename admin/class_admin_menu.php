<?php

add_action( 'admin_menu', 'menu_initializer');

if(!function_exists('menu_initializer')):

	function menu_initializer(){

		add_menu_page(__('Pinturas'), __('Pinturas'), 'manage_options', 'pictures_page', 'pictures_page_initializer');
		add_menu_page(__('Esculturas'), __('Esculturas'), 'manage_options', 'sculptures_page', 'sculptures_page_initializer');
		add_menu_page(__('Exposiciones'), __('Exposiciones'), 'manage_options', 'exhibitions_page', 'exhibitions_page_initializer');
		add_menu_page(__('Proyectos'), __('Proyectos'), 'manage_options', 'projects_page', 'projects_page_initializer');
		add_menu_page(__('Cursos'), __('Cursos'), 'manage_options', 'courses_page', 'courses_page_initializer');
		add_menu_page(__('Diseños'), __('Diseños'), 'manage_options', 'designs_page', 'designs_page_initializer');

		add_submenu_page('pictures_page', __('Añadir'), __('Añadir'), 'manage_options', 'add_pictures_page', 'add_pictures_page_initializer');
		add_submenu_page('pictures_page', __('Editar'), __('Editar'), 'manage_options', 'edit_pictures_page', 'edit_pictures_page_initializer');
		add_submenu_page('pictures_page', __('Eliminar'), __('Eliminar'), 'manage_options', 'delete_pictures_page', 'delete_pictures_page_initializer');

		add_submenu_page('sculptures_page', __('Añadir'), __('Añadir'), 'manage_options', 'add_sculptures_page', 'add_sculptures_page_initializer');
		add_submenu_page('sculptures_page', __('Editar'), __('Editar'), 'manage_options', 'edit_sculptures_page', 'edit_sculptures_page_initializer');
		add_submenu_page('sculptures_page', __('Eliminar'), __('Eliminar'), 'manage_options', 'delete_sculptures_page', 'delete_sculptures_page_initializer');

		add_submenu_page('exhibitions_page', __('Añadir'), __('Añadir'), 'manage_options', 'add_exhibitions_page', 'add_exhibitions_page_initializer');
		add_submenu_page('exhibitions_page', __('Editar'), __('Editar'), 'manage_options', 'edit_exhibitions_page', 'edit_exhibitions_page_initializer');
		add_submenu_page('exhibitions_page', __('Eliminar'), __('Eliminar'), 'manage_options', 'delete_exhibitions_page', 'delete_exhibitions_page_initializer');

		add_submenu_page('projects_page', __('Añadir'), __('Añadir'), 'manage_options', 'add_projects_page', 'add_projects_page_initializer');
		add_submenu_page('projects_page', __('Editar'), __('Editar'), 'manage_options', 'edit_projects_page', 'edit_projects_page_initializer');
		add_submenu_page('projects_page', __('Eliminar'), __('Eliminar'), 'manage_options', 'delete_projects_page', 'delete_projects_page_initializer');

		add_submenu_page('courses_page', __('Añadir'), __('Añadir'), 'manage_options', 'add_courses_page', 'add_courses_page_initializer');
		add_submenu_page('courses_page', __('Editar'), __('Editar'), 'manage_options', 'edit_courses_page', 'edit_courses_page_initializer');
		add_submenu_page('courses_page', __('Eliminar'), __('Eliminar'), 'manage_options', 'delete_courses_page', 'delete_courses_page_initializer');

		add_submenu_page('designs_page', __('Añadir'), __('Añadir'), 'manage_options', 'add_designs_page', 'add_designs_page_initializer');
		add_submenu_page('designs_page', __('Editar'), __('Editar'), 'manage_options', 'edit_designs_page', 'edit_designs_page_initializer');
		add_submenu_page('designs_page', __('Eliminar'), __('Eliminar'), 'manage_options', 'delete_designs_page', 'delete_designs_page_initializer');

	}

endif;

if(!function_exists('pictures_page_initializer')):

	function pictures_page_initializer(){

		if( ! class_exists( 'WP_List_Table' ) ) {
		    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
		}

		class Pictures_List_Table extends WP_List_Table {

			function __construct(){
				$this->_args = array(
					array(
					    'post_title' => 'Loren Ipsum',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '2014',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),
					array(
					    'post_title' => 'La Gioconda',
					    'picture_dim' => '42cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1500',
					    'post_author' => 'Antony',
					    'picture_price' => '12000.00'),
					array(
					    'post_title' => 'Venus',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1456',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),
					array(
					    'post_title' => 'El Grito',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1208',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),
					array(
					    'post_title' => 'Otra',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1991',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),					
					);
				$this->prepare_items();
				$this->display();
			}

			function get_columns(){
			  $columns = array(
			    'post_title' => 'Título',
			    'picture_dim' => 'Dimensiones',
			    'picture_tecnique' => 'Técnica',
			    'picture_year' => 'Año',
			    'post_author' => 'Autor',
			    'picture_price' => 'Precio'
			  );
			  return $columns;
			}

			function prepare_items() {
			  $columns = $this->get_columns();
			  $hidden = array();
			  $sortable = array();
			  $this->_column_headers = array($columns, $hidden, $sortable);
			  $this->items = $this->_args;;
			}

			function column_default( $item, $column_name ) {
			  switch( $column_name ) { 
			    case 'post_title':
			    case 'picture_dim':
			    case 'picture_tecnique':
			    case 'picture_year':
			    case 'post_author':
			    case 'picture_price':
			      return $item[ $column_name ];
			    default:
			      return print_r( $item, true ) ; 
			  }
			}

		}

		$myTable = new Pictures_List_Table();

	}

endif;

if(!function_exists('sculptures_page_initializer')):

	function sculptures_page_initializer(){

		if( ! class_exists( 'WP_List_Table' ) ) {
		    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
		}

		class Sculptures_List_Table extends WP_List_Table {

			function __construct(){
				$this->_args = array(
					array(
					    'post_title' => 'Loren Ipsum',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '2014',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),
					array(
					    'post_title' => 'La Gioconda',
					    'picture_dim' => '42cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1500',
					    'post_author' => 'Antony',
					    'picture_price' => '12000.00'),
					array(
					    'post_title' => 'Venus',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1456',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),
					array(
					    'post_title' => 'El Grito',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1208',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),
					array(
					    'post_title' => 'Otra',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1991',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),					
					);
				$this->prepare_items();
				$this->display();
			}

			function get_columns(){
			  $columns = array(
			    'post_title' => 'Título',
			    'picture_dim' => 'Dimensiones',
			    'picture_tecnique' => 'Técnica',
			    'picture_year' => 'Año',
			    'post_author' => 'Autor',
			    'picture_price' => 'Precio'
			  );
			  return $columns;
			}

			function prepare_items() {
			  $columns = $this->get_columns();
			  $hidden = array();
			  $sortable = array();
			  $this->_column_headers = array($columns, $hidden, $sortable);
			  $this->items = $this->_args;;
			}

			function column_default( $item, $column_name ) {
			  switch( $column_name ) { 
			    case 'post_title':
			    case 'picture_dim':
			    case 'picture_tecnique':
			    case 'picture_year':
			    case 'post_author':
			    case 'picture_price':
			      return $item[ $column_name ];
			    default:
			      return print_r( $item, true ) ; 
			  }
			}

		}

		$myTable = new Sculptures_List_Table();

	}

endif;

if(!function_exists('exhibitions_page_initializer')):

	function exhibitions_page_initializer(){

		if( ! class_exists( 'WP_List_Table' ) ) {
		    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
		}

		class Exhibitions_List_Table extends WP_List_Table {

			function __construct(){
				$this->_args = array(
					array(
					    'post_title' => 'Loren Ipsum',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '2014',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),
					array(
					    'post_title' => 'La Gioconda',
					    'picture_dim' => '42cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1500',
					    'post_author' => 'Antony',
					    'picture_price' => '12000.00'),
					array(
					    'post_title' => 'Venus',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1456',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),
					array(
					    'post_title' => 'El Grito',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1208',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),
					array(
					    'post_title' => 'Otra',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1991',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),					
					);
				$this->prepare_items();
				$this->display();
			}

			function get_columns(){
			  $columns = array(
			    'post_title' => 'Título',
			    'picture_dim' => 'Dimensiones',
			    'picture_tecnique' => 'Técnica',
			    'picture_year' => 'Año',
			    'post_author' => 'Autor',
			    'picture_price' => 'Precio'
			  );
			  return $columns;
			}

			function prepare_items() {
			  $columns = $this->get_columns();
			  $hidden = array();
			  $sortable = array();
			  $this->_column_headers = array($columns, $hidden, $sortable);
			  $this->items = $this->_args;;
			}

			function column_default( $item, $column_name ) {
			  switch( $column_name ) { 
			    case 'post_title':
			    case 'picture_dim':
			    case 'picture_tecnique':
			    case 'picture_year':
			    case 'post_author':
			    case 'picture_price':
			      return $item[ $column_name ];
			    default:
			      return print_r( $item, true ) ; 
			  }
			}

		}

		$myTable = new Exhibitions_List_Table();

	}

endif;

if(!function_exists('projects_page_initializer')):

	function projects_page_initializer(){

		if( ! class_exists( 'WP_List_Table' ) ) {
		    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
		}

		class Projects_List_Table extends WP_List_Table {

			function __construct(){
				$this->_args = array(
					array(
					    'post_title' => 'Loren Ipsum',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '2014',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),
					array(
					    'post_title' => 'La Gioconda',
					    'picture_dim' => '42cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1500',
					    'post_author' => 'Antony',
					    'picture_price' => '12000.00'),
					array(
					    'post_title' => 'Venus',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1456',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),
					array(
					    'post_title' => 'El Grito',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1208',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),
					array(
					    'post_title' => 'Otra',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1991',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),					
					);
				$this->prepare_items();
				$this->display();
			}

			function get_columns(){
			  $columns = array(
			    'post_title' => 'Título',
			    'picture_dim' => 'Dimensiones',
			    'picture_tecnique' => 'Técnica',
			    'picture_year' => 'Año',
			    'post_author' => 'Autor',
			    'picture_price' => 'Precio'
			  );
			  return $columns;
			}

			function prepare_items() {
			  $columns = $this->get_columns();
			  $hidden = array();
			  $sortable = array();
			  $this->_column_headers = array($columns, $hidden, $sortable);
			  $this->items = $this->_args;;
			}

			function column_default( $item, $column_name ) {
			  switch( $column_name ) { 
			    case 'post_title':
			    case 'picture_dim':
			    case 'picture_tecnique':
			    case 'picture_year':
			    case 'post_author':
			    case 'picture_price':
			      return $item[ $column_name ];
			    default:
			      return print_r( $item, true ) ; 
			  }
			}

		}

		$myTable = new Projects_List_Table();

	}

endif;

if(!function_exists('courses_page_initializer')):

	function courses_page_initializer(){

		if( ! class_exists( 'WP_List_Table' ) ) {
		    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
		}

		class Courses_List_Table extends WP_List_Table {

			function __construct(){
				$this->_args = array(
					array(
					    'post_title' => 'Loren Ipsum',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '2014',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),
					array(
					    'post_title' => 'La Gioconda',
					    'picture_dim' => '42cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1500',
					    'post_author' => 'Antony',
					    'picture_price' => '12000.00'),
					array(
					    'post_title' => 'Venus',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1456',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),
					array(
					    'post_title' => 'El Grito',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1208',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),
					array(
					    'post_title' => 'Otra',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1991',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),					
					);
				$this->prepare_items();
				$this->display();
			}

			function get_columns(){
			  $columns = array(
			    'post_title' => 'Título',
			    'picture_dim' => 'Dimensiones',
			    'picture_tecnique' => 'Técnica',
			    'picture_year' => 'Año',
			    'post_author' => 'Autor',
			    'picture_price' => 'Precio'
			  );
			  return $columns;
			}

			function prepare_items() {
			  $columns = $this->get_columns();
			  $hidden = array();
			  $sortable = array();
			  $this->_column_headers = array($columns, $hidden, $sortable);
			  $this->items = $this->_args;;
			}

			function column_default( $item, $column_name ) {
			  switch( $column_name ) { 
			    case 'post_title':
			    case 'picture_dim':
			    case 'picture_tecnique':
			    case 'picture_year':
			    case 'post_author':
			    case 'picture_price':
			      return $item[ $column_name ];
			    default:
			      return print_r( $item, true ) ; 
			  }
			}

		}

		$myTable = new Courses_List_Table();

	}

endif;

if(!function_exists('designs_page_initializer')):

	function designs_page_initializer(){

		if( ! class_exists( 'WP_List_Table' ) ) {
		    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
		}

		class Designs_List_Table extends WP_List_Table {

			function __construct(){
				$this->_args = array(
					array(
					    'post_title' => 'Loren Ipsum',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '2014',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),
					array(
					    'post_title' => 'La Gioconda',
					    'picture_dim' => '42cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1500',
					    'post_author' => 'Antony',
					    'picture_price' => '12000.00'),
					array(
					    'post_title' => 'Venus',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1456',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),
					array(
					    'post_title' => 'El Grito',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1208',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),
					array(
					    'post_title' => 'Otra',
					    'picture_dim' => '24cmx36cm',
					    'picture_tecnique' => 'Con la Mano',
					    'picture_year' => '1991',
					    'post_author' => 'Antony',
					    'picture_price' => '2000.00'),					
					);
				$this->prepare_items();
				$this->display();
			}

			function get_columns(){
			  $columns = array(
			    'post_title' => 'Título',
			    'picture_dim' => 'Dimensiones',
			    'picture_tecnique' => 'Técnica',
			    'picture_year' => 'Año',
			    'post_author' => 'Autor',
			    'picture_price' => 'Precio'
			  );
			  return $columns;
			}

			function prepare_items() {
			  $columns = $this->get_columns();
			  $hidden = array();
			  $sortable = array();
			  $this->_column_headers = array($columns, $hidden, $sortable);
			  $this->items = $this->_args;;
			}

			function column_default( $item, $column_name ) {
			  switch( $column_name ) { 
			    case 'post_title':
			    case 'picture_dim':
			    case 'picture_tecnique':
			    case 'picture_year':
			    case 'post_author':
			    case 'picture_price':
			      return $item[ $column_name ];
			    default:
			      return print_r( $item, true ) ; 
			  }
			}

		}

		$myTable = new Designs_List_Table();

	}

endif;