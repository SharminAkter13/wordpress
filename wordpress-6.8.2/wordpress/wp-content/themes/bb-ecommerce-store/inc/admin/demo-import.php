<div class="demo-content">
	<?php 
    // Check if the demo import has been completed
    $bb_ecommerce_store_demo_import_completed = get_option('bb_ecommerce_store_demo_import_completed', false);

    // If the demo import is completed, display the "View Site" button
    if ($bb_ecommerce_store_demo_import_completed) {
      echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'bb-ecommerce-store') . '</p>';
      echo '<a href="' . esc_url(home_url()) . '" class="view-btn" target="_blank">' . esc_html__('VIEW SITE', 'bb-ecommerce-store') . '</a>';
    }

    if (isset($_POST['submit'])) {

    // Check if woocommerce is installed and activated
    if (!is_plugin_active('woocommerce/woocommerce.php')) {
      // Install the plugin if it doesn't exist
      $bb_ecommerce_store_plugin_slug = 'woocommerce';
      $bb_ecommerce_store_plugin_file = 'woocommerce/woocommerce.php';

      // Check if plugin is installed
      $bb_ecommerce_store_installed_plugins = get_plugins();
      if (!isset($bb_ecommerce_store_installed_plugins[$bb_ecommerce_store_plugin_file])) {
          include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
          include_once(ABSPATH . 'wp-admin/includes/file.php');
          include_once(ABSPATH . 'wp-admin/includes/misc.php');
          include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

          // Install the plugin
          $bb_ecommerce_store_upgrader = new Plugin_Upgrader();
          $bb_ecommerce_store_upgrader->install('https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip');
      }
      // Activate the plugin
      activate_plugin($bb_ecommerce_store_plugin_file);
    }

    // --- Menu ---
    $bb_ecommerce_store_primary_menu_name = 'Main Menu';
    $bb_ecommerce_store_primary_menu_location = 'primary';
    $bb_ecommerce_store_primary_menu_exists = wp_get_nav_menu_object($bb_ecommerce_store_primary_menu_name);

    if (!$bb_ecommerce_store_primary_menu_exists) {
        // Create the left menu
        $bb_ecommerce_store_primary_menu_id = wp_create_nav_menu($bb_ecommerce_store_primary_menu_name);

        // Create and assign the Home page
        $bb_ecommerce_store_home_page_id = wp_insert_post(array(
            'post_type'     => 'page',
            'post_title'    => 'Home',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'home'
        ));
        // Assign template and set as front page
        add_post_meta($bb_ecommerce_store_home_page_id, '_wp_page_template', 'page-template/custom-home-page.php');
        update_option('page_on_front', $bb_ecommerce_store_home_page_id);
        update_option('show_on_front', 'page');

        // Add Home page to the left menu
        wp_update_nav_menu_item($bb_ecommerce_store_primary_menu_id, 0, array(
            'menu-item-title'     => __('Home', 'bb-ecommerce-store'),
            'menu-item-classes'   => 'home',
            'menu-item-url'       => home_url('/'),
            'menu-item-status'    => 'publish',
            'menu-item-object-id' => $bb_ecommerce_store_home_page_id,
            'menu-item-object'    => 'page',
            'menu-item-type'      => 'post_type',
        ));

        // Create and assign the About Us page
        $bb_ecommerce_store_about_us_page_id = wp_insert_post(array(
            'post_type'     => 'page',
            'post_title'    => 'About Us',
            'post_content'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'about-us'
        ));

        // Add About Us page to the left menu
        wp_update_nav_menu_item($bb_ecommerce_store_primary_menu_id, 0, array(
            'menu-item-title'     => __('About Us', 'bb-ecommerce-store'),
            'menu-item-classes'   => 'about-us',
            'menu-item-url'       => home_url('/about-us/'),
            'menu-item-status'    => 'publish',
            'menu-item-object-id' => $bb_ecommerce_store_about_us_page_id,
            'menu-item-object'    => 'page',
            'menu-item-type'      => 'post_type',
        ));

        // Assign left menu to its location
        $bb_ecommerce_store_locations = get_theme_mod('nav_menu_locations', array());
        $bb_ecommerce_store_locations[$bb_ecommerce_store_primary_menu_location] = $bb_ecommerce_store_primary_menu_id;
        set_theme_mod('nav_menu_locations', $bb_ecommerce_store_locations);
    }  

    // Set the demo import completion flag
    update_option('bb_ecommerce_store_demo_import_completed', true);

    // Display success message and "View Site" button
    echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'bb-ecommerce-store') . '</p>';
    echo '<span><a href="' . esc_url(home_url()) . '" class="view-btn" target="_blank">' . esc_html__('VIEW SITE', 'bb-ecommerce-store') . '</a></span>';

    //end

    // Topbar Section
    set_theme_mod( 'bb_ecommerce_store_contact', '(518) 356-5373' );
    set_theme_mod( 'bb_ecommerce_store_email', 'support@example.com' );

    // Social Icons
    set_theme_mod( 'bb_ecommerce_store_youtube_url', 'www.youtube.com' );
    set_theme_mod( 'bb_ecommerce_store_facebook_url', 'www.facebook.com' );
    set_theme_mod( 'bb_ecommerce_store_twitter_url', 'www.twitter.com' );
    set_theme_mod( 'bb_ecommerce_store_instagram_url', 'www.instagram.com' );
    set_theme_mod( 'bb_ecommerce_store_rss_url', 'www.rss.com' );

    // Slider
    for($bb_ecommerce_store_i=1;$bb_ecommerce_store_i<=4;$bb_ecommerce_store_i++){
       $bb_ecommerce_store_slider_title = 'LOREM IPSUM IS SIMPLY A';
       $bb_ecommerce_store_slider_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.';
          // Create post object
       $bb_ecommerce_store_my_post = array(
       'post_title'    => wp_strip_all_tags( $bb_ecommerce_store_slider_title ),
       'post_content'  => $bb_ecommerce_store_slider_content,
       'post_status'   => 'publish',
       'post_type'     => 'page',
       );

       // Insert the post into the database
       $bb_ecommerce_store_post_id = wp_insert_post( $bb_ecommerce_store_my_post );

       if ($bb_ecommerce_store_post_id) {
         // Set the theme mod for the slider page
         set_theme_mod('bb_ecommerce_store_slider' . $bb_ecommerce_store_i, $bb_ecommerce_store_post_id);

          $bb_ecommerce_store_image_url = get_template_directory_uri().'/images/slider'.$bb_ecommerce_store_i.'.png';

        $bb_ecommerce_store_image_id = media_sideload_image($bb_ecommerce_store_image_url, $bb_ecommerce_store_post_id, null, 'id');

            if (!is_wp_error($bb_ecommerce_store_image_id)) {
                // Set the downloaded image as the post's featured image
                set_post_thumbnail($bb_ecommerce_store_post_id, $bb_ecommerce_store_image_id);
            }
        }
    }

    // Post Category
    set_theme_mod( 'bb_ecommerce_store_services_category', 'category1' );

    // Define post category names and post titles
    $bb_ecommerce_store_category_names = array('category1', 'category2', 'category3');
    $bb_ecommerce_store_title_array = array(
        array("LOREM IPSUM", "LOREM IPSUM", "LOREM IPSUM"),
        array("LOREM IPSUM", "LOREM IPSUM", "LOREM IPSUM"),
        array("LOREM IPSUM", "LOREM IPSUM", "LOREM IPSUM")
    );

        foreach ($bb_ecommerce_store_category_names as $bb_ecommerce_store_index => $bb_ecommerce_store_category_name) {
            // Create or retrieve the post category term ID
            $bb_ecommerce_store_term = term_exists($bb_ecommerce_store_category_name, 'category');
            if ($bb_ecommerce_store_term === 0 || $bb_ecommerce_store_term === null) {
                // If the term does not exist, create it
                $bb_ecommerce_store_term = wp_insert_term($bb_ecommerce_store_category_name, 'category');
            }
            if (is_wp_error($bb_ecommerce_store_term)) {
                error_log('Error creating category: ' . $bb_ecommerce_store_term->get_error_message());
                continue; // Skip to the next iteration if category creation fails
            }

            for ($bb_ecommerce_store_i = 0; $bb_ecommerce_store_i < 3; $bb_ecommerce_store_i++) {
                // Create post content
                $bb_ecommerce_store_title = $bb_ecommerce_store_title_array[$bb_ecommerce_store_index][$bb_ecommerce_store_i];
                $bb_ecommerce_store_content = 'is simply dummy text of the printing';

                // Create post post object
                $bb_ecommerce_store_my_post = array(
                    'post_title'    => wp_strip_all_tags($bb_ecommerce_store_title),
                    'post_content'  => $bb_ecommerce_store_content,
                    'post_status'   => 'publish',
                    'post_type'     => 'post', // Post type set to 'post'
                );

                // Insert the post into the database
                $bb_ecommerce_store_post_id = wp_insert_post($bb_ecommerce_store_my_post);

                if (is_wp_error($bb_ecommerce_store_post_id)) {
                    error_log('Error creating post: ' . $bb_ecommerce_store_post_id->get_error_message());
                    continue; // Skip to the next post if creation fails
                }

                // Assign the category to the post
                wp_set_post_categories($bb_ecommerce_store_post_id, array((int)$bb_ecommerce_store_term['term_id']));

                // Handle the featured image using media_sideload_image
                $bb_ecommerce_store_image_url = get_template_directory_uri() . '/images/image' . ($bb_ecommerce_store_i + 1) . '.png';
                $bb_ecommerce_store_image_id = media_sideload_image($bb_ecommerce_store_image_url, $bb_ecommerce_store_post_id, null, 'id');

                if (is_wp_error($bb_ecommerce_store_image_id)) {
                    error_log('Error downloading image: ' . $bb_ecommerce_store_image_id->get_error_message());
                    continue; // Skip to the next post if image download fails
                }
                // Assign featured image to post
                set_post_thumbnail($bb_ecommerce_store_post_id, $bb_ecommerce_store_image_id);
            }
        }

        // Products Section
        // Define categories, products, images, and prices
        $bb_ecommerce_store_categories = ["Category 11", "Category 12", "Category 13", "Category 14", "Category 15", "Category 16"];
        $bb_ecommerce_store_product_titles = ["Product No: 1", "Product No: 2", "Product No: 3", "Product No: 4", "Product No: 5", "Product No: 6"];
        $bb_ecommerce_store_product_images = [
            get_template_directory_uri() . '/images/product1.png',
            get_template_directory_uri() . '/images/product2.png',
            get_template_directory_uri() . '/images/product3.png',
            get_template_directory_uri() . '/images/product4.png',
            get_template_directory_uri() . '/images/product5.png',
            get_template_directory_uri() . '/images/product6.png'
        ];
        $bb_ecommerce_store_product_prices = [10.99, 20.49, 15.00, 25.75, 18.99, 30.50]; // Prices for each product

        // Loop through categories and assign products, images, and prices
        foreach ($bb_ecommerce_store_categories as $bb_ecommerce_store_index => $bb_ecommerce_store_category_name) {
            $bb_ecommerce_store_category = term_exists($bb_ecommerce_store_category_name, 'product_cat') ?: wp_insert_term($bb_ecommerce_store_category_name, 'product_cat');
            if (is_wp_error($bb_ecommerce_store_category)) continue;

            $bb_ecommerce_store_product_id = wp_insert_post([
                'post_title'   => wp_strip_all_tags($bb_ecommerce_store_product_titles[$bb_ecommerce_store_index]),
                'post_content' => 'Description for ' . $bb_ecommerce_store_product_titles[$bb_ecommerce_store_index],
                'post_status'  => 'publish',
                'post_type'    => 'product',
            ]);

            if (is_wp_error($bb_ecommerce_store_product_id)) continue;

            wp_set_object_terms($bb_ecommerce_store_product_id, (int) $bb_ecommerce_store_category['term_id'], 'product_cat');

            // Assign the featured image
            $bb_ecommerce_store_image_id = media_sideload_image($bb_ecommerce_store_product_images[$bb_ecommerce_store_index], $bb_ecommerce_store_product_id, null, 'id');
            if (!is_wp_error($bb_ecommerce_store_image_id)) set_post_thumbnail($bb_ecommerce_store_product_id, $bb_ecommerce_store_image_id);

            // Add product price
            update_post_meta($bb_ecommerce_store_product_id, '_regular_price', $bb_ecommerce_store_product_prices[$bb_ecommerce_store_index]);
            update_post_meta($bb_ecommerce_store_product_id, '_price', $bb_ecommerce_store_product_prices[$bb_ecommerce_store_index]);

            // Set the product type as "simple"
            wp_set_object_terms($bb_ecommerce_store_product_id, 'simple', 'product_type');
        }

        // Products Section
        set_theme_mod( 'bb_ecommerce_store_sec1_title', 'NEW PRODUCTS' );

        // Create the 'Products' page if it doesn't exist
        $bb_ecommerce_store_page_query = new WP_Query(array(
            'post_type'      => 'page',
            'title'          => 'Products',
            'post_status'    => 'publish',
            'posts_per_page' => 1
        ));

        if (!$bb_ecommerce_store_page_query->have_posts()) {
            $bb_ecommerce_store_page_title = 'Products';
            $productpage = '[products limit="4" columns="4"]';

            // Append the WooCommerce products shortcode to the content
            $bb_ecommerce_store_content = '';
            $bb_ecommerce_store_content .= do_shortcode($productpage);

            // Create the new page
            $bb_ecommerce_store_page = array(
                'post_type'    => 'page',
                'post_title'   => $bb_ecommerce_store_page_title,
                'post_content' => $bb_ecommerce_store_content,
                'post_status'  => 'publish',
                'post_author'  => 1,
                'post_slug'    => 'products'
            );

            // Insert the page and get its ID
            $bb_ecommerce_store_page_id = wp_insert_post($bb_ecommerce_store_page);

            // Store the page ID in theme mod
            if (!is_wp_error($bb_ecommerce_store_page_id)) {
                set_theme_mod('bb_ecommerce_store_servicesettings', $bb_ecommerce_store_page_id);
            }
        }  
    }
    ?>

	<p><strong><?php esc_html_e('Reminder : ', 'bb-ecommerce-store'); ?></strong><?php esc_html_e('Backup your site before importing. This process will overwrite existing BB Ecommerce Store settings.', 'bb-ecommerce-store'); ?></p>

    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=bb_ecommerce_store_guide" method="POST" onsubmit="return validate(this);">
    <?php if (!get_option('bb_ecommerce_store_demo_import_completed')) : ?>
        <form method="post">
            <input class= "run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer','bb-ecommerce-store'); ?>" class="button button-primary button-large">
        </form>
    <?php endif; ?>
    </form>
	<script type="text/javascript">
		function validate(valid) {
			 if(confirm("Do you really want to import the theme demo content?")){
			    document.forms[0].submit();
			}
		    else {
			    return false;
		    }
		}
	</script>
</div>
