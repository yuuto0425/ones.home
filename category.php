<?php get_header('index'); ?>
<!-- パンくずリストbreadcrumbs -->
<div class="breadcrumb l-inner">
    <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
    ?>
</div>
<main class="main">
    <h3 class="l_cate_title">
        <?php single_cat_title(); ?>
        の物件情報</h3>
    <!-- カテゴリーページごとのカテゴリー名を表示 -->
    <section class="l_cate_wrapper">
        <ul class="l_cate_items">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <li class="l_cate_item">
                        <article>
                            <a href="<?php the_permalink(); ?>">

                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                <?php else : ?>
                                    <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
                                <?php endif; ?>
                                <!-- アイキャッチ画像表示 -->

                            </a>
                        </article>
                    </li>
            <?php endwhile;
            endif; ?>
        </ul>
    </section>
</main>
<?php get_footer(); ?>