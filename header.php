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
    <header class="header">
        <div class="inner header_inner">
            <div class="header_content">
                <h1 class="header_logo">
                    <a href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/header/logo-area.svg" alt="ワンズホームのロゴ">
                    </a>
                </h1>
                <nav class="header_nav">
                    <ul class="header_nav_lists">
                        <li class="header_nav_list"><a href="">ホーム</a></li>
                        <li class="header_nav_list"><a href="">物件情報</a></li>
                        <li class="header_nav_list"><a href="">特徴</a></li>
                        <li class="header_nav_list"><a href="">スタッフ紹介</a></li>
                        <li class="header_nav_list"><a href="">イベント情報</a></li>
                    </ul>
                    <div class="header_nav_bottom">
                        <a href="" class="header_button">無料相談のご予約</a>
                        <ul class="header_nav_sns_lists">
                            <li class="header_nav_sns_list"><a href=""><img src="<?php echo get_template_directory_uri();?>/img/sns/instagram.png" alt="instagram"></a></li>
                            <li class="header_nav_sns_list"><a href=""><img src="<?php echo get_template_directory_uri();?>/img/sns/twitter.png" alt="twitter"></a></li>
                            <li class="header_nav_sns_list"><a href=""><img src="<?php echo get_template_directory_uri();?>/img/sns/youtube.png" alt="youtube"></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>