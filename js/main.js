$(function () {
    $('.hamburger').on('click', function () {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $('body').css('overflow', 'hidden');
            $('.header-nav').addClass('open');
            $('.mask').fadeIn();
        } else {
            $('body').css('overflow', '');
            $('.header-nav').removeClass('open');
            $('.mask').fadeOut();
        }
    });

    $('.mask').on('click', function () {
        $('body').css('overflow', '');
        $('.header-nav').removeClass('open');
        $('.hamburger').removeClass('active');
        $('.mask').fadeOut();
    });

    var h = $('.header');
    var mv = $('.mv').height();
    var src01 = $('.header-logo__img').attr('src').replace('1', '2');
    var src02 = $('.header-logo__img').attr('src').replace('2', '1');
    var spl = location.href.split('/')[3];

    function hBk() {
        h.addClass('is-bk');
        $('.cmn-link__border').removeClass('cmn-link__border-white');
        // $('.header-nav__link').removeClass('cmn-button__slide-white');
        // $('.header-nav__link').addClass('cmn-button__slide-blue');
        $('.hamburger span').addClass('ham-blue');
        $('.header-logo__img').attr('src', src01);
    }
    $(window).on('load', function () {
        if (spl == "") {
            $(window).scroll(function () {
                if ($(this).scrollTop() > mv) {
                    hBk();
                } else {
                    h.removeClass('is-bk');
                    $('.cmn-link__border').addClass('cmn-link__border-white');
                    // $('.header-nav__link').addClass('cmn-button__slide-white');
                    // $('.header-nav__link').removeClass('cmn-button__slide-blue');
                    $('.hamburger span').removeClass('ham-blue');
                    $('.header-logo__img').attr('src', src02);
                }
            });
        } else {
            hBk();
        }
    });
    $('.slider').slick({
        arrows: false,
        dots: true,
    });

    // ふわっと表示させる
    function fadeAnime() {
        $('._fu').each(function () {
            var elemPos = $(this).offset().top - 50;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();

            if (scroll >= elemPos - windowHeight) {
                $(this).addClass('fadeUp');
            }
        });
    }
    fadeAnime();

    // スクロール時にフェードイン発火
    $(window).scroll(function () {
        fadeAnime();
    });

    // スムーススクロール
    // $('a[href^="#"]').click(function () {
    //     var adjust = 0;
    //     var speed = 800;
    //     var href = $(this).attr("href");
    //     var target = $(href == "#" || href == "" ? 'html' : href);
    //     var position = target.offset().top + adjust;
    //     $('body,html').animate({
    //         scrollTop: position
    //     }, speed, 'swing');
    //     return false;
    // });


    //固定ヘッダーの指定
    var headerHeight = $('.header').outerHeight();

    // ページ外アンカーのページ付きリンクへのスムーススクロール
    var urlHash = location.hash;
    if (urlHash) {
        $('body,html').stop().scrollTop(0);
        setTimeout(function () {
            var target = $(urlHash);
            var position = target.offset().top;
            $('body,html').stop().animate({
                scrollTop: position
            }, 500);
        }, 100);
    }
    // ページ内アンカーのページ付きリンクへのスムーススクロール
    $(function () {
        $('a[href*="#"], area[href*="#"]').not(".noScroll").click(function () {

            var speed = 400, // ミリ秒(この値を変えるとスピードが変わる)
                href = $(this).prop("href"), //リンク先を絶対パスとして取得
                hrefPageUrl = href.split("#")[0], //リンク先を絶対パスについて、#より前のURLを取得
                currentUrl = location.href, //現在のページの絶対パスを取得
                currentUrl = currentUrl.split("#")[0]; //現在のページの絶対パスについて、#より前のURLを取得

            //#より前の絶対パスが、リンク先と現在のページで同じだったらスムーススクロールを実行
            if (hrefPageUrl == currentUrl) {

                //リンク先の#からあとの値を取得
                href = href.split("#");
                href = href.pop();
                href = "#" + href;

                //スムースクロールの実装
                var target = $(href == "#" || href == "" ? 'html' : href),
                    position = target.offset().top - headerHeight; //targetの位置を取得
                $('body,html').stop().animate({
                    scrollTop: position
                }, 500);

                return false;
            }
        });
    });


    // ページトップへ戻るボタン表示
    var pagetop = $('#page_top');

    function pageTopButton() {
        pagetop.hide();
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                pagetop.fadeIn();
            } else {
                pagetop.fadeOut();
            }
        });
    }
    pageTopButton();

    // TOPに戻るボタンを押下時の動作
    pagetop.click(function () {
        $('body, html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    // スクロールガイダンス表示
    function scrollGuide() {
        $(window).scroll(function () {
            if ($(this).scrollTop() < 350) {
                $('.scroll').fadeIn();
            } else {
                $('.scroll').fadeOut();
            }
        });
    }
    scrollGuide();

    // スクロールボタンクリックされた際の処理
    function scrollClick() {
        $('.scroll').click(function () {
            $("html, body").animate({
                scrollTop: 950
            }, 500, "swing");
            return false;
        });
    }
    scrollClick();
});

// *****************************************************
// タッチデバイス使用時マウスホバー操作無効
// *****************************************************
function hoverDelete() {
    var touchStart = 'ontouchstart' in document.documentElement || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;
    if (touchStart) {
        try {
            for (var si in document.styleSheets) {
                var styleSheet = document.styleSheets[si];
                if (!styleSheet.rules) continue;

                for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
                    if (!styleSheet.rules[ri].selectorText) continue;

                    if (styleSheet.rules[ri].selectorText.match(':hover')) {
                        styleSheet.deleteRule(ri);
                    }
                }
            }
        } catch (ex) {}
    }
}
hoverDelete();

$(function () {
    $('.has-sub-menu').mouseover(function (e) {
        $('.header-back').addClass("bg-right");
    })
    $('.has-sub-menu').mouseout(function (e) {
        $('.header-back').removeClass("bg-right");
    })
});