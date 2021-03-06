<?php

class CodelessDateWidget extends WP_Widget{



    function __construct(){

        $options = array('classname' => 'widget_date', 'description' => 'Add a date widget', 'customize_selective_refresh' => true );

		parent::__construct( 'widget_date', THEMENAME.' Widget Date', $options );

    }



    function widget($atts, $instance){

        extract($atts, EXTR_SKIP);

        echo codeless_complex_esc( $before_widget );
        
        echo get_the_date( 'l, F j, Y' );

        echo codeless_complex_esc( $after_widget );

    }

    



    function update($new_instance, $old_instance){

        $instance = array();

       
        return $instance;

    }



    function form($instance){


    }

}
?>