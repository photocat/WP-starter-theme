<?php
// /**
//  * Template part for displaying About us block
//  *
//  *
//  * @package evil-theme
//  */

/** @var array $args */

$title = $args['title'];
$text = $args['text'];

?>

<section class="about-us">
    <div class="container">
        <div class="about-us__wrapper">
            <?php if (!empty($title)): ?>
                <h2 class="about-us__title title--blue"><?php echo $title; ?></h2>
            <?php endif; ?>
            <?php if (!empty($text)): ?>
                <p class="about-us__text"><?php echo $text; ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
