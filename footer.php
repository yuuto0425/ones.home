<footer class="footer">
    <div class="footer_inner">
        <div class="footer_logo"><img src="<?php echo get_template_directory_uri();?>/img/footer/footer-logo.png" alt="ロゴ"></div>
        <ul class="footer_nav_items">
            <li class="footer_nav_item"><a href="<?php echo esc_url(home_url('home-info'))?>">物件情報</a></li>
            <li class="footer_nav_item"><a href="<?php echo esc_url(home_url('/'))?>#future">特徴</a></li>
            <li class="footer_nav_item"><a href="<?php echo esc_url(home_url('/'))?>#staff">スタッフ紹介</a></li>
            <li class="footer_nav_item"><a href="<?php echo esc_url(home_url('event'))?>">イベント情報</a></li>
            <li class="footer_nav_item"><a href="<?php echo esc_url(home_url('company'))?>">会社概要</a></li>
            <li class="footer_nav_item"><a href="<?php echo esc_url(home_url('qa'))?>">よくある質問</a></li>
        </ul>
        <ul class="footer_sns_items">
            <li class="footer_sns_item"><a href=""><img src="<?php echo get_template_directory_uri();?>/img/sns/instagram.png" alt=""></a></li>
            <li class="footer_sns_item"><a href=""><img src="<?php echo get_template_directory_uri();?>/img/sns/twitter.png" alt=""></a></li>
            <li class="footer_sns_item"><a href=""><img src="<?php echo get_template_directory_uri();?>/img/sns/youtube.png" alt=""></a></li>
        </ul>
    </div>
    <?php wp_footer(); ?>
</footer>
<a href="#" id="js-page-top" class="page_top"><img src="<?php echo get_template_directory_uri();?>/img/footer/footer-top.png" alt=""></a>
</body>

</html>