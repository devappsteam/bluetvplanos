<footer id="da_footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="wow fadeInUp" data-wow-delay=".2s">
                            <a href="#da_home">
                                <?php
                                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                    if(has_custom_logo()){
                                        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                                    }else{
                                        echo '<img src="' . get_template_directory_uri() . '/assets/images/logo.png" alt="' . get_bloginfo('name') . '">';
                                    }
                                ?>
                            </a>
                            <p class="wow fadeInUp" data-wow-delay=".4s">
                                &copy; BlueTV Planos 2021
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- End Wrapper -->

    <!-- Scripts -->
    <?php wp_footer(); ?>
</body>
</html>