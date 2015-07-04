<?php
/**
 * Testimonials Widget
 */
class Aletheme_Testimonials_Widget extends WP_Widget
{
    /**
     * General Setup
     */
    public function __construct() {

        /* Widget settings. */
        $widget_ops = array(
            'classname' => 'ale_testimonials_widget',
            'description' => 'A widget that displays your testimonials'
        );

        /* Widget control settings. */
        $control_ops = array(
            'width'		=> 300,
            'height'	=> 350,
            'id_base'	=> 'ale_testimonials_widget'
        );

        /* Create the widget. */
        $this->WP_Widget( 'ale_testimonials_widget', 'Aletheme Testimonials Slider', $widget_ops, $control_ops );
    }

    /**
     * Display Widget
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance )
    {
        extract( $args );

        $title = apply_filters('widget_title', $instance['title'] );

        /* Our variables from the widget settings. */
        $number = $instance['number'];

        /* Before widget (defined by themes). */
        echo $before_widget;

        // Display Widget
        ?>
        <?php /* Display the widget title if one was input (before and after defined by themes). */
        if ( $title )
            echo $before_title . $title . $after_title;
        ?>
        <div class="aletheme-testimonials-widget">
            <?php
            $query = new WP_Query(array(
                'posts_per_page'		=> $number,
                'ignore_sticky_posts'	=> 1,
                'post_type'             => 'testimonials'
            ));
            ?>

            <div class="testimonials-slider-widget">
                <ul class="slides">
                    <?php global $post; if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                        <li>
                            <div class="photo">
                                <?php echo get_the_post_thumbnail($post->ID,'testimonials-slider') ?>
                            </div>
                            <div class="author">
                                <?php echo ale_get_meta('testimauthor'); ?>
                            </div>
                            <div class="short-description">
                                <?php the_excerpt(); ?>
                            </div>
                        </li>
                    <?php endwhile; endif; ?>

                    <?php wp_reset_query(); ?>
                </ul>
            </div>

        </div><!--testimonials_widget-->

        <?php

        /* After widget (defined by themes). */
        echo $after_widget;
    }

    /**
     * Update Widget
     * @param array $new_instance
     * @param array $old_instance
     * @return array
     */
    public function update( $new_instance, $old_instance )
    {
        $instance = $old_instance;

        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['number'] = strip_tags( $new_instance['number'] );

        return $instance;
    }

    /**
     * Widget Settings
     * @param array $instance
     */
    public function form( $instance )
    {
        //default widget settings.
        $defaults = array(
            'title' => __('- Testimonials -', 'aletheme'),
            'number' => 3
        );
        $instance = wp_parse_args( (array) $instance, $defaults ); ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'aletheme') ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e('Posts to show:', 'aletheme') ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" value="<?php echo $instance['number']; ?>" />
        </p>
    <?php
    }
}