<?php
// /**
//  * Template part for displaying Clients block
//  *
//  *
//  * @package evil-theme
//  */

$query_args = array(
    'post_type' => 'clients',
    'post_status' => 'publish',
    'order' => 'ASC',
    'orderby' => 'date',
    'posts_per_page' => 6,
);

// The Query
$the_query = new WP_Query( $query_args );
?>

<section class="clients">
    <div class="container">
        <h2 class="clients__title title--white">Clients</h2>
        <?php if ( $the_query->have_posts() ) : ?>
            <div class="clients__grid">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="clients__grid__item">
                        <div class="clients__grid__item__image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
