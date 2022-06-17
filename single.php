<?php get_header('index'); ?>
<?php
// 記事のビュー数を更新(ログイン中・ロボットによる閲覧時は除く)
if (!is_user_logged_in() && !is_robots()) {
    setPostViews(get_the_ID());
}
?>
<main class="main">
    <section class="l_single_post">
        <div class="l-inner">
            <div class="section-content">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h3 class="l_single_post_title"><?php the_title(); ?></h3>
                        <!-- Slider main container -->
                        <div class="swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <picture>
                                        <?php if (get_field('picture01')) : ?>
                                            <source srcset="<?php the_field('picture01') ?>" media="(max-width:767px)">
                                        <?php else : ?>
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" media="(max-width:767px)">
                                        <?php endif; ?>
                                        <?php if (get_field('picture01')) : ?>
                                            <img src="<?php the_field('picture01') ?>" alt="人材紹介">
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" alt="">
                                        <?php endif; ?>

                                    </picture>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <picture>
                                        <?php if (get_field('picture02')) : ?>
                                            <source srcset="<?php the_field('picture02') ?>" media="(max-width:767px)">
                                        <?php else : ?>
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" media="(max-width:767px)">
                                        <?php endif; ?>
                                        <?php if (get_field('picture02')) : ?>
                                            <img src="<?php the_field('picture02') ?>" alt="人材紹介">
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" alt="">
                                        <?php endif; ?>
                                    </picture>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <picture>
                                        <?php if (get_field('picture03')) : ?>
                                            <source srcset="<?php the_field('picture03') ?>" media="(max-width:767px)">
                                        <?php else : ?>
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" media="(max-width:767px)">
                                        <?php endif; ?>
                                        <?php if (get_field('picture03')) : ?>
                                            <img src="<?php the_field('picture03') ?>" alt="人材紹介">
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" alt="">
                                        <?php endif; ?>
                                    </picture>
                                </div>
                                <div class="swiper-slide">
                                    <picture>
                                        <?php if (get_field('picture03')) : ?>
                                            <source srcset="<?php the_field('picture03') ?>" media="(max-width:767px)">
                                        <?php else : ?>
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" media="(max-width:767px)">
                                        <?php endif; ?>
                                        <?php if (get_field('picture03')) : ?>
                                            <img src="<?php the_field('picture03') ?>" alt="人材紹介">
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" alt="">
                                        <?php endif; ?>
                                    </picture>
                                </div>
                                <div class="swiper-slide">
                                    <picture>
                                        <?php if (get_field('picture03')) : ?>
                                            <source srcset="<?php the_field('picture03') ?>" media="(max-width:767px)">
                                        <?php else : ?>
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" media="(max-width:767px)">
                                        <?php endif; ?>
                                        <?php if (get_field('picture03')) : ?>
                                            <img src="<?php the_field('picture03') ?>" alt="人材紹介">
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" alt="">
                                        <?php endif; ?>
                                    </picture>
                                </div>
                                <div class="swiper-slide">
                                    <picture>
                                        <?php if (get_field('picture03')) : ?>
                                            <source srcset="<?php the_field('picture03') ?>" media="(max-width:767px)">
                                        <?php else : ?>
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" media="(max-width:767px)">
                                        <?php endif; ?>
                                        <?php if (get_field('picture03')) : ?>
                                            <img src="<?php the_field('picture03') ?>" alt="人材紹介">
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" alt="">
                                        <?php endif; ?>
                                    </picture>
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <div class="swiper-container slider-thumbnail">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <?php if (get_field('picture01')) : ?>
                                        <source srcset="<?php the_field('picture01') ?>" media="(max-width:767px)">
                                    <?php else : ?>
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" media="(max-width:767px)">
                                    <?php endif; ?>
                                    <?php if (get_field('picture01')) : ?>
                                        <img src="<?php the_field('picture01') ?>" alt="人材紹介">
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="swiper-slide">
                                    <?php if (get_field('picture02')) : ?>
                                        <source srcset="<?php the_field('picture02') ?>" media="(max-width:767px)">
                                    <?php else : ?>
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" media="(max-width:767px)">
                                    <?php endif; ?>
                                    <?php if (get_field('picture02')) : ?>
                                        <img src="<?php the_field('picture02') ?>" alt="人材紹介">
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="swiper-slide"><?php if (get_field('picture03')) : ?>
                                        <source srcset="<?php the_field('picture03') ?>" media="(max-width:767px)">
                                    <?php else : ?>
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" media="(max-width:767px)">
                                    <?php endif; ?>
                                    <?php if (get_field('picture03')) : ?>
                                        <img src="<?php the_field('picture03') ?>" alt="人材紹介">
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="swiper-slide"><?php if (get_field('picture03')) : ?>
                                        <source srcset="<?php the_field('picture03') ?>" media="(max-width:767px)">
                                    <?php else : ?>
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" media="(max-width:767px)">
                                    <?php endif; ?>
                                    <?php if (get_field('picture03')) : ?>
                                        <img src="<?php the_field('picture03') ?>" alt="人材紹介">
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="swiper-slide"><?php if (get_field('picture03')) : ?>
                                        <source srcset="<?php the_field('picture03') ?>" media="(max-width:767px)">
                                    <?php else : ?>
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" media="(max-width:767px)">
                                    <?php endif; ?>
                                    <?php if (get_field('picture03')) : ?>
                                        <img src="<?php the_field('picture03') ?>" alt="人材紹介">
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="swiper-slide"><?php if (get_field('picture03')) : ?>
                                        <source srcset="<?php the_field('picture03') ?>" media="(max-width:767px)">
                                    <?php else : ?>
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" media="(max-width:767px)">
                                    <?php endif; ?>
                                    <?php if (get_field('picture03')) : ?>
                                        <img src="<?php the_field('picture03') ?>" alt="人材紹介">
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/l-home-info/l-home-info-single/l-home-info-single-slide01.jpg" alt="">
                                    <?php endif; ?>
                                </div>
                                <!-- <div class="swiper-slide"><img src="sample004.jpg" alt=""></div> -->
                                <!-- <div class="swiper-slide"><img src="sample005.jpg" alt=""></div>
                                <div class="swiper-slide"><img src="sample006.jpg" alt=""></div> -->
                            </div>
                        </div>
                        <div class="l_single_post_part_top">
                            <time class="l_single_post_time" datetime="<?php the_time('c'); ?>">公開日：<?php the_time('Y.m.d'); ?><br>更新日：<?php the_modified_time('Y.m.d') ?></time>
                            <?php
                            $categories = get_the_category();
                            if ($categories) {
                                echo '<ul class="l_single_post_cate_lists">';
                                foreach ($categories as $category) {
                                    echo '<li class="l_single_post_cate_list">' . $category->name . '</li>';
                                }
                                echo '</ul>';
                            }
                            ?>
                        </div>

                        <table class="l_home_info_s_ta">
                            <tbody>
                                <tr>
                                    <th>賃料</th>
                                    <td>3.5万</td>
                                    <th>交通</th>
                                    <td>〇〇駅から徒歩5分</td>
                                </tr>
                                <tr>
                                    <th>所在地</th>
                                    <td colspan="3">北海道函館市中道1丁目 <a href="">地図を見る</a></td>
                                </tr>
                                <tr>
                                    <th>間取り</th>
                                    <td>2LDK</td>
                                    <th>駐車場</th>
                                    <td>空き有、5000円〜</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="l_single_post_message">
                            <h4 class="l_single_post_sutaff_message_title">スタッフ一言コメント</h4>
                            <p class="l_single_post_sutaff_message_txt"></p>
                        </div>
                        <div class="l_single_post_map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5948.38879268569!2d140.7513177768236!3d41.80257251691269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f9ef43fb6e79fdf%3A0xb89a2a4d7b43a86f!2z44CSMDQxLTA4NTMg5YyX5rW36YGT5Ye96aSo5biC5Lit6YGT77yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1654815935607!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="l_single_post_cta_g">
                            <a href="<?php echo esc_url(home_url('document')); ?>">資料請求をする</a>
                            <a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせをする</a>
                        </div>
                <?php endwhile;
                endif ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>