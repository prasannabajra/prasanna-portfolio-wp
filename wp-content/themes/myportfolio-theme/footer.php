</header>
    <!-- / END HOMEPAGE DESIGN AREA -->

    <!-- START FOOTER DESIGN AREA -->
    <footer class="footer-area section-padding" style="background: #FFFFFF" id="footer">
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2><?php echo esc_html( get_theme_mod( 'contact_title', 'contact me' ) ); ?></h2>
                                <p><?php echo esc_html( get_theme_mod( 'contact_description', 'Reach out and send me a friendly hello.' ) ); ?></p>
                            </div>
                        </div>
                    </div>          
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-contact-info wow fadeInUp" data-wow-delay="0.2s" style="background: #FAFAFA">
                        <i class="fa fa-map-marker"></i>
                        <h2>Location<!--Visit my Office--></h2>
                        <p><?php echo esc_html( get_theme_mod( 'contact_location', 'Kathmandu, Nepal' ) ); ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-contact-info wow fadeInUp" data-wow-delay="0.4s" style="background: #FAFAFA">
                        <i class="fa fa-mobile"></i>
                        <h2>Call me</h2>
                        <p><?php echo esc_html( get_theme_mod( 'contact_phone', '+977-9841658101.' ) ); ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-contact-info wow fadeInUp" data-wow-delay="0.6s" style="background: #FAFAFA">
                        <i class="fa fa-clock-o"></i>
                        <h2>work hour</h2>
                        <p><?php echo esc_html( get_theme_mod( 'contact_work_hour', 'Sunday to Friday' ) ); ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-contact-info wow fadeInUp" data-wow-delay="0.8s" style="background: #FAFAFA">
                        <i class="fa fa-envelope-open"></i>
                        <h2>Email me</h2>
                        <p><?php echo esc_html( get_theme_mod( 'contact_email', 'prasbuzz15@gmail.com' ) ); ?></p>
                    </div>
                </div>
            </div>
            <!--
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="footer-text">
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>    
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved | Design : Nista Template</p>

                    </div>
                </div>
            </div>-->
        </div>
    </footer>
    <!-- / END CONTACT DETAILS DESIGN AREA -->

    <!-- START FOOTER DESIGN AREA -->
    <footer class="footer-area section-padding main-footer-area" id="mainfooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="footer-text">
                        <div class="social-links">
                            <ul>
                                <li><a href="<?php echo esc_url( get_theme_mod( 'facebook_link', 'https://www.facebook.com/happy.buzz' ) ); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo esc_url( get_theme_mod( 'linkedin_link', 'https://www.linkedin.com/in/prasanna-bajra-bajracharya-01974162' ) ); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>    
                                <li><a href="<?php echo esc_url( get_theme_mod( 'instagram_link', 'https://www.instagram.com/prasannabuzz' ) ); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <!--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
                            </ul>
                        </div>
                        <p>&copy; <?php echo date('Y'); ?> <?php echo esc_html( get_theme_mod( 'footer_copyright_text', 'Prasanna Bajra Bajracharya. All rights reserved | Design : Nista Template' ) ); ?></p>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / END CONTACT DETAILS DESIGN AREA -->    

    <?php wp_footer(); ?>
</body>
</html>