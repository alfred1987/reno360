<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

get_header(); ?>

<style type="text/css">
	.prop_details { list-style: none; }
	.prop_details li { display: inline-block; padding: 0px 30px; }
	.prop_details li img {
		float: left;
		padding-right: 10px;
	}
	.single-homeowner h1, .single-homeowner h2 {
		text-align: center;
	}
	.renocon .renorow {
		float: left;
		width: 50%;
	}
	.renoclear {
		clear: both;
	}
	.renobutton {
		padding: 10px 25px;
		background: #999999;
		color: #000;
		margin-top: 10px;
		border-radius: 5px;
	}
	.renocon ul {
		list-style: none;
		padding: 0;
		margin: 50px auto 0px auto;
		text-align: center;
	}
	.renocon ul li {
		display: inline-block;
		padding-right: 15px;
		vertical-align: middle;
	}
	.renocon ul li a {
		font-weight: bold;
		color: #000;
		font-size: 30px;
	}
	.pi_points ul { list-style: none; margin: 0; padding: 0; }
	.pi_points ul li {     
		display: inline-block;
	    padding: 10px 15px;
	    margin: 0px 15px 0px 0px;
	    cursor: pointer;
	    border: 5px solid #000;
	    border-radius: 20px; 
	}	
</style>

	<div id="primary" class="content-area single-homeowner">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post();
			//get_template_part( 'content', 'single' );
			$location 	= rwmb_meta( 'reno-ho-location' );
			$unit 		= rwmb_meta( 'reno-ho-unit' );
			$type 		= rwmb_meta( 'reno-ho-type' );
			$year 		= rwmb_meta( 'reno-ho-year' );
?>
			<h2>Welcome, house owner of</h2>
			<h1><strong><?php the_title(); ?></strong></h1>

			<ul class="prop_details">
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reno/location.png" /><span><?php echo $location; ?></span></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reno/unit.png" /><span><?php echo $unit; ?></span></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reno/type.png" /><span><?php echo $type; ?></span></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reno/completed.png" /><span><?php echo $year; ?></span></li>
			</ul>

			<div class="renocon">
				<div class="renorow">
					<div class="toggleimg"><?php the_post_thumbnail('full'); ?></div>
					<div class="a3d toggleimg" style="display: none;"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reno/3d.png" /></div>
					<div class="b360 toggleimg" style="display: none;"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reno/360.png" /></div>
					<div class="plan toggleimg" style="display: none;"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reno/plan.png" /></div>	
				</div>
				<div class="renorow">
					<div style="padding-top: 15px; width: 80%; display: block; margin: 0 auto;">
						<p><strong>Choose your unit type</strong></p>
						<p>
							<?php
								$unit_types = rwmb_meta( 'reno-gut-unit-type' );
								
								echo '<select>';
								foreach ( $unit_types as $unit_type ) {
								    echo '<option value="' . $unit_type . '">' . $unit_type . '</option>';
								}
								echo '</select>';
							?>
						</p>
						<p><strong>Property information</strong></p>
						<div class="pi_points"><?php rwmb_the_value( 'reno-gut-prop-info' ); ?></div>
						<p style="margin-top: 25px;"><strong>Design layout</strong><br /><br /><a class="renobutton" href="http://localhost/reno/register">Suggest me</a></p>
					</div>
				</div>
			</div>

			<div class="renoclear"></div>

			<div class="renocon">
				<ul>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reno/power.png" /></li>
					<li><a href="http://localhost/reno/register">Click here to start your house renovation</a></li>
				</ul>
			</div>

			<script type="text/javascript">
				jQuery('.pi_points ul li').on('click', function() {
					if(jQuery(this).text() == '3D'){
						jQuery('.toggleimg').hide();
						jQuery('.a3d').show();
					}
					if(jQuery(this).text() == '360'){
						jQuery('.toggleimg').hide();
						jQuery('.b360').show();
					}
					if(jQuery(this).text() == 'Plan'){
						jQuery('.toggleimg').hide();
						jQuery('.plan').show();
					}
				});
			</script>
<?php
		endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
do_action( 'storefront_sidebar' );
get_footer();