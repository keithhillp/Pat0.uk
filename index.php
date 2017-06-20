<?php get_header(); ?>
<div id="pageContain">
	
	<div class="Mainhead">

			<div class="Windowhead">
				<span>
				<div class="logo"></div>
				<h1>Patrick Keith-Hill</h1>
				<p>Web Developer &lt;/><span class="flash">_</span></p>
				<a href="#portfolio"><div class="button">Explore <i class="fa fa-chevron-down" aria-hidden="true"></i></div></a>
				<a href="mailto:keithhillp@gmail.com"><div class="button">Contact <i class="fa fa-envelope" aria-hidden="true"></i></div></a>
				</span>
			</div>

			<div class="Mediahead"></div>

	</div>

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

<?php get_footer(); ?>