<?php

/**
 * Template name: Đội Ngũ
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
        $tieu_de_1_1 = $sc_2_group['tieu_de_1'];
        $tieu_de_2 = $sc_2_group['tieu_de_2'];
        $rp_1 = $sc_2_group['rp_1'];
        $link = $sc_2_group['link'];
    }
?>
<main class="main pt">

    <div class="box-tt">
        <div class="box-tt-item"></div>
        <div class="box-tt-item"></div>

    </div>

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

                <!-- Breadcum -->
                <?php get_template_part('partials/breadcrumb') ?>

            </div>


        </div>

        <div class="box-arrow">
            <div class="btn-arrow scroll-down">
                <img src="<?php get_site_url(); ?>/template/assets/images/dbRight.svg" alt="">
            </div>
        </div>
    </div>

    <div class="our-team  mt-120 des-scroll" >
        <div class="container">
            <div class="title-note mb-4">

                <?php
                    if (!empty($tieu_de_1_1) || isset($tieu_de_1_1)) {
                        echo $tieu_de_1_1;
                    }
                    ?>

            </div>
            <div class="title-main mb-100">

                <?php
                    if (!empty($tieu_de_2) || isset($tieu_de_2)) {
                        echo $tieu_de_2;
                    }
                    ?>

            </div>
            <div class="our-team-list">

                <?php
                    $count = 1;
                    if (!empty($rp_1) || isset($rp_1)) {
                        foreach ($rp_1 as $item) {
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

            <button class="btn">
                <span class="btn-text">
                    <?php _e('Xem thêm', 'monamedia'); ?>
                </span>

                <span class="btn-ic">
                    <i class="fas fa-chevron-circle-right"></i>
                </span>
            </button>
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
                            <a href="<?php echo esc_url($link_1_global = get_field('link_1_global')); ?>"
                                class="box-qc-rt-btn">
                                <span class="box-qc-rt-btn-text">
                                    <?php _e('Khám phá thêm', 'monamedia'); ?>
                                </span>
                            </a>

                            <a href="<?php echo esc_url($link_2_global = get_field('link_2_global')); ?>"
                                class="box-qc-rt-btn">
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