<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function get_static_path_for($file){
  return get_stylesheet_directory_uri() . '/static/' . $file;
}

function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style,
        get_stylesheet_directory_uri() . '/static/css/bootstrap.min.css'
    );


    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );

    wp_enqueue_style( 'child-style-main',
        get_static_path_for('css/index.css'),
        array( $parent_style )
    );
    wp_enqueue_style( 'child-style-awesome',
        get_static_path_for('css/font-awesome.min.css'),
        array( $parent_style )
    );
    
    wp_enqueue_script('child-script-main', get_static_path_for('js/jquery-1.12.0.min.js'), array( 'jquery' ), '20151130', false );
    wp_enqueue_script('child-script', get_static_path_for('js/bootstrap.min.js'), array( 'jquery' ), '20151130', true );
    wp_enqueue_script('child-script-common', get_static_path_for('js/common.js'), array( 'jquery' ), '20151130', true );
        
}


function footer_widget() {
	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'footer',
		'before_widget' => '<div class="col-sm-3 col-xs-6 contact-cell">',
		'after_widget'  => '</div>',
    'before_title' => '',
    'after_title' => ''
	) );
}

add_action( 'widgets_init', 'footer_widget');





//for remove title from footer_widget
add_filter('widget_title','footer_widget'); 


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function the_breadcrumb() {

  echo '<div class="row bread-crumb"><span class="header">Þú ert hér: </span><ul id="crumbs">';

  if (!is_home()) {

    echo '<li><a href="';

    echo get_option('home');

    echo '">';

    bloginfo('name');

    echo "</a><span>/</span></li>";

    if (is_category() || is_single()) {

      echo '<li>';

      the_category('<span>/</span></li><li>');

      if (is_single()) {

        echo "<span>/</span></li><li>";

        the_title();

        echo '</li>';

      }

    } elseif (is_page()) {

      echo '<li>';

      echo the_title();

      echo '</li>';

    }

  }

  elseif (is_tag()) {single_tag_title();}

  elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}

  elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}

  elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}

  elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}

  elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}

  elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}

  echo '<div class="clear"></div></ul></div>';

}



/**
 * Add classes to Display Posts Shortcode plugin
 * @author Bill Erickson
 * @link http://wordpress.org/extend/plugins/display-posts-shortcode/
 *
 * @param string $output the original markup for an individual post
 * @param array $atts all the attributes passed to the shortcode
 * @param string $image the image part of the output
 * @param string $title the title part of the output
 * @param string $date the date part of the output
 * @param string $excerpt the excerpt part of the output
 * @param string $inner_wrapper what html element to wrap each post in (default is li)
 * @return string $output the modified markup for an individual post
 */
// function home_post_style( $output, $atts, $image, $title, $date, $excerpt, $inner_wrapper ) {
//   $output = '<div class="col-sm-5 inner-image" style="background-image: url('. $image .');"></div>'
//  return $output;
// }
// add_filter( 'display_posts_shortcode_output', 'home_post_style', 10, 7 );


function home_post_style( $output, $atts, $image, $title, $date, $excerpt, $inner_wrapper ) {
  
  $classes = 'listing-item';
  
  // Counter
  global $dps_counter;
  $classes .= ' dps-list-item-' . $dps_counter;
  $dps_counter++;
  
  // Current Page
  global $dps_current_page;
  // if( $dps_current_page == get_permalink() )
  //   $classes .= ' current';

  // First check if an excerpt is included by looking at the shortcode $atts
  if ( $atts['include_excerpt'] )
    $excerpt = get_the_content();
  else $excerpt = '';

  // Now let's rebuild the output.
  $output = ''.$image.'<p class="header">' . $title . '</p><p>'.$excerpt  . '</p><a class="red-link" href="' . get_permalink() . '">Meira</a>';
  // Finally we'll return the modified output
  return $output; 
}
add_filter( 'display_posts_shortcode_output', 'home_post_style', 10, 9 );

/**
 * Display Posts Shortcode - start counter and save current url
 * @author Bill Erickson
 * @link http://wordpress.org/extend/plugins/display-posts-shortcode/
 *
 * @param array $args
 * @return array $args
 */
// function be_display_posts_counter_start( $args ) {
//   global $dps_counter, $dps_current_page, $post;
//   $dps_counter = 0;
//   $dps_current_page = get_permalink( $post->ID );
//   echo $dps_current_page;
//   return $args;
// }
// add_filter( 'display_posts_shortcode_args', 'be_display_posts_counter_start' );