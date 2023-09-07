<?php

/**
 * Template name: Trang chủ
 * @author : MONA.Media / Website
 */
get_header();
while (have_posts()) :
    the_post();

    $sc_1_group = get_field('sc_1_group');
    if (!empty($sc_1_group) || isset($sc_1_group)) {
        $rp_sc_1 = $sc_1_group['rp_sc_1'];
    }

    $sc_2_group = get_field('sc_2_group');
    if (!empty($sc_2_group) || isset($sc_2_group)) {
        $tieu_de_1_sc_2 = $sc_2_group['tieu_de_1_sc_2'];
        $tieu_de_2_sc_2 = $sc_2_group['tieu_de_2_sc_2'];
        $tieu_de_3_sc_2 = $sc_2_group['tieu_de_3_sc_2'];
        $mo_ta_sc_2 = $sc_2_group['mo_ta_sc_2'];
        $link_sc_2 = $sc_2_group['link_sc_2'];
        $hinh_anh_chu_ky_sc_2 = $sc_2_group['hinh_anh_chu_ky_sc_2'];
        $ho_ten_sc_2 = $sc_2_group['ho_ten_sc_2'];
        $chuc_vu_sc_2 = $sc_2_group['chuc_vu_sc_2'];
        $hinh_anh_nha_sang_lap_sc_2 = $sc_2_group['hinh_anh_nha_sang_lap_sc_2'];
    }

    $sc_3_group = get_field('sc_3_group');
    if (!empty($sc_3_group) || isset($sc_3_group)) {
        $tieu_de_1_sc_3 = $sc_3_group['tieu_de_1_sc_3'];
        $tieu_de_2_sc_3 = $sc_3_group['tieu_de_2_sc_3'];
        $mo_ta_sc_3 = $sc_3_group['mo_ta_sc_3'];
        $logo_sc_3 = $sc_3_group['logo_sc_3'];
        $rp_1_sc_3 = $sc_3_group['rp_1_sc_3'];
    }

    $sc_4_group = get_field('sc_4_group');
    if (!empty($sc_4_group) || isset($sc_4_group)) {
        $tieu_de_1_sc_4 = $sc_4_group['tieu_de_1_sc_4'];
        $tieu_de_2_sc_4 = $sc_4_group['tieu_de_2_sc_4'];
        $link_sc_4 = $sc_4_group['link_sc_4'];
    }

    $sc_5_group = get_field('sc_5_group');
    if (!empty($sc_5_group) || isset($sc_5_group)) {
        $tieu_de_1_sc_5 = $sc_5_group['tieu_de_1_sc_5'];
        $tieu_de_2_sc_5 = $sc_5_group['tieu_de_2_sc_5'];
        $mo_ta_sc_5 = $sc_5_group['mo_ta_sc_5'];
        $link_sc_5 = $sc_5_group['link_sc_5'];
        $rp_1_sc_5 = $sc_5_group['rp_1_sc_5'];
    }

    $sc_6_group = get_field('sc_6_group');
    if (!empty($sc_6_group) || isset($sc_6_group)) {
        $tieu_de_1_sc_6 = $sc_6_group['tieu_de_1_sc_6'];
        $tieu_de_2_sc_6 = $sc_6_group['tieu_de_2_sc_6'];
        $short_code_form_sc_6 = $sc_6_group['short_code_form_sc_6'];
        $tieu_de_3_sc_6 = $sc_6_group['tieu_de_3_sc_6'];
        $link_1_sc_6 = $sc_6_group['link_1_sc_6'];
        $tieu_de_4_sc_6 = $sc_6_group['tieu_de_4_sc_6'];
        $link_2_sc_6 = $sc_6_group['link_2_sc_6'];
        $hinh_anh_sc_6 = $sc_6_group['hinh_anh_sc_6'];
    }

    $sc_7_group = get_field('sc_7_group');
    if (!empty($sc_7_group) || isset($sc_7_group)) {
        $tieu_de_7_1 = $sc_7_group['tieu_de_1'];
        $tieu_de_7_2 = $sc_7_group['tieu_de_2'];
        $rp_7 = $sc_7_group['rp_7'];
        $link = $sc_7_group['link'];
    }

    $sc_8_group = get_field('sc_8_group');
    if (!empty($sc_8_group) || isset($sc_8_group)) {
        $tieu_de_1_sc_8 = $sc_8_group['tieu_de_1_sc_8'];
        $tieu_de_2_sc_8 = $sc_8_group['tieu_de_2_sc_8'];
        $rp_8 = $sc_8_group['rp_8'];
    }
?>

    <main class="main pt">
        <div class="banner-home mb-140">
            <div class="swiper mySwiperBannerHome">
                <div class="swiper-wrapper">

                    <?php
                    if ($rp_sc_1) {
                        foreach ($rp_sc_1 as $item) {
                            $hinh_anh_sc_1 = $item['hinh_anh_sc_1'];
                            $tieu_de_sc_1 = $item['tieu_de_sc_1'];
                            $tieu_de_2_sc_1 = $item['tieu_de_2_sc_1'];
                            $link_sc_1 = $item['link_sc_1'];

                    ?>
                            <div class="swiper-slide">
                                <div class="banner-home-item">
                                    <div class="banner-home-img">
                                        <?php
                                        if (!empty($hinh_anh_sc_1) || isset($hinh_anh_sc_1)) {
                                            echo wp_get_attachment_image($hinh_anh_sc_1, 'full');
                                        }
                                        ?>
                                    </div>
                                    <div class="banner-home-box">
                                        <div class="container">
                                            <div class="banner-home-box-content">
                                                <div class="banner-home-note">
                                                    <?php
                                                    if (!empty($tieu_de_sc_1) || isset($tieu_de_sc_1)) {
                                                        echo $tieu_de_sc_1;
                                                    }
                                                    ?>
                                                </div>

                                                <div class="banner-home-title">
                                                    <?php
                                                    if (!empty($tieu_de_2_sc_1) || isset($tieu_de_2_sc_1)) {
                                                        echo $tieu_de_2_sc_1;
                                                    }
                                                    ?>
                                                </div>

                                                <a href="<?php echo esc_url($link_sc_1); ?>" class="btn">
                                                    <span class="btn-text"> <?php _e('Xem Chi Tiết', 'monamedia') ?></span>

                                                    <span class="btn-ic">
                                                        <i class="fas fa-chevron-circle-right"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
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

            <div class="box-arrow">
                <div class="btn-arrow">
                    <img src="<?php get_site_url(); ?>/template/assets/images/dbRight.svg" alt="" />
                </div>
            </div>
        </div>

        <div class="home-kh" id="courses">
            <div class="container">
                <div class="title-note mb-4" data-aos="fade-down">

                    <?php
                    if (!empty($tieu_de_1_sc_5) || isset($tieu_de_1_sc_5)) {
                        echo $tieu_de_1_sc_5;
                    }
                    ?>

                </div>

                <div class="title-main mb-40" data-aos="fade-up">

                    <?php
                    if (!empty($tieu_de_2_sc_5) || isset($tieu_de_2_sc_5)) {
                        echo $tieu_de_2_sc_5;
                    }
                    ?>

                </div>

                <div class="home-kh-wrap" data-aos="zoom-in">
                    <div class="home-kh-wrap-list d-wrap">
                        <div class="home-kh-lf d-item">
                            <div class="home-kh-lf-wrap">
                                <div class="home-kh-lf-top d-wrap">
                                    <div class="swiper mySwiperLfTop">
                                        <div class="swiper-wrapper">

                                            <?php
                                            if ($rp_1_sc_5) {
                                                foreach ($rp_1_sc_5 as $item) {
                                                    $tieu_de_1_rp_1_sc_5 = $item['tieu_de_1_rp_1_sc_5'];
                                                    $mo_ta_rp_1_sc_5 = $item['mo_ta_rp_1_sc_5'];


                                            ?>
                                                    <div class="swiper-slide d-item">
                                                        <div class="home-kh-lf-top-item">
                                                            <div class="home-kh-lf-top-title">

                                                                <?php
                                                                if (!empty($tieu_de_1_rp_1_sc_5) || isset($tieu_de_1_rp_1_sc_5)) {
                                                                    echo $tieu_de_1_rp_1_sc_5;
                                                                }
                                                                ?>

                                                            </div>

                                                            <div class="home-kh-lf-top-text">

                                                                <?php
                                                                if (!empty($mo_ta_rp_1_sc_5) || isset($mo_ta_rp_1_sc_5)) {
                                                                    echo $mo_ta_rp_1_sc_5;
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
                                </div>

                                <div class="home-kh-lf-bottom">
                                    <div class="home-kh-lf-bottom-list">
                                        <?php
                                        if ($rp_1_sc_5) {
                                            $count = 0;
                                            foreach ($rp_1_sc_5 as $item) {
                                                $tieu_de_2_rp_1_sc_5 = $item['tieu_de_2_rp_1_sc_5'];
                                        ?>

                                                <div class="home-kh-lf-bottom-item <?php if ($count == 0) {
                                                                                        echo 'actived';
                                                                                    } ?>">

                                                    <?php
                                                    if (!empty($tieu_de_2_rp_1_sc_5) || isset($tieu_de_2_rp_1_sc_5)) {
                                                        echo $tieu_de_2_rp_1_sc_5;
                                                    }
                                                    ?>

                                                </div>

                                        <?php
                                                $count++;
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>

                                <div class="home-kh-lf-pagi">
                                    <div class="home-kh-lf-pagi-num top">
                                        <?php
                                        if (!empty($count)) {
                                            _e('01', 'monamedia');
                                        }
                                        _e('', 'monamedia');
                                        ?>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="home-kh-lf-pagi-num bottom">
                                        <?php
                                        if (!empty($count)) {
                                            echo '0' . $count;
                                        }
                                        _e('', 'monamedia');
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="home-kh-rt d-item">
                            <div class="home-kh-rt-top">
                                <div class="home-kh-rt-wrap">
                                    <div class="home-kh-rt-text">

                                        <?php
                                        $mo_ta_sc_5 = $sc_5_group['mo_ta_sc_5'];
                                        if (!empty($mo_ta_sc_5) || isset($mo_ta_sc_5)) {
                                            echo $mo_ta_sc_5;
                                        }
                                        ?>

                                    </div>

                                    <a href="<?php echo esc_url($link_sc_5); ?>" class="btn">
                                        <span class="btn-text"> <?php _e('Xem tất cả ', 'monamedia'); ?></span>

                                        <span class="btn-ic">
                                            <i class="fas fa-chevron-circle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="home-kh-rt-bottom">
                                <div class="home-kh-wrap-sl-list">
                                    <div class="swiper mySwiperHomeKhSl">
                                        <div class="swiper-wrapper">

                                            <?php
                                            if ($rp_1_sc_5) {
                                                foreach ($rp_1_sc_5 as $item) {
                                                    $tieu_de_3_rp_1_sc_5 = $item['tieu_de_3_rp_1_sc_5'];
                                                    $link_rp_1_sc_5 = $item['link_rp_1_sc_5'];
                                                    $hinh_anh_rp_1_sc_5 = $item['hinh_anh_rp_1_sc_5'];
                                            ?>

                                                    <div class="swiper-slide d-item">
                                                        <div class="home-kh-wrap-sl-item">
                                                            <div class="home-kh-wrap-sl-img">

                                                                <?php
                                                                if (!empty($hinh_anh_rp_1_sc_5) || isset($hinh_anh_rp_1_sc_5)) {
                                                                    echo wp_get_attachment_image($hinh_anh_rp_1_sc_5, 'full');
                                                                }
                                                                ?>

                                                            </div>
                                                            <div class="home-kh-wrap-sl-box">
                                                                <div class="home-kh-wrap-sl-title">

                                                                    <?php
                                                                    if (!empty($tieu_de_3_rp_1_sc_5) || isset($tieu_de_3_rp_1_sc_5)) {
                                                                        echo $tieu_de_3_rp_1_sc_5;
                                                                    }
                                                                    ?>

                                                                </div>

                                                                <a href="<?php echo esc_url($link_rp_1_sc_5); ?>" class="btn">
                                                                    <span class="btn-text">
                                                                        <?php _e('Xem chi tiết', 'monamedia'); ?></span>

                                                                    <span class="btn-ic">
                                                                        <i class="fas fa-chevron-circle-right"></i>
                                                                    </span>
                                                                </a>
                                                            </div>
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
                    </div>
                </div>
            </div>
        </div>

        <div class="home-about pb-36" id="about">
            <div class="container">
                <div class="title-note mb-4" data-aos="fade-down">
                    <?php
                    if (!empty($tieu_de_1_sc_2) || isset($tieu_de_1_sc_2)) {
                        echo $tieu_de_1_sc_2;
                    }
                    ?>
                </div>

                <div class="title-main mb-40" data-aos="fade-up">
                    <?php
                    if (!empty($tieu_de_2_sc_2) || isset($tieu_de_2_sc_2)) {
                        echo $tieu_de_2_sc_2;
                    }
                    ?>
                </div>

                <div class="home-about-wrap d-wrap">
                    <div class="home-about-lf d-item d-2" data-aos="fade-right">
                        <div class="home-about-lf-content">
                            <div class="home-about-title">

                                <?php
                                if (!empty($tieu_de_3_sc_2) || isset($tieu_de_3_sc_2)) {
                                    echo $tieu_de_3_sc_2;
                                }
                                ?>

                            </div>

                            <div class="home-about-text">

                                <?php
                                if (!empty($mo_ta_sc_2) || isset($mo_ta_sc_2)) {
                                    echo $mo_ta_sc_2;
                                }
                                ?>

                            </div>

                            <div class="home-about-box">
                                <a href="<?php echo esc_url($link_sc_2); ?>" class="btn">
                                    <span class="btn-text"> <?php _e('Xem chi tiết', 'monamedia') ?> </span>

                                    <span class="btn-ic">
                                        <i class="fas fa-chevron-circle-right"></i>
                                    </span>
                                </a>

                                <div class="home-about-wr">
                                    <div class="home-about-wr-img">

                                        <?php
                                        if (!empty($hinh_anh_chu_ky_sc_2) || isset($hinh_anh_chu_ky_sc_2)) {
                                            echo wp_get_attachment_image($hinh_anh_chu_ky_sc_2, 'full');
                                        }
                                        ?>

                                    </div>
                                    <div class="home-about-wr-name">
                                        <?php
                                        if (!empty($ho_ten_sc_2) || isset($ho_ten_sc_2)) {
                                            echo $ho_ten_sc_2;
                                        }
                                        ?>
                                    </div>
                                    <div class="home-about-wr-pos">
                                        <?php
                                        if (!empty($chuc_vu_sc_2) || isset($chuc_vu_sc_2)) {
                                            echo $chuc_vu_sc_2;
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="home-about-rt d-item d-2" data-aos="fade-left">
                        <div class="home-about-rt-content">
                            <div class="home-about-rt-wrap">
                                <div class="home-about-rt-img">

                                    <?php
                                    if (!empty($hinh_anh_nha_sang_lap_sc_2) || isset($hinh_anh_nha_sang_lap_sc_2)) {
                                        echo wp_get_attachment_image($hinh_anh_nha_sang_lap_sc_2, 'full');
                                    }
                                    ?>

                                </div>
                            </div>

                            <div class="home-about-rt-box">
                                <div class="home-about-rt-name">
                                    <?php
                                    if (!empty($ho_ten_sc_2) || isset($ho_ten_sc_2)) {
                                        echo $ho_ten_sc_2;
                                    }
                                    ?>
                                </div>

                                <div class="home-about-rt-pos">
                                    <?php
                                    if (!empty($chuc_vu_sc_2) || isset($chuc_vu_sc_2)) {
                                        echo $chuc_vu_sc_2;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-people home">
            <div class="container">
                <div class="title-note mb-4" data-aos="fade-down">
                    <?php
                    if (!empty($tieu_de_7_1) || isset($tieu_de_7_1)) {
                        echo $tieu_de_7_1;
                    }
                    ?>

                </div>
                <div class="title-main mb-100" data-aos="fade-up">

                    <?php
                    if (!empty($tieu_de_7_2) || isset($tieu_de_7_2)) {
                        echo $tieu_de_7_2;
                    }
                    ?>

                </div>
                <div class="our-team-list" data-aos="fade-in">

                    <?php
                    $count = 1;
                    if (!empty($rp_7) || isset($rp_7)) {
                        foreach ($rp_7 as $item) {
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

                <a href="<?php echo esc_url($link); ?>" class="btn" data-aos="fade-up">
                    <span class="btn-text">
                        <?php _e('Xem thêm', 'monamedia'); ?>
                    </span>

                    <span class="btn-ic">
                        <i class="fas fa-chevron-circle-right"></i>
                    </span>
                </a>
            </div>
        </div>

        <div class="home-reason" id="reason">
            <div class="container">
                <div class="title-note mb-4" data-aos="fade-down">

                    <?php
                    if (!empty($tieu_de_1_sc_3) || isset($tieu_de_1_sc_3)) {
                        echo $tieu_de_1_sc_3;
                    }
                    ?>

                </div>

                <div class="title-main mb-40" data-aos="fade-up">

                    <?php
                    if (!empty($tieu_de_2_sc_3) || isset($tieu_de_2_sc_3)) {
                        echo $tieu_de_2_sc_3;
                    }
                    ?>

                </div>

                <div class="home-reason-note" data-aos="zoom-in">

                    <?php
                    if (!empty($mo_ta_sc_3) || isset($mo_ta_sc_3)) {
                        echo $mo_ta_sc_3;
                    }
                    ?>

                </div>

                <div class="home-reason-box" data-aos="zoom-out">
                    <div class="home-reason-logo">

                        <?php
                        if (!empty($logo_sc_3) || isset($logo_sc_3)) {
                            echo wp_get_attachment_image($logo_sc_3, 'full');
                        }
                        ?>

                    </div>

                    <div class="home-reason-nua">
                        <img src="<?php get_site_url(); ?>/template/assets/images/reaseanua.png" alt="" />
                    </div>

                    <div class="home-reason-list">
                        <?php
                        if (!empty($rp_1_sc_3) || isset($rp_1_sc_3)) {
                            foreach ($rp_1_sc_3 as $item) {
                                $logo_rp_1_sc_3 = $item['logo_rp_1_sc_3'];
                                $background_rp_1_sc_3 = $item['background_rp_1_sc_3'];
                                $line_rp_1_sc_3 = $item['line_rp_1_sc_3'];
                                $mo_ta_rp_1_sc_3 = $item['mo_ta_rp_1_sc_3'];
                        ?>

                                <div class="home-reason-item">
                                    <div class="home-reason-item-box">
                                        <div class="home-reason-item-ic">

                                            <?php
                                            if (!empty($logo_rp_1_sc_3) || isset($logo_rp_1_sc_3)) {
                                                echo wp_get_attachment_image($logo_rp_1_sc_3, 'full');
                                            }
                                            ?>

                                        </div>
                                        <div class="home-reason-item-img">

                                            <?php
                                            if (!empty($background_rp_1_sc_3) || isset($background_rp_1_sc_3)) {
                                                echo wp_get_attachment_image($background_rp_1_sc_3, 'full');
                                            }
                                            ?>

                                        </div>
                                    </div>
                                    <div class="home-reason-item-content">
                                        <div class="home-reason-item-line">

                                            <?php
                                            if (!empty($line_rp_1_sc_3) || isset($line_rp_1_sc_3)) {
                                                echo wp_get_attachment_image($line_rp_1_sc_3, 'full');
                                            }
                                            ?>

                                        </div>
                                        <div class="home-reason-item-text">

                                            <?php
                                            if (!empty($mo_ta_rp_1_sc_3) || isset($mo_ta_rp_1_sc_3)) {
                                                echo $mo_ta_rp_1_sc_3;
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

                <div class="home-reason-sl d-wrap free-slide">
                    <div class="swiper mySwiper --auto">
                        <div class="swiper-wrapper">

                            <?php
                            if (!empty($rp_1_sc_3) || isset($rp_1_sc_3)) {
                                foreach ($rp_1_sc_3 as $item) {
                                    $logo_rp_1_sc_3 = $item['logo_rp_1_sc_3'];
                                    $mo_ta_rp_1_sc_3 = $item['mo_ta_rp_1_sc_3'];
                            ?>

                                    <div class="swiper-slide d-item d-3">
                                        <div class="home-reason-sl-item">
                                            <div class="home-reason-sl-img">
                                                <?php
                                                if (!empty($logo_rp_1_sc_3) || isset($logo_rp_1_sc_3)) {
                                                    echo wp_get_attachment_image($logo_rp_1_sc_3, 'full');
                                                }
                                                ?>
                                            </div>

                                            <div class="home-reason-sl-text">

                                                <?php
                                                if (!empty($mo_ta_rp_1_sc_3) || isset($mo_ta_rp_1_sc_3)) {
                                                    echo $mo_ta_rp_1_sc_3;
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


        <?php
        $count = -1;
        $sel = $sc_4_group['select'];
        $postList = $sc_4_group['relationship'];
        $arg_project = [
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => $count,
            'tax_query' => [
                'relation' => 'AND',
            ],
        ];
        if ($sel == '2') {
            $arg_project['orderby'] = 'post__in';
            $arg_project['post__in'] = $postList;
        } else {
            $arg_project['order'] = 'desc';
        }
        $loop_project = new WP_Query($arg_project);
        if ($loop_project->have_posts()) :
        ?>

            <div class="home-news pb-80" id="news">
                <div class="container">
                    <div class="title-note mb-4" data-aos="fade-down">

                        <?php
                        if (!empty($tieu_de_1_sc_4) || isset($tieu_de_1_sc_4)) {
                            echo $tieu_de_1_sc_4;
                        }
                        ?>

                    </div>

                    <div class="title-main mb-40" data-aos="fade-up">

                        <?php
                        if (!empty($tieu_de_2_sc_4) || isset($tieu_de_2_sc_4)) {
                            echo $tieu_de_2_sc_4;
                        }
                        ?>

                    </div>
                </div>
                <div class="home-news-sl d-wrap" data-aos="fade-out">
                    <div class="swiper mySwiperHomeNews">
                        <div class="swiper-wrapper">
                            <?php
                            while ($loop_project->have_posts()) :
                                $loop_project->the_post();
                                global $post;
                            ?>

                                <div class="swiper-slide d-item">
                                    <div class="news-action-item">
                                        <div href="" class="news-action-box">
                                            <a href="<?php echo get_the_permalink($post->ID); ?>" class="news-action-btn">
                                                <i class="fal fa-arrow-right"></i>
                                            </a>
                                        </div>

                                        <a href="<?php echo get_the_permalink($post->ID); ?>" class="news-action-img">
                                            <?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
                                            <!-- <img src="<?php get_site_url(); ?>/template/assets/images/newspng.png" alt="" /> -->
                                        </a>

                                        <div class="news-action-content">
                                            <div class="detail-kh-des while mb-16">
                                                <div class="detail-kh-des-item">
                                                    <div class="detail-kh-des-ic">
                                                        <img src="<?php get_site_url(); ?>/template/assets/images/calendar.svg" alt="" />
                                                    </div>
                                                    <div class="detail-kh-des-text">
                                                        <?php echo date('d/m/Y', strtotime($post->post_date)); ?>
                                                    </div>
                                                </div>

                                                <div class="detail-kh-des-item">
                                                    <div class="detail-kh-des-ic">
                                                        <img src="<?php get_site_url(); ?>/template/assets/images/user 1.svg" alt="" />
                                                    </div>
                                                    <div class="detail-kh-des-text">
                                                        <?php echo $post_author = get_the_author(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="<?php echo get_the_permalink($post->ID); ?>" class="news-action-title">
                                                <?php echo $post->post_title; ?>
                                            </a>

                                            <div class="news-action-note">
                                                <?php echo $post->post_excerpt; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <?php
                            endwhile;
                        endif;
                        ?>

                        </div>
                    </div>
                    <div class="box-navi2">
                    <div class="btn-navi2 prev">
                        <i class="fal fa-chevron-left"></i>
                    </div>

                    <div class="btn-navi2 next">
                        <i class="fal fa-chevron-right"></i>
                    </div>
                </div>
                </div>

                <a href="<?php echo esc_url($link_sc_4); ?>" class="btn" data-aos="fade-up">
                    <span class="btn-text"> <?php _e('Xem tất cả', 'monamedia'); ?> </span>

                    <span class="btn-ic">
                        <i class="fas fa-chevron-circle-right"></i>
                    </span>
                </a>
            </div>

            <div class="home-fb">
                <div class="container">
                    <div class="title-note mb-4" data-aos="fade-down">

                        <?php
                        if (!empty($tieu_de_1_sc_8) || isset($tieu_de_1_sc_8)) {
                            echo $tieu_de_1_sc_8;
                        }
                        ?>

                    </div>

                    <div class="title-main mb-60" data-aos="fade-up">

                        <?php
                        if (!empty($tieu_de_2_sc_8) || isset($tieu_de_2_sc_8)) {
                            echo $tieu_de_2_sc_8;
                        }
                        ?>

                    </div>

                    <div class="voice-about-con d-wrap">
                        <div class="voice-about-left d-item d-2" data-aos="fade-right">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <?php
                                    if (!empty($rp_8) || isset($rp_8)) {
                                        foreach ($rp_8 as $item) {
                                            $hinh_anh = $item['hinh_anh'];

                                    ?>

                                            <div class="swiper-slide">
                                                <div class="voice-about-img">

                                                    <?php
                                                    if (!empty($hinh_anh) || isset($hinh_anh)) {
                                                        echo wp_get_attachment_image($hinh_anh, 'full');
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
                        <div class="voice-about-right d-item d-2" data-aos="fade-left">
                            <div class="voice-about-right-con d-wrap">
                                <div class="swiper mySwiper2">
                                    <div class="swiper-wrapper">

                                        <?php
                                        if (!empty($rp_8) || isset($rp_8)) {
                                            foreach ($rp_8 as $item) {
                                                $ho_ten = $item['ho_ten'];
                                                $noi_sinh_song = $item['noi_sinh_song'];
                                                $phan_hoi = $item['phan_hoi'];

                                        ?>

                                                <div class="swiper-slide d-item">
                                                    <div class="item-voice">
                                                        <div class="dau-phay">
                                                            <img src="<?php get_site_url(); ?>/template/assets/images/quotePlay.svg" alt="">
                                                        </div>
                                                        <div class="content-voice">
                                                            <p>
                                                                <?php
                                                                if (!empty($phan_hoi) || isset($phan_hoi)) {
                                                                    echo $phan_hoi;
                                                                }
                                                                ?>
                                                            </p>
                                                        </div>
                                                        <div class="name-voice">
                                                            <p class="name-voice-title">

                                                                <?php
                                                                if (!empty($ho_ten) || isset($ho_ten)) {
                                                                    echo $ho_ten;
                                                                }
                                                                ?>

                                                            </p>
                                                            <p class="name-voice-text">

                                                                <?php
                                                                if (!empty($noi_sinh_song) || isset($noi_sinh_song)) {
                                                                    echo $noi_sinh_song;
                                                                }
                                                                ?>

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                        <?php
                                            }
                                        }
                                        ?>
                                        \
                                    </div>
                                </div>
                            </div>
                            <div class="box-navi">
                                <div class="btn-navi btn-prev-voice">
                                    <i class="fas fa-angle-left"></i>
                                </div>
                                <div class="btn-navi btn-next-voice">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="form-main">
                <div class="container">
                    <div class="form-main-wrap d-wrap">
                        <div class="form-main-lf d-item" data-aos="fade-right">
                            <div class="form-main-lf-wrap">
                                <div class="title-note mb-4" >

                                    <?php
                                    if (!empty($tieu_de_1_sc_6) || isset($tieu_de_1_sc_6)) {
                                        echo $tieu_de_1_sc_6;
                                    }
                                    ?>

                                </div>

                                <div class="title-main mb-60">

                                    <?php
                                    if (!empty($tieu_de_2_sc_6) || isset($tieu_de_2_sc_6)) {
                                        echo $tieu_de_2_sc_6;
                                    }
                                    ?>

                                </div>

                                <?php
                                if (!empty($short_code_form_sc_6) || isset($short_code_form_sc_6)) {
                                    echo do_shortcode($short_code_form_sc_6);
                                }
                                ?>

                            </div>
                        </div>

                        <div class="form-main-rt d-item" data-aos="fade-left">
                            <div class="form-main-rt-wrap">
                                <div class="form-main-rt-content">
                                    <div class="box-qc-rt-wrap">
                                        <div class="box-qc-rt-img">
                                            <?php
                                            if (!empty($hinh_anh_sc_6) || isset($hinh_anh_sc_6)) {
                                                echo wp_get_attachment_image($hinh_anh_sc_6, 'full');
                                            }
                                            ?>
                                        </div>

                                        <div class="box-qc-rt-box">
                                            <a href="<?php echo esc_url($link_1_sc_6); ?>" class="box-qc-rt-btn">
                                                <span class="box-qc-rt-btn-text">
                                                    <?php
                                                    if (!empty($tieu_de_3_sc_6) || isset($tieu_de_3_sc_6)) {
                                                        echo $tieu_de_3_sc_6;
                                                    }
                                                    ?>
                                                </span>
                                            </a>

                                            <a href="<?php echo esc_url($link_2_sc_6); ?>" class="box-qc-rt-btn">
                                                <span class="box-qc-rt-btn-text">
                                                    <?php
                                                    if (!empty($tieu_de_4_sc_6) || isset($tieu_de_4_sc_6)) {
                                                        echo $tieu_de_4_sc_6;
                                                    }
                                                    ?>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="box-qc-rt-list">
                                            <div class="box-qc-rt-item">
                                                <img src="<?php get_site_url(); ?>/template/assets/images/ic1.svg" alt="" />
                                            </div>

                                            <div class="box-qc-rt-item">
                                                <img src="<?php get_site_url(); ?>/template/assets/images/ic2.svg" alt="" />
                                            </div>

                                            <div class="box-qc-rt-item">
                                                <img src="<?php get_site_url(); ?>/template/assets/images/ic3.svg" alt="" />
                                            </div>

                                            <div class="box-qc-rt-item">
                                                <img src="<?php get_site_url(); ?>/template/assets/images/ic4.svg" alt="" />
                                            </div>
                                        </div>
                                    </div>
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
