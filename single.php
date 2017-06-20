<?php get_header(); ?> 

<style>
	#mobile{
		color: black;
	}
</style>

<div class="single">

		  <!-- Start the Loop. -->

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 	<!-- Test if the current post is in category 3. -->
 	<!-- If it is, the div box is given the CSS class "post-cat-three". -->
 	<!-- Otherwise, the div box is given the CSS class "post". -->

	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
	<h3><?php the_category(); ?></h3>
	<h2><?php the_title(); ?></h2>
	<h4><?php the_date(); ?></h4>

	<div class="your-class">
     
			<?php
// check if the repeater field has rows of data
if( have_rows('screenshots') ):
    // loop through the rows of data
    while ( have_rows('screenshots') ) : the_row();
	?>
	<div>
	<?php  
        // display a sub field value
        $image = get_sub_field('screenshot');

        if( !empty($image) ): ?>

		<img class="slideimg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>

        ?>
        </div>
        <?php
    endwhile;
else :
    // no rows found
endif;
?>

  </div>

	<p><?php the_content(); ?></p>

	 <?php endwhile; else : ?>

 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

 <!-- REALLY stop The Loop. -->
 <?php endif; ?>

 </div>

 <?php get_footer(); ?>