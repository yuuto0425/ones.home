<?php get_header('index'); ?>

<main class="main">
    <!-- カテゴリーページごとのカテゴリー名を表示 -->
    <section class="l_cate_wrapper">
        <div class="l-inner">
            <h3 class="l_cate_title">
                <?php single_cat_title(); ?>の物件情報</h3>
            <ul class="l_cate_items">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <li class="l_cate_item">
                            <article>
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-thubnail01.jpg" alt="デフォルト画像">
                                    <?php endif; ?>
                                    <!-- アイキャッチ画像表示 -->
                                    <div class="l_home_info_body_top">
                                        <p class="l_home_info_price">家賃:月3万2千円</p>
                                        <p class="l_home_info_time">〇〇駅から徒歩〇〇分</p>
                                    </div>
                                    <div class="l_home_info_body_bottom">
                                        <p class="l_home_info_city">〇〇市</p>
                                    </div>
                                </a>
                            </article>
                        </li>
                <?php endwhile;
                endif; ?>
            </ul>
            <?php get_template_part('template/paginate');?>
        </div>
    </section>
    <?php get_template_part('template/document_link');?>
</main>
<?php get_sidebar()?>
<?php get_footer(); ?>