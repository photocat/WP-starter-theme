<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package evil-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="page" class="site">
	    <header id="masthead" class="header">
            <div class="header__wrapper">
                <div class="header__site-branding">
                    <?php the_custom_logo(); ?>
                </div><!-- .site-branding -->

                <nav id="site-navigation" class="header__main-navigation">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                            )
                        );
                    ?>
                </nav><!-- #site-navigation -->
                <div class="header__search">
                    <?php get_search_form(); ?>
                </div>
                <button class="header__main-navigation__menu-toggle js-mobile-menu menu-btn"
                        aria-controls="primary-menu"
                        aria-expanded="false">
                    <span class="menu-btn__burger"></span>
                </button>
            </div>
	    </header><!-- #masthead -->
