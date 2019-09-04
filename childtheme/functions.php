<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

function myfont_icons($icons) {
    $icons[] = 'Automate';
    return $icons;
}
add_filter('et_pb_font_icon_symbols', 'myfont_icons');

function my_custom_fonts() { ?>
<style>
[data-icon="Automate"]::before { 
    background: url('http://167.99.153.209/wp-content/uploads/2018/08/Artboard-1-3.png'); 
    content:'a' !important; 
    width:16px !important; 
    height:16px !important; 
    color:rgba(0,0,0,0) !important; }
</style>
<?php
}
add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts_js() { ?>
<script>
jQuery('.et-pb-icon').filter(function(){ return jQuery(this).text() == 'Automate'; }).html('<img src="http://www.mysite.com/angry-bird-icon.png"/>');
</script>
<?php
}
add_action('wp_footer', 'my_custom_fonts_js');





// END ENQUEUE PARENT ACTION
