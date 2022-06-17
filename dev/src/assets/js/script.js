// const $trigger = document.getElementById('js-page-top');
// let jsPagePosition = document.querySelectorAll('.js-page-position');

// $trigger.addEventListener('click',(event) => {
//     event.preventDefault();
//     let $index = 0;
//     const jsPosiLen = jsPagePosition.length;
//     for( $index ; $index < jsPosiLen ; $index++ ){
//         if($index < jsPosiLen) {
//             jsPagePosition[$index];
//         }else {


//         }
//     }
// });

jQuery(function () {
    // #で始まるa要素をクリックした場合に処理（"#"←ダブルクォーテンションで囲むのを忘れずに。忘れるとjQueryのバージョンによっては動かない。。）
    jQuery('a[href^="#"]').click(function () {
        // 移動先を0px調整する。0を30にすると30px下にずらすことができる。
        var adjust = -70;
        // スクロールの速度（ミリ秒）
        var speed = 400;
        // アンカーの値取得 リンク先（href）を取得して、hrefという変数に代入
        var href = jQuery(this).attr("href");
        // 移動先を取得 リンク先(href）のidがある要素を探して、targetに代入
        var target = jQuery(href == "#" || href == "" ? 'html' : href);
        // 移動先を調整 idの要素の位置をoffset()で取得して、positionに代入
        var position = target.offset().top + adjust;
        // スムーススクロール linear（等速） or swing（変速）
        jQuery('body,html').animate({ scrollTop: position }, speed, 'swing');
        return false;
    });
});

//サムネイル
var sliderThumbnail = new Swiper('.slider-thumbnail', {
    slidesPerView: 4,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
});

const swiper = new Swiper('.swiper', {
    loop: true, //ループさせる
    effect: "fade", //フェードのエフェクト
    fadeEffect: {
        crossFade: true,
    },
    autoplay: {
        delay: 5000,//5秒後つぎの画像へ
        disableOnInteraction: false,
    },
    // speed: 2000, //２秒かけながら次の画像へ移動
    allowTouchMove: false, //マウスでのスワイプを禁止
    pagination: { //円形のページネーションを有効にする
        el: ".swiper-pagination",
        clickable: true //クリックを有効にする
    },
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    thumbs: {
        swiper: sliderThumbnail
    }
});



jQuery('.js-d-icon').on('click', function () {
    jQuery(this).toggleClass('is-active');
    jQuery('.js-d-side').toggleClass('is-active');
    jQuery('.js-d-bg').toggleClass('is-active');
    return false;
});
jQuery('.js-d-bg').click(function () {
    jQuery(this).removeClass('is-active');
    jQuery('.js-d-side').removeClass('is-active');
    jQuery('.js-d-icon').removeClass('is-active');
});

function jsAccordion() {
    jQuery('.js-accordion').on('click', function () {
        jQuery(this).next().stop().slideToggle();
        jQuery(this).toggleClass('is-open');
    });
}
jsAccordion();

jQuery('#js-d-i').on('click', function () {
    jQuery(this).toggleClass('is-active');
    jQuery('#js-d-c').toggleClass('is-active');
    return false;
});

// const elDrawerIco = document.querySelector('.js-d-icon');

// elDrawerIco.addEventListener('click', (e) => {
//     e.preventDefault();
//     const elDrawerBg = document.querySelector('.js-d-bg');
//     const elDrawerSide = document.querySelector('.js-d-side');
//     this.classList.toggle('is-active');
//     elDrawerBg.classList.toggle('is-active');
//     elDrawerSide.classList.toggle('is-active');
// });