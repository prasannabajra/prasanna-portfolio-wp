<?php

function myportfolio_theme_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '3.3.7', 'all');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome.min.css', array(), '4.7.0', 'all');
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/owlcarousel/css/owl.carousel.css', array(), '2.2.1', 'all');
    wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/owlcarousel/css/owl.theme.css', array(), '2.2.1', 'all');
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.1.0', 'all');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '3.5.2', 'all');
    wp_enqueue_style( 'effects', get_template_directory_uri() . '/assets/css/effects.css', array(), '1.0', 'all');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0', 'all');
    wp_enqueue_style( 'raleway-font', 'https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,900', array(), null, 'all');

    
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/owlcarousel/js/owl.carousel.min.js', array('jquery'), '2.2.1', true );
    wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/assets/js/jquery.mixitup.js', array('jquery'), '2.1.11', true );
    wp_enqueue_script( 'stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array('jquery'), '0.6.2', true );
    wp_enqueue_script( 'particles', get_template_directory_uri() . '/assets/js/particles.min.js', array(), '2.0.0', true );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', array('particles'), '1.0', true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', true );
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array('jquery'), '4.0.1', true );
    wp_enqueue_script( 'gmap3', get_template_directory_uri() . '/assets/js/gmap3.min.js', array('jquery'), '6.0.0', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.1.2', true );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'myportfolio-scroll-to-post', get_template_directory_uri() . '/assets/js/scroll-to-post.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'myportfolio_theme_scripts' );

function myportfolio_customize_register( $wp_customize ) {
    // About Section
    $wp_customize->add_section( 'about_section', array(
        'title'      => __( 'About Section', 'myportfolio' ),
        'priority'   => 30,
    ) );

    // About Title
    $wp_customize->add_setting( 'about_title', array(
        'default'    => 'I\'m Prasanna Bajra Bajracharya and I\'m a software engineer.',
        'transport'  => 'refresh',
    ) );
    $wp_customize->add_control( 'about_title_control', array(
        'label'      => __( 'About Title', 'myportfolio' ),
        'section'    => 'about_section',
        'settings'   => 'about_title',
        'type'       => 'text',
    ) );

    // About Description 1
    $wp_customize->add_setting( 'about_description_1', array(
        'default'    => 'I am an experienced software engineer with a demonstrated history of working in the information technology & service industry. Skilled in SQL, Web applications, Window services, C# and .NET Framework. A strong engineering professional with a Bachelor’s degree in Computer Science and Information Technology, BSc. CSIT from Tribhuvan University, Nepal.',
        'transport'  => 'refresh',
    ) );
    $wp_customize->add_control( 'about_description_1_control', array(
        'label'      => __( 'About Description 1', 'myportfolio' ),
        'section'    => 'about_section',
        'settings'   => 'about_description_1',
        'type'       => 'textarea',
    ) );

    // About Description 2
    $wp_customize->add_setting( 'about_description_2', array(
        'default'    => 'I am passionate about building excellent software that improves the lives of those around me. I specialize in creating software for clients ranging from individuals & small-businesses all the way to large enterprise corporations.',
        'transport'  => 'refresh',
    ) );
    $wp_customize->add_control( 'about_description_2_control', array(
        'label'      => __( 'About Description 2', 'myportfolio' ),
        'section'    => 'about_section',
        'settings'   => 'about_description_2',
        'type'       => 'textarea',
    ) );

    // About Description 3
    $wp_customize->add_setting( 'about_description_3', array(
        'default'    => 'As a software engineer, I write code that conforms to industry standards & semantic best practices. I am able to transform static artwork into interactive and fully functional interfaces.',
        'transport'  => 'refresh',
    ) );
    $wp_customize->add_control( 'about_description_3_control', array(
        'label'      => __( 'About Description 3', 'myportfolio' ),
        'section'    => 'about_section',
        'settings'   => 'about_description_3',
        'type'       => 'textarea',
    ) );

    // Resume PDF Link
    $wp_customize->add_setting( 'resume_pdf_link', array(
        'default'    => get_template_directory_uri() . '/assets/files/prasannabajracharya_resume.pdf',
        'transport'  => 'refresh',
    ) );
    $wp_customize->add_control( 'resume_pdf_link_control', array(
        'label'      => __( 'Resume PDF Link', 'myportfolio' ),
        'section'    => 'about_section',
        'settings'   => 'resume_pdf_link',
        'type'       => 'url',
    ) );

    // About List Items
    $wp_customize->add_setting( 'about_list_items', array(
        'default'    => 'Front-end development,Back-end development,Web Applications,Desktop Applications,Web Services,Window Services,Wordpress Website,Umbraco Website,DotNetNuke Website,Subrion Website,WooCommerce,Oracle,MySQL,SQL Server',
        'transport'  => 'refresh',
    ) );
    $wp_customize->add_control( 'about_list_items_control', array(
        'label'      => __( 'About List Items (comma separated)', 'myportfolio' ),
        'section'    => 'about_section',
        'settings'   => 'about_list_items',
        'type'       => 'textarea',
    ) );

    

    

    

    // Contact Section
    $wp_customize->add_section( 'contact_section', array(
        'title'      => __( 'Contact Section', 'myportfolio' ),
        'priority'   => 70,
    ) );

    // Contact Title
    $wp_customize->add_setting( 'contact_title', array(
        'default'    => 'contact me',
        'transport'  => 'refresh',
    ) );
    $wp_customize->add_control( 'contact_title_control', array(
        'label'      => __( 'Contact Section Title', 'myportfolio' ),
        'section'    => 'contact_section',
        'settings'   => 'contact_title',
        'type'       => 'text',
    ) );

    // Contact Description
    $wp_customize->add_setting( 'contact_description', array(
        'default'    => 'Reach out and send me a friendly hello.',
        'transport'  => 'refresh',
    ) );
    $wp_customize->add_control( 'contact_description_control', array(
        'label'      => __( 'Contact Section Description', 'myportfolio' ),
        'section'    => 'contact_section',
        'settings'   => 'contact_description',
        'type'       => 'textarea',
    ) );

    // Location
    $wp_customize->add_setting( 'contact_location', array(
        'default'    => 'Kathmandu, Nepal',
        'transport'  => 'refresh',
    ) );
    $wp_customize->add_control( 'contact_location_control', array(
        'label'      => __( 'Location', 'myportfolio' ),
        'section'    => 'contact_section',
        'settings'   => 'contact_location',
        'type'       => 'text',
    ) );

    // Phone
    $wp_customize->add_setting( 'contact_phone', array(
        'default'    => '+977-9841658101.',
        'transport'  => 'refresh',
    ) );
    $wp_customize->add_control( 'contact_phone_control', array(
        'label'      => __( 'Phone Number', 'myportfolio' ),
        'section'    => 'contact_section',
        'settings'   => 'contact_phone',
        'type'       => 'text',
    ) );

    // Work Hour
    $wp_customize->add_setting( 'contact_work_hour', array(
        'default'    => 'Sunday to Friday',
        'transport'  => 'refresh',
    ) );
    $wp_customize->add_control( 'contact_work_hour_control', array(
        'label'      => __( 'Work Hour', 'myportfolio' ),
        'section'    => 'contact_section',
        'settings'   => 'contact_work_hour',
        'type'       => 'text',
    ) );

    // Email
    $wp_customize->add_setting( 'contact_email', array(
        'default'    => 'prasbuzz15@gmail.com',
        'transport'  => 'refresh',
    ) );
    $wp_customize->add_control( 'contact_email_control', array(
        'label'      => __( 'Email Address', 'myportfolio' ),
        'section'    => 'contact_section',
        'settings'   => 'contact_email',
        'type'       => 'text',
    ) );

    // Header Section
    $wp_customize->add_section( 'header_section', array(
        'title'      => __( 'Header Section', 'myportfolio' ),
        'priority'   => 20,
    ) );

    // Header Main Title
    $wp_customize->add_setting( 'header_main_title', array(
        'default'    => '',
        'transport'  => 'refresh',
    ) );
    $wp_customize->add_control( 'header_main_title_control', array(
        'label'      => __( 'Header Main Title', 'myportfolio' ),
        'section'    => 'header_section',
        'settings'   => 'header_main_title',
        'type'       => 'text',
    ) );

    // Header Rotating Text
    $wp_customize->add_setting( 'header_rotating_text', array(
        'default'    => 'Software Engineer.,Freelancer.,Consultant.',
        'transport'  => 'refresh',
    ) );
    $wp_customize->add_control( 'header_rotating_text_control', array(
        'label'      => __( 'Header Rotating Text (comma separated)', 'myportfolio' ),
        'section'    => 'header_section',
        'settings'   => 'header_rotating_text',
        'type'       => 'textarea',
    ) );

    // Social Media Links
    $wp_customize->add_setting( 'facebook_link', array(
        'default'    => 'https://www.facebook.com/happy.buzz',
        'transport'  => 'refresh',
    ) );
    $wp_customize->add_control( 'facebook_link_control', array(
        'label'      => __( 'Facebook Link', 'myportfolio' ),
        'section'    => 'header_section',
        'settings'   => 'facebook_link',
        'type'       => 'url',
    ) );

    $wp_customize->add_setting( 'linkedin_link', array(
        'default'    => 'https://www.linkedin.com/in/prasanna-bajra-bajracharya-01974162',
        'transport'  => 'refresh',
    ) );
    $wp_customize->add_control( 'linkedin_link_control', array(
        'label'      => __( 'LinkedIn Link', 'myportfolio' ),
        'section'    => 'header_section',
        'settings'   => 'linkedin_link',
        'type'       => 'url',
    ) );

    $wp_customize->add_setting( 'instagram_link', array(
        'default'    => 'https://www.instagram.com/prasannabuzz',
        'transport'  => 'refresh',
    ) );
    $wp_customize->add_control( 'instagram_link_control', array(
        'label'      => __( 'Instagram Link', 'myportfolio' ),
        'section'    => 'header_section',
        'settings'   => 'instagram_link',
        'type'       => 'url',
    ) );

    // Footer Section
    $wp_customize->add_section( 'footer_section', array(
        'title'      => __( 'Footer Section', 'myportfolio' ),
        'priority'   => 80,
    ) );

    // Footer Copyright Text
    $wp_customize->add_setting( 'footer_copyright_text', array(
        'default'    => 'Prasanna Bajra Bajracharya. All rights reserved | Design : Nista Template',
        'transport'  => 'refresh',
    ) );
    $wp_customize->add_control( 'footer_copyright_text_control', array(
        'label'      => __( 'Footer Copyright Text', 'myportfolio' ),
        'section'    => 'footer_section',
        'settings'   => 'footer_copyright_text',
        'type'       => 'textarea',
    ) );

    // Homepage Banner Section
    $wp_customize->add_section( 'homepage_banner_section', array(
        'title'      => __( 'Homepage Banner', 'myportfolio' ),
        'priority'   => 10,
    ) );

    // Homepage Banner Image
    $wp_customize->add_setting( 'hero_image', array(
        'default'    => get_template_directory_uri() . '/assets/images/bg/bg.jpg',
        'transport'  => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_image_control', array(
        'label'      => __( 'Hero Background Image', 'myportfolio' ),
        'section'    => 'homepage_banner_section',
        'settings'   => 'hero_image',
    ) ) );

}
add_action( 'customize_register', 'myportfolio_customize_register' );


function myportfolio_register_testimonial_cpt() {
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post Type General Name', 'myportfolio' ),
        'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'myportfolio' ),
        'menu_name'             => __( 'Testimonials', 'myportfolio' ),
        'name_admin_bar'        => __( 'Testimonial', 'myportfolio' ),
        'archives'              => __( 'Testimonial Archives', 'myportfolio' ),
        'attributes'            => __( 'Testimonial Attributes', 'myportfolio' ),
        'parent_item_colon'     => __( 'Parent Testimonial:', 'myportfolio' ),
        'all_items'             => __( 'All Testimonials', 'myportfolio' ),
        'add_new_item'          => __( 'Add New Testimonial', 'myportfolio' ),
        'add_new'               => __( 'Add New', 'myportfolio' ),
        'new_item'              => __( 'New Testimonial', 'myportfolio' ),
        'edit_item'             => __( 'Edit Testimonial', 'myportfolio' ),
        'update_item'           => __( 'Update Testimonial', 'myportfolio' ),
        'view_item'             => __( 'View Testimonial', 'myportfolio' ),
        'view_items'            => __( 'View Testimonials', 'myportfolio' ),
        'search_items'          => __( 'Search Testimonials', 'myportfolio' ),
        'not_found'             => __( 'Not found', 'myportfolio' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'myportfolio' ),
        'featured_image'        => __( 'Featured Image', 'myportfolio' ),
        'set_featured_image'    => __( 'Set featured image', 'myportfolio' ),
        'remove_featured_image' => __( 'Remove featured image', 'myportfolio' ),
        'use_featured_image'    => __( 'Use as featured image', 'myportfolio' ),
        'insert_into_item'      => __( 'Insert into testimonial', 'myportfolio' ),
        'uploaded_to_this_item' => __( 'Uploaded to this testimonial', 'myportfolio' ),
        'items_list'            => __( 'Testimonials list', 'myportfolio' ),
        'items_list_navigation' => __( 'Testimonials list navigation', 'myportfolio' ),
        'filter_items_list'     => __( 'Filter testimonials list', 'myportfolio' ),
    );
    $args = array(
        'label'                 => __( 'Testimonial', 'myportfolio' ),
        'description'           => __( 'Post Type for Testimonials', 'myportfolio' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-testimonial',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'testimonial', $args );

}
add_action( 'init', 'myportfolio_register_testimonial_cpt', 0 );

function myportfolio_add_testimonial_meta_boxes() {
    add_meta_box(
        'testimonial_details',
        __( 'Testimonial Details', 'myportfolio' ),
        'myportfolio_render_testimonial_details_meta_box',
        'testimonial',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'myportfolio_add_testimonial_meta_boxes' );

function myportfolio_render_testimonial_details_meta_box( $post ) {
    wp_nonce_field( 'myportfolio_save_testimonial_details', 'myportfolio_testimonial_details_nonce' );
    $name = get_post_meta( $post->ID, '_myportfolio_testimonial_name', true );
    $title = get_post_meta( $post->ID, '_myportfolio_testimonial_title', true );
    ?>
    <p>
        <label for="myportfolio_testimonial_name"><?php _e( 'Name:', 'myportfolio' ); ?></label>
        <br>
        <input type="text" id="myportfolio_testimonial_name" name="myportfolio_testimonial_name" value="<?php echo esc_attr( $name ); ?>" size="30" />
    </p>
    <p>
        <label for="myportfolio_testimonial_title"><?php _e( 'Title/Designation:', 'myportfolio' ); ?></label>
        <br>
        <input type="text" id="myportfolio_testimonial_title" name="myportfolio_testimonial_title" value="<?php echo esc_attr( $title ); ?>" size="30" />
    </p>
    <?php
}

function myportfolio_save_testimonial_details( $post_id ) {
    if ( ! isset( $_POST['myportfolio_testimonial_details_nonce'] ) ) {
        return $post_id;
    }
    if ( ! wp_verify_nonce( $_POST['myportfolio_testimonial_details_nonce'], 'myportfolio_save_testimonial_details' ) ) {
        return $post_id;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return $post_id;
    }

    if ( isset( $_POST['myportfolio_testimonial_name'] ) ) {
        update_post_meta( $post_id, '_myportfolio_testimonial_name', sanitize_text_field( $_POST['myportfolio_testimonial_name'] ) );
    }
    if ( isset( $_POST['myportfolio_testimonial_title'] ) ) {
        update_post_meta( $post_id, '_myportfolio_testimonial_title', sanitize_text_field( $_POST['myportfolio_testimonial_title'] ) );
    }
}
add_action( 'save_post', 'myportfolio_save_testimonial_details' );


function myportfolio_register_work_cpt() {
    $labels = array(
        'name'                  => _x( 'Works', 'Post Type General Name', 'myportfolio' ),
        'singular_name'         => _x( 'Work', 'Post Type Singular Name', 'myportfolio' ),
        'menu_name'             => __( 'Works', 'myportfolio' ),
        'name_admin_bar'        => __( 'Work', 'myportfolio' ),
        'archives'              => __( 'Work Archives', 'myportfolio' ),
        'attributes'            => __( 'Work Attributes', 'myportfolio' ),
        'parent_item_colon'     => __( 'Parent Work:', 'myportfolio' ),
        'all_items'             => __( 'All Works', 'myportfolio' ),
        'add_new_item'          => __( 'Add New Work', 'myportfolio' ),
        'add_new'               => __( 'Add New', 'myportfolio' ),
        'new_item'              => __( 'New Work', 'myportfolio' ),
        'edit_item'             => __( 'Edit Work', 'myportfolio' ),
        'update_item'           => __( 'Update Work', 'myportfolio' ),
        'view_item'             => __( 'View Work', 'myportfolio' ),
        'view_items'            => __( 'View Works', 'myportfolio' ),
        'search_items'          => __( 'Search Works', 'myportfolio' ),
        'not_found'             => __( 'Not found', 'myportfolio' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'myportfolio' ),
        'featured_image'        => __( 'Featured Image', 'myportfolio' ),
        'set_featured_image'    => __( 'Set featured image', 'myportfolio' ),
        'remove_featured_image' => __( 'Remove featured image', 'myportfolio' ),
        'use_featured_image'    => __( 'Use as featured image', 'myportfolio' ),
        'insert_into_item'      => __( 'Insert into work', 'myportfolio' ),
        'uploaded_to_this_item' => __( 'Uploaded to this work', 'myportfolio' ),
        'items_list'            => __( 'Works list', 'myportfolio' ),
        'items_list_navigation' => __( 'Works list navigation', 'myportfolio' ),
        'filter_items_list'     => __( 'Filter works list', 'myportfolio' ),
    );
    $args = array(
        'label'                 => __( 'Work', 'myportfolio' ),
        'description'           => __( 'Post Type for Work Projects', 'myportfolio' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-portfolio',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'work', $args );

}
add_action( 'init', 'myportfolio_register_work_cpt', 0 );

function myportfolio_add_work_meta_boxes() {
    add_meta_box(
        'work_details',
        __( 'Work Details', 'myportfolio' ),
        'myportfolio_render_work_details_meta_box',
        'work',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'myportfolio_add_work_meta_boxes' );

function myportfolio_render_work_details_meta_box( $post ) {
    wp_nonce_field( 'myportfolio_save_work_details', 'myportfolio_work_details_nonce' );
    $category = get_post_meta( $post->ID, '_myportfolio_work_category', true );
    ?>
    <p>
        <label for="myportfolio_work_category"><?php _e( 'Category:', 'myportfolio' ); ?></label>
        <br>
        <input type="text" id="myportfolio_work_category" name="myportfolio_work_category" value="<?php echo esc_attr( $category ); ?>" size="30" />
    </p>
    <?php
}

function myportfolio_save_work_details( $post_id ) {
    if ( ! isset( $_POST['myportfolio_work_details_nonce'] ) ) {
        return $post_id;
    }
    if ( ! wp_verify_nonce( $_POST['myportfolio_work_details_nonce'], 'myportfolio_save_work_details' ) ) {
        return $post_id;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return $post_id;
    }

    if ( isset( $_POST['myportfolio_work_category'] ) ) {
        update_post_meta( $post_id, '_myportfolio_work_category', sanitize_text_field( $_POST['myportfolio_work_category'] ) );
    }
}
add_action( 'save_post', 'myportfolio_save_work_details' );


function myportfolio_register_service_cpt() {
    $labels = array(
        'name'                  => _x( 'Services', 'Post Type General Name', 'myportfolio' ),
        'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'myportfolio' ),
        'menu_name'             => __( 'Services', 'myportfolio' ),
        'name_admin_bar'        => __( 'Service', 'myportfolio' ),
        'archives'              => __( 'Service Archives', 'myportfolio' ),
        'attributes'            => __( 'Service Attributes', 'myportfolio' ),
        'parent_item_colon'     => __( 'Parent Service:', 'myportfolio' ),
        'all_items'             => __( 'All Services', 'myportfolio' ),
        'add_new_item'          => __( 'Add New Service', 'myportfolio' ),
        'add_new'               => __( 'Add New', 'myportfolio' ),
        'new_item'              => __( 'New Service', 'myportfolio' ),
        'edit_item'             => __( 'Edit Service', 'myportfolio' ),
        'update_item'           => __( 'Update Service', 'myportfolio' ),
        'view_item'             => __( 'View Service', 'myportfolio' ),
        'view_items'            => __( 'View Services', 'myportfolio' ),
        'search_items'          => __( 'Search Services', 'myportfolio' ),
        'not_found'             => __( 'Not found', 'myportfolio' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'myportfolio' ),
        'featured_image'        => __( 'Featured Image', 'myportfolio' ),
        'set_featured_image'    => __( 'Set featured image', 'myportfolio' ),
        'remove_featured_image' => __( 'Remove featured image', 'myportfolio' ),
        'use_featured_image'    => __( 'Use as featured image', 'myportfolio' ),
        'insert_into_item'      => __( 'Insert into service', 'myportfolio' ),
        'uploaded_to_this_item' => __( 'Uploaded to this service', 'myportfolio' ),
        'items_list'            => __( 'Services list', 'myportfolio' ),
        'items_list_navigation' => __( 'Services list navigation', 'myportfolio' ),
        'filter_items_list'     => __( 'Filter services list', 'myportfolio' ),
    );
    $args = array(
        'label'                 => __( 'Service', 'myportfolio' ),
        'description'           => __( 'Post Type for Services', 'myportfolio' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-admin-tools',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'service', $args );

}
add_action( 'init', 'myportfolio_register_service_cpt', 0 );

function myportfolio_add_service_meta_boxes() {
    add_meta_box(
        'service_details',
        __( 'Service Details', 'myportfolio' ),
        'myportfolio_render_service_details_meta_box',
        'service',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'myportfolio_add_service_meta_boxes' );

function myportfolio_render_service_details_meta_box( $post ) {
    wp_nonce_field( 'myportfolio_save_service_details', 'myportfolio_service_details_nonce' );
    $icon = get_post_meta( $post->ID, '_myportfolio_service_icon', true );
    ?>
    <p>
        <label for="myportfolio_service_icon"><?php _e( 'Icon (Font Awesome class):', 'myportfolio' ); ?></label>
        <br>
        <input type="text" id="myportfolio_service_icon" name="myportfolio_service_icon" value="<?php echo esc_attr( $icon ); ?>" size="30" />
    </p>
    <?php
}

function myportfolio_save_service_details( $post_id ) {
    if ( ! isset( $_POST['myportfolio_service_details_nonce'] ) ) {
        return $post_id;
    }
    if ( ! wp_verify_nonce( $_POST['myportfolio_service_details_nonce'], 'myportfolio_save_service_details' ) ) {
        return $post_id;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return $post_id;
    }

    if ( isset( $_POST['myportfolio_service_icon'] ) ) {
        update_post_meta( $post_id, '_myportfolio_service_icon', sanitize_text_field( $_POST['myportfolio_service_icon'] ) );
    }
}
add_action( 'save_post', 'myportfolio_save_service_details' );

add_action( 'after_setup_theme', 'myportfolio_setup_theme_features' );
function myportfolio_setup_theme_features() {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 300, 300, true ); // Example size: 300x300 hard crop
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'myportfolio' ),
    ) );
}

function myportfolio_add_menu_link_attributes( $atts, $item, $args ) {
    // Check if it's the primary menu and the link is an anchor link
    if ( $args->theme_location == 'primary' && strpos( $atts['href'], '#' ) !== false ) {
        $atts['class'] = ( isset( $atts['class'] ) ? $atts['class'] . ' ' : '' ) . 'smoth-scroll';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'myportfolio_add_menu_link_attributes', 10, 3 );

function myportfolio_make_menu_anchors_absolute( $items, $args ) {
    if ( $args->theme_location == 'primary' ) {
        foreach ( $items as $item ) {
            // Only modify custom links that start with #
            if ( $item->type == 'custom' && strpos( $item->url, '#' ) === 0 ) {
                $item->url = home_url( '/' ) . $item->url;
            }
        }
    }
    return $items;
}
add_filter( 'wp_nav_menu_objects', 'myportfolio_make_menu_anchors_absolute', 10, 2 );

function myportfolio_highlight_blog_menu_item( $classes, $item ) {
    if ( is_single() && 'post' == get_post_type() ) {
        // Assuming your blog page is a custom link or a page named 'Blog'
        // You might need to adjust 'Blog' to the actual title or ID of your blog page/menu item
        if ( $item->title == 'Blog' || ( $item->object == 'page' && get_option( 'page_for_posts' ) == $item->object_id ) ) {
            $classes[] = 'current-menu-item';
        }
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'myportfolio_highlight_blog_menu_item', 10, 2 );

?>