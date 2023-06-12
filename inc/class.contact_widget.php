<?php 
    class contact_widget extends WP_Widget {
        function __construct() {
            parent::__construct(
            'contact_widget',
            __('Contact Widget', 'contact_widget_domain'),
            array ( 'description' => __( 'Custom contact widget', 'contact_widget_domain' ), )
            );
        }

        public function widget( $args, $instance ) {
            $icon = apply_filters( 'widget_icon', $instance['icon'] );
            echo $args['before widget'];
            If ( ! empty ( $icon ) )
            Echo $args['before_icon'] . $icon . $args['after_icon'];
            $title = apply_filters( 'widget_title', $instance['title'] );
            echo $args['before widget'];
            If ( ! empty ( $title ) )
            Echo $args['before_title'] . $title . $args['after_title'];
            $content = apply_filters( 'widget_content', $instance['content'] );
            echo $args['before widget'];
            If ( ! empty ( $content ) )
            Echo $args['before_content'] . $content . $args['after_content'];
        }
        public function form( $instance ) {
            if ( isset( $instance[ 'icon' ] ) )
            $icon = $instance[ 'icon' ];
            else
            $icon = __( '', 'contact_widget_domain' );
            ?>
            <p>
            <label for="<?php echo $this->get_field_id( 'icon' ); ?>"><?php _e( 'Icon:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'icon' ); ?>" name="<?php echo $this->get_field_name( 'icon' ); ?>" type="text" value="<?php echo esc_attr( $icon ); ?>" />
            </p>
            <?php
            if ( isset( $instance[ 'title' ] ) )
                $title = $instance[ 'title' ];
            else
                $title = __( '', 'contact_widget_domain' );
            ?>
                <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
                </p>
            <?php
            if ( isset( $instance[ 'content' ] ) )
            $content = $instance[ 'content' ];
            else
            $content = __( '', 'contact_widget_domain' );
            ?>
            <p>
            <label for="<?php echo $this->get_field_id( 'content' ); ?>"><?php _e( 'Content:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>" type="text" value="<?php echo esc_attr( $content ); ?>" />
            </p>
            <?php
        }

        public function update( $new_instance, $old_instance ) {
            $instance = array();
            $instance['icon'] = ( ! empty( $new_instance['icon'] ) ) ? strip_tags( $new_instance['icon'] ) : '';
            $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
            $instance['content'] = ( ! empty( $new_instance['content'] ) ) ? strip_tags( $new_instance['content'] ) : '';
            return $instance;
        }
    }
?>