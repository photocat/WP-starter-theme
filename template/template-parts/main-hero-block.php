<?php
// /**
//  * Template part for displaying Main hero block
//  *
//  *
//  * @package evil-theme
//  */

/** @var array $args */

    $title = $args['title'];
    $text = $args['text'];
    $color = $args['color'];
    $image = $args['image'];
    $button = $args['button'];
    $after_button_text = $args['after_button_text'];
?>

<section class="main-hero" <?php echo ! empty($color) ? 'style="background-color:' . $color .';"' : ''; ?>>
    <div class="container">
        <?php if(! empty($title)): ?>
            <h1 class="main-hero__title title"><?php echo $title; ?></h1>
        <?php endif; ?>

        <?php if(! empty($text)): ?>
            <p class="main-hero__text"><?php echo $text; ?></p>
        <?php endif; ?>

        <?php if(! empty($button['url'] && ! empty($button['title']))): ?>

        <div class="main-hero__cta-wrapper">
            <a
                class="main-hero__cta cta"
                target="<?php echo $button['target']; ?>"
                href="<?php echo $button['url']; ?>">
                <?php echo $button['title']; ?>
            </a>
            <?php endif; ?>

            <?php if(! empty($after_button_text)): ?>
                <span class="main-hero__after-cta-text"><?php echo $after_button_text; ?></span>
            <?php endif; ?>
        </div>
    </div>
    <?php if(! empty($image)): ?>
        <img  class="main-hero__image" src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
    <?php endif; ?>
    <div class="main-hero__scroll-down js-scroll-down">
        <svg width="23" height="15" viewBox="0 0 23 15" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.70891 0L0 3.70628L11.1215 14.8278L22.243 3.70628L18.534 0L11.1215 7.41519L3.70891 0Z" fill="currentColor"/>
        </svg>
    </div>

</section>
