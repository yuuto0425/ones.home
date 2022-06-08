<?php get_header(); ?>
<main class="main">
    <div class="hero_mv">
        <video class="video" id='video' autoplay muted playsinline loop></video>
        <p class="hero_mv_message">犬・猫などペットが可能な物件をたくさん<br>
            ご用意しております。</p>
    </div>
    <section class="home_info js-page-position">
        <div class="home_info_inner inner">
            <div class="home_info_content section_content">
                <h2 class="home_info_title section_title">物件情報</h2>
                <div class="home_info_cate_wrapper">
                    <div class="home_info_cate_left">
                        <div class="home_info_cate_left_map">
                            <h3 class="home_info_cate_left_map_title">エリアで探す</h3>
                            <?php
                            $args = array(
                                'order' => 'ASC',
                                'orderby' => 'id',
                                'parent' => 4,
                            );
                            $categories = get_categories($args);
                            ?>
                            <?php foreach ($categories as $category) : ?>
                                <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="home_info_cate_right">
                        <div class="home_info_cate_right_wrap">
                            <div class="home_info_cate_right_price">
                                <h3 class="home_info_cate_right_price_title">家賃の価格から探す</h3>
                                <div class="home_info_cate_right_price_btn">
                                    <?php
                                    $args = array(
                                        'order' => 'ASC',
                                        'orderby' => 'id',
                                        'parent' => 1,
                                    );
                                    $categories = get_categories($args);
                                    ?>
                                    <?php foreach ($categories as $category) : ?>
                                        <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?><span>万円</span></a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="home_info_cate_right_type">
                                <h3 class="home_info_cate_right_type_title">建物の種別から探す</h3>
                                <div class="home_info_cate_right_type_btn">
                                    <?php
                                    $args = array(
                                        'order' => 'ASC',
                                        'orderby' => 'id',
                                        'parent' => 3,
                                    );
                                    $categories = get_categories($args);
                                    ?>
                                    <?php foreach ($categories as $category) : ?>
                                        <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <a href="<?php echo esc_url(home_url('popular')); ?>" class="home_info_cate_right_order">人気順で見てみる</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="future" class="future js-page-position">
        <div class="future_inner inner">
            <div class="future_content section_content">
                <h2 class="future_title section_title">特徴</h2>
                <div class="future_content_rows">
                    <div class="future_content_row">
                        <div class="future_content_row_left">
                            <p class="future_content_row_left_point">POINT<span>1</span></p>
                            <h3 class="future_content_row_left_title">犬・猫などのペットと一緒に入居可能</h3>
                            <p class="future_content_row_left_message">意外と世の中、犬や猫などのペットを賃貸で買ってはいけないと言う物件が非常に多いのでは、ないでしょうか。<br>
                                「飼いたければ」、戸建を購入してください。そんなことは、もうありません。<br>
                                その問題を私たちが解決しました。</p>
                        </div>
                        <div class="future_content_row_right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-future01.png" alt="">
                        </div>
                    </div>
                    <div class="future_content_row">
                        <div class="future_content_row_left">
                            <p class="future_content_row_left_point">POINT<span>2</span></p>
                            <h3 class="future_content_row_left_title">音が伝わりづらい壁の構造</h3>
                            <p class="future_content_row_left_message">多少、犬が吠えたり猫が泣いたりしても近所迷惑になることは、ありません。<br>
                                どうやったらペットが住みやすい環境になるか、<br>
                                考えた末に、音が伝わりづらい壁の構造で防音に近い形で、ほぼ全ての物件で、施工しております。<br>
                                安心してお住み頂けます。</p>
                        </div>
                        <div class="future_content_row_right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-future02.png" alt="">
                        </div>
                    </div>
                    <div class="future_content_row">
                        <div class="future_content_row_left">
                            <p class="future_content_row_left_point">POINT<span>3</span></p>
                            <h3 class="future_content_row_left_title">ABCペットショップと提携</h3>
                            <p class="future_content_row_left_message">ペットと一緒にお部屋にお迎するならペット用品を揃えたいと思います。<br>
                                ABCペットショップ様と提携しお店の商品が当、ONES,HOMEの物件をご購入いただいたお客様に限定して、<br>常時5%offの特典を適用させていただきます。</p>
                        </div>
                        <div class="future_content_row_right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-future03.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="staff" class="staff js-page-position">
        <div class="staff_inner inner">

            <div class="staff_content section_content">
                <div class="staff_title section_title">スタッフ紹介</div>
                <div class="staff_content_rows">
                    <div class="staff_content_row">
                        <img src="" alt="">
                        <div class="staff_content_row_body">
                            <div class="staff_content_row_body_top">
                                <p class="staff_content_row_body_name"></p>
                                <p class="staff_content_row_body_type"></p>
                            </div>
                            <p class="staff_content_row_body_message"></p>
                        </div>
                    </div>
                    <!-- 3回繰り返し -->
                </div>
            </div>
        </div>
    </section>
    <section class="event js-page-position">
        <div class="event_inner inner">
            <div class="event_content section_content">
                <h2 class="event_title section_title">イベント情報</h2>
                <ul class="event_content_card_items">
                    <li class="event_content_card_item">
                        <article>
                            <a href="">
                                <img src="" alt="">
                                <time datetime=""></time>
                                <p class="message"></p>
                            </a>
                        </article>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="contact js-page-position">
        <div class="contact_inner inner">
            <div class="contact_content section_content">
                <a href="">無料ご相談のご予約はこちら</a>
            </div>
        </div>
    </section>
</main>
<?php get_template_part('template-js/videos'); ?>
<?php get_footer(); ?>