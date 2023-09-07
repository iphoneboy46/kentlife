<div class="header-search">
    <form method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
        <div class="header-search-ic btn-search">
            <img src="<?php echo get_site_url() ?>/template/assets/images//icsearch.svg" alt="">
        </div>

        <div class="header-search-ic btn-search-exit">
            <i class="far fa-times"></i>
        </div>

        <div class="header-search-ip">
            <input type="search" class="search-field" name="s" value="<?php echo get_search_query(); ?>" id="s" placeholder="<?php echo esc_attr_x('Tìm kiếm bài viết', 'placeholder', 'monamedia'); ?>" />
            <div class="header-search-btn">
                <button type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>