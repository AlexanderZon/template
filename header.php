<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?> - Taller de Grabado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Siete27">
    <?php wp_head(); ?>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--[INIT CSS]-->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/css/frontend/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/css/frontend/bootstrap.min.css" /> 
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/css/frontend/bootstrap-responsive.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/css/frontend/bootstrap-responsive.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/style.css" />  
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/css/frontend/responsive.css" /> 
    
    <link href='http://fonts.googleapis.com/css?family=Arbutus+Slab' rel='stylesheet' type='text/css'>
    <!--[END CSS]-->

  </head>

  <body <?php body_class(); ?>>

  	<div class="container cont-gravura">
    	<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            
                <div class="bodycont">
                	<div class="bodybg">
                    	
                        <div class="header-content">
                        	<div class="logo-gravura">
                            	<img src="<?php bloginfo('template_url'); ?>/images/frontend/logo-gravura.gif" alt="Logo Gravura" width="100%">
                            </div>
                            
                            <div class="nav">
                                <div class="nav-menu1">
                                    <ul class="ul-menu-nav">
                                        <li class="li-fgravura nav-title archn txt-gra f-med">Gravura</li>
                                        <ul class="subnav" style="display:block;">
                                        	<li class="li-fgravura archn txt-gre f-mini"><a href="">El Taller</a></li>
                                        	<li class="li-fgravura archn txt-gre f-mini"><a href="">Localizaci&oacute;n</a></li>
                                        </ul>
                                    </ul>
                                </div>
                                
                                <div class="nav-menu2">
                                    <ul class="ul-menu-nav2">
                                        <li class="li-fpaco nav-title archn txt-gra f-med">Paco Aguilar</li>
                                        <ul class="subnav">
                                            <li class="li-fpaco archn txt-gre f-mini"><a href="">Obra Gr&aacute;fica</a></li>
                                            <li class="li-fpaco archn txt-gre f-mini"><a href="">Pintura</a></li>
                                            <li class="li-fpaco archn txt-gre f-mini"><a href="">Escultura</a></li>
                                            <li class="li-fpaco archn txt-gre f-mini"><a href="">Exposiciones</a></li>
                                            <li class="li-fpaco archn txt-gre f-mini"><a href="">Dise&ntilde;o Gr&aacute;fico</a></li>
                                            <li class="li-fpaco archn txt-gre f-mini"><a href="">Proyectos</a></li>
                                            <li class="li-fpaco archn txt-gre f-mini"><a href="">Datos biogr&aacute;ficos</a></li>
                                        </ul>
                                    </ul>
                                </div>
                                
                                <div class="nav-menu3">
                                    <ul class="ul-menu-nav3">
                                        <li class="li-fondos nav-title archn txt-gra f-med">Fondos del Taller</li>
                                        <ul class="subnav">
                                            <li class="li-fondos archn txt-gre f-mini"><a href="">Artistas</a></li>
                                            <li class="li-fondos archn txt-gre f-mini"><a href="">Edici&oacute;n de carpetas</a></li>
                                        </ul>
                                    </ul>
                                </div>
                                
                                <div class="nav-menu4">
                                    <ul class="ul-menu-nav4">
                                        <li class="li-fexpo nav-title archn txt-gra f-med">Exposiciones</li>
                                        <ul class="subnav">
                                            <li class="li-fexpo archn txt-gre f-mini"><a href="">Actual</a></li>
                                            <li class="li-fexpo archn txt-gre f-mini"><a href="">Pr&oacute;ximas</a></li>
                                            <li class="li-fexpo archn txt-gre f-mini"><a href="">Anteriores</a></li>
                                        </ul>
                                    </ul>
                                </div>
                                
                                <div class="nav-menu5">
                                    <ul class="ul-menu-nav5">
                                        <li class="li-fcursos nav-title archn txt-gra f-med">Cursos</li>
                                        <ul class="subnav">
                                            <li class="li-fcursos archn txt-gre f-mini"><a href="">Pr&oacute;ximo</a></li>
                                            <li class="li-fcursos archn txt-gre f-mini"><a href="">Anteriores</a></li>
                                        </ul>
                                    </ul>
                                </div>
                                
                                <div class="nav-menu6">
                                    <ul class="ul-menu-nav6">
                                        <li class="li-fcontact nav-title archn txt-gra f-med">Suscripci&oacute;n o compra</li>
                                        <ul class="subnav">
                                            <li class="li-fcontact archn txt-gre f-mini"><a href="">Blog</a></li>
                                            <li class="li-fcontact archn txt-gre f-mini"><a href="">Form. Suscripci&oacute;n</a></li>
                                            <li class="li-fcontact"> 
                                                <img src="<?php bloginfo('template_url'); ?>/images/frontend/fb-icon.jpg" alt="Facebook Icon" width="100%" class="social-icon">
                                                <img src="<?php bloginfo('template_url'); ?>/images/frontend/tw-icon.jpg" alt="Twitter Icon" width="100%" class="social-icon">
                                                <img src="<?php bloginfo('template_url'); ?>/images/frontend/yt-icon.jpg" alt="Youtube Icon" width="100%" class="social-icon">
                            				</li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>