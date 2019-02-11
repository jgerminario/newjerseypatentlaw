<?php
/* Template Name: Landing Page */
?>
<?php get_header(); ?>
<div class="landing-page">
	<div id="hero">
		<img id="hero-image" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/CIP/imgs/landing-page_woman.jpg">
		<div id="landing-page-benefits-bar">
			<ul>
				<li>USPTO Patent Searches</li>
				<li>Patent Applications</li>
				<li>Trademark Law</li>
				<li>Patent Litigation</li>
			</ul>
		</div>
		<div id="landing-page-callout">
			<a href="tel:+19088790091" class="phone-call"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/CIP/imgs/landing-page_callout_9088790091.png"></a>
		</div>
	</div>
	<div id="landing-page-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
		<?php endwhile; // end of the loop. ?>
	</div>
	<div id="landing-page-main">
		<h1>Want to get in touch with us?</h1>
		<p><strong>Thank you for your interest in working with The Law Office of Thomas J Germinario. Fill out the form below and you will be contacted back within the next business day. If it is during business hours, you can call (908) 879-0091 to schedule a free patent consultation directly.</strong></p>
		<p class="aside">
			Please note that confidential or time-sensitive information should not be disclosed.
		</p>
	</div>
	<div id="contact">
		<?php include 'partials/cip-contact-form.php'; ?>
	</div>
	<div class="desktop-only">
		<?php include 'partials/cip-nav.php'; ?>
	</div>
	<div class="mobile-only">
		<?php include 'partials/cip-footer.php'; ?>
	</div>
</div>
<?php include 'footer.php'; ?>
