<?php

/**
 * Template name: Khóa Học
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
        $tieu_de_2 = $sc_2_group['tieu_de_2'];
        $mo_ta = $sc_2_group['mo_ta'];
    }

    $sc_3_group = get_field('sc_3_group');
    if (!empty($sc_3_group) || isset($sc_3_group)) {
        $tieu_de_3_1 = $sc_3_group['tieu_de_1'];
        $tieu_de_3_2 = $sc_3_group['tieu_de_2'];
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

                        <!-- KHOÁ HỌC Ở KLC -->
                        <?php
                        if (!empty($tieu_de_1) || isset($tieu_de_1)) {
                            echo $tieu_de_1;
                        }
                        ?>

                    </div>
                    <?php get_template_part('searchform') ?>
                </div>

            </div>

            <div class="breadcrumbs other">
                <div class="container">
                    <!-- Breadcumb  -->
                    <?php get_template_part('partials/breadcrumb'); ?>
                </div>
            </div>

            <div class="box-arrow">
                <div class="btn-arrow scroll-down">
                    <img src="<?php get_site_url(); ?>/template/assets/images/dbRight.svg" alt="">
                </div>
            </div>

        </div>
        <div class="kh-wrap-sl mt-120 mb-90 des-scroll" >
            <div class="container-2">
                <div class="title-note mb-4">

                    <?php
                    if (!empty($tieu_de_2_1) || isset($tieu_de_2_1)) {
                        echo $tieu_de_2_1;
                    }
                    ?>

                </div>
                <div class="title-main mb-24">

                    <?php
                    if (!empty($tieu_de_2) || isset($tieu_de_2)) {
                        echo $tieu_de_2;
                    }
                    ?>

                </div>

                <div class="kh-wrap-sl-note">

                    <?php
                    if (!empty($mo_ta) || isset($mo_ta)) {
                        echo $mo_ta;
                    }
                    ?>

                </div>

                <div class="kh-wrap-sl-list d-wrap free-slide">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">

                            <?php
                            $count = -1;
                            $sel = $sc_2_group['select'];
                            $postList = $sc_2_group['relationship'];
                            $arg_project = [
                                'post_type' => 'mona_course',
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
                                $count = 0;
                                while ($loop_project->have_posts()) :
                                    $loop_project->the_post();
                                    global $post;
                            ?>

                                    <div class="swiper-slide d-4 d-item">
                                        <div class="kh-wrap-sl-item">
                                            <a href="<?php echo get_the_permalink($post->ID); ?>" class="kh-wrap-sl-img">
                                                <?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
                                            </a>
                                            <div class="kh-wrap-sl-content">
                                                <a href="<?php echo get_the_permalink($post->ID); ?>" class="kh-wrap-sl-title">
                                                    <?php echo $post->post_title; ?>
                                                </a>

                                                <div class="kh-wrap-sl-text">
                                                    <?php echo $post->post_excerpt; ?>
                                                </div>

                                                <a href="<?php echo get_the_permalink($post->ID); ?>" class="btn">
                                                    <span class="btn-text">
                                                        <?php _e('Xem chi tiết', 'monamedia'); ?>
                                                    </span>

                                                    <span class="btn-ic">
                                                        <i class="fas fa-chevron-circle-right"></i>
                                                    </span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>

                            <?php
                                    $count++;
                                endwhile;
                            endif;
                            ?>

                        </div>
                    </div>

                    <?php
                    if ($count > 4) {
                    ?>

                        <div class="box-navi">
                            <div class="btn-navi prev">
                                <i class="far fa-arrow-left"></i>
                            </div>

                            <div class="btn-navi next">
                                <i class="far fa-arrow-right"></i>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="kh-wait mb-40">
            <div class="container">
                <div class="title-note mb-4">

                    <?php
                    if (!empty($tieu_de_3_1) || isset($tieu_de_3_1)) {
                        echo $tieu_de_3_1;
                    }
                    ?>

                </div>
                <div class="title-main mb-40">

                    <?php
                    if (!empty($tieu_de_3_2) || isset($tieu_de_3_2)) {
                        echo $tieu_de_3_2;
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
                                            $post_url = get_permalink($post->ID);
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
