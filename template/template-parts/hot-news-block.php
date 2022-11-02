<?php
// /**
//  * Template part for displaying Hot news block
//  *
//  *
//  * @package evil-theme
//  */

/** @var array $args */

    $title = $args['title'];
    $text = $args['text'];
    $query_args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'order' => 'ASC',
        'orderby' => 'date',
        'cat' => $args['category'],
        'posts_per_page' => 3,
    );

    // The Query
    $the_query = new WP_Query( $query_args );
?>

<section class="hot-news">
    <div class="container">
        <?php if(! empty($title)): ?>
            <h2 class="hot-news__title title--blue"><?php echo $title; ?></h2>
        <?php endif; ?>

        <?php if(! empty($text)): ?>
            <p class="hot-news__text post-title"><?php echo $text; ?></p>
        <?php endif; ?>
        <?php if (! empty($the_query)): ?>
        <ul class="hot-news__list">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <li class="hot-news__list__item">
                    <a href="<?php the_permalink(); ?>">
                        <div class="hot-news__list__item__image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="hot-news__list__item_content">
                            <h4 class="hot-news__list__item__title title--post"><?php the_title(); ?></h4>
                            <p class="hot-news__list__item__text"><?php the_excerpt(); ?></p>
                        </div>
                    </a>
                </li>
            <?php
                endwhile;
                wp_reset_postdata();
            ?>
        </ul>
        <?php endif; ?>
    </div>
</section>
