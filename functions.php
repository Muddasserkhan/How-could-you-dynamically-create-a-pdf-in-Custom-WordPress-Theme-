<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

if ( ! function_exists( 'twentynineteen_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function twentynineteen_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'twentynineteen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'twentynineteen' ),
				'footer' => __( 'Footer Menu', 'twentynineteen' ),
				'social' => __( 'Social Links Menu', 'twentynineteen' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'twentynineteen' ),
					'shortName' => __( 'S', 'twentynineteen' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'twentynineteen' ),
					'shortName' => __( 'M', 'twentynineteen' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'twentynineteen' ),
					'shortName' => __( 'L', 'twentynineteen' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'twentynineteen' ),
					'shortName' => __( 'XL', 'twentynineteen' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => 'default' === get_theme_mod( 'primary_color' ) ? __( 'Blue', 'twentynineteen' ) : null,
					'slug'  => 'primary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 33 ),
				),
				array(
					'name'  => 'default' === get_theme_mod( 'primary_color' ) ? __( 'Dark Blue', 'twentynineteen' ) : null,
					'slug'  => 'secondary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 23 ),
				),
				array(
					'name'  => __( 'Dark Gray', 'twentynineteen' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'twentynineteen' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'twentynineteen' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height.
		add_theme_support( 'custom-line-height' );
	}
endif;
add_action( 'after_setup_theme', 'twentynineteen_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentynineteen_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'twentynineteen' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'twentynineteen_widgets_init' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Twenty Nineteen 2.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function twentynineteen_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf(
		'<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Post title. */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'twentynineteen_excerpt_more' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function twentynineteen_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'twentynineteen_content_width', 640 );
}
add_action( 'after_setup_theme', 'twentynineteen_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function twentynineteen_scripts() {
	wp_enqueue_style( 'twentynineteen-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	wp_style_add_data( 'twentynineteen-style', 'rtl', 'replace' );

	if ( has_nav_menu( 'menu-1' ) ) {
		wp_enqueue_script( 'twentynineteen-priority-menu', get_theme_file_uri( '/js/priority-menu.js' ), array(), '20181214', true );
		wp_enqueue_script( 'twentynineteen-touch-navigation', get_theme_file_uri( '/js/touch-keyboard-navigation.js' ), array(), '20181231', true );
	}

	wp_enqueue_style( 'twentynineteen-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function twentynineteen_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'twentynineteen_skip_link_focus_fix' );

/**
 * Enqueue supplemental block editor styles.
 */
function twentynineteen_editor_customizer_styles() {

	wp_enqueue_style( 'twentynineteen-editor-customizer-styles', get_theme_file_uri( '/style-editor-customizer.css' ), false, '1.1', 'all' );

	if ( 'custom' === get_theme_mod( 'primary_color' ) ) {
		// Include color patterns.
		require_once get_parent_theme_file_path( '/inc/color-patterns.php' );
		wp_add_inline_style( 'twentynineteen-editor-customizer-styles', twentynineteen_custom_colors_css() );
	}
}
add_action( 'enqueue_block_editor_assets', 'twentynineteen_editor_customizer_styles' );

/**
 * Display custom color CSS in customizer and on frontend.
 */
function twentynineteen_colors_css_wrap() {

	// Only include custom colors in customizer or frontend.
	if ( ( ! is_customize_preview() && 'default' === get_theme_mod( 'primary_color', 'default' ) ) || is_admin() ) {
		return;
	}

	require_once get_parent_theme_file_path( '/inc/color-patterns.php' );

	$primary_color = 199;
	if ( 'default' !== get_theme_mod( 'primary_color', 'default' ) ) {
		$primary_color = get_theme_mod( 'primary_color_hue', 199 );
	}
	?>

	<style type="text/css" id="custom-theme-colors" <?php echo is_customize_preview() ? 'data-hue="' . absint( $primary_color ) . '"' : ''; ?>>
		<?php echo twentynineteen_custom_colors_css(); ?>
	</style>
	<?php 
}

add_action( 'wp_head', 'twentynineteen_colors_css_wrap' );

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-twentynineteen-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-twentynineteen-walker-comment.php';

/**
 * Common theme functions.
 */
require get_template_directory() . '/inc/helper-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Block Patterns. 
 */
require get_template_directory() . '/inc/block-patterns.php'; 


/**
 * Elementor widget for annoucemnets. 
 */
add_action('init', function(){ 
	if(did_action('elementor/loaded')){
		require_once __DIR__ . '/template-parts/elementor_post_widget.php';
		\Elementor\Plugin::instance()->widgets_manager-> register_widget_type( new ElementorPostswidget() );   
	}
	
}); 

function login_redirect( $redirect_to, $request, $user ){
    return home_url('/welcome-page/');
}
add_filter( 'login_redirect', 'login_redirect', 10, 3 );






add_action( 'gform_after_submission_3', 'access_employment_application', 10, 2 );

function access_employment_application( $entry, $form ) 
{
		$LastName = $entry["3"];
		$FirstName = $entry["4"];
		$MI = $entry["5"];
		$date = $entry["6"];
		$staddress = $entry["7"];
		$apart = $entry["8"];
		$city = $entry["9"];
		$state = $entry["10"];
		$zip = $entry["13"];
		$phone = $entry["14"];
		$email = $entry["15"];
		$date_av = $entry["17"];
		$ssn = $entry["18"];
		$desiredsalary = $entry["19"];
		$citizen = $entry["21"];
		$authorized = $entry["22"];
		$worked = $entry["23"];
		$worked1 = $entry["24"];
		$worked2 = $entry["26"];
		$convicted = $entry["25"];	


//	echo "------------Page 1 End---------------<br/>";
//	echo "------------Education Level---------------<br/>";

		$highschoolfrom = $entry["29"];
		$highschoolto = $entry["31"];
		$collegeschoolfrom = $entry["273"];
		$collegeschoolto = $entry["274"];
		$graduate = $entry["34"];
		$otherdegree = $entry["38"];
		$hear_about = $entry["41"];	

//	echo "------------Page 2 End---------------<br/>";
//	echo "------------References---------------<br/>";	

		$ref1fullname = $entry["43"];
		$ref1relation = $entry["44"];
		$ref1company = $entry["45"];
		$ref1phone = $entry["46"];
		$ref1address = $entry["342"];
	
		$ref2fullname = $entry["47"];
		$ref2relation = $entry["48"];
		$ref2company = $entry["49"];
		$ref2phone = $entry["50"];
		$ref2address = $entry["343"];
		
		$ref3fullname = $entry["54"];
		$ref3relation = $entry["55"];
		$ref3company = $entry["56"];
		$ref3phone = $entry["57"];
		$ref3address = $entry["344"];
//	echo "------------Page 3 End---------------<br/>";
//	echo "------------Previous Employment---------------<br/>";	
		$prev1company = $entry["61"];
		$prev1phone = $entry["63"];
		$prev1address = $entry["64"];
		$prev1supervisor = $entry["65"];
		$prev1job = $entry["66"];
		$prev1st_sal = $entry["67"];
		$prev1end_sal = $entry["68"];
		$prev1responsibility = $entry["69"];
		$prev1from1 = $entry["70"];
		$prev1to1 = $entry["71"];
		$prev1reason = $entry["72"];
		$prev1con_super = $entry["73"];
		
		$prev2company = $entry["74"];
		$prev2phone = $entry["76"];
		$prev2address = $entry["77"];
		$prev2supervisor = $entry["78"];
		$prev2job = $entry["79"];
		$prev2st_sal = $entry["80"];
		$prev2end_sal = $entry["81"];
		$prev2responsibility = $entry["82"];
		$prev2from2 = $entry["83"];
		$prev2to2 = $entry["84"];
		$prev2reason = $entry["85"];
		$prev2con_super = $entry["313"];
			
		$prev3company = $entry["315"];
		$prev3phone = $entry["316"];
		$prev3address = $entry["317"];
		$prev3supervisor = $entry["318"];
		$prev3job = $entry["319"];
		$prev3st_sal = $entry["320"];
		$prev3end_sal = $entry["321"];
		$prev3responsibility = $entry["322"];
		$prev3from3 = $entry["323"];
		$prev3to3 = $entry["324"];
		$prev3reason = $entry["325"];
		$prev3con_super = $entry["326"];
				
		$prev4company = $entry["329"];
		$prev4phone = $entry["330"];
		$prev4address = $entry["331"];
		$prev4supervisor = $entry["332"];
		$prev4job = $entry["333"];
		$prev4st_sal = $entry["334"];
		$prev4end_sal = $entry["335"];
		$prev4responsibility = $entry["336"];
		$prev4from4 = $entry["337"];
		$prev4to4 = $entry["338"];
		$prev4reason = $entry["339"];
		$prev4con_super = $entry["340"];

//	echo "------------Page 4 End---------------<br/>";
//	echo "------------Military service---------------<br/>";	

		$militrybranch = $entry["88"];
		$mlfrom = $entry["89"];
		$mlto = $entry["90"];
		$rank_dis = $entry["91"];
		$tye_discharge = $entry["92"];
		$honorable_explain = $entry["94"];

//	echo "------------Page 5 End---------------<br/>";
//	echo "------------Verification---------------<br/>";

		$vempname = $entry["289"];
		$vempssn = $entry["291"];

//	echo "------------Page 6 End---------------<br/>";	
//	echo "------------Disclaimer---------------<br/>";

		$disclaimer_sig = $entry["272"];
		//$signature_url1 = gf_signature()->get_signature_url( $disclaimer_sig );
	    $signature_url1 = home_url('/wp-content/uploads/gravity_forms/signatures/').$disclaimer_sig;
		//$signature_url =  GF_Signature_Url::get_url($disclaimer_sig);
		$disclaimer_date = $entry["97"];	

//	echo "------------Page 7 End---------------<br/>";	
//	echo "------------DPS---------------<br/>";			
		$dps_emp_name = $entry["143"];
		$dps_sig = $entry["275"];
		//$signature_url2 = gf_signature()->get_signature_url($dps_sig);
		
		//$signature_url2 = '';
		
		$signature_url2 = home_url('/wp-content/uploads/gravity_forms/signatures/').$dps_sig;
		$dps_date = $entry["146"];

//	echo "------------Page 8 End---------------<br/>";	
//	echo "------------Statement---------------<br/>";	

		$statement_emp_name = $entry["164"];

//	echo "------------Page 9 End---------------<br/>";	
//	echo "------------Statement 2---------------<br/>";	

		$statement_emp_sig = $entry["277"];
		//$signature_url3 = gf_signature()->get_signature_url($statement_emp_sig);
		
		
		//$signature_url3 = '';
		$signature_url3 = home_url('/wp-content/uploads/gravity_forms/signatures/').$statement_emp_sig;
		$statement_emp_name = $entry["169"];
		$statement_emp_date = $entry["170"];
		
		$req_emp_name = $entry["224"];
		$req_emp_ssn = $entry["184"];
		
		$req_emp_sig = $entry["285"];
		//$signature_url4 = gf_signature()->get_signature_url($req_emp_sig);
		
		//$signature_url4 = '';
		$signature_url4 = home_url('/wp-content/uploads/gravity_forms/signatures/').$req_emp_sig;
		$req_emp_date = $entry["190"];
		
		$req_wit_sig = $entry["286"];
		//$signature_url5 = gf_signature()->get_signature_url($req_wit_sig);
		
		
		//$signature_url5 = '';
		$signature_url5 = home_url('/wp-content/uploads/gravity_forms/signatures/').$req_wit_sig;
		$req_wit_date = $entry["194"];
		
		$dat_employeed_from = $entry["195"];
		$dat_employeed_to = $entry["196"];
		$dat_start_salary = $entry["197"];
		$dat_ending_salary = $entry["198"];
		$dat_position_held = $entry["199"];
		
		// gaian
	
		$req_emp_name1 = $entry["187"];
		$req_emp_ssn1 = $entry["225"];
		
		$req_emp_sig1 = $entry["282"];
		//$signature_url6 = gf_signature()->get_signature_url($req_emp_sig1);
		
		
		//$signature_url6 = '';
		$signature_url6 = home_url('/wp-content/uploads/gravity_forms/signatures/').$req_emp_sig1;
		$req_emp_date1 = $entry["228"];
		
		$req_wit_sig1 = $entry["283"];
		//$signature_url7 = gf_signature()->get_signature_url($req_wit_sig1);
		
		
		//$signature_url7 = '';
		$signature_url7 = home_url('/wp-content/uploads/gravity_forms/signatures/').$req_wit_sig1;
		$req_wit_date1 = $entry["230"];
						
		$dat_employeed_from1 = $entry["232"];
		$dat_employeed_to1 = $entry["233"];
		$dat_start_salary1 = $entry["234"];
		$dat_ending_salary1 = $entry["235"];
		$dat_position_held1 = $entry["236"];


//	echo "------------Page 10 End---------------<br/>";	
//	echo "------------PHC---------------<br/>";	

		$phc_employ_name = $entry["251"];
		$phc_employ_sig = $entry["280"];
		//$signature_url8 = gf_signature()->get_signature_url($phc_employ_sig);
		
		//$signature_url8 = '';
		$signature_url8 = home_url('/wp-content/uploads/gravity_forms/signatures/').$phc_employ_sig;
		$phc_employ_date = $entry["254"];
		
		$phc_employ_sf_fre = $entry["281"];
		//$signature_url9 = gf_signature()->get_signature_url($phc_employ_sf_fre);
		
		
		//$signature_url9 = '';
		$signature_url9 = home_url('/wp-content/uploads/gravity_forms/signatures/').$phc_employ_sf_fre;
		$phc_employ_sf_date = $entry["259"];		
		
		// including the fpdfapis and writing the pdf file
		
		require_once(dirname(__FILE__) . '/pdfintegration/pdf.php');
		
}






// Employment Orientation Form

add_action( 'gform_after_submission_8', 'employment_orientation_application', 10, 2 );

function employment_orientation_application( $entry, $form ) 
{
	// echo "<pre>";
	// print_r($entry);
	// echo "</pre>";

	// exit();


	//	echo "------------Job Description for Personal Care Attendant---------------<br/>";	

		$personal_emp_name = $entry["44"];

	//	echo "------------Page 3 End---------------<br/>";
	//	echo "------------Physical Requirements---------------<br/>";	

		
		$phy_sign_url = $entry["286"];
		$phy_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$phy_sign_url;

		$phy_date = $entry["287"];


	//	echo "------------Page 4 End---------------<br/>";	
	//	echo "------------Attendant Emergency Preparedness Training---------------<br/>";	

		$attendant_date = $entry["288"];
		$attendant_emp_name = $entry["292"];
		$attendant_hr_clreck = $entry["88"];
		
		$attendant_emp_sign_url = $entry["293"];
		$attendant_emp_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$attendant_emp_sign_url;


		$attendant_sup_sign_url = $entry["294"];
		$attendant_sup_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$attendant_sup_sign_url;
		
		

	//	echo "------------Page 5 End---------------<br/>";
	//	echo "------------EMPLOYEE MISCONDUCT • NURSE AIDE REGISTRY INFORMATION FOR EMPLOYEES /VOLUNTEERS---------------<br/>";	

		$emp_misconduct_name = $entry["296"];


		$emp_misconduct_sign_url = $entry["554"];
		$emp_misconduct_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$emp_misconduct_sign_url;

		//$emp_misconduct_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$entry["554"];



		$emp_misconduct_date = $entry["97"];

	//	echo "------------Page 6 End---------------<br/>";
	//	echo "------------Quality Care---------------<br/>";	

		$quality_care_name = $entry["1111"];

		$quality_care_sign_url = $entry["300"];
		$quality_care_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$quality_care_sign_url;

		$quality_care_date = $entry["109"];
		

	//	echo "------------Page 7 End---------------<br/>";
	//	echo "------------Employee Risk Category---------------<br/>";	

		$emp_risk_cat_name = $entry["114"];
		$emp_risk_cat_ssn = $entry["1109"];
		$emp_risk_cat_job_title = $entry["117"];
		$emp_risk_cat_hire_date = $entry["116"];
		$emp_risk_cat_initial_text = $entry["121"];
		$emp_risk_cat_initial_text1 = $entry["306"];

		$emp_risk_cat_sign_url = $entry["308"];
		$emp_risk_cat_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$emp_risk_cat_sign_url;

		$emp_risk_cat_date = $entry["309"];


	//	echo "------------Page 8 End---------------<br/>";
	//	echo "------------Reporting of Abuse, Neglect and Exploitation---------------<br/>";	

		

		$reporting_sign_url = $entry["314"];
		$reporting_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$reporting_sign_url;

		$reporting_date = $entry["146"];

		$reporting_trainer_sign_url = $entry["1263"];
		$reporting_trainer_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$reporting_trainer_sign_url;

		$reporting_date2 = $entry["150"];
		

	//	echo "------------Page 9 End---------------<br/>";	
	//	echo "------------Abuse, Neglect, and Exploitation---------------<br/>";	

		$abu_neg_emp_name = $entry["315"];
		$abu_neg_emp_training_date = $entry["316"];

		$abu_neg_emp_check1 = $entry["317.1"];
		$abu_neg_emp_check2 = $entry["317.2"];
		$abu_neg_emp_check3 = $entry["317.3"];
		$abu_neg_emp_check4 = $entry["317.4"];
		$abu_neg_emp_check5 = $entry["317.5"];
		$abu_neg_emp_check6 = $entry["318.1"];
		$abu_neg_emp_check7 = $entry["318.2"];
		$abu_neg_emp_check8 = $entry["320.1"];
		$abu_neg_emp_check9 = $entry["320.2"];
		$abu_neg_emp_check10 = $entry["320.3"];
		$abu_neg_emp_note = $entry["324"];
		

		$abu_neg_emp_sign_url = $entry["1264"];
		$abu_neg_emp_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$abu_neg_emp_sign_url;


		$abu_neg_emp_date = $entry["326"];

		$abu_neg_emp_trainer_sign_url = $entry["325"];
		$abu_neg_emp_trainer_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$abu_neg_emp_trainer_sign_url;

		$abu_neg_emp_date2 = $entry["328"];

	//	echo "------------Page 10 End---------------<br/>";
	//	echo "------------Personal Attendant Wages Increase May 10, 2020---------------<br/>";	

		$personal_attendant_print_name = $entry["169"];
		$personal_attendant_date = $entry["170"];


		$personal_attendant_sign_url = $entry["329"];
		$personal_attendant_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$personal_attendant_sign_url;



	//	echo "------------Page 11 End---------------<br/>";
	//	echo "------------PAYROLL AND WAGE---------------<br/>";	

		$payroll_emp_name = $entry["251"];
		$payroll_Phone = $entry["330"];
		$payroll_address = $entry["332"];
		$payroll_hire_date = $entry["333"];
		$payroll_job_title = $entry["334"];
		$payroll_date_birth = $entry["335"];
		$payroll_ssn = $entry["1179"];
		$payroll_marital = $entry["337"];
		$payroll_dependents = $entry["338"];

		$payroll_exempt_emp_yes = $entry["1265.1"];
		$payroll_exempt_emp_no = $entry["1265.2"];

		$payroll_contractor_yes = $entry["1266.1"];
		$payroll_contractor_no = $entry["1266.2"];


		$payroll_salaried_yes = $entry["1267.1"];
		$payroll_salaried_no = $entry["1267.2"];




		$payroll_anu_salaried = $entry["343"];





		$payroll_orientation = $entry["346"];
		// $payroll_orientation_choice = $entry["348"];

		$payroll_regular_rate = $entry["350"];
		// $payroll_regular_rate_choice = $entry["351"];

		$payroll_overtime = $entry["353"];
		// $payroll_overtime_choice = $entry["354"];

		$payroll_meetings = $entry["356"];
		// $payroll_meetings_choice = $entry["357"];

		$payroll_mileage = $entry["359"];
		// $payroll_mileage_choice = $entry["360"];





		$payroll_approved_by = $entry["363"];



		$payroll_change_date = $entry["1067"];
		$payroll_change_current_rate = $entry["1069"];
		$payroll_change_inc_rate = $entry["1082"];
		$payroll_change_eff_date = $entry["1096"];
		$payroll_change_approved = $entry["1172"];

		// $payroll_change_1 = $entry["1103"];

		$payroll_change_date1 = $entry["1076"];
		$payroll_change_current_rate1 = $entry["1070"];
		$payroll_change_inc_rate1 = $entry["1088"];
		$payroll_change_eff_date1 = $entry["1089"];
		$payroll_change_approved1 = $entry["1173"];

		// $payroll_change_2 = $entry["1104"];

		$payroll_change_date2 = $entry["1075"];
		$payroll_change_current_rate2 = $entry["1081"];
		$payroll_change_inc_rate2 = $entry["1087"];
		$payroll_change_eff_date2 = $entry["1095"];
		$payroll_change_approved2 = $entry["1174"];

		// $payroll_change_3 = $entry["1105"];

		$payroll_change_date_3 = $entry["1074"];
		$payroll_change_current_rate3 = $entry["1080"];
		$payroll_change_inc_rate3 = $entry["1086"];
		$payroll_change_eff_date3 = $entry["1094"];
		$payroll_change_approved3 = $entry["1175"];

		// $payroll_change_4 = $entry["1106"];

		$payroll_change_date4 = $entry["1073"];
		$payroll_change_current_rate4 = $entry["1079"];
		$payroll_change_inc_rate4 = $entry["1085"];
		$payroll_change_eff_date4 = $entry["1093"];
		$payroll_change_approved4 = $entry["1176"];


		// $payroll_change_5 = $entry["1107"];

		$payroll_change_date_5 = $entry["1072"];
		$payroll_change_current_rate_5 = $entry["1078"];
		$payroll_change_inc_rate_5 = $entry["1084"];
		$payroll_change_eff_date_5 = $entry["1092"];
		$payroll_change_approved_5 = $entry["1177"];


		// $payroll_change_6 = $entry["1108"];

		$payroll_change_date6 = $entry["1071"];
		$payroll_change_current_rate6 = $entry["1077"];
		$payroll_change_inc_rate6 = $entry["1083"];
		$payroll_change_eff_date6 = $entry["1091"];
		$payroll_change_approved6 = $entry["1178"];

	//	echo "------------Page 12 End---------------<br/>";
	//	echo "------------Pick Up Location---------------<br/>";	

		$pickup_text_1 = $entry["1268.1"];
		$pickup_text_2 = $entry["1268.2"];


		$pickup_sign_url = $entry["370"];
		$pickup_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$pickup_sign_url;


		$pickup_date = $entry["371"];

	//	echo "------------Page 13 End---------------<br/>";			
	//	echo "------------Payroll Check Mailing Agreement---------------<br/>";	

		$check_mailing_emp_name = $entry["375"];
		$check_mailing_print_name = $entry["377"];
		$check_mailing_ss = $entry["378"];
		


		$check_mailing_sign_url = $entry["381"];
		$check_mailing_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$check_mailing_sign_url;


		$check_mailing_date = $entry["382"];

	//	echo "------------Page 14 End---------------<br/>";
	//	echo "------------Taxes Employer New Hire Reporting Form---------------<br/>";	

		$taxes_employer_id_fein = $entry["559"];
		$taxes_employer_id_no = $entry["560"];
		$taxes_employer_name = $entry["562"];
		$taxes_employer_address = $entry["564"];
		$taxes_employer_city = $entry["565"];
		$taxes_employer_state = $entry["566"];
		$taxes_employer_zip_code = $entry["567"];
		$taxes_employer_province = $entry["568"];
		$taxes_employer_country = $entry["569"];
		$taxes_employer_postal_code = $entry["570"];
		$taxes_employer_tel = $entry["571"];
		$taxes_employer_fax = $entry["572"];
		$taxes_employer_hire_contact = $entry["573"];
		$taxes_employer_ssn = $entry["576"];

		$taxes_employer_hire_date = $entry["577"];
		$taxes_employer_fname = $entry["578.3"];
		$taxes_employer_mname = $entry["578.4"];
		$taxes_employer_lname = $entry["578.6"];
		$taxes_employer_home_address = $entry["579"];
		$taxes_employer_info_city = $entry["580"];
		$taxes_employer_info_state = $entry["581"];
		$taxes_employer_info_zipcode = $entry["582"];

		$taxes_employer_info_region = $entry["583"];
		$taxes_employer_info_country = $entry["584"];
		$taxes_employer_info_postalcode = $entry["585"];

		$taxes_employer_info_hired = $entry["586"];
		$taxes_employer_info_birthdate = $entry["587"];
		$taxes_employer_info_salary = $entry["588"];
		
		$taxes_employer_info_sal_freq1 = $entry["1113.1"];
		$taxes_employer_info_sal_freq2 = $entry["1113.2"];
		$taxes_employer_info_sal_freq3 = $entry["1113.3"];
		$taxes_employer_info_sal_freq4 = $entry["1113.4"];
		$taxes_employer_info_sal_freq5 = $entry["1113.5"];
		$taxes_employer_info_sal_freq6 = $entry["1113.6"];

	//	echo "------------Page 15 End---------------<br/>";		
	//	echo "------------Employee's Witholding Certificate---------------<br/>";	

		$with_cert_emp_fname = $entry["594.3"];
		$with_cert_mname = $entry["594.4"];
		$with_cert_lname = $entry["594.6"];
		$with_cert_ssn = $entry["595"];
		$with_cert_address = $entry["598"];
		$with_cert_city = $entry["599"];
		$with_cert_state = $entry["600"];
		$with_cert_zipc = $entry["601"];

		$with_cert_marital_status = $entry["1269.1"];
		$with_cert_marital_status_c1 = $entry["1269.2"];
		$with_cert_marital_status_c2 = $entry["1269.3"];

		$with_cert_check = $entry["607.1"];
		$with_cert_claim_amount1 = $entry["612"];
		$with_cert_claim_amount2 = $entry["615"];
		$with_cert_claim_amount3 = $entry["674"];

		$with_cert_other_adj_amount1 = $entry["619"];
		$with_cert_other_adj_amount2 = $entry["621"];
		$with_cert_other_adj_amount3 = $entry["623"];
		


		$with_cert_sign_url = $entry["625"];
		$with_cert_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$with_cert_sign_url;

		$with_cert_date = $entry["626"];
		$with_cert_emp_name = $entry["628"];
		$with_cert_emp_add = $entry["678"];
		$with_cert_fdate_emp = $entry["629"];
		$with_cert_ein = $entry["679"];

	//	echo "------------Page 16 End---------------<br/>";	
	//	echo "------------Step 2(b)-Multiple Jobs Worksheet (Keep for your records.)---------------<br/>";	

		$mul_job_work_salry1 = $entry["691"];
		$mul_job_work_salary2 = $entry["695"];
		$mul_job_work_salary3 = $entry["697"];
		$mul_job_work_salary4 = $entry["699"];
		$mul_job_work_salary5 = $entry["701"];
		$mul_job_work_salary6 = $entry["703"];

		$ded_work_salary1 = $entry["706"];
		$ded_work_salary2 = $entry["708"];
		$ded_work_salary3 = $entry["710"];
		$ded_work_salary4 = $entry["712"];
		$ded_work_salary5 = $entry["714"];

	//	echo "------------Page 18 End---------------<br/>";	
	//	echo "------------Employment Eligibility Verification Department of Homeland Security---------------<br/>";	

		$emp_eligibility_lname = $entry["728"];
		$emp_eligibility_fname = $entry["729"];
		$emp_eligibility_mname = $entry["730"];
		$emp_eligibility_other = $entry["731"];
		$emp_eligibility_address = $entry["634"];
		$emp_eligibility_apt_no = $entry["635"];

		$emp_eligibility_town = $entry["636"];
		$emp_eligibility_state = $entry["637"];
		$emp_eligibility_zip_no = $entry["639"];
		$emp_eligibility_birth_date = $entry["640"];
		$emp_eligibility_ssn = $entry["641"];
		$emp_eligibility_email_add = $entry["642"];
		$emp_eligibility_tel_no = $entry["643"];
		$emp_eligibility_check1 = $entry["732.1"];
		$emp_eligibility_check2 = $entry["732.2"];
		$emp_eligibility_check3 = $entry["732.3"];
		$emp_eligibility_check4 = $entry["732.4"];

		$emp_eligibility_reg_no = $entry["649"];
		$emp_eligibility_adm_no = $entry["651"];
		$emp_eligibility_pass_no = $entry["653"];
		$emp_eligibility_coun_issu = $entry["655"];
		



		$emp_eligibility_sign_url = $entry["656"];
		$emp_eligibility_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$emp_eligibility_sign_url;


		$emp_eligibility_todate = $entry["657"];

		$emp_eligibility_tran_cert = $entry["733.1"];
		$emp_eligibility_tran_cert1 = $entry["734.1"];


		$emp_eligibility_tran_sign_url = $entry["662"];
		$emp_eligibility_tran_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$emp_eligibility_tran_sign_url;
		
		$emp_eligibility_tran_date = $entry["663"];
		$emp_eligibility_tran_fam_name = $entry["735"];
		$emp_eligibility_tran_fname = $entry["736"];

		$emp_eligibility_tran_add = $entry["665"];
		$emp_eligibility_tran_city = $entry["666"];
		$emp_eligibility_tran_state = $entry["667"];
		$emp_eligibility_tran_zip = $entry["668"];

	//	echo "------------Page 20 End---------------<br/>";		
	//	echo "------------Employment Eligibility Verification Department of Homeland Security---------------<br/>";	

		$vari_homeland_lname = $entry["742"];
		$vari_homeland_fname = $entry["743"];
		$vari_homeland_mi = $entry["744"];
		$vari_homeland_citizen = $entry["745"];


		$vari_homeland_la_dtitle  = $entry["750"];
		$vari_homeland_lb_dtitle  = $entry["751"];
		$vari_homeland_lc_ssc  = $entry["752"];
		$vari_homeland_la_athu  = $entry["753"];
		$vari_homeland_lb_safety  = $entry["754"];
		$vari_homeland_lc_ssa  = $entry["755"];
		$vari_homeland_la_dno = $entry["756"];
		$vari_homeland_lb_dno = $entry["757"];
		$vari_homeland_lc_dno = $entry["758"];
		$vari_homeland_la_exp_no  = $entry["759"];
		$vari_homeland_lb_exp_no  = $entry["760"];	
		$vari_homeland_lc_exp_no  = $entry["761"];

		$vari_homeland_lmore_dtitle  = $entry["775"];
		$vari_homeland_lmore_athu  = $entry["782"];
		$vari_homeland_lmore_dno = $entry["780"];
		$vari_homeland_lmore_exp_no  = $entry["783"];

		$vari_homeland_add_info = $entry["776"];
		
		$vari_homeland_lmore_dtitle_1  = $entry["773"];
		$vari_homeland_lmore_athu_1 = $entry["774"];
		$vari_homeland_lmore_dno_1 = $entry["770"];
		$vari_homeland_lmore_exp_date_1  = $entry["771"];		

		$vari_homeland_fday_emp = $entry["786"];
		


		// $vari_homeland_sign_url = $entry["788"];
		// $vari_homeland_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$vari_homeland_sign_url;


		$vari_homeland_today = $entry["818"];
		
		// $vari_homeland_tauth = $entry["817"];
		// $vari_homeland_lname_auth = $entry["819"];
		// $vari_homeland_fname_emp_auth = $entry["792"];
		// $vari_homeland_emp_org_name = $entry["793"];
		// $vari_homeland_org_add = $entry["794"];
		// $vari_homeland_city = $entry["795"];
		// $vari_homeland_state = $entry["796"];
		// $vari_homeland_zip = $entry["797"];


		$revari_rehires_lname = $entry["801"];
		$revari_rehires_fname = $entry["802"];
		$revari_rehires_mname = $entry["803"];
		$revari_rehires_date = $entry["805"];

		$vari_homeland_dtitle_1 = $entry["807"];
		$vari_homeland_dno_1 = $entry["809"];
		$vari_homeland_exp_1 = $entry["810"];

		
		// $vari_homeland_auth_sign_url = $entry["814"];
		// $vari_homeland_auth_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$vari_homeland_auth_sign_url;

		$vari_homeland_tdate = $entry["815"];
		$vari_homeland_name_auth = $entry["816"];


	//	echo "------------Page 21 End---------------<br/>";
	//	echo "------------Pre-Screening Notice and Certification Request for the Work Opportunity Credit---------------<br/>";	

		$pre_scr_certi_name = $entry["823"];
		$pre_scr_certi_ssn = $entry["824"];
		$pre_scr_certi_add = $entry["825"];
		$pre_scr_certi_city = $entry["826"];
		$pre_scr_certi_state = $entry["827"];
		$pre_scr_certi_zip = $entry["828"];
		$pre_scr_certi_country = $entry["829"];
		$pre_scr_certi_tel_no = $entry["831"];
		$pre_scr_certi_birth_date = $entry["833"];
		
		$pre_scr_certi_check_1 = $entry["835.1"];
		$pre_scr_certi_check_2 = $entry["835.2"];
		$pre_scr_certi_check_3 = $entry["835.3"];
		$pre_scr_certi_check_4 = $entry["835.4"];
		$pre_scr_certi_check_5 = $entry["835.5"];
		$pre_scr_certi_check_6 = $entry["835.6"];
		$pre_scr_certi_check_7 = $entry["835.7"];

		$pre_scr_certi_sign_url = $entry["837"];
		$pre_scr_certi_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$pre_scr_certi_sign_url;


		$pre_scr_certi_date = $entry["838"];

	//	echo "------------Page 22 End---------------<br/>";
	//	echo "------------For Employer's Use Only---------------<br/>";	

		$for_emp_use_home_name = $entry["841"];
		$for_emp_use_tel_no = $entry["842"];
		$for_emp_use_ein = $entry["843"];
		$for_emp_use_address = $entry["844"];
		$for_emp_use_city = $entry["845"];
		$for_emp_use_state = $entry["846"];
		$for_emp_use_zip = $entry["847"];
		$for_emp_use_per_contact = $entry["848"];
		$for_emp_use_tel_no = $entry["849"];

		$for_emp_use_add = $entry["850"];
		$for_emp_use_city_1 = $entry["851"];
		$for_emp_use_state_1 = $entry["852"];
		$for_emp_use_zip_1 = $entry["853"];
		$for_emp_use_tar_group = $entry["855"];
		$for_emp_use_date_app_info = $entry["857"];
		$for_emp_use_offer_job = $entry["858"];
		$for_emp_use_hired = $entry["859"];
		$for_emp_use_sta_job = $entry["860"];
		

		$for_emp_use_sign_url = $entry["863"];
		$for_emp_use_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$for_emp_use_sign_url;


		$for_emp_use_hr_cor = $entry["864"];
		$for_emp_use_ldate = $entry["865"];


	//	echo "------------Page 23 End---------------<br/>";	
	//	echo "------------Individual Characteristics Form (ICF) Work Opportunity Tax Credit---------------<br/>";	

		$ind_char__control_no = $entry["872"];
		$ind_char_drecived = $entry["873"];

		$ind_char_app_info_emp_name = $entry["876"];
		$ind_char_emp_add = $entry["877"];
		$ind_char_emp_tel = $entry["878"];
		$ind_char_emp_id = $entry["879"];

		$applicant_info_name = $entry["881"];
		$applicant_info_ssn = $entry["882"];
		$applicant_info_emp_work_before = $entry["883"];
		$ind_char_ldate_emp = $entry["885"];
		
		$group_certi_emp_sdate= $entry["907"];
		$group_certi_star_wage = $entry["1171"];
		$group_certi_position = $entry["906"];
		$group_certi_atleast_age = $entry["890"];
		$group_certi_birt_date = $entry["892"];
		$group_certi_arm_force = $entry["893"];
		$group_certi_snap = $entry["897"];
		$group_certi_pname = $entry["899"];
		$group_certi_rcity_name = $entry["901"];
		$group_certi_service_con = $entry["902"];
		$group_certi_disc = $entry["903"];
		$group_certi_unemp = $entry["904"];

		$group_certi_nutrition_ass = $entry["908"];
		$group_certi_bene_snap = $entry["909"];
		$group_certi_nutrition_pname = $entry["914"];
		$group_certi_nutrition_rcity = $entry["916"];

		$group_certi_rehab_appr = $entry["918"];
		$group_certi_emp_net = $entry["919"];
		$group_certi_vet_aff = $entry["920"];
		$group_certi_mem_fam = $entry["922"];
		$group_certi_rtanf = $entry["923"];
		$group_certi_eli_tanf = $entry["924"];
		$group_certi_tanf_ass = $entry["825"];
		$group_certi_tnaf_name = $entry["927"];
		$group_certi_tanf_rcity = $entry["929"];

		$group_certi_17_convicted = $entry["931"];
		$group_certi_17_conviction_date = $entry["933"];
		$group_certi_17_rel_date = $entry["935"];
		$group_certi_17_fedr = $entry["386"];
		$group_certi_17_conviction_state = $entry["939"];

		$group_certi_18__live_rrc = $entry["941"];
		$group_certi_19_empor_zone = $entry["943"];
		$group_certi_20_ssi = $entry["945"];
		$group_certi_21_unemp_consec = $entry["947"];
		$group_certi_22_unemp_l4w = $entry["948"];

		$group_certi_23_period_unemp = $entry["950"];
		$group_certi_23_rstate_unemp = $entry["953"];
		$group_certi_24_doc_eligi = $entry["955"];
		

		$group_certi_25_ins_sign_url = $entry["959"];
		$group_certi_25_ins_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$group_certi_25_ins_sign_url;

		
		$group_certi_25_employer = $entry["960"];
		
		// $group_certi_25_consultant = $entry[""];
		// $group_certi_25_swa = $entry["865"];
		// $group_certi_25_participating_agency = $entry["865"];
		// $group_certi_25_app = $entry["865"];
		// $group_certi_25_parent = $entry["865"];
		$group_certi_26_date = $entry["961"];

	//	echo "------------Page 24 End---------------<br/>";
	//	echo "------------EMPLOYEE ACKNOWLEDGEMENT FORM---------------<br/>";	

		$emp_ackno_name = $entry["937"];
		
		$emp_ackno_sign_url = $entry["387"];
		$emp_ackno_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$emp_ackno_sign_url;


		$emp_ackno_date = $entry["388"];
		

	//	echo "------------Page 25 End---------------<br/>";	
	//	echo "------------Consent for Hepatitis B Vaccination---------------<br/>";	

		$consent_hep_dovaccine = $entry["391.1"];
		$consent_hep_dontvaccine = $entry["392.1"];
		$consent_hep_havevaccine = $entry["393.1"];
		
		$consent_hep_rec_sign_url = $entry["395"];
		$consent_hep_rec_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$consent_hep_rec_sign_url;


		$consent_hep_rec_name = $entry["396"];
		$consent_hep_rec_date = $entry["397"];

		$consent_hep_agen_sign_url = $entry["398"];
		$consent_hep_agen_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$consent_hep_agen_sign_url;


		$consent_hep_agen_date = $entry["399"];

	//	echo "------------Page 26 End---------------<br/>";
	//	echo "------------Please read and answer the following questions---------------<br/>";	

		$ans_que_1_dise_yes = $entry["1271.1"];
		$ans_que_1_dise_no = $entry["1271.2"];


		$ans_que_2_tb_skin_yes = $entry["1272.1"];
		$ans_que_2_tb_skin_no = $entry["1272.2"];


		$ans_que_3_allergic_reac_yes = $entry["1273.1"];
		$ans_que_3_allergic_reac_no = $entry["1273.2"];


		$ans_que_4_immunized_yes = $entry["1274.1"];
		$ans_que_4_immunized_no = $entry["1274.2"];


		$ans_que_5_medication_yes = $entry["1275.1"];
		$ans_que_5_medication_no = $entry["1275.2"];


		$ans_que_6_steroids_yes = $entry["1276.1"];
		$ans_que_6_steroids_no = $entry["1276.2"];

		$ans_que_7_viral_infection_yes = $entry["1277.1"];
		$ans_que_7_viral_infection_no = $entry["1277.2"];


		$ans_que_8_vaccine_yes = $entry["1278.1"];
		$ans_que_8_vaccine_no = $entry["1278.2"];

		$ans_que_9_pregnant_yes = $entry["1279.1"];
		$ans_que_9_pregnant_no = $entry["1279.2"];
		

		$ans_que_emp_sign_url = $entry["412"];
		$ans_que_emp_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$ans_que_emp_sign_url;


		$ans_que_8_date = $entry["413"];

		$ans_que_d1_manuf = $entry["414"];
		$ans_que_d1_lotno = $entry["415"];
		$ans_que_d1_exp = $entry["417"];
		$ans_que_d1_site = $entry["416"];
		$ans_que_d1_givenby = $entry["418"];
		$ans_que_d1_date = $entry["419"];
		$ans_que_d1_reasult = $entry["420"];
		$ans_que_d1_nreact = $entry["421"];
		$ans_que_d1_react = $entry["422"];
		$ans_que_d1_allergic = $entry["423"];
		$ans_que_d1_induration = $entry["1280"];

		$ans_que_d2_ref = $entry["425"];
		$ans_que_d2_whom = $entry["426"];
		$ans_que_d2_date = $entry["427"];
		$ans_que_d2_reasult = $entry["428"];
		$ans_que_d2_referred = $entry["429"];
		$ans_que_d2_where = $entry["430"];
		$ans_que_d2_follow = $entry["431"];


	//	echo "------------Page 27 End---------------<br/>";
	//	echo "------------Questionnaire for Communicable Disease Control---------------<br/>";	

		$com_disease_con_initial = $entry["436.1"];
		$com_disease_con_update = $entry["436.2"];
		$com_disease_con_emp_name = $entry["437"];
		$com_disease_con_1far = $entry["438"];
		$com_disease_con_1explain = $entry["439"];
		$com_disease_con_2phy = $entry["440"];
		$com_disease_con_2exp = $entry["442"];
		$com_disease_con_3phy = $entry["441"];
		$com_disease_con_3exp = $entry["443"];
		$com_disease_con_4medications = $entry["446"];
		$com_disease_con_5limit = $entry["445"];
		$com_disease_con_5exp = $entry["447"];


		$com_disease_con_emp_sign_url = $entry["450"];
		$com_disease_con_emp_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$com_disease_con_emp_sign_url;


		$com_disease_con_date = $entry["451"];


	//	echo "------------Page 28 End---------------<br/>";
	//	echo "------------Two Week's Notice Letter---------------<br/>";	


		$notice_letter_sign_url = $entry["454"];
		$notice_letter_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$notice_letter_sign_url;


		$notice_letter_date = $entry["455"];

	//	echo "------------Page 29 End---------------<br/>";	
	//	echo "------------90 Day Letter---------------<br/>";	

		$day_letter_emp_name = $entry["459"];
		$day_letter_date = $entry["1142"];
		
		$day_letter_sign_url = $entry["466"];
		$day_letter_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$day_letter_sign_url;


		$day_letter_sign_date = $entry["467"];


	//	echo "------------Page 30 End---------------<br/>";	
	//	echo "------------Consent to Drug Test---------------<br/>";	

		$drug_test_emp_name = $entry["471"];
		

		$drug_test_sign_url = $entry["473"];
		$drug_test_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$drug_test_sign_url;


		$drug_test_date = $entry["474"];

	//	echo "------------Page 31 End---------------<br/>";	
	//	echo "------------NON-SOLICITATION AGREEMENT---------------<br/>";	
		

		$solictation_agree_emp_sign_url = $entry["478"];
		$solictation_agree_emp_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$solictation_agree_emp_sign_url;

		
		$solictation_agree_sign_date = $entry["479"];

		// $solictation_agree_admin = $entry["480"];
		
		
		// $solictation_agree_admin_date = $entry["481"];


	//	echo "------------Page 32 End---------------<br/>";
	//	echo "------------Competitive Solicitation Policy---------------<br/>";	

		$comp_policy_emp_name = $entry["485"];

		$comp_policy_sign_url = $entry["487"];
		$comp_policy_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$comp_policy_sign_url;


		$comp_policy_date = $entry["510"];

	//	echo "------------Page 33 End---------------<br/>";
	//	echo "------------Workman's Compensation Disclosure---------------<br/>";	

		$work_compen_emp_name = $entry["492"];


		$work_compen_sign_url = $entry["494"];
		$work_compen_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$work_compen_sign_url;


		$work_compen_date = $entry["495"];
		

		// $work_compen_witness_sign_url = $entry["496"];
		// $work_compen_witness_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$work_compen_witness_sign_url;


		// $work_compen_witness_date = $entry["497"];


	//	echo "------------Page 34 End---------------<br/>";	
	//	echo "------------Do's And Don'ts Consent Form---------------<br/>";	

		$consent_form_emp_name = $entry["501"];
		

		$consent_form_sign_url = $entry["503"];
		$consent_form_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$consent_form_sign_url;


		$consent_form_date = $entry["504"];
	


	//	echo "------------Page 35 End---------------<br/>";
	//	echo "------------Workman's Compensation Disclosure---------------<br/>";	

		$consent_form_emp_name_1 = $entry["507"];
		

		$consent_form_sign_1_url = $entry["509"];
		$consent_form_sign_1 = home_url('/wp-content/uploads/gravity_forms/signatures/').$consent_form_sign_1_url;


		$consent_form_date_1 = $entry["488"];
		

	//	echo "------------Page 36 End---------------<br/>";
	//	echo "------------Acknowledgment of Training---------------<br/>";	

		$acknow_trainig_emp_name = $entry["514"];
		$acknow_trainig_date = $entry["517"];
		$acknow_trainig_trainer = $entry["519"];
		$acknow_trainig_pname = $entry["1119"];

		$acknow_trainig_emp_sign_url = $entry["1117"];
		$acknow_trainig_emp_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$acknow_trainig_emp_sign_url;

		$acknow_trainig_sign_date = $entry["524"];

		// $acknow_trainig_sign_url = $entry["1118"];
		// $acknow_trainig_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$acknow_trainig_sign_url;

		
		// $acknow_trainig_date = $entry["526"];




		

	//	echo "------------Page 37 End---------------<br/>";
	//	echo "------------Health Insurance Election Form for coverage effective March 1, 2015---------------<br/>";	

		// $health_insu_text1 = $entry["968"];
		// $health_insu_text2 = $entry["970"];
		// $health_insu_text3 = $entry["972"];
		// $health_insu_text4 = $entry["974"];

		// $health_insu_emp_sign_url = $entry["1191"];
		// $health_insu_emp_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$health_insu_emp_sign_url;

		// $health_insu_ssn = $entry["977"];
		// $health_insu_date = $entry["978"];
		// $health_insu_pname = $entry["979"];


	//	echo "------------Page 38 End---------------<br/>";	
	//	echo "------------Lucent Health---------------<br/>";	

		// $lucent_health_enroll = $entry["987"];
		// // $lucent_health_chag_form = $entry["987"];


		// // $lucent_health_empl = $entry["996"];
		// $lucent_health_effe_date = $entry["995"];

		// $lucent_health_new_hire = $entry["994"];
		// // $lucent_health_rehire = $entry["976"];
		// // $lucent_health_full = $entry["977"];
		// // $lucent_health_part = $entry["978"];
		// // $lucent_health_waive = $entry["979"];
		// // $lucent_health_open = $entry["979"];


		// $lucent_health_hire_date = $entry["991"];
		// $lucent_health_divi = $entry["992"];
		// $lucent_health_hourly = $entry["993"];
		// // $lucent_health_salary = $entry["979"];
		// // $lucent_health_open_enroll = $entry["979"];
		// // $lucent_health_change = $entry["979"];

		// $lucent_health_lname = $entry["997"];
		// $lucent_health_fname = $entry["998"];
		// $lucent_health_mname = $entry["999"];
		// $lucent_health_socialno = $entry["1000"];
		// $lucent_health_datebirth = $entry["1001"];
		// $lucent_health_g = $entry["1002"];
		// $lucent_health_marital = $entry["1003"];
		// $lucent_health_add = $entry["1005"];
		// $lucent_health_city = $entry["1008"];
		// $lucent_health_state = $entry["1007"];
		// $lucent_health_zip = $entry["1006"];
		// $lucent_health_contact = $entry["1009"];


		// $plain_section_medical = $entry["1011"];
		// $plain_section_specify= $entry["1012"];
		// // $plain_section_empl = $entry["979"];
		// // $plain_section_spouse = $entry["979"];
		// // $plain_section_emp_child = $entry["979"];
		// $plain_section_family = $entry["1013"];
		// $plain_section_remarks = $entry["1014"];

		// // $add_dep_cov_spouse = $entry["979"];
		// // $add_dep_cov_child = $entry["979"];
		// // $add_dep_cov_natural = $entry["979"];
		// $add_dep_cov_adopted = $entry["1015"];
		// // $add_dep_cov_stepchild = $entry["979"];
		// $add_dep_cov_marrige = $entry["1016"];


		// $ter_dep_cov_radiob = $entry["1017"];
		// $ter_dep_cov_eff_date = $entry["1019"];
		// $ter_dep_cov_emp_cov_date = $entry["1018"];
		// // $ter_dep_cov_effective_date = $entry["979"];

		// // $term_dep_spouse = $entry["979"];
		// $term_dep_child = $entry["1020"];
		// $term_dep_effec_date = $entry["1021"];
		// $term_dep_name = $entry["1022"];
		// $term_dep_reason = $entry["1023"];
		// $term_dep_remarks = $entry["1024"];

		// $term_dep_depen_spe = $entry["1027"];
		// $term_dep_depen_name = $entry["1028"];
		// $term_dep_depen_birth_date = $entry["1029"];
		// $term_dep_depen_gender = $entry["1030"];
		// $term_dep_depen_ssn = $entry["1031"];


		// $term_dep_rel_spouse = $entry["1049"];
		// $term_dep_rel_oinsur = $entry["1052"];
		// $term_dep_rel_name = $entry["1034"];
		// $term_dep_rel_birth_date = $entry["1035"];
		// $term_dep_rel_gender = $entry["1036"];
		// $term_dep_rel_ssn = $entry["1037"];

		// $term_dep_rel_1_natural_child = $entry["1048"];
		// // $term_dep_rel_1_step = $entry["979"];
		// // $term_dep_rel_1_adopted = $entry["979"];
		// $term_dep_rel_1_oins = $entry["1051"];
		// $term_dep_rel_1_name = $entry["1038"];
		// $term_dep_rel_1_bdate = $entry["1039"];
		// $term_dep_rel_1_gender = $entry["1040"];
		// $term_dep_rel_1_ssn = $entry["1041"];

		// $term_dep_rel_2_natural_child = $entry["1047"];
		// // $term_dep_rel_2_step = $entry["979"];
		// // $term_dep_rel_2_adopted = $entry["979"];
		// $term_dep_rel_2_oins = $entry["1050"];
		// $term_dep_rel_2_name = $entry["1042"];
		// $term_dep_rel_2_bdate = $entry["1043"];
		// $term_dep_rel_2_gender = $entry["1044"];
		// $term_dep_rel_2_ssn = $entry["1045"];


		// // $term_dep_rel_3_natural_child = $entry["1047"];
		// $term_dep_rel_3_step = $entry["1032"];
		// // $term_dep_rel_3_adopted = $entry["979"];
		// $term_dep_rel_3_oins = $entry["1033"];

		// $term_dep_insurance_radio = $entry["1053"];
		// $term_dep_insurance_beni = $entry["1054"];
		// $term_dep_insurance_persent = $entry["1055"];
		// $term_dep_insurance_other_inssurance = $entry["1056"];
		// $term_dep_insurance_indivi = $entry["1057"];
		// $term_dep_insurance_group = $entry["1058"];
		// $term_dep_insurance_mem = $entry["1059"];
		// $term_dep_insurance_birth_date = $entry["1060"];
		// $term_dep_insurance_apply = $entry["1062.1"];
		// $term_dep_insurance_apply1 = $entry["1062.2"];

		// $term_dep_insurance_reason = $entry["1063"];


		// $term_dep_insurance_signa_url = $entry["1065"];
		// $term_dep_insurance_signa = home_url('/wp-content/uploads/gravity_forms/signatures/').$term_dep_insurance_signa_url;


		// $term_dep_insurance_sign_date = $entry["1066"];

	//	echo "------------Page 41 End---------------<br/>";
	//	echo "------------EMPLOYEE EMERGENCY CONTACT FORM---------------<br/>";	

		$emerge_con_name = $entry["533"];
		$emerge_con_date = $entry["534"];

		$emerge_con_pri_name = $entry["538"];
		$emerge_con_pri_relation = $entry["539"];
		$emerge_con_pri_adds = $entry["540"];
		$emerge_con_pri_hpho = $entry["549"];
		$emerge_con_pri_cell = $entry["542"];
		$emerge_con_pri_phon = $entry["543"];
		$emerge_con_pri_alt_phon = $entry["544"];


		$emerge_con_pri_1_name = $entry["546"];
		$emerge_con_pri_1_relation = $entry["547"];
		$emerge_con_pri_1_add = $entry["548"];
		$emerge_con_pri_1_hpho = $entry["553"];
		$emerge_con_pri_1_cell = $entry["550"];
		$emerge_con_pri_1phon = $entry["551"];
		$emerge_con_pri_1_alt_phon = $entry["552"];


	//	echo "------------Page 42 end---------------<br/>";	
	//	echo "------------New Page---------------<br/>";

		$new_emp_name = $entry["1181"];
		$new_emp_pname = $entry["1183"];
		$new_emp_date = $entry["1186"];

		$new_emp_sign_url = $entry["1185"];
		$new_emp_sign = home_url('/wp-content/uploads/gravity_forms/signatures/').$new_emp_sign_url;

		$new_emp_date2 = $entry["1282"];


	//	echo "------------New Page end---------------<br/>";			


			

			
		require_once(dirname(__FILE__) . '/pdfintegration/pdf_v2.php');
		// require_once(dirname(__FILE__) . '/pdfintegration/orientation_pdf_v1.php');
		// require_once(dirname(__FILE__) . '/pdfintegration/pdforientation.php');

	
	// exit();
	
}



