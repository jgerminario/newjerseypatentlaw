<?php

get_header(); ?>
<div id="main">
<div id="content">
<?php the_breadcrumb(); ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>


</div>
</div>
<div id="sidebar">
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
	<?php
	$thumb_id = get_post_thumbnail_id(get_the_ID());
	$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true); ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<div id="top_sidebar_img">
			<img src="<?php echo $image[0]; ?>" alt="<?php echo $alt; ?>" />
		</div>
	<?php else: ?>
		<div id="top_sidebar_img">
			<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/CIP/imgs/patent<?php echo rand(1,5) ?>.png" alt="<?php wp_title(); ?>" />
		</div>
	<?php endif; ?>
	<div id="bottom_sidebar">
		<h2>The Law Office of Thomas J Germinario</h2>
		<p>154 Route 206 S<br/>
			Chester, NJ 07930<br/>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" id="contactSidebar">Directions and contact</a>
			<br />
			<br />
			Call for a consultation:<br />
			<a href="tel:+19088790091" id="callContactSidebar"><span class="bold">(908) 879-0091</span></a></p>
		</div>
	</div>
	<div id="bottom_mobile">
			<h2>The Law Office of Thomas J Germinario</h2>
			<p>154 Route 206 S<br/>
				Chester, NJ 07930<br/>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" id=
"contactMobile">Directions and contact</a>
				<br />
				<br />
				Call for a consultation:<br />
				<a href="tel:+19088790091" id="callContactMobile"><span class="bold">(908) 879-0091</span></a></p>
			</div>
	


<div class="delimiter"></div>
<?php get_footer(); ?>