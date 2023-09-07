<?php

/**
 * Template name: Về Chúng Tôi
 * @author : MONA.Media / Website
 */
get_header();
while (have_posts()) :
    the_post();

    $sc_1_group = get_field('sc_1_group');
    if (!empty($sc_1_group) || isset($sc_1_group)) {
        $tieu_de_1 = $sc_1_group['tieu_de_1'];
        $banner_1 = $sc_1_group['banner_1'];
    }

    $sc_2_group = get_field('sc_2_group');
    if (!empty($sc_2_group) || isset($sc_2_group)) {
        $tieu_de_2_1 = $sc_2_group['tieu_de_1'];
        $tieu_de_2_2 = $sc_2_group['tieu_de_2'];
        $mo_ta_2 = $sc_2_group['mo_ta_2'];
        $rp_2_1 = $sc_2_group['rp_1'];
        $rp_2_2 = $sc_2_group['rp_2'];
    }

    $sc_3_group = get_field('sc_3_group');
    if (!empty($sc_3_group) || isset($sc_3_group)) {
        $tieu_de_3_1 = $sc_3_group['tieu_de_1'];
        $tieu_de_3_2 = $sc_3_group['tieu_de_2'];
        $rp_3 = $sc_3_group['rp_3'];
    }

    $sc_4_group = get_field('sc_4_group');
    if (!empty($sc_4_group) || isset($sc_4_group)) {
        $tieu_de_4_1 = $sc_4_group['tieu_de_1'];
        $tieu_de_4_2 = $sc_4_group['tieu_de_2'];
        $tam_nhin = $sc_4_group['tam_nhin'];
        $su_menh = $sc_4_group['su_menh'];
    }

    $sc_5_group = get_field('sc_5_group');
    if (!empty($sc_5_group) || isset($sc_5_group)) {
        $tieu_de_5_1 = $sc_5_group['tieu_de_1'];
        $tieu_de_5_2 = $sc_5_group['tieu_de_2'];
        $rp_5 = $sc_5_group['rp_5'];
        $link = $sc_5_group['link'];
    }

    $sc_6_group = get_field('sc_6_group');
    if (!empty($sc_6_group) || isset($sc_6_group)) {
        $tieu_de_1_sc_6 = $sc_6_group['tieu_de_1_sc_6'];
        $tieu_de_2_sc_6 = $sc_6_group['tieu_de_2_sc_6'];
        $link_sc_6 = $sc_6_group['link_sc_6'];
    }

    $sc_7_group = get_field('sc_7_group');
    if (!empty($sc_7_group) || isset($sc_7_group)) {
        $banner_sc_7 = $sc_7_group['banner_sc_7'];
        $tieu_de_1_sc_7 = $sc_7_group['tieu_de_1_sc_7'];
        $link_sc_7 = $sc_7_group['link_sc_7'];
        $hieu_ung_chu_sc_7 = $sc_7_group['hieu_ung_chu_sc_7'];
    }

?>

    <main class="main pt">
        <div class="banner-main">
            <div class="banner-main-img">

                <?php
                if (!empty($banner_1) || isset($banner_1)) {
                    echo wp_get_attachment_image($banner_1, 'full');
                }
                ?>

            </div>


            <div class="banner-main-box">
                <div class="container">
                    <div class="banner-main-title">

                        <?php
                        if (!empty($tieu_de_1) || isset($tieu_de_1)) {
                            echo $tieu_de_1;
                        }
                        ?>

                    </div>
                </div>

            </div>

            <div class="breadcrumbs other not-search">
                <div class="container">

                    <!-- Share Post  -->
                    <?php get_template_part('partials/breadcrumb') ?>

                </div>


            </div>

            <div class="box-arrow">
                <div class="btn-arrow">
                    <img src="<?php get_site_url(); ?>/template/assets/images/dbRight.svg" alt="">
                </div>
            </div>
        </div>

        <div class="about-edu pt-100">
            <div class="container">
                <div class="about-edu-wrap d-wrap">
                    <div class="about-edu-lf d-item">
                        <div class="about-edu-lf-content">
                            <div class="title-note mb-4">

                                <?php
                                if (!empty($tieu_de_2_1) || isset($tieu_de_2_1)) {
                                    echo $tieu_de_2_1;
                                }
                                ?>

                            </div>
                            <div class="title-main mb-30">

                                <?php
                                if (!empty($tieu_de_2_2) || isset($tieu_de_2_2)) {
                                    echo $tieu_de_2_2;
                                }

                                ?>

                            </div>
                        </div>

                        <div class="about-edu-lf-text">

                            <?php
                            if (!empty($mo_ta_2) || isset($mo_ta_2)) {
                                echo $mo_ta_2;
                            }
                            ?>

                        </div>

                        <div class="about-edu-lf-list">
                            <?php
                            if (!empty($rp_2_1) || isset($rp_2_1)) {
                                foreach ($rp_2_1 as $item) {
                                    $mo_ta_rp_1 = $item['mo_ta_rp_1'];
                            ?>
                                    <div class="about-edu-lf-item">

                                        <?php
                                        if (!empty($mo_ta_rp_1) || isset($mo_ta_rp_1)) {
                                            echo $mo_ta_rp_1;
                                        }
                                        ?>

                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>

                    <div class="about-edu-rt d-item">
                        <div class="about-edu-rt-list d-wrap">
                            <?php
                            if (!empty($rp_2_2) || isset($rp_2_2)) {
                                foreach ($rp_2_2 as $item) {
                                    $hinh_anh_rp_2 = $item['hinh_anh_rp_2'];
                            ?>
                                    <div class="about-edu-rt-item d-3 d-item">
                                        <div class="about-edu-rt-img">

                                            <?php
                                            if (!empty($hinh_anh_rp_2) || isset($hinh_anh_rp_2)) {
                                                echo wp_get_attachment_image($hinh_anh_rp_2, 'full');
                                            }
                                            ?>

                                        </div>
                                    </div>

                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-pt">
            <div class="container">
                <div class="title-note mb-4">
                    <?php
                    if (!empty($tieu_de_3_1) || isset($tieu_de_3_1)) {
                        echo $tieu_de_3_1;
                    }
                    ?>

                </div>
                <div class="title-main mb-0">

                    <?php
                    if (!empty($tieu_de_3_2) || isset($tieu_de_3_2)) {
                        echo $tieu_de_3_2;
                    }
                    ?>

                </div>
                <div class="about-pt-list">

                    <?php
                    if (!empty($rp_3) || isset($rp_3)) {
                        foreach ($rp_3 as $item) {
                            $nam_rp_3 = $item['nam_rp_3'];
                            $mo_ta_rp_3 = $item['mo_ta_rp_3'];
                    ?>

                            <div class="about-pt-item">
                                <div class="about-pt-item-box">
                                    <div class="about-pt-item-num">

                                        <?php
                                        if (!empty($nam_rp_3) || isset($nam_rp_3)) {
                                            echo $nam_rp_3;
                                        }
                                        ?>

                                    </div>
                                </div>
                                <div class="about-pt-item-line"></div>
                                <div class="about-pt-item-text">

                                    <?php
                                    if (!empty($mo_ta_rp_3) || isset($mo_ta_rp_3)) {
                                        echo $mo_ta_rp_3;
                                    }
                                    ?>

                                </div>
                            </div>

                    <?php
                        }
                    }
                    ?>

                </div>


                <div class="about-pt-list-mb d-wrap free-slide">
                    <div class="swiper mySwiper --auto">
                        <div class="swiper-wrapper">

                            <?php
                            if (!empty($rp_3) || isset($rp_3)) {
                                foreach ($rp_3 as $item) {
                                    $nam_rp_3 = $item['nam_rp_3'];
                                    $mo_ta_rp_3 = $item['mo_ta_rp_3'];
                            ?>

                                    <div class="swiper-slide d-item d-3">
                                        <div class="about-pt-item-mb">
                                            <div class="about-pt-item-mb-num">

                                                <?php
                                                if (!empty($nam_rp_3) || isset($nam_rp_3)) {
                                                    echo $nam_rp_3;
                                                }
                                                ?>

                                            </div>
                                            <div class="about-pt-item-mb-text">

                                                <?php
                                                if (!empty($mo_ta_rp_3) || isset($mo_ta_rp_3)) {
                                                    echo $mo_ta_rp_3;
                                                }
                                                ?>

                                            </div>
                                        </div>
                                    </div>

                            <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <div class="about-video">
            <div class="about-video-img">
                <?php
                if (!empty($banner_sc_7) || isset($banner_sc_7)) {
                    echo wp_get_attachment_image($banner_sc_7, 'full');
                }
                ?>

            </div>

            <div class="about-video-wrap">
                <div class="container">
                    <div class="about-video-wrap-content">
                        <div class="about-video-title">

                            <?php
                            if (!empty($tieu_de_1_sc_7) || isset($tieu_de_1_sc_7)) {
                                echo $tieu_de_1_sc_7;
                            }
                            ?>

                        </div>

                        <a href="<?php echo esc_url($link_sc_7); ?>" class="about-video-btn vdsec-play">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>

                </div>

            </div>


        </div>
        <div class="about-run mb-50">
            <marquee behavior="alternate" direction="left" scrollamount="20" loop="true">
                <div class="about-run-list">

                    <?php
                    if (!empty($hieu_ung_chu_sc_7) || isset($hieu_ung_chu_sc_7)) {
                        $end = 10;
                        for ($i = 1; $i <= $end; $i++) {
                    ?>

                            <div class="about-run-item">
                                <?php echo $hieu_ung_chu_sc_7; ?>
                            </div>

                    <?php
                        }
                    }
                    ?>

                </div>
            </marquee>
        </div>

        <div class="about-see pt-50">
            <div class="container">
                <div class="title-note mb-4">

                    <?php
                    if (!empty($tieu_de_4_1) || isset($tieu_de_4_1)) {
                        echo $tieu_de_4_1;
                    }
                    ?>

                </div>
                <div class="title-main mb-60">

                    <?php
                    if (!empty($tieu_de_4_2) || isset($tieu_de_4_2)) {
                        echo $tieu_de_4_2;
                    }
                    ?>

                </div>

                <div class="about-see-list">
                    <div class="about-see-wrap d-wrap">
                        <div class="about-see-lf d-item">
                            <div class="about-see-lf-content">
                                <div class="about-see-lf-box">
                                    <div class="about-see-lf-img">

                                        <?php
                                        if (!empty($tam_nhin) || isset($tam_nhin)) {
                                            echo wp_get_attachment_image($hinh_anh = $tam_nhin['hinh_anh'], 'full');
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="about-see-rt d-item">
                            <div class="about-see-rt-content">
                                <div class="about-see-rt-tt">

                                    <?php
                                    if (!empty($tam_nhin) || isset($tam_nhin)) {
                                        echo $tieu_de_tam_nhin_2 = $tam_nhin['tieu_de_tam_nhin_2'];
                                    }
                                    ?>

                                </div>
                                <div class="about-see-rt-note">
                                    <?php
                                    if (!empty($tam_nhin) || isset($tam_nhin)) {
                                        echo $tieu_de_tam_nhin_2 = $tam_nhin['tieu_de_tam_nhin_2'];
                                    }
                                    ?>

                                </div>

                                <div class="about-see-rt-title">
                                    <?php
                                    if (!empty($tam_nhin) || isset($tam_nhin)) {
                                        echo $tieu_de_tam_nhin_1 = $tam_nhin['tieu_de_tam_nhin_1'];
                                    }
                                    ?>

                                </div>

                                <div class="about-see-rt-text">

                                    <?php
                                    if (!empty($tam_nhin) || isset($tam_nhin)) {
                                        echo $mo_ta_tam_nhin = $tam_nhin['mo_ta_tam_nhin'];
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="about-see-wrap d-wrap">
                        <div class="about-see-lf d-item">
                            <div class="about-see-lf-content">
                                <div class="about-see-lf-box">
                                    <div class="about-see-lf-img">

                                        <?php
                                        if (!empty($su_menh) || isset($su_menh)) {
                                            echo wp_get_attachment_image($hinh_anh = $su_menh['hinh_anh'], 'full');
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="about-see-rt d-item">
                            <div class="about-see-rt-content">
                                <div class="about-see-rt-tt">

                                    <?php
                                    if (!empty($su_menh) || isset($su_menh)) {
                                        echo $tieu_de_su_menh_2 = $su_menh['tieu_de_su_menh_2'];
                                    }
                                    ?>

                                </div>
                                <div class="about-see-rt-note">

                                    <?php
                                    if (!empty($su_menh) || isset($su_menh)) {
                                        echo $tieu_de_su_menh_2 = $su_menh['tieu_de_su_menh_2'];
                                    }
                                    ?>

                                </div>

                                <div class="about-see-rt-title">

                                    <?php
                                    if (!empty($su_menh) || isset($su_menh)) {
                                        echo $tieu_de_su_menh_1 = $su_menh['tieu_de_su_menh_1'];
                                    }
                                    ?>

                                </div>

                                <div class="about-see-rt-text">

                                    <?php
                                    if (!empty($su_menh) || isset($su_menh)) {
                                        echo $mo_ta_su_menh = $su_menh['mo_ta_su_menh'];
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="about-people">
            <div class="container">
                <div class="title-note mb-4">

                    <?php
                    if (!empty($tieu_de_5_1) || isset($tieu_de_5_1)) {
                        echo $tieu_de_5_1;
                    }
                    ?>

                </div>
                <div class="title-main mb-100">

                    <?php
                    if (!empty($tieu_de_5_2) || isset($tieu_de_5_2)) {
                        echo $tieu_de_5_2;
                    }
                    ?>

                </div>
                <div class="our-team-list">

                    <?php
                    $count = 1;
                    if (!empty($rp_5) || isset($rp_5)) {
                        foreach ($rp_5 as $item) {
                            $ho_ten = $item['ho_ten'];
                            $linh_vuc = $item['linh_vuc'];
                            $mo_ta = $item['mo_ta'];
                            $image = $item['image'];
                    ?>

                            <div class="our-team-item">
                                <div class="our-team-box d-wrap">
                                    <div class="our-team-item-num">
                                        <?php echo $count; ?>
                                    </div>
                                    <div class="our-team-item-arrow">
                                        <img src="<?php get_site_url(); ?>/template/assets/images/ArrowTeam.svg" alt="">
                                    </div>
                                    <div class="our-team-item-lf d-item d-2">
                                        <div class="our-team-item-lf-content">
                                            <div class="our-team-item-lf-name">

                                                <?php
                                                if (!empty($ho_ten) || isset($ho_ten)) {
                                                    echo $ho_ten;
                                                }
                                                ?>

                                            </div>
                                            <div class="our-team-item-lf-pos">

                                                <?php
                                                if (!empty($linh_vuc) || isset($linh_vuc)) {
                                                    echo $linh_vuc;
                                                }
                                                ?>

                                            </div>
                                            <div class="our-team-item-lf-text">

                                                <?php
                                                if (!empty($mo_ta) || isset($mo_ta)) {
                                                    echo $mo_ta;
                                                }
                                                ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="our-team-item-rt d-item d-2">
                                        <div class="our-team-item-rt-icon">
                                            <div class="our-team-item-rt-ic">
                                                <img src="<?php get_site_url(); ?>/template/assets/images/contactic1.svg" alt="">
                                            </div>
                                            <div class="our-team-item-rt-ic">
                                                <img src="<?php get_site_url(); ?>/template/assets/images/contactic1.svg" alt="">
                                            </div>
                                        </div>

                                        <div class="our-team-item-rt-wrap">
                                            <div class="our-team-item-rt-img">
                                                <div class="inner">

                                                    <?php
                                                    if (!empty($image) || isset($image)) {
                                                        echo wp_get_attachment_image($image, 'full');
                                                    }
                                                    ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <?php
                            $count++;
                        }
                    }
                    ?>

                </div>

                <a href="<?php echo esc_url($link); ?>" class="btn">
                    <span class="btn-text">
                        <?php _e('Xem thêm', 'monamedia'); ?>
                    </span>

                    <span class="btn-ic">
                        <i class="fas fa-chevron-circle-right"></i>
                    </span>
                </a>
            </div>
        </div>

        <div class="about-wait pb-40">
            <div class="kh-wait">
                <div class="container">
                    <div class="title-note mb-4">

                        <?php
                        if (!empty($tieu_de_1_sc_6) || isset($tieu_de_1_sc_6)) {
                            echo $tieu_de_1_sc_6;
                        }
                        ?>

                    </div>
                    <div class="title-main mb-40">

                        <?php
                        if (!empty($tieu_de_2_sc_6) || isset($tieu_de_2_sc_6)) {
                            echo $tieu_de_2_sc_6;
                        }
                        ?>

                    </div>


                    <div class="kh-wait-tabs d-wrap list-tabs-btn free-slide">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">

                                <?php
                                //Display all tax in course
                                $taxonomy = 'category_course';
                                $terms = get_terms(array(
                                    'taxonomy' => $taxonomy,
                                    'hide_empty' => false,
                                ));
                                if ($terms) {
                                    foreach ($terms as $key => $term) {
                                ?>

                                        <div class="swiper-slide d-item d-4">
                                            <div class="kh-wait-tab item-tabs-btn <?php if ($key == 0) {
                                                                                        echo 'actived';
                                                                                    } ?>">
                                                <?php echo $term->name; ?>
                                            </div>
                                        </div>

                                <?php
                                    }
                                }
                                ?>

                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <div class="kh-wait-list list-tabs-content">

                        <?php
                        if (!empty($terms) && !is_wp_error($terms)) {
                            foreach ($terms as $key => $term) {
                                $term_id = $term->term_id;
                                $term_name = $term->name;

                                $count = -1;

                                $related_args = array(
                                    'post_type' => 'mona_course',
                                    'post_status' => 'publish',
                                    'posts_per_page' => $count,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'category_course',
                                            'field' => 'term_id',
                                            'terms' => $term_id,
                                        ),
                                    ),
                                );

                                $related_posts = new WP_Query($related_args);
                        ?>

                                <div class="kh-wait-item item-tabs-content <?php if ($key == 0) {
                                                                                echo 'actived';
                                                                            } ?>">
                                    <div class="kh-wait-header">
                                        <div class="kh-wait-header-item">
                                            <?php _e('Tên khoá học', 'monamedia'); ?>
                                        </div>

                                        <div class="kh-wait-header-item">
                                            <?php _e('Ngày khai giảng', 'monamedia'); ?>
                                        </div>

                                        <div class="kh-wait-header-item">
                                            <?php _e('Đặt khoá học', 'monamedia'); ?>
                                        </div>
                                    </div>
                                    <div class="kh-wait-content">

                                        <?php
                                        if ($related_posts->have_posts()) {
                                            while ($related_posts->have_posts()) {
                                                $related_posts->the_post();
                                                global $post;
                                                $post_title = $post->post_title;
                                                $date = get_field('date');
                                                $post_url = $post->guid;
                                                $post_image = get_the_post_thumbnail($post->ID, 'full');
                                        ?>

                                                <div class="kh-wait-content-item">
                                                    <div class="kh-wait-content-title" data-label="Tên khoá học">

                                                        <?php echo $post_title; ?>

                                                    </div>


                                                    <div class="kh-wait-content-date" data-label="Ngày khai giảng">

                                                        <?php
                                                        if (!empty($date) || isset($date)) {
                                                            echo $date;
                                                        }
                                                        ?>

                                                    </div>

                                                    <div class="kh-wait-content-btn" data-label="Đặt khoá học">
                                                        <a href="<?php echo $post_url; ?>" class="btn">
                                                            <span class="btn-text">
                                                                <?php _e('Xem chi tiết', 'monamedia'); ?>
                                                            </span>

                                                            <span class="btn-ic">
                                                                <i class="fas fa-chevron-circle-right"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>

                                        <?php
                                            }
                                            wp_reset_postdata();
                                        }
                                        ?>

                                    </div>
                                </div>

                        <?php
                            }
                            wp_reset_postdata();
                        }
                        ?>

                    </div>
                    <a href="<?php echo esc_url($link_sc_6); ?>" class="btn">
                        <span class="btn-text">
                            <?php _e('Xem thêm', 'monamedia'); ?>
                        </span>

                        <span class="btn-ic">
                            <i class="fas fa-chevron-circle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <div class="box-qc">
            <div class="container">
                <div class="box-qc-wrap d-wrap">
                    <div class="box-plane">
                        <div class="box-plane-item">
                            <div class="box-plane-img">
                                <img src="<?php get_site_url(); ?>/template/assets/images/mb1-2.png" alt="">
                            </div>
                        </div>

                        <div class="box-plane-item">
                            <div class="box-plane-img">
                                <img src="<?php get_site_url(); ?>/template/assets/images/mb2-2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="box-qc-lf d-item">
                        <div class="box-qc-lf-content">
                            <div class="box-qc-lf-title">

                                <?php echo $title_1_global = get_field('tieu_de_1_global'); ?>

                            </div>

                            <div class="box-qc-lf-text">

                                <?php echo $tieu_de_2_global = get_field('tieu_de_2_global'); ?>

                            </div>
                        </div>
                    </div>

                    <div class="box-qc-rt d-item">
                        <div class="box-qc-rt-wrap">
                            <div class="box-qc-rt-img">

                                <?php
                                $hinh_anh_global = get_field('hinh_anh_global');
                                echo wp_get_attachment_image($hinh_anh_global, 'full');
                                ?>

                            </div>

                            <div class="box-qc-rt-box">
                                <a href="<?php echo esc_url($link_1_global = get_field('link_1_global')); ?>" class="box-qc-rt-btn">
                                    <span class="box-qc-rt-btn-text">
                                        <?php _e('Khám phá thêm', 'monamedia'); ?>
                                    </span>
                                </a>

                                <a href="<?php echo esc_url($link_2_global = get_field('link_2_global')); ?>" class="box-qc-rt-btn">
                                    <span class="box-qc-rt-btn-text">
                                        <?php _e('Liên hệ ngay', 'monamedia'); ?>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
<?php
endwhile;
get_footer();
