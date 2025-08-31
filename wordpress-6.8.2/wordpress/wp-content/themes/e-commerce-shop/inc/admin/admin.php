<?php
//about theme info
add_action( 'admin_menu', 'ecommerce_shop_abouttheme' );
function ecommerce_shop_abouttheme() {    	
	add_theme_page( esc_html__('About E-commerce Shop Theme', 'e-commerce-shop'), esc_html__('About E-commerce Shop Theme', 'e-commerce-shop'), 'edit_theme_options', 'ecommerce_shop_guide', 'ecommerce_shop_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function ecommerce_shop_admin_theme_style() {
   wp_enqueue_style('e-commerce-shop-custom-admin-style', esc_url(get_theme_file_uri()) .'/inc/admin/admin.css');
}
add_action('admin_enqueue_scripts', 'ecommerce_shop_admin_theme_style');

//guidline for about theme
function ecommerce_shop_mostrar_guide() {
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="header">
	 	<img role="img" src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/admin/images/logo.png" >
	 	<h2><?php esc_html_e('Welcome to E-commerce Shop Theme', 'e-commerce-shop'); ?></h2>
 		<p><?php esc_html_e('Most of our outstanding theme is elegant, responsive, multifunctional, SEO friendly has amazing features and functionalities that make them highly demanding for designers and bloggers, who ought to excel in web development domain. Our Themeshopy has got everything that an individual and group need to be successful in their venture.', 'e-commerce-shop'); ?></p>
		<div class="main-button">
			<a href="<?php echo esc_url( ECOMMERCE_SHOP_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'e-commerce-shop'); ?></a>
			<a href="<?php echo esc_url( ECOMMERCE_SHOP_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'e-commerce-shop'); ?></a>
		</div>
	</div>
	<div class="button-bg">
		<button role="tab" class="tablink" onclick="openPage('Demo', this, '')"><?php esc_html_e('Demo Import', 'e-commerce-shop'); ?></button>
		<button role="tab" class="tablink" onclick="openPage('Home', this, '')"><?php esc_html_e('Lite Theme Setup', 'e-commerce-shop'); ?></button>
		<button role="tab" class="tablink" onclick="openPage('Contact', this, '')"><?php esc_html_e('Premium Theme info', 'e-commerce-shop'); ?></button>
	</div>
	<div id="Demo" class="tabcontent tab1">
		<div class="demo-info">
			<h3><?php esc_html_e( 'To import demo content, click the "Run Importer" button below.', 'e-commerce-shop' ); ?></h3>
			<?php 
			/* Get Started. */ 
			require get_theme_file_path( '/inc/admin/demo-import.php' );
			 ?>
		</div>
	</div>

	<div id="Home" class="tabcontent">
	  	<h3><?php esc_html_e('How to set up homepage', 'e-commerce-shop'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( ECOMMERCE_SHOP_CONTACT ); ?>" target="_blank"><?php esc_html_e('Support', 'e-commerce-shop'); ?></a>
			<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" target="_blank"><?php esc_html_e('Start Customizing', 'e-commerce-shop'); ?></a>
		</div>
	  	<div class="documentation">
		  	<div class="image-docs">
				<ul>
					<li> <b><?php esc_html_e('Step 1.', 'e-commerce-shop'); ?></b> <?php esc_html_e('Follow these instructions to setup Home page.', 'e-commerce-shop'); ?></li>
					<li> <b><?php esc_html_e('Step 2.', 'e-commerce-shop'); ?></b> <?php esc_html_e(' Create Page to set template: Go to Dashboard >> Pages >> Add New Page.Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.', 'e-commerce-shop'); ?></li>
				</ul>
		  	</div>
		  	<div class="doc-image">
		  		<img role="img" src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/admin/images/home-page-template.png">	
		  	</div>
		  	<div class="clearfixed">
				<div class="doc-image1">
					<img role="img" src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/admin/images/set-front-page.png">	
			    </div>
			    <div class="image-docs1">
				    <ul>
						<li> <b><?php esc_html_e('Step 3.', 'e-commerce-shop'); ?></b> <?php esc_html_e('Set the front page: Go to Setting -> Reading --> Set the front page display static page to home page', 'e-commerce-shop'); ?></li>
					</ul>
			  	</div>
			</div>
		</div>
	</div>

	<div id="Contact" class="tabcontent">
	 	<h3><?php esc_html_e('Premium Theme Info', 'e-commerce-shop'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( ECOMMERCE_SHOP_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'e-commerce-shop'); ?></a>
			<a href="<?php echo esc_url( ECOMMERCE_SHOP_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'e-commerce-shop'); ?></a>
			<a href="<?php echo esc_url( ECOMMERCE_SHOP_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'e-commerce-shop'); ?></a>
		</div>
	  	<div class="features-section">
	  		<div class="col-4">
	  			<img role="img" src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/admin/images/screenshot.png">
	  			<p><?php esc_html_e( 'BB Ecommerce Store WordPress Theme is an extremely user-friendly premium Ecommerce WordPress Theme. It is a multipurpose Ecommerce WordPress theme designed to build stunning online business stores. It is very flexible and has ample of options that makes the website development swift and easy. This is the perfect solution for webmasters who want to create modern online stores with ample number of useful features along with user & mobile friendly design. It comprises of a responsive layout design with the help of its advanced customization options. Easily change the entire look of your ecommerce store, with the help of hook and child theme features. Our WordPress ecommerce store made with secure and clean code and it best ecommerce ready WordPress themes available on the web now. It is built on the Bootstrap and has valid HTML and CSS codes. It features beautiful image galleries, numerous sidebars, well-built sections, menus, etc. This certainly makes our themes one of the best WordPress woo commerce Theme available on the internet. Sell out your products and inventory with BB Ecommerce theme and leave all your competitors battered and beaten.', 'e-commerce-shop' ); ?></p>
	  		</div>
	  		<div class="col-4">
	  			<h4><?php esc_html_e( 'Theme Features', 'e-commerce-shop' ); ?></h4>
				<ul>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Theme options using customizer API', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Responsive Design', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Favicon, Logo, Title and Tagline Customization', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advanced Color Options and Color Pallets', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( '100+ Font Family Options', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Slider with a Number of Slider Images Upload Option Available.', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Support to Add Custom CSS/JS', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'SEO Friendly', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Pagination Option', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Compatible With Different WordPress Famous Plugins Like Contact Form 7 and Woocommerce', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Enable-Disable Options on All Sections', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Footer Customization Options', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Fully Integrated with Font Awesome Icon', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Short Codes', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Background Image Option', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Page Templates', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Featured Product Images, HD Images and Video display', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logo', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Make Post About Firms News, Events, Achievements and So On.', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Left and Right Sidebar', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Sticky Post & Comment Threads', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Parallax Image-Background Section', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Customizable Home Page', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Full-Width Template', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Gallery, Banner & Post Type Plugin Functionality', 'e-commerce-shop' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Social Media Feature', 'e-commerce-shop' ); ?></li>
				</ul>
			</div>
		</div>
	</div>

<script>
	function openPage(pageName,elmnt,color) {
	    var i, tabcontent, tablinks;
	    tabcontent = document.getElementsByClassName("tabcontent");
	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablink");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].style.backgroundColor = "";
	    }
	    document.getElementById(pageName).style.display = "block";
	    elmnt.style.backgroundColor = color;
	}
</script>
<?php } ?>