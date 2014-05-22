<?php

class ClassRoles extends ClassParent{

	public function __construct(){

		#remove_role('el_manager');
		#remove_role('el_coordinador');
		if( ( $role = add_role('grav_artist', 'Artista') ) != null)
			$this->initializeArtistRole($role);
		if( ( $role = add_role('grav_publisher', 'Publisher') ) != null)
			$this->initializePublisherRole($role);

	}

	public function initializePublisherRole($role){

		$role->add_cap('manage_picture');
		$role->add_cap('view_pictures');
		$role->add_cap('make_pictures');
		$role->add_cap('edit_pictures');		
		$role->add_cap('delete_pictures');	
		$role->add_cap('activate_pictures');

		$role->add_cap('manage_sculptures');
		$role->add_cap('view_sculptures');
		$role->add_cap('make_sculptures');
		$role->add_cap('edit_sculptures');		
		$role->add_cap('delete_sculptures');

		$role->add_cap('manage_exhibitions');
		$role->add_cap('view_exhibitions');
		$role->add_cap('make_exhibitions');
		$role->add_cap('edit_exhibitions');		
		$role->add_cap('delete_exhibitions');	
		$role->add_cap('activate_exhibitions');

		$role->add_cap('manage_projects');
		$role->add_cap('view_projects');
		$role->add_cap('make_projects');
		$role->add_cap('edit_projects');		
		$role->add_cap('delete_projects');	
		$role->add_cap('activate_projects');

		$role->add_cap('manage_courses');
		$role->add_cap('view_courses');
		$role->add_cap('make_courses');
		$role->add_cap('edit_courses');		
		$role->add_cap('delete_courses');
		$role->add_cap('activate_courses');

		$role->add_cap('manage_design');	
		$role->add_cap('view_design');
		$role->add_cap('make_design');
		$role->add_cap('edit_design');		
		$role->add_cap('delete_design');	
		$role->add_cap('activate_design');

		$role->add_cap('manage_reportes');
		$role->add_cap('view_reportes');
		$role->add_cap('print_reportes');

		# WP Capabilities

		#$role->add_cap('manage_options');

		#$role->add_cap('create_users');
		#$role->add_cap('delete_users');
		#$role->add_cap('edit_users');
		#$role->add_cap('list_users');
		$role->add_cap('moderate_comments');
		$role->add_cap('manage_categories');		
		$role->add_cap('edit_others_posts');
		$role->add_cap('delete_others_posts');
		$role->add_cap('delete_private_posts');
		$role->add_cap('edit_private_posts');
		$role->add_cap('read_private_posts');
		$role->add_cap('edit_published_posts');
		$role->add_cap('upload_files');
		$role->add_cap('publish_posts');
		$role->add_cap('edit_posts');
		$role->add_cap('delete_posts');
		$role->add_cap('read');

	}

	public function initializeArtistRole($role){

		#$role = add_role('el_estudiante', 'Estudiante');

		
		$role->add_cap('manage_picture');
		$role->add_cap('view_pictures');
		$role->add_cap('make_pictures');
		$role->add_cap('edit_pictures');		
		$role->add_cap('delete_pictures');	
		$role->add_cap('activate_pictures');

		$role->add_cap('manage_sculptures');
		$role->add_cap('view_sculptures');
		$role->add_cap('make_sculptures');
		$role->add_cap('edit_sculptures');		
		$role->add_cap('delete_sculptures');

		$role->add_cap('manage_exhibitions');
		$role->add_cap('view_exhibitions');
		$role->add_cap('make_exhibitions');
		$role->add_cap('edit_exhibitions');		
		$role->add_cap('delete_exhibitions');	
		$role->add_cap('activate_exhibitions');

		$role->add_cap('manage_projects');
		$role->add_cap('view_projects');
		$role->add_cap('make_projects');
		$role->add_cap('edit_projects');		
		$role->add_cap('delete_projects');	
		$role->add_cap('activate_projects');

		$role->add_cap('manage_courses');
		$role->add_cap('view_courses');
		$role->add_cap('make_courses');
		$role->add_cap('edit_courses');		
		$role->add_cap('delete_courses');
		$role->add_cap('activate_courses');

		$role->add_cap('manage_design');	
		$role->add_cap('view_design');
		$role->add_cap('make_design');
		$role->add_cap('edit_design');		
		$role->add_cap('delete_design');	
		$role->add_cap('activate_design');

		$role->add_cap('manage_reportes');
		$role->add_cap('view_reportes');
		$role->add_cap('print_reportes');

		# WP Capabilities

		#$role->add_cap('manage_options');

		$role->add_cap('read');

	}

}

$obj = new ClassRoles();

?>