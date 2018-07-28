<style type="text/css">
	.entry-header {display: none;}
</style>
<div class="um <?php echo $this->get_class( $mode ); ?> um-<?php echo esc_attr( $form_id ); ?> um-role-<?php echo um_user( 'role' ); ?> ">

	<div class="um-form">
	
		<?php
		/**
		 * UM hook
		 *
		 * @type action
		 * @title um_profile_before_header
		 * @description Some actions before profile form header
		 * @input_vars
		 * [{"var":"$args","type":"array","desc":"Profile form shortcode arguments"}]
		 * @change_log
		 * ["Since: 2.0"]
		 * @usage add_action( 'um_profile_before_header', 'function_name', 10, 1 );
		 * @example
		 * <?php
		 * add_action( 'um_profile_before_header', 'my_profile_before_header', 10, 1 );
		 * function my_profile_before_header( $args ) {
		 *     // your code here
		 * }
		 * ?>
		 */
		do_action( 'um_profile_before_header', $args );

		if ( um_is_on_edit_profile() ) { ?>
			<form method="post" action="">
		<?php }

		/**
		 * UM hook
		 *
		 * @type action
		 * @title um_profile_header_cover_area
		 * @description Profile header cover area
		 * @input_vars
		 * [{"var":"$args","type":"array","desc":"Profile form shortcode arguments"}]
		 * @change_log
		 * ["Since: 2.0"]
		 * @usage add_action( 'um_profile_header_cover_area', 'function_name', 10, 1 );
		 * @example
		 * <?php
		 * add_action( 'um_profile_header_cover_area', 'my_profile_header_cover_area', 10, 1 );
		 * function my_profile_header_cover_area( $args ) {
		 *     // your code here
		 * }
		 * ?>
		 */
		do_action( 'um_profile_header_cover_area', $args );

		/**
		 * UM hook
		 *
		 * @type action
		 * @title um_profile_header
		 * @description Profile header area
		 * @input_vars
		 * [{"var":"$args","type":"array","desc":"Profile form shortcode arguments"}]
		 * @change_log
		 * ["Since: 2.0"]
		 * @usage add_action( 'um_profile_header', 'function_name', 10, 1 );
		 * @example
		 * <?php
		 * add_action( 'um_profile_header', 'my_profile_header', 10, 1 );
		 * function my_profile_header( $args ) {
		 *     // your code here
		 * }
		 * ?>
		 */
		do_action( 'um_profile_header', $args );

		/**
		 * UM hook
		 *
		 * @type filter
		 * @title um_profile_navbar_classes
		 * @description Additional classes for profile navbar
		 * @input_vars
		 * [{"var":"$classes","type":"string","desc":"UM Posts Tab query"}]
		 * @change_log
		 * ["Since: 2.0"]
		 * @usage
		 * <?php add_filter( 'um_profile_navbar_classes', 'function_name', 10, 1 ); ?>
		 * @example
		 * <?php
		 * add_filter( 'um_profile_navbar_classes', 'my_profile_navbar_classes', 10, 1 );
		 * function my_profile_navbar_classes( $classes ) {
		 *     // your code here
		 *     return $classes;
		 * }
		 * ?>
		 */
		$classes = apply_filters( 'um_profile_navbar_classes', '' ); ?>

		<!--NINJA <div class="um-profile-navbar <?php echo $classes ?>">
			<?php
			/**
			 * UM hook
			 *
			 * @type action
			 * @title um_profile_navbar
			 * @description Profile navigation bar
			 * @input_vars
			 * [{"var":"$args","type":"array","desc":"Profile form shortcode arguments"}]
			 * @change_log
			 * ["Since: 2.0"]
			 * @usage add_action( 'um_profile_navbar', 'function_name', 10, 1 );
			 * @example
			 * <?php
			 * add_action( 'um_profile_navbar', 'my_profile_navbar', 10, 1 );
			 * function my_profile_navbar( $args ) {
			 *     // your code here
			 * }
			 * ?>
			 */
			//NINJA - do_action( 'um_profile_navbar', $args ); ?>
			<div class="um-clear"></div>
		</div>-->

		<?php
		/**
		 * UM hook
		 *
		 * @type action
		 * @title um_profile_menu
		 * @description Profile menu
		 * @input_vars
		 * [{"var":"$args","type":"array","desc":"Profile form shortcode arguments"}]
		 * @change_log
		 * ["Since: 2.0"]
		 * @usage add_action( 'um_profile_menu', 'function_name', 10, 1 );
		 * @example
		 * <?php
		 * add_action( 'um_profile_menu', 'my_profile_navbar', 10, 1 );
		 * function my_profile_navbar( $args ) {
		 *     // your code here
		 * }
		 * ?>
		 */
		//NINJA - do_action( 'um_profile_menu', $args );

		//NINJA - $nav = UM()->profile()->active_tab;
		//NINJA - $subnav = ( get_query_var('subnav') ) ? get_query_var('subnav') : 'default';

		//NINJA - print "<div class='um-profile-body $nav $nav-$subnav'>";

			// Custom hook to display tabbed content
		/**
		 * UM hook
		 *
		 * @type action
		 * @title um_profile_content_{$nav}
		 * @description Custom hook to display tabbed content
		 * @input_vars
		 * [{"var":"$args","type":"array","desc":"Profile form shortcode arguments"}]
		 * @change_log
		 * ["Since: 2.0"]
		 * @usage add_action( 'um_profile_content_{$nav}', 'function_name', 10, 1 );
		 * @example
		 * <?php
		 * add_action( 'um_profile_content_{$nav}', 'my_profile_content', 10, 1 );
		 * function my_profile_content( $args ) {
		 *     // your code here
		 * }
		 * ?>
		 */
		//NINJA - do_action("um_profile_content_{$nav}", $args);

		/**
		 * UM hook
		 *
		 * @type action
		 * @title um_profile_content_{$nav}_{$subnav}
		 * @description Custom hook to display tabbed content
		 * @input_vars
		 * [{"var":"$args","type":"array","desc":"Profile form shortcode arguments"}]
		 * @change_log
		 * ["Since: 2.0"]
		 * @usage add_action( 'um_profile_content_{$nav}_{$subnav}', 'function_name', 10, 1 );
		 * @example
		 * <?php
		 * add_action( 'um_profile_content_{$nav}_{$subnav}', 'my_profile_content', 10, 1 );
		 * function my_profile_content( $args ) {
		 *     // your code here
		 * }
		 * ?>
		 */
		//NINJA - do_action( "um_profile_content_{$nav}_{$subnav}", $args );

		//NINJA - print "</div>";
		/* NINJA
		if ( um_is_on_edit_profile() ) { ?>
			</form>
		<?php } */?>
	</div>
</div>

<style type="text/css">
	.renocon .renorow {
		float: left;
		width: 50%;
	}
	.renobutton {
		padding: 10px 25px;
		background: #999999;
		color: #000;
		margin-top: 10px;
		border-radius: 5px;
	}
	.renoclear {
		clear: both;
	}
	.iconsbudget { list-style: none; padding: 0; margin: 0; }
	.iconsbudget li { display: inline-block; padding-right: 25px; cursor: pointer;}
</style>

<div style="display: none;" class="renotoggle">

	<div class="renocon">
		<div class="renorow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reno/optiona.jpeg" /></div>
		<div class="renorow" style="text-align: center; padding-top: 20px;"><h3><strong>Option A</strong></h3><h3>Suitable for : Young couple</h3><h3>Concept : Open and maximize space</h3></div>
	</div>

	<div class="renoclear"></div>

	<p style="margin-top: 25px;"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reno/icons.png" /></p>
	<ul class="iconsbudget">
		<li class="contructionli">Construction works</li>
		<li class="furnitureli">Furniture</li>
		<li class="lightingli">Lighting</li>
		<li class="electricalli">Electrical appliances</li>
	</ul>

	<div class="renoclear"></div>

	<div class="renocon contruction commontoggle" style="margin-top: 25px;">
		<div class="renorow"><textarea rows="4" cols="50" style="height: 400px;"></textarea></div>
		<div class="renorow" style="padding: 15px;"><p>Knwoledge corner</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p><a class="renobutton" href="#">Review and submit</a></div>
	</div>

	<div class="renocon furniture commontoggle" style="margin-top: 25px; display: none;">
		<div class="renorow"><textarea rows="4" cols="50" style="height: 400px;"></textarea></div>
		<div class="renorow" style="padding: 15px;"><p>FURNITURE</p><a class="renobutton" href="#">Review and submit</a></div>
	</div>

	<div class="renocon lighting commontoggle" style="margin-top: 25px; display: none;">
		<div class="renorow"><textarea rows="4" cols="50" style="height: 400px;"></textarea></div>
		<div class="renorow" style="padding: 15px;"><p>LIGHTING</p><a class="renobutton" href="#">Review and submit</a></div>
	</div>

	<div class="renocon electrical commontoggle" style="margin-top: 25px; display: none;">
		<div class="renorow"><textarea rows="4" cols="50" style="height: 400px;"></textarea></div>
		<div class="renorow" style="padding: 15px;"><p>ELECTRICAL APPLIANCE</p><a class="renobutton" href="#">Review and submit</a></div>
	</div>

	<div class="renoclear"></div>

	<h3 style="margin-top: 55px;"><strong>Having problems on confirming the material and specifications ?</strong></h3>
	<p>RENO360 consultants are ready to assist you on  determine your requirement. 
	Kindly schedule an appoinment with our consultants and we will provie you an online consultation for FREE</p>
	<a class="renobutton" href="#">Schedule appoinment</a>
</div>


<script type="text/javascript">
	jQuery('.get_started').on('click', function() {
		jQuery('.um-profile').hide();
		jQuery('.renotoggle').show();
	});
	jQuery('.contructionli').on('click', function() {
		jQuery('.commontoggle').hide();
		jQuery('.contruction').show();
	});
	jQuery('.furnitureli').on('click', function() {
		jQuery('.commontoggle').hide();
		jQuery('.furniture').show();
	});
	jQuery('.lightingli').on('click', function() {
		jQuery('.commontoggle').hide();
		jQuery('.lighting').show();
	});
	jQuery('.electricalli').on('click', function() {
		jQuery('.commontoggle').hide();
		jQuery('.electrical').show();
	});
</script>