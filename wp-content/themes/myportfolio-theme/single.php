<?php get_header(); ?>

<div class="container section-padding">
    <div class="row">
        <div class="col-md-12">
            
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    ?>
                    <article id="blog-post-content" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                            <div class="entry-meta">
                                <span><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></span>
                                <span><i class="fa fa-user"></i> <?php the_author(); ?></span>
                            </div>
                        </header>

                        <div class="entry-content">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="post-thumbnail">
                                    <?php the_post_thumbnail( 'large' ); ?>
                                </div>
                            <?php endif; ?>
                            <?php the_content(); ?>
                        </div>

                        <footer class="entry-footer">
                            <?php
                                wp_link_pages( array(
                                    'before' => '<div class="page-links">' . __( 'Pages:', 'myportfolio' ),
                                    'after'  => '</div>',
                                ) );
                            ?>
                        </footer>
                    </article>
                    <?php
                endwhile;
            else :
                ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'myportfolio' ); ?></p>
                <?php
            endif;
            ?>

            <!-- START RECENT POSTS SECTION -->
            <div class="recent-posts-section" style="margin-top: 50px;">
                <h3>More Blog Posts</h3>
                <div class="row">
                    <?php
                    $current_post_id = get_the_ID();
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 3, // Display 3 recent posts
                        'order'          => 'DESC',
                        'orderby'        => 'date',
                        'post__not_in'   => array( $current_post_id ), // Exclude current post
                    );
                    $recent_posts_query = new WP_Query( $args );

                    if ( $recent_posts_query->have_posts() ) :
                        while ( $recent_posts_query->have_posts() ) : $recent_posts_query->the_post();
                            ?>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        ?>
                        <div class="col-md-12">
                            <p>No other recent posts found.</p>
                        </div>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
            <!-- / END RECENT POSTS SECTION -->

        </div>
    </div>
</div>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            const element = document.getElementById("blog-post-content");
            if (element) {
                element.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            }
        }, 100); // Small delay to ensure rendering is complete
    });
</script>
<?php get_footer(); ?>
<?php get_footer(); ?>