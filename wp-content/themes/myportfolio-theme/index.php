<?php get_header(); ?>
    <!-- / END HOMEPAGE DESIGN AREA -->

    <!-- START ABOUT DESIGN AREA -->
    <section id="about" class="about-me-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <!--<h2>A story about me.</h2>-->
                        <h2>about me</h2>
                        <p>Specializing in building everything from small business sites to rich interactive web apps.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 about-me-left">
                    <!-- START ABOUT TEXT AREA -->
                    <div class="about-text">
                        <h2 class="wow fadeInDown" data-wow-delay="0.4s"><?php echo esc_html( get_theme_mod( 'about_title', 'I\'m Prasanna Bajra Bajracharya and I\'m a software engineer.' ) ); ?></h2>
                        <p class="wow fadeInDown" data-wow-delay="0.6s"><?php echo esc_html( get_theme_mod( 'about_description_1', 'I am an experienced software engineer with a demonstrated history of working in the information technology & service industry. Skilled in SQL, Web applications, Window services, C# and .NET Framework. A strong engineering professional with a Bachelor’s degree in Computer Science and Information Technology, BSc. CSIT from Tribhuvan University, Nepal.' ) ); ?></p>
                        <p class="wow fadeInDown" data-wow-delay="0.6s"><?php echo esc_html( get_theme_mod( 'about_description_2', 'I am passionate about building excellent software that improves the lives of those around me. I specialize in creating software for clients ranging from individuals & small-businesses all the way to large enterprise corporations.' ) ); ?></p>
                        <p class="wow fadeInDown" data-wow-delay="0.6s"><?php echo esc_html( get_theme_mod( 'about_description_3', 'As a software engineer, I write code that conforms to industry standards & semantic best practices. I am able to transform static artwork into interactive and fully functional interfaces.' ) ); ?></p>
                        <a class="wow fadeInDown download-resume" data-wow-delay=".8s" href="<?php echo esc_url( get_theme_mod( 'resume_pdf_link', get_template_directory_uri() . '/assets/files/prasannabajracharya_resume.pdf' ) ); ?>" target="_blank">Download resume</a>
                    </div>
                    <!-- / END ABOUT TEXT AREA -->
                </div>
                <div class="col-md-6 col-sm-12 about-me-right">
                    <!-- START ABOUT TEXT AREA -->
                    <div class="about-right">
                        <ul class="wow fadeInUp" data-wow-delay="0.8s">
                            <?php
                            $about_list_items = explode( ',', get_theme_mod( 'about_list_items', 'Front-end development,Back-end development,Web Applications,Desktop Applications,Web Services,Window Services,Wordpress Website,Umbraco Website,DotNetNuke Website,Subrion Website,WooCommerce,Oracle,MySQL,SQL Server' ) );
                            foreach ( $about_list_items as $item ) {
                                echo '<li><i class="fa fa-angle-double-right"></i>' . esc_html( trim( $item ) ) . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <!-- / END ABOUT TEXT AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END ABOUT DESIGN AREA -->

    <!-- START SERVICES DESIGN AREA -->
    <section id="services" class="service-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2><?php echo esc_html( get_theme_mod( 'services_title', 'Services' ) ); ?></h2>
                        <p><?php echo esc_html( get_theme_mod( 'services_description', 'Let\'s build something amazing together' ) ); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $args = array(
                    'post_type'      => 'service',
                    'posts_per_page' => -1, // Display all services
                    'order'          => 'ASC',
                    'orderby'        => 'title',
                );
                $services_query = new WP_Query( $args );

                if ( $services_query->have_posts() ) :
                    while ( $services_query->have_posts() ) : $services_query->the_post();
                        $title = get_the_title();
                        $description = get_the_content();
                        $icon = get_post_meta( get_the_ID(), '_myportfolio_service_icon', true );
                        ?>
                        <!-- START SINGLE SERVICE DESIGN AREA -->
                        <div class="col-md-4 col-sm-6">
                            <div class="single-service wow fadeInUp" data-wow-delay="0.2s">
                                <i class="<?php echo esc_attr( $icon ); ?>"></i>
                                <h2><?php echo esc_html( $title ); ?></h2>
                                <p><?php echo esc_html( $description ); ?></p>
                            </div>
                        </div>
                        <!-- / END SINGLE SERVICE DESIGN AREA -->
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    // No services found
                endif;
                ?>
            </div>
            
        </div>
    </section>
    <!-- / END SERVICES DESIGN AREA -->

    <!-- START WORK DESIGN AREA -->
    <section id="work" class="work section-padding">
        <!--<div class="container-fluid">-->
        <div class="container">    
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2><?php echo esc_html( get_theme_mod( 'work_title', 'works' ) ); ?></h2>
                        <p><?php echo esc_html( get_theme_mod( 'work_description', 'Check out some projects I\'ve worked on.' ) ); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="work">
                    <li class="filter" data-filter="all">all</li>
                    <li class="filter" data-filter=".ebpearls">ebpearls</li>
					<li class="filter" data-filter=".aerion">aerion technologies</li>
                    <li class="filter" data-filter=".freelance">freelance</li>
                    <!--<li class="filter" data-filter=".photography">photography-->
                </ul>
            </div>
            <div class="work-inner">
                <div class="row work-posts grid">
                    <?php
                    $args = array(
                        'post_type'      => 'work',
                        'posts_per_page' => -1, // Display all work items
                        'order'          => 'ASC',
                        'orderby'        => 'title',
                    );
                    $work_query = new WP_Query( $args );

                    if ( $work_query->have_posts() ) :
                        while ( $work_query->have_posts() ) : $work_query->the_post();
                            $title = get_the_title();
                            $description = get_the_content();
                            $image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                            $category = get_post_meta( get_the_ID(), '_myportfolio_work_category', true );
                            ?>
                            <!-- START SINGLE WORK DESIGN AREA -->
                            <div class="col-md-4 col-sm-6 mix <?php echo esc_attr( $category ); ?>">
                                <div class="item">
                                    <a href="<?php echo esc_url( $image ); ?>" class="work-popup">
                                        <figure class="effect-bubba">
                                            <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>">
                                            <figcaption>
                                                <h2><?php echo esc_html( $title ); ?></h2>
                                                <p><?php echo esc_html( $description ); ?></p>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- END SINGLE WORK DESIGN AREA -->
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        // No work items found
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- / END WORK DESIGN AREA -->

    <!-- START TESTIMONIAL DESIGN AREA -->
    <section class="complete-project-area" data-stellar-background-ratio="0.2" id="testimonial">
        <div class="container">
                <div class="row">
                    <div class="testimonial-list">
                        <?php
                        $args = array(
                            'post_type'      => 'testimonial',
                            'posts_per_page' => -1, // Display all testimonials
                            'order'          => 'ASC',
                            'orderby'        => 'title',
                        );
                        $testimonials_query = new WP_Query( $args );

                        if ( $testimonials_query->have_posts() ) :
                            while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post();
                                $name = get_the_title();
                                $title = get_post_meta( get_the_ID(), '_myportfolio_testimonial_title', true );
                                $image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                                $description = get_the_content();
                                ?>
                                <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                                <div class="single-testimonial text-center">
                                    <?php if ( $image ) : ?>
                                        <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $name ); ?>">
                                    <?php endif; ?>
                                    <h2><?php echo esc_html( $name ); ?></h2>
                                    <?php if ( $title ) : ?>
                                        <h3><?php echo esc_html( $title ); ?></h3>
                                    <?php endif; ?>
                                    <p><?php echo esc_html( $description ); ?></p>
                                </div>
                                <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                            <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            // No testimonials found
                        endif;
                        ?>
                    </div>
                </div>
        </div>        
    </section>
    <!-- / END TESTIMONIAL DESIGN AREA -->

    <!-- START BLOG DESIGN AREA -->
    <section id="blog" class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Latest Blog Posts</h2>
                        <p>Read my latest thoughts and updates.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3, // Display 3 latest blog posts
                    'order'          => 'DESC',
                    'orderby'        => 'date',
                );
                $blog_query = new WP_Query( $args );

                if ( $blog_query->have_posts() ) :
                    while ( $blog_query->have_posts() ) : $blog_query->the_post();
                        ?>
                        <!-- START SINGLE BLOG POST -->
                        <div class="col-md-4 col-sm-6">
                            <div class="single-blog-post">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="blog-img">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
                                    </div>
                                <?php endif; ?>
                                <div class="blog-content">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <div class="blog-meta">
                                        <span><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></span>
                                        <span><i class="fa fa-user"></i> <?php the_author(); ?></span>
                                    </div>
                                    <p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- / END SINGLE BLOG POST -->
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <div class="col-md-12">
                        <p>No blog posts found.</p>
                    </div>
                <?php
                endif;
                ?>
            </div>
        </div>
    </section>
    <!-- / END BLOG DESIGN AREA -->

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        if (window.location.hash === "#blog") {
            setTimeout(function() {
                const element = document.getElementById("blog");
                if (element) {
                    element.scrollIntoView({
                        behavior: "smooth",
                        block: "start"
                    });
                }
            }, 100); // Small delay to ensure rendering is complete
        }
    });
</script>
<?php get_footer(); ?>