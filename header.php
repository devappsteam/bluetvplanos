<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <?php wp_head(); ?>

    <title>BlueTv Planos</title>
</head>
<body <?php body_class(); ?>>
    <!-- Wrapper -->
    <div class="da-wrapper">
        <!-- Header -->
        <header class="da-header">
            <div class="da-navbar">
                <div class="container">
                    <div class="row align-item-center">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg">
                                <a href="#da_home" class="navbar-brand">
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
                                
                                <button class="navbar-toggler" type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#da_main_menu" 
                                    aria-controls="da_main_menu" 
                                    aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <div class="toggler-icon"></div>
                                    <div class="toggler-icon"></div>
                                    <div class="toggler-icon"></div>
                                </button>
                                <?php
                                    if(has_nav_menu('primary')){
                                        wp_nav_menu(array(
                                            'theme_location'    => 'primary',
                                            'container'         => 'div',
                                            'container_class'   => 'collapse navbar-collapse',
                                            'container_id'      => 'da_main_menu',
                                            'menu_class'        => 'navbar-nav ml-auto',
                                            'menu_id'           => 'da-nav',
                                            'fallback_cb'       => false,
                                        ));
                                    }
                                ?>
                                <div class="navbar-btn d-none d-sm-inline-block ml-5">
                                    <a href="#downloads" class="da-page-scroll da-btn-3" data-scroll-nav="0">
                                        Teste Grátis Por 7 Dias
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->