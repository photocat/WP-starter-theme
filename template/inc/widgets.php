<?php
// Register Posts widget
add_action( 'widgets_init', 'register_posts_widget' );
function register_posts_widget() {
    register_widget( 'Posts_Widget' );
}

/**
 * Adds Posts widget.
 */
class Posts_Widget extends WP_Widget {
    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'posts_widget', // Base ID
            'Posts Widget', // Name
            array( 'description' => __( 'Posts widget', 'evil-theme_domain' ) ) // Args
        );
    }
    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
        $category = apply_filters( 'widget_category', $instance['category'] );
        $number = apply_filters( 'widget_number', $instance['number'] );

        ob_start();
        $args = array(
            'publish' => true,
            'post_type' => 'post',
            'posts_per_page' => $number ?? 3,
            'cat' => $category,
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $query = new WP_Query( $args );
    ?>
        <div class="widget posts-widget">
            <?php if ( isset( $title ) ) : ?>
                <h3 class="widget__title"><?php echo $title; ?></h3>
            <?php endif; ?>
            <?php if ( $query->have_posts() ) : ?>
                <ul class="posts-widget__list">
                    <?php while ( $query->have_posts() ) : $query->the_post();?>
                        <li class="posts-widget__list__item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="posts-widget__list__item__image">
                                    <div class="posts-widget__list__item__image__wrapper">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                </div>
                                <div class="posts-widget__list__item__content">
                                    <h4 class="posts-widget__list__item__content__title">
                                        <?php the_title(); ?>
                                    </h4>
                                    <div class="posts-widget__list__item__content__excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </a>
                        </li>
            <?php endwhile; ?>
                    </ul>
        <?php endif;
            wp_reset_postdata();
    ?>
        </div>
    <?php
        echo ob_get_clean();
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        if ( isset( $instance['title'] ) ) {
            $title = $instance['title'];
        } else {
            $title = __( 'New title', 'evil-theme_domain' );
        }
        if ( isset( $instance['category'] ) ) {
            $category = $instance['category'];
        } else {
            $category = false;
        }
        if ( isset( $instance['number'] ) ) {
            $number = $instance['number'];
        } else {
            $number = 3;
        }
        $categories = get_categories( [
            'taxonomy'     => 'category',
            'type'         => 'post',
            'orderby'      => 'name',
            'order'        => 'ASC',
            'hide_empty'   => 0,
            'hierarchical' => 1,
        ] );
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'category' ); ?>"><?php _e( 'Select category:' ); ?></label>
            <select class="widefat" id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo
            $this->get_field_name( 'category' ); ?>">
                <?php if( $categories ): ?>
                    <option value="0">All</option>
                    <?php foreach( $categories as $cat ):?>
                    <option
                        <?php echo $category && $category == $cat->term_id ? 'selected' : ''; ?>
                        value="<?php echo $cat->term_id; ?>"
                    >
                        <?php echo $cat->name; ?>
                    </option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'number' ); ?>"><?php _e( 'Number of posts:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="number" value="<?php echo esc_attr( $number ); ?>" />
        </p>
        <?php
    }
    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance          = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['category'] = ( ! empty( $new_instance['category'] ) ) ? strip_tags( $new_instance['category'] ) : '';
        $instance['number'] = ( ! empty( $new_instance['number'] ) ) ? strip_tags( $new_instance['number'] ) : '';
        return $instance;
    }
}

/**
* Disable WP-Blocks fcr widgets
*/
function disable_blocks_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'disable_blocks_support' );