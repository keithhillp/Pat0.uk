<?php /* Template Name: Flexable Content */ ?>

<?php get_header(); ?>
<div class="pageContain">
	
<?php

// check if the flexible content field has rows of data
if( have_rows('flexcontent') ):

     // loop through the rows of data
    while ( have_rows('flexcontent') ) : the_row();

        if( get_row_layout() == 'headercontent' ):

        	?>
        	<div class="Mainhead">

			<div class="Windowhead">
				<span>
				<div class="logo"></div>
				<h1><?php the_sub_field('maintitle'); ?></h1>
				<?php if ($subtitle = get_sub_field('subtitle') ): ?>
					<p><?php echo $subtitle; ?> &lt;/><span class="flash">_</span></p>
				<?php endif ?>
				
				<?php 

															// check if the repeater field has rows of data
									if( have_rows('buttons') ):

									 	// loop through the rows of data
									    while ( have_rows('buttons') ) : the_row();
									?>
									<a href="<?php the_sub_field('buttonlink'); ?>"><div class="button"><?php the_sub_field('buttontext'); ?> <i class="fa fa-chevron-down" aria-hidden="true"></i></div></a>

									 <?php     


									    endwhile;

									else :

									    // no rows found

									endif;

				 ?>
				</div></a>
				</span>


			</div>

			

			<div class="Mediahead" style="background-image: url('<?php echo get_sub_field('background')['sizes']['homepage-background'] ?>');"></div>

		</div>

		<?php 

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>

	<div class="Infohead">
					
					<div class="info">
						<i class="fa fa-mobile" aria-hidden="true" style="color: black"></i>
						<h2>Mobile First</h2>
						<div class="line"></div>
						<p>With 56% of internet traffic coming from mobile phones it is vital to ensure your website is built with a mobile first approach </p>
					</div>
					<div class="info">
						<i class="fa fa-puzzle-piece" aria-hidden="true" style="color:black;"></i>
						<h2>Bespoke Design</h2>
						<div class="line"></div>
						<p>Anything is possible in web design, have your website built from the ground up to suit your exact requriments</p>
					</div>
					<div class="info">
						<i class="fa fa-wordpress" aria-hidden="true" style="color: black"></i>
						<h2>WordPress Proficient</h2>
						<div class="line"></div>
						<p>Experienced in building dynamic websites using the WordPress content management system</p>
					</div>

			</div>

	<div id="portfolio" class="section2">
		
		<?php get_template_part('postbox'); ?>

	</div>

</div>

<script>
	
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});

</script>

<?php get_footer(); ?>