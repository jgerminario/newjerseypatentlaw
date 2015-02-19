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
add_action( 'widgets_init', 'my_widgets_init' );

function the_breadcrumb() {
    global $post;
    echo '<ul id="breadcrumbs">';
    if (!is_front_page()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo '</a></li><li class="separator"> / </li>';
         if (is_category() || is_single()) {
            echo '<li>';
         
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
                echo $output;
                echo '<li title="'.$title.'"> '.$title.'</li>';
            } else {
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