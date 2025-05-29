export const btnClickFunc = () => {
        $(document).ready(function() {
            const $btns = $('.js-btn');

            $btns.on('click', e => {
                const btnTargetData = $(e.currentTarget).attr('data-btn');
                const btnAnimationData = $(e.currentTarget).attr('data-animation');
                const target = $(`[data-target = "${btnTargetData}"]`);
                const btnTargetGroupData = $(e.currentTarget).attr('data-btnGroup');
                const $sameBtns = $(`[data-btnGroup = "${btnTargetGroupData}"]`);
                const $sameTargets = $(`[data-targetGroup = "${btnTargetGroupData}"]`);

                if (btnAnimationData == 'slide') {
                    $(e.currentTarget).toggleClass('is-active');
                    target.slideToggle(300);
                } else if (btnAnimationData == 'class') {
                    $(e.currentTarget).toggleClass('is-active');
                    target.toggleClass('is-active');

                    // ボディのスクロール制御
                    if (target.hasClass('is-active')) {
                        $('body').addClass('menu-open');
                    } else {
                        $('body').removeClass('menu-open');
                    }
                } else if (btnAnimationData == 'commonFade') {
                    $sameBtns.toggleClass('is-active');
                    target.fadeToggle(300);
                } else if (btnAnimationData == 'allClass') {
                    $(e.currentTarget).toggleClass('is-active');
                    $sameTargets.addClass('is-active');
                } else if (btnAnimationData == 'tab') {
                    $sameBtns.not($(e.currentTarget)).removeClass('is-active');
                    $(e.currentTarget).addClass('is-active');
                    $sameTargets.removeClass('is-active');
                    target.addClass('is-active');
                } else if (btnAnimationData == 'pageTop') {
                    $('body, html').animate({
                        scrollTop: 0
                    }, 700);
                    return false;
                } else {
                    console.log($(e.currentTarget));
                    $(e.currentTarget).toggleClass('is-active');
                }
            });

            // メニューリンクをクリックした時にメニューを閉じる
            $('.menu-link').on('click', function() {
                const $menu = $('.menu');
                const $hamburgerBtn = $('.hamburger-btn');

                if ($menu.hasClass('is-active')) {
                    $hamburgerBtn.removeClass('is-active');
                    $menu.removeClass('is-active');
                    $('body').removeClass('menu-open');
                }
            });

            // メニューフッターリンクをクリックした時にメニューを閉じる
            $('.menu-footer__link').on('click', function() {
                const $menu = $('.menu');
                const $hamburgerBtn = $('.hamburger-btn');

                if ($menu.hasClass('is-active')) {
                    $hamburgerBtn.removeClass('is-active');
                    $menu.removeClass('is-active');
                    $('body').removeClass('menu-open');
                }
            });

            // オーバーレイクリックでメニューを閉じる
            $('.menu').on('click', function(e) {
                if (e.target === this) {
                    const $hamburgerBtn = $('.hamburger-btn');
                    $hamburgerBtn.removeClass('is-active');
                    $(this).removeClass('is-active');
                    $('body').removeClass('menu-open');
                }
            });

            // ESCキーでメニューを閉じる
            $(document).on('keydown', function(e) {
                if (e.key === 'Escape') {
                    const $menu = $('.menu');
                    const $hamburgerBtn = $('.hamburger-btn');

                    if ($menu.hasClass('is-active')) {
                        $hamburgerBtn.removeClass('is-active');
                        $menu.removeClass('is-active');
                        $('body').removeClass('menu-open');
                    }
                }
            });

            // ウィンドウリサイズ時の処理
            $(window).on('resize', function() {
                if ($(window).width() > 768) {
                    const $menu = $('.menu');
                    const $hamburgerBtn = $('.hamburger-btn');

                    if ($menu.hasClass('is-active')) {
                        $hamburgerBtn.removeClass('is-active');
                        $menu.removeClass('is-active');
                        $('body').removeClass('menu-open');
                    }
                }
            });
        });
};