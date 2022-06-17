<?php get_header('index'); ?>
<main class="main">
    <!-- カテゴリーページごとのカテゴリー名を表示 -->
    <section class="l_cate_wrapper">
        <div class="l-inner">
            <h3 class="l_cate_title">
                人気の物件情報</h3>
            <ul class="l_cate_items">
                <?php
                $args = array(
                    'post_type' => 'post', // カスタム投稿のスラッグ
                    //通常投稿の場合は、'post'、固定ページの場合は、'page'
                    'order' => 'rand', // ランダム、並び順
                    'posts_per_page' => 6, //最大投稿ページ数
                );
                $my_posts = get_posts($args);
                ?>
                <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
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
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
            <?php get_template_part('template/paginate'); ?>
        </div>
    </section>
    <div class="l_cate_document_cta l-inner">
        <a href="<?php echo esc_url(home_url('document')); ?>">資料請求はこちら</a>
        <p class="l_cate_document_cta_message">※資料請求の申請ページに飛びます。</p>
    </div>
</main>
<?php get_sidebar()?>
<?php get_footer(); ?>