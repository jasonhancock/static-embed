<?php
/*
Plugin Name: static-embed
Plugin URI:  http://github.com/jasonhancock/static-embed
Description: A shortcode plugin to embed static content in pages/posts
Version:     0.1
Author:      Jason Hancock
License:     Apache 2.0
License URI: http://www.apache.org/licenses/LICENSE-2.0
*/

class StaticEmbed {

    function __construct() {
        add_shortcode( 'staticembed', array( $this, 'staticembed_shortcode' ) );
    }

    /**
     * Shortcode for staticembed
     * [staticembed file=/path/to/file]
     *
     * @param  array $atts shortcode attributes
     * @return string HTML to be inserted in shortcode's place
     */
    function staticembed_shortcode($atts) {
        if(!empty($atts['file']) && is_readable($atts['file'])) {
            return file_get_contents($atts['file']);
        }
        return '';
    }
}

new StaticEmbed();
