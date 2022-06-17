<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="<?php echo bloginfo('description') ?>">
    <?php wp_head(); ?>
</head>

<body>
    <header class="l_header">
        <div class="inner header_inner">
            <div class="header_content">
                <h1 class="header_logo">
                    <a href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/header/logo-area.svg" alt="ワンズホームのロゴ">
                    </a>
                </h1>
                <nav class="header_nav">
                    <ul class="header_nav_lists">
                        <li class="header_nav_list"><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
                        <li class="header_nav_list"><a href="<?php echo esc_url(home_url('home-info')); ?>">物件情報</a></li>
                        <li class="header_nav_list"><a href="<?php echo esc_url(home_url('/')); ?>#future">特徴</a></li>
                        <li class="header_nav_list"><a href="<?php echo esc_url(home_url('/')); ?>#staff">スタッフ紹介</a></li>
                        <li class="header_nav_list"><a href="<?php echo esc_url(home_url('event')); ?>">イベント情報</a></li>
                    </ul>
                    <div class="header_nav_bottom">
                        <a href="<?php echo esc_url(home_url('contact')); ?>" class="header_button">無料相談のご予約</a>
                        <ul class="header_nav_sns_lists">
                            <li class="header_nav_sns_list"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/sns/instagram.png" alt="instagram"></a></li>
                            <li class="header_nav_sns_list"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/sns/twitter.png" alt="twitter"></a></li>
                            <li class="header_nav_sns_list"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/sns/youtube.png" alt="youtube"></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="l_mv 
        <?php if (is_page('company')) : ?> l_company<?php endif; ?>
        <?php if (is_page('qa')) : ?> l_qa<?php endif; ?>
        <?php if (is_post_type_archive('event') || is_singular('event')) : ?> l_event<?php endif; ?>
        ">
        <h2 class="l_cate 
            <?php if (is_page('company')) : ?> l_company<?php endif; ?>
            <?php if (is_page('qa')) : ?> l_qa<?php endif; ?>
            <?php if (is_post_type_archive('event') || is_singular('event')) : ?> l_event<?php endif; ?>
            ">
            <?php if (is_page('company')) : ?> 会社概要<?php endif; ?>
            <?php if (is_page('qa')) : ?> よくある質問<?php endif; ?>
            <?php if ( is_post_type_archive('event') ||  is_singular('event')) : ?>イベント情報<?php endif; ?>
        </h2>
    </div>
    <!-- パンくずリストbreadcrumbs -->
    <div class="breadcrumb l-inner">
        <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
        ?>
    </div>
    <?php get_template_part('template/drawer');?>