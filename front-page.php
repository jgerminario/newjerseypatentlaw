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
		  <!-- Indicators -->
		 <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		 <div class="carousel-inner">
		    <div class="item active">
		      <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/CIP/imgs/office.jpg" alt="Small business owner">
		      <div class="carousel-caption">
		        <h2>Securing innovation for small business</h2><p><a href="<?php echo esc_url( home_url( '/' ) ); ?>clients">Meet our clients »</a></p>
		      </div>
		    </div>
		    <div class="item">
		      <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/CIP/imgs/patent.png" alt="Patent services">
		      <div class="carousel-caption">
		        <h2>Legal acumen, technical sophistication</h2><p><a href="<?php echo esc_url( home_url( '/' ) ); ?>patents" id="patentsCarousel">See our services »</a></p>
		      </div>
		    </div>
		 
		  </div>
		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		  </a>
		</div>
		<!--<div class="carousel">
		<div class="carousel-inner">
			<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/CIP/imgs/patent.png" alt="Patent services">
			<div class="carousel-caption">
		        <h2>Legal acumen, technical expertise</h2><p><a href="<?php echo esc_url( home_url( '/' ) ); ?>patents" id="patentsCarousel">See our patent services »</a></p>
		      </div>
		</div>
		
		</div>-->
		
		<!--<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/CIP/imgs/man.jpg" alt="Small business owner">-->
		<!-- <div id="banner">
			<h2>Securing innovation for small business </h2><p><a>Meet our clients »</a></p>
		</div> -->
	
	
</div>
	<div id="content">
		<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
		
	</div>

<div id="sidebar_mobile">
		<div id="top_sidebar">
			<h2>Serving New Jersey Inventors and Businesses</h2>

			<p><span class="bold">Intellectual property</span> (IP) protects your right to your original idea, product or service.</p>
			<ul style="list-style-type:none;">
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>patents" id="patentsMobile">Patents</a> cover your products and inventions.</li> 
			<li><a style="width:95%;padding-top:5px;" href="<?php echo esc_url( home_url( '/' ) ); ?>trademarks" id="trademarksMobile">Trademarks</a> cover your brand, logo and name.</p></li>
			</ul>

			<p>As New Jersey's leading patent attorney, Thomas J Germinario can help identify all your unique IP needs to secure your rights as a business or independent inventor.</p>
	
	<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" id="contactSidebar">Schedule a consultation »</a></p>
	</p>
		
</div></div>

	<div id="bottom_mobile">
			<h2>The Law Office of Thomas J Germinario</h2>
			<p>154 Route 206 S<br/>
				Chester, NJ 07930<br/>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" id="contactMobile">Directions and contact</a>
				<br />
				<br />
				Call for a consultation:<br />
				<a href="tel:+19088790091" id="callContactMobile"><span class="bold">(908) 879-0091</span></a></p>
				<a title="Click for the Business Review of Thomas J. Germinario Attorney at Law, an Attorneys & Lawyers - Patent in Chester NJ" href="https://www.bbb.org/new-jersey/business-reviews/attorneys-and-lawyers-patent/thomas-j-germinario-attorney-at-law-in-chester-nj-90173064#sealclick"><img alt="Click for the BBB Business Review of this Attorneys & Lawyers - Patent in Chester NJ" id="bbb" style="border: 0;" src="https://seal-newjersey.bbb.org/seals/black-seal-150-110-thomasjgerminarioattorneyatlaw-90173064.png" /></a>
			</div>
<!-- mobile sidebar -->
	</div>
			<!-- end mobile sidebar -->
	<?php get_sidebar(); ?>
	<div class="delimiter"></div>
	
	<?php get_footer(); ?></div>