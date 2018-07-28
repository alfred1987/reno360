<?php
/* Template Name: Reno Homepage */

get_header(); ?>

<style type="text/css">
	.page-template-page-renohomepage .entry-header {
		display: none;
	}
	.page-template-page-renohomepage h2, .page-template-page-renohomepage h3 {
		text-align: center;
		color: #000;
	}
	.page-template-page-renohomepage .reno-error {
		color: red;
		font-size: 12px;
		font-weight: bold;
		text-align: center;
		width: 100%;
		padding-bottom: 15px;
	}
	.page-template-page-renohomepage .site-header {
		border: none;
	}
	.page-template-page-renohomepage .town {
		display: block;
		margin: 0 auto;
	}
	.page-template-page-renohomepage .hiw_ul {
		list-style: none;
		padding: 0;
		margin: 50px auto 0px auto;
		display: block;
		width: 80%;
	}
	.page-template-page-renohomepage .hiw_ul li {
		display: inline-block;
		margin-right: 9px;
		width: 150px;
		vertical-align: top;
		text-align: center;
	}
	.page-template-page-renohomepage .hiw_ul img {
		display: block;
		margin: 0 auto;
	}
	.page-template-page-renohomepage .renobutton {
		padding: 10px 25px;
		background: #999999;
		color: #000;
		margin-top: 10px;
		border-radius: 5px;
	}
	.iconsbudget { 
		list-style: none; 
		padding: 0; 
		margin: 0; 
	}
	.iconsbudget li { 
		display: inline-block; 
		font-weight: bold; 
		color: #000; 
		text-align: center; 
		vertical-align: top; 
	}
	.hiw {
		background: #000; 
		padding: 50px 25px; 
		color: #fff; 
		text-align: center;
	}
	.hiw h2 {
		text-align: center; 
		color: #fff;
	}
</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<p class="reno-block-title"><h3>Start your  house renovation planning with RENO360</h3><h2><strong>Search for your property</strong></h2>
			<div class="reno-error"></div>
			<?php while ( have_posts() ) : the_post();
				get_template_part( 'content', 'page' );
			endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

	<div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reno/town.png" class="town" /></div>

	<div class="hiw">
		<h2><strong>How it works</strong></h2>
		<ul class="hiw_ul">
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reno/1.png" width="50" />
				<br />1. Search and register your unit.</li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reno/2.png" width="50" />
				<br />2. Choose and describe your requirements for each categories.</li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reno/3.png" width="50" />
				<br />3. Open Tender for period of 3-5 days.</li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reno/4.png" width="50" />
				<br />4. Close tender and further discussions.</li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reno/5.png" width="50" />
				<br />5. Confirm, works commence and ready to move in.</li>
		</ul>
		<br /><br /><a class="renobutton" href="http://localhost/reno/register">SIGN UP</a>
	</div>

	<div style="padding: 50px 25px;">
		<h2 style="text-align: center;"><strong>Plan for your house renovation and<br />move in with hassle free</strong></h2>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reno/icons.png" style="display: block; margin: 0 auto;" />
		<ul class="iconsbudget">
			<li class="contructionli" style="padding-right: 175px;">Construction works</li>
			<li class="furnitureli" style="padding-right: 225px;">Furniture</li>
			<li class="lightingli" style="padding-right: 235px;">Lighting</li>
			<li class="electricalli">Electrical<br />appliances</li>
		</ul>
	</div>

<?php
do_action( 'storefront_sidebar' );
get_footer();
