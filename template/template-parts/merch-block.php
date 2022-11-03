<?php
// /**
//  * Template part for displaying Merch block
//  *
//  *
//  * @package evil-theme
//  */

/** @var array $args */

$title = $args['title'];
$text = $args['text'];
$query_args = array(
    'post_type' => 'merch',
    'post_status' => 'publish',
    'order' => 'ASC',
    'orderby' => 'date',
    'posts_per_page' => 2,
);

// The Query
$the_query = new WP_Query( $query_args );
?>

<section class="merch">
    <div class="container">
        <?php if(! empty($title)): ?>
            <h2 class="merch__title title--blue"><?php echo $title; ?></h2>
        <?php endif; ?>

        <?php if(! empty($text)): ?>
            <p class="merch__text post-title"><?php echo $text; ?></p>
        <?php endif; ?>

        <?php if (! empty($the_query)): ?>
        <div class="merch__swiper">
            <div class="swiper-wrapper">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="swiper-slide merch__swiper__slide">
                        <a href="<?php the_permalink(); ?>">
                            <div class="merch__swiper__slide__content">
                                <h4 class="merch__swiper__slide__title"><?php the_title(); ?></h4>
                                <div class="merch__swiper__slide__text"><?php the_content(); ?></div>
                            </div>
                            <div class="merch__swiper__slide__image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </a>
                    </div>

                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="merch__swiper__controls">
            <div class="merch__swiper__controls__pagination"></div>
            <div class="merch__swiper__controls__navigation">
                <div class="swiper-button swiper-button-prev"></div>
                <div class="swiper-button swiper-button-next"></div>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <div class="merch__bg"></div>
</section>
