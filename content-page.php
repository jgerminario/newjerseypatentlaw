<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (is_page_template("landing-page.php")) { 
      include "partials/cip-entry-content.php"; 
      include "partials/cip-entry-header.php"; 
    } else {
      include "partials/cip-entry-header.php";
      include "partials/cip-entry-content.php"; 
    } ?>