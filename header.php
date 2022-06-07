<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title>SpaarnestadPhoto Exposities</title>
	<meta name="Author" content="Daisy Tammer"/>
	<link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/menu.js"></script>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="MenuContainer">   
        <nav>
            <ul>
                <li class="navlogo">
                    <a href=<?php echo get_home_url(); ?>><img src="<?php bloginfo('template_url'); ?>/img/logo.png"></a>
                </li>
            </ul>
            <?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
        </nav>
    </div>
    
    <!-- START Mobile Design  -->
    
    <a href="#" class="MenuButton"><img src="<?php bloginfo('template_url'); ?>/img/menu.svg"></a>
    <a href="#" class="MenuButtonClose"><img src="<?php bloginfo('template_url'); ?>/img/menuClose.svg"></a>
    <div class="blackscreen"></div>
    
    <!-- END Mobile Design   -->
    
    <div class="Container fullscreenImage">
    