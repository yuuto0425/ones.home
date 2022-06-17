<?php get_header('index');?>


<main class="main">
    <section class="thanks-page">
        <div class="inner">
            <p class="thanks-message">お問い合わせありがとうございます。<br>5秒後に自動でトップページに戻ります。</p>
            <a href="<?php echo esc_url(home_url('/'));?>">トップへ戻る</a>
        </div>
    </section>
</main>
<?php get_footer();?>