<?php get_header('event'); ?>
<section class="l_event">
    <div class="l-inner">
        <div class="l_event_content section_content">
            <p class="l_event_top_message">毎月イベント開催しておりますお気軽にお問い合わせください。</p>
            <ul class="event_content_card_items">
                <?php
                $args = array(
                    'post_type' => 'event', // カスタム投稿のスラッグ
                    //通常投稿の場合は、'post'、固定ページの場合は、'page'
                    'order' => 'rand', // ランダム、並び順
                    'posts_per_page' => 6, //最大投稿ページ数
                );
                $my_posts = get_posts($args);
                ?>
                <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
                    <li class="event_content_card_item">
                        <article>
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-thubnail01.jpg" alt="デフォルト画像" />
                                <?php endif; ?>
                                <div class="event_item_body">
                                    <!-- アイキャッチ画像表示 -->
                                    <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                                    <!-- イベントの日付 -->
                                    <h3 class="event_item_title"><?php the_title(); ?></h3>
                                    <!-- イベントのメッセージ -->
                                </div>
                            </a>
                        </article>
                    </li>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
            <?php get_template_part('template/paginate'); ?>
            <div class="l_single_post_cta_g">
                <a href="<?php echo esc_url(home_url('document')); ?>">資料請求をする</a>
                <a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせをする</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>