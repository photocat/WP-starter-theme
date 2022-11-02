<?php
    /**
    /* Template for displaying home page
    * @package evil-theme
    */

    $hero = get_field('main_hero_block');
    $hot_news = get_field('hot_news');

    get_header();

    get_template_part('template-parts/main','hero-block', array(
        'image' => $hero['main_hero_block_background_image'],
        'color' => $hero['main_hero_block_background_color'],
        'title' => $hero['main_hero_block_title'],
        'text' => $hero['main_hero_block_text'],
        'button' => $hero['main_hero_block_button'],
        'after_button_text' => $hero['main_hero_block_after_button_text'],
    ));

    get_template_part('template-parts/hot-news-block',null, array(
        'title' => $hot_news['hot_news_title'],
        'text' => $hot_news['hot_news_text'],
        'category' => $hot_news['hot_news_category'],
    ));

    get_template_part('template-parts/merch-block',null, array(
        'title' => $hot_news['hot_news_title'],
        'text' => $hot_news['hot_news_text'],
    ));

    get_footer();
?>