<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
<div id="main">
	<div id="carousel">
<!-- Twitter Bootstrap carousel begins -->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

		  <!-- Wrapper for slides -->
		 <div class="carousel-inner">
		    <div class="item active">
		      <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/CIP/imgs/office.jpg" alt="Small business owner">
		      <div class="carousel-caption">
		        <h2>Securing innovation for small business</h2><p><a href="<?php echo esc_url( home_url( '/' ) ); ?>clients">Meet our clients »</a></p>
		      </div>
		    </div>
		   
		 
		  </div>
		</div>
	
	
</div>
	<div id="content">
		<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
	</div>
	<?php if ( is_active_sidebar( 'google_widget' ) ) : ?>
		<div id="google-widget">
			<?php dynamic_sidebar( 'google_widget' ); ?>
		</div>
	<?php endif; ?>
		<a href="tel:+19088790091" id="phoneHeaderMobile">
			<div id="call_mobile" style="top:10px;text-decoration: none;">
	      <p class="number"><img class="phone" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/CIP/imgs/phone.png">Call for a <strong>free</strong> consultation: <br />(908) 879-0091</p>
	    </div>
	  </a>

<div id="sidebar_mobile">
		<div id="top_sidebar">
			<h2>Serving New Jersey Inventors and Businesses</h2>

			<p><span class="bold">Intellectual property</span> (IP) protects your right to your original idea, product or service.</p>
			<ul style="list-style-type:none;">
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>patents" id="patentsMobile">Patents</a> cover your products and inventions.</li> 
			<li><a style="width:95%;padding-top:5px;" href="<?php echo esc_url( home_url( '/' ) ); ?>trademarks" id="trademarksMobile">Trademarks</a> cover your brand, logo and name.</p></li>
			</ul>

			<p>As New Jersey's leading patent attorney, Thomas J Germinario can help identify all your unique IP needs to secure your rights as a business or independent inventor.</p>
	</p>
		
</div></div>

	<div id="bottom_mobile">
			<h2>The Law Office of Thomas J Germinario</h2>
			<p>154 Route 206 S<br/>
				Chester, NJ 07930<br/>
				<br />
				Call for a free consultation:<br />
				<a href="tel:+19088790091" id="callContactMobile"><span class="bold">(908) 879-0091</span></a></p>
				<a title="Click for the Business Review of Thomas J. Germinario Attorney at Law, an Attorneys & Lawyers - Patent in Chester NJ" href="https://www.bbb.org/new-jersey/business-reviews/attorneys-and-lawyers-patent/thomas-j-germinario-attorney-at-law-in-chester-nj-90173064#sealclick"><img alt="Click for the BBB Business Review of this Attorneys & Lawyers - Patent in Chester NJ" id="bbb" style="border: 0;" src="https://seal-newjersey.bbb.org/seals/black-seal-150-110-thomasjgerminarioattorneyatlaw-90173064.png" /></a>
				<div id="brb_collection_2567"></div><script type="text/javascript">!function(e){var c=document.createElement("script");c.src=e,document.body.appendChild(c)}("http://www.newjerseypatentlaw.com?cf_action=brb_embed&brb_collection_id=2567&brb_callback=brb_"+(new Date).getTime());</script>
			</div>
<!-- mobile sidebar -->
	</div>
			<!-- end mobile sidebar -->
	<?php get_sidebar(); ?>
	<div class="delimiter"></div>
	
	<?php get_footer(); ?></div>