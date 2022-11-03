<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package evil-theme
 */
?>

            <footer class="footer">
                <div class="footer__wrapper">
                    <div class="header__site-branding">
                        <?php the_custom_logo(); ?>
                    </div><!-- .site-branding -->
                    <?php get_sidebar( 'footer' ); ?>
                </div>
            </footer><!-- footer -->
        </div><!-- #page -->
        <?php wp_footer(); ?>
    </body>
</html>
