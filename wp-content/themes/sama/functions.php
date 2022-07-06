<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twenty_twenty_one_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Twenty-One, use a find and replace
		 * to change 'twentytwentyone' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'twentytwentyone', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'twentytwentyone' ),
				'footer'  => __( 'Secondary menu', 'twentytwentyone' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
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
		$background_color = get_theme_mod( 'background_color', 'D1E4DD' );
		if ( 127 > Twenty_Twenty_One_Custom_Colors::get_relative_luminance_from_hex( $background_color ) ) {
			add_theme_support( 'dark-editor-style' );
		}

		$editor_stylesheet_path = './assets/css/style-editor.css';

		// Note, the is_IE global variable is defined by WordPress and is used
		// to detect if the current browser is internet explorer.
		global $is_IE;
		if ( $is_IE ) {
			$editor_stylesheet_path = './assets/css/ie-editor.css';
		}

		// Enqueue editor styles.
		add_editor_style( $editor_stylesheet_path );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Extra small', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'XS', 'Font size', 'twentytwentyone' ),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__( 'Small', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'S', 'Font size', 'twentytwentyone' ),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'M', 'Font size', 'twentytwentyone' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'L', 'Font size', 'twentytwentyone' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Extra large', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'XL', 'Font size', 'twentytwentyone' ),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'XXL', 'Font size', 'twentytwentyone' ),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__( 'Gigantic', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'XXXL', 'Font size', 'twentytwentyone' ),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
		);

		// Custom background color.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'd1e4dd',
			)
		);

		// Editor color palette.
		$black     = '#000000';
		$dark_gray = '#28303D';
		$gray      = '#39414D';
		$green     = '#D1E4DD';
		$blue      = '#D1DFE4';
		$purple    = '#D1D1E4';
		$red       = '#E4D1D1';
		$orange    = '#E4DAD1';
		$yellow    = '#EEEADD';
		$white     = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'twentytwentyone' ),
					'slug'  => 'black',
					'color' => $black,
				),
				array(
					'name'  => esc_html__( 'Dark gray', 'twentytwentyone' ),
					'slug'  => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name'  => esc_html__( 'Gray', 'twentytwentyone' ),
					'slug'  => 'gray',
					'color' => $gray,
				),
				array(
					'name'  => esc_html__( 'Green', 'twentytwentyone' ),
					'slug'  => 'green',
					'color' => $green,
				),
				array(
					'name'  => esc_html__( 'Blue', 'twentytwentyone' ),
					'slug'  => 'blue',
					'color' => $blue,
				),
				array(
					'name'  => esc_html__( 'Purple', 'twentytwentyone' ),
					'slug'  => 'purple',
					'color' => $purple,
				),
				array(
					'name'  => esc_html__( 'Red', 'twentytwentyone' ),
					'slug'  => 'red',
					'color' => $red,
				),
				array(
					'name'  => esc_html__( 'Orange', 'twentytwentyone' ),
					'slug'  => 'orange',
					'color' => $orange,
				),
				array(
					'name'  => esc_html__( 'Yellow', 'twentytwentyone' ),
					'slug'  => 'yellow',
					'color' => $yellow,
				),
				array(
					'name'  => esc_html__( 'White', 'twentytwentyone' ),
					'slug'  => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__( 'Purple to yellow', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to purple', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__( 'Green to yellow', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to green', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__( 'Red to yellow', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to red', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__( 'Purple to red', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__( 'Red to purple', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'red-to-purple',
				),
			)
		);

		/*
		* Adds starter content to highlight the theme on fresh sites.
		* This is done conditionally to avoid loading the starter content on every
		* page load, as it is a one-off operation only needed once in the customizer.
		*/
		if ( is_customize_preview() ) {
			require get_template_directory() . '/inc/starter-content.php';
			add_theme_support( 'starter-content', twenty_twenty_one_get_starter_content() );
		}

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );
	}
}
add_action( 'after_setup_theme', 'twenty_twenty_one_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function twenty_twenty_one_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'twentytwentyone' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'twentytwentyone' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'twenty_twenty_one_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function twenty_twenty_one_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'twenty_twenty_one_content_width', 750 );
}
add_action( 'after_setup_theme', 'twenty_twenty_one_content_width', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twenty_twenty_one_scripts() {
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE, $wp_scripts;
	if ( $is_IE ) {
		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
		wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get( 'Version' ) );
	} else {
		// If not IE, use the standard stylesheet.
		wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	}

	// RTL styles.
	wp_style_add_data( 'twenty-twenty-one-style', 'rtl', 'replace' );

	// Print styles.
	wp_enqueue_style( 'twenty-twenty-one-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Register the IE11 polyfill file.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills-asset',
		get_template_directory_uri() . '/assets/js/polyfills.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Register the IE11 polyfill loader.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills',
		null,
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_add_inline_script(
		'twenty-twenty-one-ie11-polyfills',
		wp_get_script_polyfill(
			$wp_scripts,
			array(
				'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'twenty-twenty-one-ie11-polyfills-asset',
			)
		)
	);

	// Main navigation scripts.
	if ( has_nav_menu( 'primary' ) ) {
		wp_enqueue_script(
			'twenty-twenty-one-primary-navigation-script',
			get_template_directory_uri() . '/assets/js/primary-navigation.js',
			array( 'twenty-twenty-one-ie11-polyfills' ),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}

	// Responsive embeds script.
	wp_enqueue_script(
		'twenty-twenty-one-responsive-embeds-script',
		get_template_directory_uri() . '/assets/js/responsive-embeds.js',
		array( 'twenty-twenty-one-ie11-polyfills' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_scripts' );

/**
 * Enqueue block editor script.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_block_editor_script() {

	wp_enqueue_script( 'twentytwentyone-editor', get_theme_file_uri( '/assets/js/editor.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}

add_action( 'enqueue_block_editor_assets', 'twentytwentyone_block_editor_script' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @link https://git.io/vWdr2
 */
function twenty_twenty_one_skip_link_focus_fix() {

	// If SCRIPT_DEBUG is defined and true, print the unminified file.
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		echo '<script>';
		include get_template_directory() . '/assets/js/skip-link-focus-fix.js';
		echo '</script>';
	}

	// The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",(function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())}),!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'twenty_twenty_one_skip_link_focus_fix' );

/**
 * Enqueue non-latin language styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twenty_twenty_one_non_latin_languages() {
	$custom_css = twenty_twenty_one_get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'twenty-twenty-one-style', $custom_css );
	}
}
add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_non_latin_languages' );

// SVG Icons class.
require get_template_directory() . '/classes/class-twenty-twenty-one-svg-icons.php';

// Custom color classes.
require get_template_directory() . '/classes/class-twenty-twenty-one-custom-colors.php';
new Twenty_Twenty_One_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-twenty-twenty-one-customize.php';
new Twenty_Twenty_One_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
require_once get_template_directory() . '/classes/class-twenty-twenty-one-dark-mode.php';
new Twenty_Twenty_One_Dark_Mode();

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_customize_preview_init() {
	wp_enqueue_script(
		'twentytwentyone-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'twentytwentyone-customize-preview',
		get_theme_file_uri( '/assets/js/customize-preview.js' ),
		array( 'customize-preview', 'customize-selective-refresh', 'jquery', 'twentytwentyone-customize-helpers' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_preview_init', 'twentytwentyone_customize_preview_init' );

/**
 * Enqueue scripts for the customizer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_customize_controls_enqueue_scripts() {

	wp_enqueue_script(
		'twentytwentyone-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'twentytwentyone_customize_controls_enqueue_scripts' );

/**
 * Calculate classes for the main <html> element.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_the_html_classes() {
	/**
	 * Filters the classes for the main <html> element.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @param string The list of classes. Default empty string.
	 */
	$classes = apply_filters( 'twentytwentyone_html_classes', '' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_add_ie_class() {
	?>
	<script>
	if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
		document.body.classList.add( 'is-IE' );
	}
	</script>
	<?php
}
add_action( 'wp_footer', 'twentytwentyone_add_ie_class' );


function project(){
register_post_type('project',
array(
'labels' =>array('name' =>_('Project'), 'singular_name' => _('project')),
'public' => true,
'has_achieve' => true,
'supports' =>array('title', 'editor', 'thumbnail')

)

);

}
add_action('init','project');

function sama_publication(){
register_post_type('sama_publication',
array(
'labels' =>array('name' =>_('Publications'), 'singular_name' => _('our-work')),
'public' => true,
'has_achieve' => true,
'supports' =>array('title', 'editor', 'thumbnail')

)

);

}
add_action('init','sama_publication');



function publication_register_taxonomy_type() {
     $labels = array(
         'name'              => _x( 'Types', 'taxonomy general name' ),
         'singular_name'     => _x( 'Type', 'taxonomy singular name' ),
         'search_items'      => __( 'Search Types' ),
         'all_items'         => __( 'All Types' ),
         'parent_item'       => __( 'Parent Type' ),
         'parent_item_colon' => __( 'Parent Type:' ),
         'edit_item'         => __( 'Edit Type' ),
         'update_item'       => __( 'Update Type' ),
         'add_new_item'      => __( 'Add New Type' ),
         'new_item_name'     => __( 'New Type Name' ),
         'menu_name'         => __( 'Type' ),
     );
     $args   = array(
         'hierarchical'      => true, // make it hierarchical (like categories)
         'labels'            => $labels,
         'show_ui'           => true,
         'show_admin_column' => true,
         'query_var'         => true,
         'rewrite'           => [ 'slug' => 'worktype' ],
     );
     register_taxonomy( 'worktype', [ 'sama_publication' ], $args );
}
add_action( 'init', 'publication_register_taxonomy_type' );

//////Theme Taxonomy//////
function publication_register_taxonomy_theme() {
     $labels = array(
         'name'              => _x( 'Themes', 'taxonomy general name' ),
         'singular_name'     => _x( 'Theme', 'taxonomy singular name' ),
         'search_items'      => __( 'Search Themes' ),
         'all_items'         => __( 'All Themes' ),
         'parent_item'       => __( 'Parent Theme' ),
         'parent_item_colon' => __( 'Parent Theme:' ),
         'edit_item'         => __( 'Edit Theme' ),
         'update_item'       => __( 'Update Theme' ),
         'add_new_item'      => __( 'Add New Theme' ),
         'new_item_name'     => __( 'New Theme Name' ),
         'menu_name'         => __( 'Theme' ),
     );
     $args   = array(
         'hierarchical'      => true, // make it hierarchical (like categories)
         'labels'            => $labels,
         'show_ui'           => true,
         'show_admin_column' => true,
         'query_var'         => true,
         'rewrite'           => [ 'slug' => 'worktheme' ],
     );
     register_taxonomy( 'worktheme', [ 'sama_publication' ], $args );
}
add_action( 'init', 'publication_register_taxonomy_theme' );

////End theme taxonomy/////

//////Theme Taxonomy//////
function publication_register_taxonomy_year() {
     $labels = array(
         'name'              => _x( 'Years', 'taxonomy general name' ),
         'singular_name'     => _x( 'Year', 'taxonomy singular name' ),
         'search_items'      => __( 'Search Years' ),
         'all_items'         => __( 'All Years' ),
         'parent_item'       => __( 'Parent Year' ),
         'parent_item_colon' => __( 'Parent Year:' ),
         'edit_item'         => __( 'Edit Year' ),
         'update_item'       => __( 'Update Year' ),
         'add_new_item'      => __( 'Add New Year' ),
         'new_item_name'     => __( 'New Year Name' ),
         'menu_name'         => __( 'Year' ),
     );
     $args   = array(
         'hierarchical'      => true, // make it hierarchical (like categories)
         'labels'            => $labels,
         'show_ui'           => true,
         'show_admin_column' => true,
         'query_var'         => true,
         'rewrite'           => [ 'slug' => 'workyear' ],
     );
     register_taxonomy( 'workyear', [ 'sama_publication' ], $args );
}
add_action( 'init', 'publication_register_taxonomy_year' );

//End theme taxonomy/////


//Option Page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Home Page Settings',
		'menu_title'	=> 'Home Page',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'About Page Settings',
		'menu_title'	=> 'About Page',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Contact Page Settings',
		'menu_title'	=> 'Contact Page',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	
}

///End option page

///////Client like//////

add_action('wp_ajax_nopriv_client-like', 'client_like');
add_action('wp_ajax_client-like', 'client_like');


	wp_enqueue_script('ajax-script', get_template_directory_uri().'/js/client-like.js', array('jquery'), '1.0', true );
	wp_localize_script('ajax-script', 'ajax_var', array(
    'url' => admin_url('admin-ajax.php'),
    'nonce' => wp_create_nonce('ajax-nonce')
));

function client_like()
{
	 $nonce = $_POST['nonce'];

	 if ( ! wp_verify_nonce( $nonce, 'ajax-nonce' ) )
        die ( 'Busted!');

	$clienttype = $_POST['clienttype_id'];
	$countrytype = $_POST['country_id'];


	$output = '';

	$mainarray = [];

	if(!empty($clienttype))
	{
		$mainarray[] = array(

			'key'		=> 'client',
			'value'		=> $clienttype,
			'compare'	=> '='
		);
	}

	if(!empty($countrytype))
	{
		$mainarray[] = array(
			'key' => 'country',
			'value' => $countrytype,
			'compare' => '='

		);
	}

$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'sama_publication',
	'meta_query'	=> array(
		'relation'		=> 'AND',
		$mainarray
	)
);



// 	$args = array(
// 	'numberposts'	=> -1,
// 	'post_type'		=> 'sama_publication',
// 	'meta_key'		=> 'client',
// 	'meta_value'	=> $clienttype
// );

	$quereypol = new WP_Query( $args );

	if($quereypol->have_posts())
	{
		while($quereypol->have_posts())
		{

				$quereypol->the_post();

				$img = get_the_post_thumbnail_url();

				$pcontent = get_the_content();
				$ptitle = get_the_title();
				$ppermalink = get_the_permalink();
				$downloadlink = get_field('download_link');
				$downurl = $downloadlink['url'];

		        $publitiondate = get_field('publication_date');
		        $clientname = get_field('client');
		        $countryname = get_field('country');
		        $termidddd = get_the_terms($post_ID, 'worktype');
		        foreach($termidddd as $term) {

					$termtypename =  $term->name;

				}
				
				$output .= '<div class="single_projects_inn">
		    					<div class="single_projects_inn_left single_publications_inn_left">
		    						<img src="'.$img.'" alt="img">
		    					</div>
		    					<div class="single_projects_inn_right single_publications_inn_right">
		    						<div class="top_projt top_publict">
		    							<h3><a href="'.$ppermalink.'">'.$ptitle.'</a></h3>
		    							<p>'.$pcontent.'</p>
		    						</div>
		    						<div class="bott_projt bott_publict">
		    							<ul>
		                                    
		    								<li><p>Download:<span><a download href="'.$downurl.'">EN</a> | AR</span></p></li>
		    								<li><p>Date:<span>'. $publitiondate .'</span></p></li>
		    								<li><p>Client:<span>'.$clientname.'</span></p></li>
		                                    <li><p>Type:<span>'.$termtypename.'</span></p></li>
		    								<li><p>Country:<span>'.$countryname.'</span></p></li>
		    							</ul>
		    						</div>
		    					</div>
		    				</div>';
		}
	}
	else
	{
		$output .='<h3 style="text-align:center;">NO DATA FOUND</h3>';
	}
	



	echo $output;
	die;






}

//////End client like////////

///////Country like//////

add_action('wp_ajax_nopriv_country-like', 'country_like');
add_action('wp_ajax_country-like', 'country_like');


	//wp_enqueue_script('country-script', get_template_directory_uri().'/js/country-like.js', array('jquery'), '1.0', true );
	wp_localize_script('country-script', 'ajax_var', array(
    'url' => admin_url('admin-ajax.php'),
    'nonce' => wp_create_nonce('ajax-nonce')
));

function country_like()
{
	 $nonce = $_POST['nonce'];

	 if ( ! wp_verify_nonce( $nonce, 'ajax-nonce' ) )
        die ( 'Busted!');

	$clienttype = $_POST['lower_price'];
	
	$countrytype = $_POST['max_price'];
echo $clienttype.'-----'.$countrytype;
	die();

	$output = '';

	$mainarray = [];

	if(!empty($clienttype))
	{
		$mainarray[] = array(

			'key'		=> 'client',
			'value'		=> $clienttype,
			'compare'	=> '='
		);
	}

	if(!empty($countrytype))
	{
		$mainarray[] = array(
			'key' => 'country',
			'value' => $countrytype,
			'compare' => '='

		);
	}

$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'sama_publication',
	'meta_query'	=> array(
		'relation'		=> 'AND',
		$mainarray
	)
);



// 	$args = array(
// 	'numberposts'	=> -1,
// 	'post_type'		=> 'sama_publication',
// 	'meta_key'		=> 'client',
// 	'meta_value'	=> $clienttype
// );

	$quereypol = new WP_Query( $args );

	if($quereypol->have_posts())
	{
		while($quereypol->have_posts())
		{

				$quereypol->the_post();

				$img = get_the_post_thumbnail_url();

				$pcontent = get_the_content();
				$ptitle = get_the_title();
				$ppermalink = get_the_permalink();
				$downloadlink = get_field('download_link');
				$downurl = $downloadlink['url'];

		        $publitiondate = get_field('publication_date');
		        $clientname = get_field('client');
		        $countryname = get_field('country');
		        $termidddd = get_the_terms($post_ID, 'worktype');
		        foreach($termidddd as $term) {

					$termtypename =  $term->name;

				}
				
				$output .= '<div class="single_projects_inn">
		    					<div class="single_projects_inn_left single_publications_inn_left">
		    						<img src="'.$img.'" alt="img">
		    					</div>
		    					<div class="single_projects_inn_right single_publications_inn_right">
		    						<div class="top_projt top_publict">
		    							<h3><a href="'.$ppermalink.'">'.$ptitle.'</a></h3>
		    							<p>'.$pcontent.'</p>
		    						</div>
		    						<div class="bott_projt bott_publict">
		    							<ul>
		                                    
		    								<li><p>Download:<span><a download href="'.$downurl.'">EN</a> | AR</span></p></li>
		    								<li><p>Date:<span>'. $publitiondate .'</span></p></li>
		    								<li><p>Client:<span>'.$clientname.'</span></p></li>
		                                    <li><p>Type:<span>'.$termtypename.'</span></p></li>
		    								<li><p>Country:<span>'.$countryname.'</span></p></li>
		    							</ul>
		    						</div>
		    					</div>
		    				</div>';
		}
	}
	else
	{
		$output .='<h3 style="text-align:center;">NO DATA FOUND</h3>';
	}
	



	echo $output;
	die;






}

//////End country like////////

add_action('wp_ajax_nopriv_work-like', 'work_like');
add_action('wp_ajax_work-like', 'work_like');


	wp_enqueue_script('ajax-script', get_template_directory_uri().'/js/work-like.js', array('jquery'), '1.0', true );
	wp_localize_script('ajax-script', 'ajax_var', array(
    'url' => admin_url('admin-ajax.php'),
    'nonce' => wp_create_nonce('ajax-nonce')
));



	

function work_like()
{
	// Check for nonce security
    $nonce = $_POST['nonce'];
  
    if ( ! wp_verify_nonce( $nonce, 'ajax-nonce' ) )
        die ( 'Busted!');

	$vartype = $_POST['wktype_id'];
	$vartheme = $_POST['wktheme_id'];
	$varyear = $_POST['wkyear_id'];
	$mainarray = [];
	if(!empty($vartype))
	{
		$mainarray[]=array(
		       'taxonomy' => 'worktype',
		       'field' => 'term_id',
		       'terms' => $vartype,
		       
		     );
	}
	if(!empty($vartheme))
	{
		$mainarray[]=array(
		       'taxonomy' => 'worktheme',
		       'field' => 'term_id',
		       'terms' => $vartheme,
		       
		     );
	}

	if(!empty($varyear))
	{
		$mainarray[]=array(
		       'taxonomy' => 'workyear',
		       'field' => 'term_id',
		       'terms' => $varyear
		       
		     );
	}

	$output = '';

	$quereypol = new Wp_Query(array(

		'post_type' => 'sama_publication',
        'orderby'   => 'ID',
        'order' =>'DESC',
        'tax_query' =>array(

        	'relation' => 'AND',
		     $mainarray


        )

	));

	if($quereypol->have_posts())
	{
		while($quereypol->have_posts())
			{
				$quereypol->the_post();

				$img = get_the_post_thumbnail_url();

				$pcontent = get_the_content();
				$ptitle = get_the_title();
				$ppermalink = get_the_permalink();
				$downloadlink = get_field('download_link');
				$downurl = $downloadlink['url'];

		        $publitiondate = get_field('publication_date');
		        $clientname = get_field('client');
		        $countryname = get_field('country');
		        $termidddd = get_the_terms($post_ID, 'worktype');
		        foreach($termidddd as $term) {

					$termtypename =  $term->name;

				}
				
				$output .= '<div class="single_projects_inn">
		    					<div class="single_projects_inn_left single_publications_inn_left">
		    						<img src="'.$img.'" alt="img">
		    					</div>
		    					<div class="single_projects_inn_right single_publications_inn_right">
		    						<div class="top_projt top_publict">
		    							<h3><a href="'.$ppermalink.'">'.$ptitle.'</a></h3>
		    							<p>'.$pcontent.'</p>
		    						</div>
		    						<div class="bott_projt bott_publict">
		    							<ul>
		                                    
		    								<li><p>Download:<span><a download href="'.$downurl.'">EN</a> | AR</span></p></li>
		    								<li><p>Date:<span>'. $publitiondate .'</span></p></li>
		    								<li><p>Client:<span>'.$clientname.'</span></p></li>
		                                    <li><p>Type:<span>'.$termtypename.'</span></p></li>
		    								<li><p>Country:<span>'.$countryname.'</span></p></li>
		    							</ul>
		    						</div>
		    					</div>
		    				</div>';


			} 
	}
	else
	{
		$output .='<h3 style="text-align:center;">NO DATA FOUND</h3>';
	}
	



	echo $output;
	die;

	


}

//////Theme taxonomy filter///////

add_action('wp_ajax_nopriv_worktheme-like', 'worktheme_like');
add_action('wp_ajax_worktheme-like', 'worktheme_like');


	wp_enqueue_script('worktheme-script', get_template_directory_uri().'/js/worktheme-like.js', array('jquery'), '1.0', true );
	wp_localize_script('worktheme-script', 'ajax_var', array(
    'url' => admin_url('admin-ajax.php'),
    'nonce' => wp_create_nonce('ajax-nonce')
));



	

function worktheme_like()
{
	// Check for nonce security
    $nonce = $_POST['nonce'];
  
    if ( ! wp_verify_nonce( $nonce, 'ajax-nonce' ) )
        die ( 'Busted!');

	$vartype = $_POST['wktype_id'];
	$vartheme = $_POST['wktheme_id'];
	$varyear = $_POST['wkyear_id'];
$mainarray=[];
	if(!empty($vartype))
	{
		$mainarray[]=array(
		       'taxonomy' => 'worktype',
		       'field' => 'term_id',
		       'terms' => $vartype,
		       
		     );
	}
	if(!empty($vartheme))
	{
		$mainarray[]=array(
		       'taxonomy' => 'worktheme',
		       'field' => 'term_id',
		       'terms' => $vartheme,
		       
		     );
	}

	if(!empty($varyear))
	{
		$mainarray[]=array(
		       'taxonomy' => 'workyear',
		       'field' => 'term_id',
		       'terms' => $varyear
		       
		     );
	}

	

	$output = '';

	$quereypol = new Wp_Query(array(

		'post_type' => 'sama_publication',
        'orderby'   => 'ID',
        'order' =>'DESC',
        'tax_query' =>array(

        	'relation' => 'AND',
		     $mainarray


        )

	));

if($quereypol->have_posts())
	{

	while($quereypol->have_posts())
	{
		$quereypol->the_post();

		$img = get_the_post_thumbnail_url();

		$pcontent = get_the_content();
		$ptitle = get_the_title();
		$ppermalink = get_the_permalink();


		$downloadlink = get_field('download_link');
		$downurl = $downloadlink['url'];

        $publitiondate = get_field('publication_date');
        $clientname = get_field('client');
        $countryname = get_field('country');
        $termidddd = get_the_terms($post_ID, 'worktype');
        foreach($termidddd as $term) {

			$termtypename =  $term->name;

		}
		
		$output .= '<div class="single_projects_inn">
    					<div class="single_projects_inn_left single_publications_inn_left">
    						<img src="'.$img.'" alt="img">
    					</div>
    					<div class="single_projects_inn_right single_publications_inn_right">
    						<div class="top_projt top_publict">
    							<h3><a href="'.$ppermalink.'">'.$ptitle.'</a></h3>
    							<p>'.$pcontent.'</p>
    						</div>
    						<div class="bott_projt bott_publict">
    							<ul>
                                    
    								<li><p>Download:<span><a download href="'.$downurl.'">EN</a> | AR</span></p></li>
    								<li><p>Date:<span>'. $publitiondate .'</span></p></li>
    								<li><p>Client:<span>'.$clientname.'</span></p></li>
                                    <li><p>Type:<span>'.$termtypename.'</span></p></li>
    								<li><p>Country:<span>'.$countryname.'</span></p></li>
    							</ul>
    						</div>
    					</div>
    				</div>';


		} 

	}		
	else
	{
		$output .='<h3 style="text-align:center;">NO DATA FOUND</h3>';
	}

	echo $output;
	die;

	


}

//////Year taxonomy filter///////

add_action('wp_ajax_nopriv_workyear-like', 'workyear_like');
add_action('wp_ajax_workyear-like', 'workyear_like');


	wp_enqueue_script('workyear-script', get_template_directory_uri().'/js/workyear-like.js', array('jquery'), '1.0', true );
	wp_localize_script('workyear-script', 'ajax_var', array(
    'url' => admin_url('admin-ajax.php'),
    'nonce' => wp_create_nonce('ajax-nonce')
));



	

function workyear_like()
{
	// Check for nonce security
    $nonce = $_POST['nonce'];
  
    if ( ! wp_verify_nonce( $nonce, 'ajax-nonce' ) )
        die ( 'Busted!');

	$vartype = $_POST['wktype_id'];
	$vartheme = $_POST['wktheme_id'];
	$varyear = $_POST['wkyear_id'];
$mainarray=[];
	if(!empty($vartype))
	{
		$mainarray[]=array(
		       'taxonomy' => 'worktype',
		       'field' => 'term_id',
		       'terms' => $vartype,
		       
		     );
	}
	if(!empty($vartheme))
	{
		$mainarray[]=array(
		       'taxonomy' => 'worktheme',
		       'field' => 'term_id',
		       'terms' => $vartheme,
		       
		     );
	}

	if(!empty($varyear))
	{
		$mainarray[]=array(
		       'taxonomy' => 'workyear',
		       'field' => 'term_id',
		       'terms' => $varyear
		       
		     );
	}

	

	$output = '';

	$quereypol = new Wp_Query(array(

		'post_type' => 'sama_publication',
        'orderby'   => 'ID',
        'order' =>'DESC',
        'tax_query' =>array(

        	'relation' => 'AND',
		     $mainarray


        )

	));

if($quereypol->have_posts())
 {
	while($quereypol->have_posts())
	{
		$quereypol->the_post();

		$img = get_the_post_thumbnail_url();

		$pcontent = get_the_content();
		$ptitle = get_the_title();
		$ppermalink = get_the_permalink();

		$downloadlink = get_field('download_link');
		$downurl = $downloadlink['url'];

        $publitiondate = get_field('publication_date');
        $clientname = get_field('client');
        $countryname = get_field('country');
        $termidddd = get_the_terms($post_ID, 'worktype');
        foreach($termidddd as $term) {

			$termtypename =  $term->name;

		}
		
		$output .= '<div class="single_projects_inn">
    					<div class="single_projects_inn_left single_publications_inn_left">
    						<img src="'.$img.'" alt="img">
    					</div>
    					<div class="single_projects_inn_right single_publications_inn_right">
    						<div class="top_projt top_publict">
    							<h3><a href="'.$ppermalink.'">'.$ptitle.'</a></h3>
    							<p>'.$pcontent.'</p>
    						</div>
    						<div class="bott_projt bott_publict">
    							<ul>
                                    
    								<li><p>Download:<span><a download href="'.$downurl.'">EN</a> | AR</span></p></li>
    								<li><p>Date:<span>'. $publitiondate .'</span></p></li>
    								<li><p>Client:<span>'.$clientname.'</span></p></li>
                                    <li><p>Type:<span>'.$termtypename.'</span></p></li>
    								<li><p>Country:<span>'.$countryname.'</span></p></li>
    							</ul>
    						</div>
    					</div>
    				</div>';


	} 

}

  else
  {
  		$output .='<h3 style="text-align:center;">NO DATA FOUND</h3>';
  }

	echo $output;
	die;

	


}



