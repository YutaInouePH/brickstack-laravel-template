export const swiperSlider = () => {

            // Swiperの初期化
            const swiper = new Swiper('.swiper-container', {
                // フェード効果
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },

                // 自動再生
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },

                // 無限ループ
                loop: true,

                // ページネーション
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    bulletClass: 'swiper-pagination-bullet',
                    bulletActiveClass: 'swiper-pagination-bullet-active',
                },

                // トランジション速度
                speed: 4000,

                // タッチ/マウス操作
                touchRatio: 0.2,
                threshold: 10,

                // アクセシビリティ
                a11y: {
                    prevSlideMessage: '前のスライド',
                    nextSlideMessage: '次のスライド',
                },
            });

            // 停止/再生ボタンの制御
            const pauseBtn = document.getElementById('pauseBtn');
            let isPaused = false;

            pauseBtn.addEventListener('click', function() {
                if (isPaused) {
                    // 再生
                    swiper.autoplay.start();
                    pauseBtn.classList.remove('paused');
                    pauseBtn.title = 'スライダーを停止';
                    isPaused = false;
                } else {
                    // 停止
                    swiper.autoplay.stop();
                    pauseBtn.classList.add('paused');
                    pauseBtn.title = 'スライダーを再生';
                    isPaused = true;
                }
            });

            // スライダーがユーザー操作で停止された場合の処理
            swiper.on('autoplayStop', function() {
                if (!isPaused) {
                    pauseBtn.classList.add('paused');
                    isPaused = true;
                }
            });

            // スライダーが再開された場合の処理
            swiper.on('autoplayStart', function() {
                if (isPaused) {
                    pauseBtn.classList.remove('paused');
                    isPaused = false;
                }
            });

};
