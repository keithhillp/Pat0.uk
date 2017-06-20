		  <!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 	<!-- Test if the current post is in category 3. -->
 	<!-- If it is, the div box is given the CSS class "post-cat-three". -->
 	<!-- Otherwise, the div box is given the CSS class "post". -->

	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'postbox' );?>
	<div id="post" class="photoSquare" style="background-image: url('<?php echo $thumb['0'];?>')">
	    <div class="Squarecontent">
	        <div class="table">
	            <div class="table-cell">
	            	<div class="cat"><?php the_category(); ?></div>
	                <h2><?php the_title(); ?></h2>
	                <a href="<?php echo get_permalink(); ?>"><i class="fa fa-th-large" aria-hidden="true"></i></a>
	            </div>
	        </div> 
	    </div>
	</div>

	 <?php endwhile; else : ?>

 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

 <!-- REALLY stop The Loop. -->
 <?php endif; ?>