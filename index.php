<?php get_header(); ?>
<div id="main">
	<div id="content">
<?php the_breadcrumb(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to
        <?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <small><?php the_time('F jS, Y') ?>  by <?php the_author() ?></small>
         
        <div class="entry">
            <?php the_content('Read the rest of this entry »'); ?>
        </div>
         
        <p class="postmetadata">Posted in <?php the_category(', ') ?>
            <!--<?php edit_post_link('Edit','','<strong> |</strong>'); ?>-->
           <!-- <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments
        »'); ?> -->
        </p>
    </div>
    <?php endwhile; ?>
    <div class="navigation">
        <div class="alignleft"><?php next_posts_link('« Previous Entries') ?></div>
        <div class="alignright"><?php previous_posts_link('Next Entries »') ?></div>
    </div>
<?php else : ?>
    <h2 class="center">Not Found</h2>
    <p class="center">Sorry, but you are looking for something that isn't here.</p>
    <?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>



		
	</div>
</div>
	<div id="sidebar">
	
		<div id="widget_area">
		<?php dynamic_sidebar( 'sidebar' ); ?>
		</div>


	<div id="bottom_sidebar">
		<h2>The Law Office of Thomas J Germinario</h2>
		<p>154 Route 206 S<br/>
		Chester, NJ 07930<br/>
		<br />
		Call for a free consultation:<br />
		<a href="tel:+19088790091" id="callContactSidebar"><span class="bold">908.879.0091</span></a></p>
    <div id="brb_collection_2567"></div><script type="text/javascript">!function(e){var c=document.createElement("script");c.src=e,document.body.appendChild(c)}("http://www.newjerseypatentlaw.com?cf_action=brb_embed&brb_collection_id=2567&brb_callback=brb_"+(new Date).getTime());</script>
		</div>
	</div>
	<div id="bottom_mobile">
			<h2>The Law Office of Thomas J Germinario</h2>
			<p>154 Route 206 S<br/>
				Chester, NJ 07930<br/>
				<br />
				Call for a free consultation:<br />
				<a href="tel:+19088790091" id="callContactMobile"><span class="bold">908.879.0091</span></a></p>
        <div id="brb_collection_2567"></div><script type="text/javascript">!function(e){var c=document.createElement("script");c.src=e,document.body.appendChild(c)}("http://www.newjerseypatentlaw.com?cf_action=brb_embed&brb_collection_id=2567&brb_callback=brb_"+(new Date).getTime());</script>
			</div>
	<div id="delimiter">
	</div>
	<?php get_footer(); ?>



