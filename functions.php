<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
add_theme_support( 'post-thumbnails' ); 
function my_widgets_init() {

	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="sidebar_title">',
		'after_title' => '</h3>',
	) );
}
function google_widget_init() {

    register_sidebar( array(
        'name'          => 'Google widgets',
        'id'            => 'google_widget',
        'before_widget' => '<div class="google-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="google-widget-title">',
        'after_title'   => '</h3>',
    ) );

}
add_action( 'widgets_init', 'google_widget_init' );
add_action( 'widgets_init', 'my_widgets_init' );
add_filter('tiny_mce_before_init', create_function( '$a',
'$a["extended_valid_elements"] = "iframe[id|class|title|style|align|frameborder|height|longdesc|marginheight|marginwidth|name|scrolling|src|width]"; return $a;') );
function the_breadcrumb() {
    global $post;
    echo '<ul id="breadcrumbs">';
        if (is_page('blog')) {
            echo '<li><a href="';
            echo get_option('home');
            echo '">';
            echo 'Home';
            echo '</a></li><li class="separator"> / </li><li>';
            echo 'Blog</li>';
        } elseif (!is_front_page()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo '</a></li>';
         if (is_category() || is_single()) {
            echo '<li class="separator"> / </li>';
            echo '<li><a href="';
            echo esc_url( home_url( '/' ) );
            echo 'blog">Blog</a></li>';
            echo '<li class="separator"> / </li><li>';
         
            if (is_single()) {

                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {                    
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">/</li>';
                }
                echo '<li class="separator"> / </li>';
                echo $output;
                echo '<li title="'.$title.'"> '.$title.'</li>';
            } else {
                echo '<li class="separator"> / </li>';
                echo '<li>'.get_the_title().' </li>';
            }
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ul>';
}
?>