<?php

/**
 * The template for displaying header.
 *
 * @package MONA.Media / Website
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <!-- Meta
                ================================================== -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
        content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
    <?php wp_site_icon(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="stylesheet" href="<?php echo get_site_url() ?>/template/css/style.css">
    <link rel="stylesheet" href="<?php echo get_site_url() ?>/template/css/backdoor.css">
    <?php wp_head(); ?>
</head>
<?php
if (wp_is_mobile()) {
    $body = 'mobile-detect';
} else {
    $body = 'desktop-detect';
}
?>

<body <?php body_class($body); ?>>

    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrap">
                    <div class="header-top-lf">
                        <ul class="header-top-lf-list">

                            <?php
                            // Danh sách liên lạc
                            $danh_sach_lien_lac_header = mona_get_option('danh_sach_lien_lac_header');
                            if ($danh_sach_lien_lac_header) {
                                foreach ($danh_sach_lien_lac_header as $item) {
                            ?>

                            <li class="header-top-lf-item">
                                <a href="<?php echo esc_url($item['link_header']); ?>" class="header-top-lf-link">
                                    <span class="header-top-lf-ic">
                                        <!-- <i class="fas fa-envelope"></i> -->
                                        <?php
                                                if (!empty($item['icon_header']) || isset($item['icon_header'])) {
                                                    echo '<img class="fas fa-envelope" src="' . esc_url($item['icon_header']) . '" >';
                                                }
                                                ?>
                                    </span>

                                    <span class="header-top-lf-text">

                                        <?php
                                                if (!empty($item['noi_dung_header']) || isset($item['noi_dung_header'])) {
                                                    echo $item['noi_dung_header'];
                                                }
                                                ?>

                                    </span>
                                </a>


                            </li>

                            <?php
                                }
                            }
                            ?>

                        </ul>
                    </div>

                    <div class="header-top-rt">
                        <ul class="header-top-rt-list">

                            <?php
                            // Danh sách mạng xã hội
                            $ds_mxh = mona_get_option('danh_sach_mang_xa_hoi_header');
                            if ($ds_mxh) {
                                foreach ($ds_mxh as $item) {
                            ?>

                            <li class="header-top-rt-item">
                                <a href="<?php echo esc_url($item['link_header']); ?>" class="header-top-rt-link"
                                    target="_blank">
                                    <?php
                                            if (!empty($item['icon_header']) || isset($item['icon_header'])) {
                                                echo '<img src="' . esc_url($item['icon_header']) . '">';
                                            }
                                            ?>
                                </a>
                            </li>

                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrap">
                    <div class="header-nav">
                        <!-- main menu -->
                        <?php
                        wp_nav_menu(array(
                            'container' => false,
                            'container_class' => '',
                            'menu_class' => 'menu-list',
                            'theme_location' => 'primary-menu',
                            'walker' => new Mona_Walker_Nav_Menu,
                        ));
                        ?>

                        <div class="header-mobi btn-mobi">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>

                    <!-- main logo -->
                    <a href="<?php echo get_the_permalink(MONA_PAGE_HOME); ?>" class="header-logo">
                        <div class="header-logo-wrap">
                            <?php
                            $logo_id = get_theme_mod('custom_logo');
                            if ($logo_id) {
                                echo wp_get_attachment_image($logo_id, 'full');
                            }
                            ?>
                        </div>
                    </a>

                    <div class="header-nav">
                        <!-- main menu 2 -->
                        <?php
                        wp_nav_menu(array(
                            'container' => false,
                            'container_class' => '',
                            'menu_class' => 'menu-list',
                            'theme_location' => 'primary-menu-2',
                            'walker' => new Mona_Walker_Nav_Menu,
                        ));
                        ?>

                        <?php get_template_part('searchform_menu') ?>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <div class="menu-modal"></div>
    <div class="menu-mb">
        <div class="menu-mb-wrap">
            <!-- Mobile Menu -->
            <?php
            wp_nav_menu(array(
                'container' => false,
                'container_class' => '',
                'menu_class' => 'menu-list',
                'theme_location' => 'mobile-menu',
                'walker' => new Mona_Walker_Nav_Menu_Mobile,
            ));
            ?>

            <div class="menu-mxh">
                <div class="menu-lh-title">
                    <?php _e('Mạng Xã Hội', 'monamedia') ?>
                </div>
                <ul class="social-mb-list">
                    <?php
                    // Danh sách mạng xã hội
                    $ds_mxh = mona_get_option('danh_sach_mang_xa_hoi_header');
                    if ($ds_mxh) {
                        foreach ($ds_mxh as $item) {
                    ?>

                    <li class="social-mb-item">
                        <a href="<?php echo esc_url($item['link_header']); ?>" class="social-mb-link" target="_blank">
                            <?php
                                    if (!empty($item['icon_header']) || isset($item['icon_header'])) {
                                        echo '<img src="' . esc_url($item['icon_header']) . '">';
                                    }
                                    ?>
                        </a>
                    </li>

                    <?php
                        }
                    }
                    ?>
                </ul>
            </div>

            <div class="menu-lh">
                <div class="menu-lh-title">
                    <?php _e('Thông Tin Liên Hệ', 'monamedia') ?>
                </div>
                <ul class="list-address">

                    <?php
                    // Thông tin liên hệ 
                    $danh_sach_lien_he_header = mona_get_option('danh_sach_lien_he_header');
                    if ($danh_sach_lien_he_header) {
                        foreach ($danh_sach_lien_he_header as $item) {

                    ?>

                    <li class="item-address">
                        <span class="ic-address">

                            <?php
                                    if (!empty($item['icon'])) {
                                        echo '<img src="' . esc_url($item['icon']) .  '">';
                                    }
                                    ?>

                        </span>
                        <a href="<?php echo esc_url($item['link']); ?>" class="link-address">

                            <?php
                                    if (!empty($item['title'])) {
                                        echo $item['title'];
                                    }
                                    ?>

                        </a>
                    </li>

                    <?php
                        }
                    }
                    ?>

                </ul>
            </div>


        </div>
    </div>
    <div class="modal-search"></div>