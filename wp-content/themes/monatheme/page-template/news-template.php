<?php

/**
 * Template name: Tin Tức 
 * @author : MONA.Media / Website
 */
get_header();
while (have_posts()) :
    the_post();

    $sc_1_group = get_field('sc_1_group');
    if (!empty($sc_1_group) || isset($sc_1_group)) {
        $image_1 = $sc_1_group['image_1'];
    }

    $sc_2_group = get_field('sc_2_group');
    if (!empty($sc_2_group) || isset($sc_2_group)) {
        $tieu_de_1 = $sc_2_group['tieu_de_1'];
        $tieu_de_2 = $sc_2_group['tieu_de_2'];
    }

    $sc_3_group = get_field('sc_3_group');
    if (!empty($sc_3_group) || isset($sc_3_group)) {
        $tieu_de_1_sc_3 = $sc_3_group['tieu_de_1'];
        $tieu_de_2_sc_3 = $sc_3_group['tieu_de_2'];
    }

?>
    <main class="main pt">
        <div class="banner-main">
            <div class="banner-main-img">

                <?php
                if (!empty($image_1) || isset($image_1)) {
                    echo wp_get_attachment_image($image_1, 'full');
                }
                ?>

            </div>

            <div class="banner-main-box">
                <div class="container">
                    <div class="banner-main-title">

                        <!-- Title -->
                        <?php echo get_the_title(); ?>

                    </div>
                    <?php get_template_part('searchform') ?>
                </div>
            </div>

            <div class="breadcrumbs other">
                <div class="container">

                    <!-- Breadcum -->
                    <?php get_template_part('partials/breadcrumb') ?>

                </div>
            </div>

            <div class="box-arrow">
                <div class="btn-arrow scroll-down">
                    <img src="<?php get_site_url(); ?>/template/assets/images/dbRight.svg" alt="" />
                </div>
            </div>
        </div>

        <div class="news-action pt-120 des-scroll" >
            <div class="container">
                <div class="title-note mb-4">

                    <?php
                    if (!empty($tieu_de_1) || isset($tieu_de_1)) {
                        echo $tieu_de_1;
                    }
                    ?>
                </div>

                <div class="title-main mb-40">

                    <?php
                    if (!empty($tieu_de_2) || isset($tieu_de_2)) {
                        echo $tieu_de_2;
                    }
                    ?>
                </div>

                <div class="news-action-list">

                    <!-- Post Tin Tức  -->
                    <?php

                    $count = 3;
                    $sel = $sc_2_group['select'];
                    $postList = $sc_2_group['relationship'];
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
                        while ($loop_project->have_posts()) :
                            $loop_project->the_post();
                            global $post;
                    ?>
                            <div class="news-action-item">
                                <div class="news-action-box">
                                    <a href="<?php echo get_the_permalink($post->ID); ?>" class="news-action-btn">
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>

                                <a href="<?php echo get_the_permalink($post->ID); ?>">
                                    <div class="news-action-img">
                                        <?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
                                    </div>
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

                    <?php
                        endwhile;
                    endif;
                    ?>

                </div>
            </div>
        </div>

        <div class="news-list pt-100">
            <div class="title-note mb-4">

                <?php
                if (!empty($tieu_de_1_sc_3) || isset($tieu_de_1_sc_3)) {
                    echo $tieu_de_1_sc_3;
                }
                ?>

            </div>

            <div class="title-main mb-40">

                <?php
                if (!empty($tieu_de_2_sc_3) || isset($tieu_de_2_sc_3)) {
                    echo $tieu_de_2_sc_3;
                }
                ?>

            </div>

            <div class="container">
                <div class="news-list-wrap d-wrap">

                    <?php
                    $count = 9;
                    $paged = max(1, get_query_var('paged'));
                    $offset = ($paged - 1) * $count;
                    $related_args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => $count,
                        'offset'         => $offset,
                        'paged'          => $paged,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field' => 'slug',
                                'terms' => 'chia-se-kien-thuc',
                            ),
                        ),
                    );

                    $related_posts = new WP_Query($related_args);
                    if ($related_posts->have_posts()) {
                        while ($related_posts->have_posts()) {
                            $related_posts->the_post();
                            global $post;
                            $post_title = $post->post_title;
                            $post_excerpt = $post->post_excerpt;
                            $post_author = get_the_author();
                            $post_url = get_permalink($post->ID);
                            $post_image = get_the_post_thumbnail($post->ID, 'full');
                            $post_date = get_the_date('d');
                            $post_month = get_the_date('m');
                    ?>

                            <div class="news-item d-3 d-item">
                                <div class="post-sl-item">
                                    <div class="post-sl-item-image">
                                        <div class="post-sl-item-img">
                                            <a href="<?php echo get_the_permalink($post->ID); ?>">
                                                <?php echo $post_image; ?>
                                            </a>
                                        </div>
                                        <div class="post-sl-item-time">
                                            <div class="post-sl-item-date"><?php echo $post_date; ?></div>
                                            <div class="post-sl-item-mon"><?php echo $post_month; ?></div>
                                        </div>
                                    </div>
                                    <div class="post-sl-item-box">
                                        <div class="detail-kh-des mb-18">
                                            <div class="detail-kh-des-item">
                                                <a href="<?php echo $post_url; ?>" class="detail-kh-des-ic">
                                                    <img src="<?php get_site_url(); ?>/template/assets/images/user 1.svg" alt="" />
                                                </a>
                                                <div class="detail-kh-des-text"><?php echo $post_author; ?></div>
                                            </div>
                                        </div>
                                        <a href="<?php echo $post_url; ?>" class="post-sl-item-title">
                                            <?php echo $post_title; ?>
                                        </a>
                                        <div class="post-sl-item-note">
                                            <?php echo $post_excerpt; ?>
                                        </div>
                                        <a href="<?php echo $post_url; ?>" class="post-sl-item-link">
                                            <span class="post-sl-item-link-ic">
                                                <i class="fas fa-chevron-circle-right"></i>
                                            </span>

                                            <span class="post-sl-item-link-text"> <?php _e('Đọc thêm', 'monamedia'); ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                        wp_reset_postdata();
                    }
                    ?>
                </div>

                <div class="prolist-bott flex flex-wrap flex-ai-center flex-jc-center mt-40">
                    <div class="paginations">
                        <ul class="page-numbers">
                            <?php mona_pagination_links($related_posts); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
endwhile;
get_footer();
