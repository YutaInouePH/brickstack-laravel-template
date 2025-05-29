<!DOCTYPE html>
<html lang="ja">
<head>
    <title>「住む」より「楽しむ」BESSの家|オープンハウス・完成見学会ページ|BESS札幌</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, user-scalable=1, initial-scale=1, viewport-fit=cover">
    <meta name="keywords" content="間貫けのハコ,BESS札幌,ログハウス,中古リノベーション,オープンハウス,見学会,札幌" />
    <meta name="description" content="「住む」より「楽しむ」BESSの家。BESS札幌のオープンハウス・完成見学会では、「間貫けのハコ」や中古リノベーションのユニークな暮らし方を、実際の空間でのんびり体感できます。" />

    <!-- ::: OGP ::: -->
    <meta property="og:title" content="「住む」より「楽しむ」BESSの家|オープンハウス・完成見学会ページ|BESS札幌">
    <meta property="og:description" content="「住む」より「楽しむ」BESSの家。BESS札幌のオープンハウス・完成見学会では、「間貫けのハコ」や中古リノベーションのユニークな暮らし方を、実際の空間でのんびり体感できます。" />
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="https://bess-sapporo.com/">
    <meta property="og:image" content="{{ Vite::asset('resources/images/_etc/ogp.jpg') }}">
    <meta property="og:image:alt" content="BESS札幌のオープンハウス・完成見学会ページ">
    <meta property="og:site_name" content="BESS札幌" />

{{--    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/images/_etc/favicon.ico') }}">--}}
{{--    <!-- <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/_etc/favicon.png') }}"> -->--}}
{{--    <!-- <link rel="apple-touch-icon" type="image/png" href="{{ Vite::asset('resources/images/_etc/custom-icon.png') }}"> -->--}}

    <!-- Styles-->
    @vite(['resources/scss/style.scss', 'resources/js/app.js'])
</head>
<body class="topPage" id="top">
<header class="header">
    <div class="hamburger-btn js-btn" data-btn="menu" data-animation="class">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
    </div>

    <nav class="menu" data-target="menu">
        <div class="menu-header">
            <div class="menu-logo">
                <img src="{{ Vite::asset('resources/images/common/logo-green.png') }}" alt="BESS" width="52" height="56">
            </div>
        </div>

        <ul class="menu-list">
            <li class="menu-item">
                <a href="#open" class="menu-link">
                    開催中の住宅見学会
                    <span class="menu-arrow"></span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#human" class="menu-link">
                    BESSで暮らす人
                    <span class="menu-arrow"></span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#hako" class="menu-link">
                    オープンハウスのご案内
                    <span class="menu-arrow"></span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#step" class="menu-link">
                    購入のステップ
                    <span class="menu-arrow"></span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#event" class="menu-link">
                    イベント情報
                    <span class="menu-arrow"></span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#spec" class="menu-link">
                    住まいの性能
                    <span class="menu-arrow"></span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#sdgs" class="menu-link">
                    BESSのサスティナビリティ
                    <span class="menu-arrow"></span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#support" class="menu-link">
                    長く安心して暮らす サポートシステム
                    <span class="menu-arrow"></span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#form" class="menu-link">
                    開催中の住宅見学予約フォーム
                    <span class="menu-arrow"></span>
                </a>
            </li>
        </ul>

        <div class="menu-footer">
            <a href="#" class="menu-footer__link">会社概要</a>
            <a href="https://www.rccore.co.jp/privacy.html" target="_blank" rel="noopener" class="menu-footer__link">プライバシーポリシー</a>
        </div>
    </nav>
</header>

<!-- メニュー -->
<main class="siteContent" role="main">
    <section class="kvSec">
        <div class="kvSec-inner">
            <h1 class="kvSec-ttl">
                <img src="{{ Vite::asset('resources/images/common/logo-white.png') }}" width="88" height="95" alt="BESS">
            </h1>
            <div class="kvSec-copyArea">
                <p class="kvSec-copy">「住む」より「楽しむ」</p>
                <div class="kvSec-copyFlex">
                    <img src="{{ Vite::asset('resources/images/common/ttlLogo.png') }}" alt="BESS">
                    <p class="kvSec-copy">の家</p>
                </div>
            </div>
            <ul class="kvSec-btnList">
                <li class="kvSec-btnItem">
                    <a href="#form" class="kvSec-btnItem__link open">オープンハウス来場予約</a>
                </li>
                <li class="kvSec-btnItem">
                    <a href="./contact/" class="kvSec-btnItem__link dl">資料ダウンロード</a>
                </li>
                <li class="kvSec-btnItem">
                    <a href="#hako" class="kvSec-btnItem__link hako">「間貫けのハコ」はこちら</a>
                </li>
            </ul>
        </div>
        <!-- Slider main container -->
        <div class="swiper swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="{{ Vite::asset('resources/images/mv/mv01.jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ Vite::asset('resources/images/mv/mv02.jpg') }}" alt=""></div>
                <!-- <div class="swiper-slide"><img src="{{ Vite::asset('resources/images/mv/mv01.jpg') }}" alt=""></div> -->
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            <!-- 停止ボタン -->
            <div class="slider-controls">
                <button class="slider-pause-btn" id="pauseBtn" title="スライダーを停止/再生"></button>
            </div>
        </div>
    </section>

    <!-- 開催中の見学会 -->
    <section class="open-sec common-sec" id="open" data-aos="fade-up" data-aos-duration="3000">
        <div class="open-inner">
            <h2 class="sec_ttl open">
                <span class="sub">開催中の住宅見学会</span><br>
                <span class="main">OPEN HOUSE</span>
            </h2>

            <ul class="open-list">
                <li class="open-item">
                    <img src="{{ Vite::asset('resources/images/open/open_img01.jpg') }}" alt="間貫けのハコ">
                    <div class="open-item-txtArea">
                        <p class="open-item-ttl">
                            <span class="main">間貫けのハコ</span>
                            <span class="sub">オープンハウス</span>
                        </p>
                        <p class="open-item-date">
                            <span>2025.</span> 6/1 ー 10/1
                        </p>
                        <p class="open-item-adress">
                            空知郡南幌町東町3丁目6番9号
                        </p>
                        <div class="open-item-linkArea">
                            <a href="#hako" class="open-item-link">詳細を見る</a>
                            <a href="#form" class="open-item-link">見学予約</a>
                        </div>
                    </div>
                </li>
                <li class="open-item">
                    <img src="{{ Vite::asset('resources/images/open/open-img02.jpg') }}" alt="間貫けのハコ">
                    <div class="open-item-txtArea">
                        <p class="open-item-ttl">
                            <span class="main">中古リノベーション</span>
                            <span class="sub">オープンハウス</span>
                        </p>
                        <p class="open-item-date">
                            <span>2025.</span> 9/1 ー
                        </p>
                        <p class="open-item-adress">
                            空知郡南幌町東町3丁目6番9号
                        </p>
                        <div class="open-item-linkArea">
                            <a href="#hako" class="open-item-link">詳細を見る</a>
                            <a href="#hako" class="open-item-link">見学予約</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- BESSで暮らす人 -->
    <section class="human-sec common-sec" id="human">
        <div class="human-inner">
            <h2 class="human-ttl">
                <img src="{{ Vite::asset('resources/images/common/logo-brown.png') }}" width="151" height="34" alt="BESS">
                で暮らす人
            </h2>
            <div class="scroll-infinity">
                <div class="scroll-infinity__wrap">
                    <ul class="scroll-infinity__list scroll-infinity__list--left">
                        <li class="scroll-infinity__item">
                            <img src="{{ Vite::asset('resources/images/human/human-img01.jpg') }}" alt="">
                            <div class="scroll-infinity__item-txtArea">
                                <p class="scroll-infinity__item-txt">
                                    土間スペースは暮らしに応じて<br>自由自在!/石狩市
                                </p>
                            </div>
                        </li>
                        <li class="scroll-infinity__item">
                            <img src="{{ Vite::asset('resources/images/human/human-img02.jpg') }}" alt="">
                            <div class="scroll-infinity__item-txtArea">
                                <p class="scroll-infinity__item-txt">
                                    趣味も自然と広がる<br>のびのびとした暮らし/空知郡南幌町
                                </p>
                            </div>
                        </li>
                        <li class="scroll-infinity__item">
                            <img src="{{ Vite::asset('resources/images/human/human-img03.jpg') }}" alt="">
                            <div class="scroll-infinity__item-txtArea">
                                <p class="scroll-infinity__item-txt">
                                    笑い声が響きあう、<br>子育て家族の遊び場ハウス!/石狩市
                                </p>
                            </div>
                        </li>
                        <li class="scroll-infinity__item">
                            <img src="{{ Vite::asset('resources/images/human/human-img04.jpg') }}" alt="">
                            <div class="scroll-infinity__item-txtArea">
                                <p class="scroll-infinity__item-txt">
                                    自分らしい暮らしをカタチに<br>/空知郡南幌町
                                </p>
                            </div>
                        </li>
                    </ul>
                    <ul class="scroll-infinity__list scroll-infinity__list--left">
                        <li class="scroll-infinity__item">
                            <img src="{{ Vite::asset('resources/images/human/human-img01.jpg') }}" alt="">
                            <div class="scroll-infinity__item-txtArea">
                                <p class="scroll-infinity__item-txt">
                                    土間スペースは暮らしに応じて<br>自由自在!/石狩市
                                </p>
                            </div>
                        </li>
                        <li class="scroll-infinity__item">
                            <img src="{{ Vite::asset('resources/images/human/human-img02.jpg') }}" alt="">
                            <div class="scroll-infinity__item-txtArea">
                                <p class="scroll-infinity__item-txt">
                                    土間スペースは暮らしに応じて<br>自由自在!/石狩市
                                </p>
                            </div>
                        </li>
                        <li class="scroll-infinity__item">
                            <img src="{{ Vite::asset('resources/images/human/human-img03.jpg') }}" alt="">
                            <div class="scroll-infinity__item-txtArea">
                                <p class="scroll-infinity__item-txt">
                                    土間スペースは暮らしに応じて<br>自由自在!/石狩市
                                </p>
                            </div>
                        </li>
                        <li class="scroll-infinity__item">
                            <img src="{{ Vite::asset('resources/images/human/human-img04.jpg') }}" alt="">
                            <div class="scroll-infinity__item-txtArea">
                                <p class="scroll-infinity__item-txt">
                                    土間スペースは暮らしに応じて<br>自由自在!/石狩市
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- オープンハウスのご案内 -->
    <section class="hako-sec common-sec" id="hako" data-aos="fade-up" data-aos-duration="3000">
        <div class="hako-inner">
            <h2 class="sec_ttl hako">
                <span class="sub">オープンハウスのご案内</span><br>
                <span class="main">OPEN HOUSE</span>
            </h2>
        </div>
        <div class="hako-main">
            <div class="hako-kv">
                <img src="{{ Vite::asset('resources/images/hako/hako-kv.jpg') }}" alt="間貫けのハコ">
            </div>
            <div class="hako-ttlArea">
                <div class="hako-ttlArea-wrap">
                    <img src="{{ Vite::asset('resources/images/hako/hako-logo.png') }}" width="304" height="90" alt="三角WONDER 間貫けのハコ">
                    <a href="#form" class="open-item-link u-hako">見学予約</a>
                </div>
                <div class="hako-ttlArea-btm u-pcDb">
                    <p class="hako-ttlArea-txt">［オープンハウス］ 空知郡南幌町東町3丁目6番9号</p>
                    <p class="hako-ttlArea-btn__ttl">BESSの家</p>
                    <p class="hako-ttlArea-btn__txt">間のある家で、深呼吸するように暮らす。<br>肩の力を抜いて暮らせる場所。</p>
                </div>
            </div>
            <div class="hako-ttlArea-btm u-spDb">
                <p class="hako-ttlArea-txt">［オープンハウス］ 空知郡南幌町東町3丁目6番9号</p>
                <p class="hako-ttlArea-btn__ttl">BESSの家</p>
                <p class="hako-ttlArea-btn__txt">間のある家で、深呼吸するように暮らす。<br>肩の力を抜いて暮らせる場所。</p>
            </div>
            <ul class="hako-gallery__list">
                <li class="hako-gallery__item" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="600">
                    <img src="{{ Vite::asset('resources/images/hako/hako-bg01.jpg') }}" alt="">
                </li>
                <li class="hako-gallery__item" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="100">
                    <img src="{{ Vite::asset('resources/images/hako/hako-bg02.jpg') }}" alt="">
                </li>
                <li class="hako-gallery__item" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                    <img src="{{ Vite::asset('resources/images/hako/hako-bg03.jpg') }}" alt="">
                </li>
                <li class="hako-gallery__item" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="500">
                    <img src="{{ Vite::asset('resources/images/hako/hako-bg04.jpg') }}" alt="">
                </li>
                <li class="hako-gallery__item" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="700">
                    <img src="{{ Vite::asset('resources/images/hako/hako-bg05.jpg') }}" alt="">
                </li>
            </ul>
        </div>

        <!-- ハコ間取り -->
        <div class="hako-madori" data-aos="fade-up" data-aos-duration="3000">
            <p class="hako-madori__ttl">間貫けのハコ 間取り</p>
            <div class="hako-madori__flex">
                <img src="{{ Vite::asset('resources/images/hako/hako-madori.png') }}" width="528" height="380" alt="間貫けのハコ 間取り">
                <div class="hako-madori__right">
                    <div class="hako-madori__right-ttlArea">
                        <img src="{{ Vite::asset('resources/images/hako/hako-logo02.png') }}" width="200" height="47" alt="間貫けのハコ">
                        <p class="hako-madori__right-ttl">まの7 モデルプラン</p>
                    </div>
                    <p class="hako-madori__right-date">DATE</p>
                    <ul class="hako-madori__right-dateList">
                        <li class="hako-madori__right-dateItem">
                            <p class="hako-madori__right-dateItemTtl">1F面積</p>
                            <p class="hako-madori__right-dateItemTxt">52.17m²（15.8坪）</p>
                        </li>
                        <li class="hako-madori__right-dateItem">
                            <p class="hako-madori__right-dateItemTtl">2F面積</p>
                            <p class="hako-madori__right-dateItemTxt">45.10m²（13.6坪）</p>
                        </li>
                        <li class="hako-madori__right-dateItem">
                            <p class="hako-madori__right-dateItemTtl">延床面積</p>
                            <p class="hako-madori__right-dateItemTxt">97.27m²（29.4坪）</p>
                        </li>
                        <li class="hako-madori__right-dateItem">
                            <p class="hako-madori__right-dateItemTtl">縁側</p>
                            <p class="hako-madori__right-dateItemTxt">5.10m²（1.5坪）</p>
                        </li>
                        <li class="hako-madori__right-dateItem">
                            <p class="hako-madori__right-dateItemTtl">ポーチ</p>
                            <p class="hako-madori__right-dateItemTxt">3.10m²（0.9坪）</p>
                        </li>
                        <li class="hako-madori__right-dateItem">
                            <p class="hako-madori__right-dateItemTtl">総床面積</p>
                            <p class="hako-madori__right-dateItemTxt">105.47m²（31.9坪）</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="hako-madori__main">
                <img src="{{ Vite::asset('resources/images/hako/hako-madori1f.png') }}" width="464" height="533"  alt="1F間取り">
                <img src="{{ Vite::asset('resources/images/hako/hako-madori2f.png') }}" width="398" height="534"  alt="2F間取り">
            </div>

            <ul class="hako-madori__footer">
                <li class="hako-madori__footerItem">
                    <img src="{{ Vite::asset('resources/images/hako/hako-img01.png') }}" alt="" class="hako-madori__footerImg">
                    <p class="hako-madori__footerItemTtl">自由な空間</p>
                    <p class="hako-madori__footerItemTxt">間があり、貫けがある自由な空間。壁や建具で空間を遮りすぎないオープン設計。家族みんなが気持ちいい、自由な場に。</p>
                </li>
                <li class="hako-madori__footerItem">
                    <img src="{{ Vite::asset('resources/images/hako/hako-img02.png') }}" alt="" class="hako-madori__footerImg">
                    <p class="hako-madori__footerItemTtl">国産杉の大空間</p>
                    <p class="hako-madori__footerItemTxt">高く開放的な三角天井、吹きヌケ階段、白茶色に塗装した大きな妻壁。国産杉に囲まれた大空間で、香りに癒やされます。</p>
                </li>
                <li class="hako-madori__footerItem">
                    <img src="{{ Vite::asset('resources/images/hako/hako-img03.png') }}" alt="" class="hako-madori__footerImg">
                    <p class="hako-madori__footerItemTtl">開放感のある縁側</p>
                    <p class="hako-madori__footerItemTxt">開放感と広がりを生み出す縁側。外の自然と、ご近所さんと、なにより家族がおおらかにつながり、ゆるやかな時間が流れます。</p>
                </li>
            </ul>

            <div class="hako-madori__price">
                <p class="hako-madori__ttl">間貫けのハコ 間取り 標準価格</p>
                <div class="hako-madori__price-wrap">
                    <div class="arrow-shape">
                        モデルプラン標準価格<br><span>(2025.04)</span>
                    </div>
                    <p class="hako-madori__price-txt">1,810万円〜2,149万円<br>
                        <span>（24.9坪）  　  （33.9坪）</span>
                    </p>
                </div>
                <p class="hako-madori__price-caption">
                    ＜BESSの標準価格について＞<br>
                    ・BESSでは、省エネルギー基準で定められる地域区分および積雪や凍結の気象条件などにより全国を6つの地域(区分A～F)に分け、各条件に対応する地域標準仕様とそれを反映した地域標準価格を採用しています。
                </p>
                <p class="hako-madori__price-caption">
                    ・標準価格には、地域標準仕様を反映した建物本体価格に加え、「その他建築費」の仮設工事費等をあらかじめ含んでいます。その他、地盤改良、準防火仕様等、建設地条件により異なる内容に関しては、別途お見積りいたします。
                </p>
                <p class="hako-madori__price-caption">
                    ※表示価格は「区分E」に該当します。建設のご予定地域がどの地域に該当するかは、お近くのLOGWAYまでお問い合わせください。
                </p>
            </div>

            <div class="hako-madori__voice">
                <p class="hako-madori__voice-ttl">
                    VOICE FROM BESS
                </p>
                <p class="hako-madori__voice-txt">この家には、あえて"間がぬけている"場所があります。<br>
                    何を置くか、どう過ごすかは、住む人しだい。
                </p>
                <p class="hako-madori__voice-txt">正解のない余白こそが、暮らしをおもしろくする。<br>
                    そんな思いから生まれたのが、「間貫けのハコ」です。
                </p>
                <p class="hako-madori__voice-txt">ちょっと不思議で、ちょっと自由なこの家を、<br>
                    ぜひOPEN HOUSEで体感してみませんか？
                </p>
                <img src="{{ Vite::asset('resources/images/common/logo-green.png') }}" width="87" height="94" alt="BESS" class="hako-madori__voice-logo">
            </div>
        </div>
    </section>

    <!-- 購入のステップ -->
    <section class="step-sec common-sec" id="step" data-aos="fade-up" data-aos-duration="3000">
        <div class="step-inner">
            <h2 class="sec_ttl step">
                <span class="sub">購入のステップ</span><br>
                <span class="main">HOW TO BUY</span>
            </h2>

            <div class="step-wrap">
                <ul class="step-list">
                    <li class="step-item">
                        <div class="step-item-numArea">
                            <p class="step-item-num">1</p>
                            <p class="step-item-ttl">情報収集</p>
                        </div>
                        <p class="step-item-txt">
                            BESSのオープンハウスやワークショップに参加することで、実際の住み心地や生活イメージを掴みます。
                        </p>
                    </li>
                    <li class="step-item">
                        <div class="step-item-numArea">
                            <p class="step-item-num">2</p>
                            <p class="step-item-ttl">資金計画</p>
                        </div>
                        <p class="step-item-txt">
                            購入費用と自己資金・ローン返済額などを検討して、予算を決めましょう。
                        </p>
                    </li>
                    <li class="step-item">
                        <div class="step-item-numArea">
                            <p class="step-item-num">3</p>
                            <p class="step-item-ttl">土地決定</p>
                        </div>
                        <p class="step-item-txt">
                            希望エリアから、理想の家が建てられる条件の土地を探します。
                        </p>
                    </li>
                    <li class="step-item">
                        <div class="step-item-numArea">
                            <p class="step-item-num">4</p>
                            <p class="step-item-ttl">プラン決定</p>
                        </div>
                        <p class="step-item-txt">
                            自分たちのライフスタイルに合わせた間取りや設計プランを決定します。
                        </p>
                    </li>
                </ul>
                <ul class="step-list">
                    <li class="step-item">
                        <div class="step-item-numArea">
                            <p class="step-item-num">5</p>
                            <p class="step-item-ttl">ご契約</p>
                        </div>
                        <p class="step-item-txt">
                            見積り・建築スケジュールなどを確認。ご契約後、設計打合せや各種申請手続きを進めます。
                        </p>
                    </li>
                    <li class="step-item">
                        <div class="step-item-numArea">
                            <p class="step-item-num">6</p>
                            <p class="step-item-ttl">工事</p>
                        </div>
                        <p class="step-item-txt">
                            いよいよ家を建てます。地縄張り・基礎工事から始まり、仕上げ・検査まででおおよそ3ヶ月強。
                        </p>
                    </li>
                    <li class="step-item">
                        <div class="step-item-numArea">
                            <p class="step-item-num">7</p>
                            <p class="step-item-ttl">お引越し</p>
                        </div>
                        <p class="step-item-txt">
                            新居での新しい生活のスタートです。引越し会社やインフラ契約など事前準備をお忘れなく。
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- イベント情報 -->
    <section class="event-sec common-sec" id="event" data-aos="fade-up" data-aos-duration="3000">
        <div class="event-inner">
            <h2 class="sec_ttl event">
                <span class="sub">イベント情報</span><br>
                <span class="main">EVENT INFO</span>
            </h2>

            <div class="event-wrap">
                <ul class="event-list">
                    <li class="event-item">
                        <div class="event-item-left">
                            <img class="u-pcDb" src="{{ Vite::asset('resources/images/event/event-img01.jpg') }}" width="282" height="284" alt="">
                            <div class="event-item-ttlArea">
                                <div class="event-item-ttlAreaWrap">
                                    <div class="event-item-ttlAreaWrapInner">
                                        <p class="event-item-date">2025.04.01</p>
                                        <p class="event-item-ttl">【GWは、BESS札幌へいこうよ!】<br>BESSの木の家でコーヒー焙煎体験</p>
                                    </div>
                                    <img class="u-spDb" src="{{ Vite::asset('resources/images/event/event-img01.jpg') }}" width="282" height="284" alt="">
                                </div>
                                <p class="event-item-scedule">
                                    日時: GW期間中（水曜・木曜除く）<br>
                                    10:00〜16:00<br>
                                    場所: LOGWAY
                                </p>
                                <a href="https://sapporo.bess.jp/#pickup" target="_blank" class="event-item-link">詳細・見学予約</a>
                            </div>
                        </div>
                        <div class="event-item-txtArea">
                            <p class="event-item-txt">《BESSの木の家でコーヒー焙煎体験》</p>
                            <p class="event-item-txt">コーヒー豆の炒り具合で変わるコーヒーの味生豆を炒って、自分好みの味を見つけてみませんか？<br>
                                てまひまかけた分、淹れたての一杯はきっと格別です。ぜひLOGWAYのお好きな場所でゆっくりと味わってください。</p>
                            <p class="event-item-txt u-bold">…続きを読む</p>
                        </div>
                    </li>
                    <li class="event-item">
                        <div class="event-item-left">
                            <img class="u-pcDb" src="{{ Vite::asset('resources/images/event/event-img02.jpg') }}" width="282" height="284" alt="">
                            <div class="event-item-ttlArea">
                                <div class="event-item-ttlAreaWrap">
                                    <div class="event-item-ttlAreaWrapInner">
                                        <p class="event-item-date">2025.04.01</p>
                                        <p class="event-item-ttl">【GWは、BESS札幌へいこうよ!】<br>木を使ってDIY!ミニチェア・ラックづくり</p>
                                    </div>
                                    <img class="u-spDb" src="{{ Vite::asset('resources/images/event/event-img02.jpg') }}" width="282" height="284" alt="">
                                </div>
                                <p class="event-item-scedule">
                                    日時: 5月3日、4日、5日、6日 10:00〜13:00<br>場所: LOGWAY
                                </p>
                                <a href="https://sapporo.bess.jp/#pickup" target="_blank" class="event-item-link">詳細・見学予約</a>
                            </div>
                        </div>
                        <div class="event-item-txtArea">
                            <p class="event-item-txt">
                                心地よい春の訪れを感じながら、"てまひまかける暮らし"を体感できるBESSならではのイベントを開催！<br>
                                オリジナルの木製カッティングボードを作ってみませんか?<br>
                                ミニラック*材料費：1,600円(1日5組限定となります)<br>
                                ミニチェア*材料費：2,000円(1日5組限定となります)
                            </p>
                            <p class="event-item-txt u-bold">…続きを読む</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- 住まいの性能 -->
    <section class="spec-sec common-sec" id="spec" data-aos="fade-up" data-aos-duration="3000">
        <div class="spec-inner">
            <div class="spec-ttlArea">
                <h2 class="sec_ttl spec">
                    <span class="sub">住まいの性能</span><br>
                    <span class="main">SPEC INSIGHTS</span>
                </h2>
                <p class="spec-ttl-lead">地震や火事に強く、丈夫で長持ちする木の住まい。<br>BESSは独自の開発・技術により、その性能と品質をさらに高めています。</p>
            </div>

            <div class="spec-wrap">
                <ul class="spec-list">
                    <li class="spec-item">
                        <div class="spec-item-left">
                            <div class="spec-item-txtArea">
                                <p class="spec-item-cat">
                                    <span>耐　震</span>
                                    <span class="border"></span>
                                    <span>性　能</span>
                                </p>
                                <p class="spec-item-ttl">
                                    地震に自信あり<br>木の壁自体が"制震装置"
                                </p>
                                <p class="spec-item-txt">
                                    横に積んだ丸太を「木くさび(ダボ)」でしっかり固定し、一体化した構造になっています。地震が起きると、丸太同士が少しずつずれながら摩擦の力で揺れをやわらげます。<br>
                                    さらに、ダボがくさびのように抵抗力を発揮することで、より大きな揺れも抑えられます。その結果、建物全体がしなやかに揺れを受け止め、被害を受けにくい構造となります。
                                </p>
                            </div>
                        </div>
                        <div class="spec-item-imgArea">
                            <figure class="spec-item-fig01">
                                <img src="{{ Vite::asset('resources/images/spec/spec-img01.jpg') }}" width="445" height="187" alt="">
                                <figcaption class="spec-item-caption">ログ材同士を一体化し、横ずれを防ぐための鋼製のダボ。</figcaption>
                            </figure>
                            <div class="spec-item-fig2clum">
                                <figure class="spec-item-fig02">
                                    <img src="{{ Vite::asset('resources/images/spec/spec-img02.jpg') }}" width="192" height="135" alt="">
                                    <figcaption class="spec-item-caption">BESS独自の耐震実験<br>（2004年）</figcaption>
                                </figure>
                                <figure class="spec-item-fig02">
                                    <img src="{{ Vite::asset('resources/images/spec/spec-img03.jpg') }}" width="192" height="135" alt="">
                                    <figcaption class="spec-item-caption">日本ログハウス協会による<br>実物大実験（2007年）</figcaption>
                                </figure>
                            </div>
                        </div>
                    </li>
                    <li class="spec-item">
                        <div class="spec-item-left">
                            <div class="spec-item-txtArea">
                                <p class="spec-item-cat">
                                    <span>耐　火</span>
                                    <span class="border"></span>
                                    <span>性　能</span>
                                </p>
                                <p class="spec-item-ttl">
                                    炎に負けず<br>太い木材は燃えにくい
                                </p>
                                <p class="spec-item-txt">
                                    木は燃えやすいイメージがありますが、実は太い木材は燃えにくいです。<br>
                                    ログハウスの太いログ材は、表面に炭素の層ができて酸素供給を遮断し、燃焼が内部に達する前に消えます。<br>
                                    さらに、ログを積み重ねた構造が燃えにくさを強化します。鉄やアルミニウムは熱で強度が低下しますが、ログハウスは火災時に類焼を抑え、逃げる時間や消火時間に余裕を持たせます。
                                </p>
                            </div>
                        </div>
                        <div class="spec-item-imgArea">
                            <figure class="spec-item-fig01">
                                <img src="{{ Vite::asset('resources/images/spec/spec-img04.jpg') }}" width="364" height="171" alt="">
                                <figcaption class="spec-item-caption">炭化膜（炭素の層）ができて燃焼が内部に達する前に消える。</figcaption>
                            </figure>
                            <div class="spec-item-fig2clum">
                                <figure class="spec-item-fig02">
                                    <img src="{{ Vite::asset('resources/images/spec/spec-img05.jpg') }}" width="312" height="158" alt="">
                                    <figcaption class="spec-item-caption">燃焼実験によって炭化膜が形成され、<br>内部までは燃えていないログ材。</figcaption>
                                </figure>
                            </div>
                        </div>
                    </li>
                    <li class="spec-item">
                        <div class="spec-item-left">
                            <div class="spec-item-txtArea">
                                <p class="spec-item-cat">
                                    <span>耐　久</span>
                                    <span class="border"></span>
                                    <span>性　能</span>
                                </p>
                                <p class="spec-item-ttl">
                                    愛着とともに<br>時を経ても強いまま
                                </p>
                                <p class="spec-item-txt">
                                    木材の強さは、100歳、200歳は当たり前。<br>
                                    木は腐りやすいイメージがありますが、木が腐る原因を取り除けば腐ることはありません。腐る4つの要素は、水分、酸素、温度、栄養。そのひとつでも欠ければ、腐朽菌は活動できません。十分に乾燥した材を使用するほか、結露を防ぐ設計、防腐塗料によるメンテナンスを怠らなければ、いつまでも美しい風合いを保つことができるのです。
                                </p>
                            </div>
                        </div>
                        <div class="spec-item-imgArea">
                            <figure class="spec-item-fig01">
                                <img src="{{ Vite::asset('resources/images/spec/spec-img06.jpg') }}" width="383" height="285" alt="">
                            </figure>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="sdgs-sec-top">
        <img src="{{ Vite::asset('resources/images/sdgs/sdgs-img01.jpg') }}" class="sdgs-sec-img01" width="790" height="517" alt="" data-aos="fade-up"  data-aos-duration="3000">
        <img src="{{ Vite::asset('resources/images/sdgs/sdgs-img02.jpg') }}" class="sdgs-sec-img02" width="563" height="350" alt="" data-aos="fade-up"  data-aos-duration="3000" data-aos-delay="300">
    </div>

    <!-- 住まいの性能 -->
    <section class="sdgs-sec common-sec" id="sdgs" data-aos="fade-up" data-aos-duration="3000">
        <div class="sdgs-inner">
            <div class="sdgs-wrap">
                <h2 class="human-ttl">
                    <img src="{{ Vite::asset('resources/images/common/logo-brown.png') }}" width="151" height="34" alt="BESS">
                    のサスティナビリティ
                </h2>

                <p class="sdgs-lead">
                    BESSでは、「人間も、自然の一部」という考え方のもと、<br>
                    自然の恵みを活かした、おおらかで心豊かな暮らしの提案を行っています。<br>
                    自然にとっても人間にとってもサスティナブルな事業活動を目指します。
                </p>

                <img src="{{ Vite::asset('resources/images/sdgs/sdgs-img03.jpg') }}" width="823" height="1131" alt="BESSの家　健康宣言">

                <div class="sdgs-foot">
                    <p class="sdgs-foot-ttl">BESSの家 健康宣言</p>
                    <p class="sdgs-foot-txt">BESSは、事業の軸に「健康」を据え、宣言として掲げています。<br>
                        この宣言を意識して行動することが、<br>
                        サスティナブルな社会へとつながると考えています。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- サポートシステム -->
    <section class="support-sec common-sec" id="support" data-aos="fade-up" data-aos-duration="3000">
        <div class="support-inner">
            <h2 class="sec_ttl support">
                <span class="sub">長く安心して暮らす サポートシステム</span><br>
                <span class="main">SUPPORT SYSTEM</span>
            </h2>

            <div class="support-wrap">
                <ul class="support-list">
                    <li class="support-item">
                        <img src="{{ Vite::asset('resources/images/support/support-logo01.jpg') }}" alt="メンテナンスサポート体制">
                        <p class="support-item-ttl">充実の<br>メンテナンスサポート</p>
                        <p class="support-item-txt">
                            定期診断、定期メンテナンス、メンテナンス費用の積立を組み合わせ、快適な暮らしを長期的にサポートします。
                        </p>
                    </li>
                    <li class="support-item">
                        <img src="{{ Vite::asset('resources/images/support/support-logo02.jpg') }}" alt="ログ壁腐朽保証">
                        <p class="support-item-ttl">ログ壁腐朽保証</p>
                        <p class="support-item-txt">
                            ログハウスにとって腐朽は大敵。より安心していただくために、BESSでは住宅業界で初めて引き渡し後5年間のログ壁腐朽保証を実現しました。
                        </p>
                    </li>
                    <li class="support-item">
                        <img src="{{ Vite::asset('resources/images/support/support-logo03.jpg') }}" alt="60年保証">
                        <p class="support-item-ttl">建物の基本性能を<br>しっかり守る60年保証</p>
                        <p class="support-item-txt">
                            BESSで責任施工した建物の構造躯体・防水に関わる住宅瑕疵を保証します。
                        </p>
                    </li>
                    <li class="support-item">
                        <img src="{{ Vite::asset('resources/images/support/support-logo04.jpg') }}" alt="メンテナンスサポート体制">
                        <p class="support-item-ttl">BESS推奨<br>薪ストーブだから安心</p>
                        <p class="support-item-txt">
                            1事故につき最大3億円までの補償が可能に。
                        </p>
                    </li>
                </ul>
                <ul class="support-list">
                    <li class="support-item">
                        <img src="{{ Vite::asset('resources/images/support/support-logo05.jpg') }}" alt="完成保証">
                        <p class="support-item-ttl">万一の時でも、<br>建物の完成を保証</p>
                        <p class="support-item-txt">
                            万一の際にも建物の完成までを保証する「役務保証」です。
                        </p>
                    </li>
                    <li class="support-item">
                        <img src="{{ Vite::asset('resources/images/support/support-logo06.jpg') }}" alt="設備保証長期5年">
                        <p class="support-item-ttl">メーカー保証を超える<br>長期保証</p>
                        <p class="support-item-txt">
                            キッチン、バスなどの設備の保証は、住宅設備メーカ一保証(1年〜2年)を超える充実の保証で安心です。
                        </p>
                    </li>
                    <li class="support-item">
                        <img src="{{ Vite::asset('resources/images/support/support-logo07.jpg') }}" alt="我が家のカルテ">
                        <p class="support-item-ttl">専用サイトに<br>「我が家のカルテ」スタート</p>
                        <p class="support-item-txt">
                            新築時の設計情報や定期診断やメンテナンス履歴、ご自身のお手入れ記録などを集約し、かかりつけ医のカルテのように、住まいの状況を長期にわたり管理していくので安心です。
                        </p>
                    </li>
                    <li class="support-item">
                        <img src="{{ Vite::asset('resources/images/support/support-logo08.jpg') }}" alt="お手入れバックアップ">
                        <p class="support-item-ttl">ユーザーご自身のお手入れをバックアップします</p>
                        <p class="support-item-txt">
                            自分でお手入れしていくことも、木の家が長持ちする秘訣です。お手入れのポイントを冊子や専用サイトでサポート動画、メルマガなどでわかりやすく解説しています。
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- フォーム -->
    <section class="form-sec common-sec" id="form" data-aos="fade-up" data-aos-duration="3000">
        <div class="form-inner">
            <h2 class="sec_ttl form">
                <span class="sub">開催中の住宅見学予約フォーム</span><br>
                <span class="main">RESERVE FORM</span>
            </h2>

            <div class="form-wrap">
                <form id="contactForm" method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                    <!-- 第一来場希望日 -->
                    <div class="form-group">
                        <label class="form-label" for="first_visit_date"><span>必須</span>第一来場希望日</label>
                        <div class="form-group-inner">
                            <div style="width: 45%;">
                                <input type="date" id="first_visit_date" name="first_visit_date" style="width: 100%;">
                            </div>
                            <div style="width: 48%;">
                                <select id="first_visit_time" name="first_visit_time" style="width: 100%;">
                                    <option value="">時間を選択</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <!-- 送信ボタン -->
                    <div class="form-group u-submit">
                        <button type="submit" class="submit-btn">
                            送信する
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<footer class="siteFooter">
    <div class="siteFooter-map">
        <div class="siteFooter-map-inner">
            <div class="siteFooter-map-left">
                <img src="./_assets/images/common/logo-white.png" width="88" height="95" alt="BESS">
                <p class="siteFooter-map-txt">BESS札幌</p>
                <p class="siteFooter-map-txt">〒069-0806 北海道江別市新栄台2番地の23</p>
                <ul class="siteFooter-map-list">
                    <li class="siteFooter-map-item">
                        <p class="siteFooter-map-item-ttl">電話</p>
                        <p class="siteFooter-map-item-txt">011-391-6664</p>
                    </li>
                    <li class="siteFooter-map-item">
                        <p class="siteFooter-map-item-ttl">営業時間</p>
                        <p class="siteFooter-map-item-txt">10:00〜18:00</p>
                    </li>
                    <li class="siteFooter-map-item">
                        <p class="siteFooter-map-item-ttl">定休日</p>
                        <p class="siteFooter-map-item-txt">水・木(祝日は営業)</p>
                    </li>
                </ul>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2912.6530934474586!2d141.50732561257152!3d43.111804787156494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b31fff192dc49%3A0x4459ca25e073f3ce!2zQkVTU-acreW5jA!5e0!3m2!1sja!2sjp!4v1748194111040!5m2!1sja!2sjp" width="554" height="318" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="siteFooter-access">
        <a href="https://aun-mypage.tools/web/visual/show/676d2f8de6d3d1379c0e1968eb69cf6a6ba4a6c1#:~:text=22%2009%3A06-,https%3A//www.google.com/maps/d/u/0/viewer%3Fmid%3D1W8sFn1wPAx%2DxaY11TzR5pItOHZdoQ_sD%26ll%3D43.11188928195565%252C141.5101182%26z%3D20,-%E8%BF%94%E4%BF%A1" target="_blank" class="siteFooter-access-link">Google Map</a>
        <div class="siteFooter-access-inner">
            <p class="siteFooter-access-ttl">ACCESS</p>
            <div class="siteFooter-access-item">
                <p class="siteFooter-access-item__ttl">
                    車でお越しの場合
                </p>
                <p class="siteFooter-access-item__txt">
                    道央自動車道 江別西I.C.より約5分
                </p>
            </div>
            <div class="siteFooter-access-item">
                <p class="siteFooter-access-item__ttl">
                    電車でお越しの場合
                </p>
                <p class="siteFooter-access-item__txt">
                    JR野幌駅より中央バス江別錦町線にて6丁目入口下車<br>徒歩約8分
                </p>
            </div>
        </div>
    </div>

    <div class="inner__cont">
        <p class="copyrights">&copy; COPYRIGHT (C)BESS SAPPORO. ALL RIGHTS RESERVED</p>
    </div>
</footer>

<!-- Scripts-->
{{--<script src="{{ Vite::asset('resources/lib/polyfill/smoothscroll.min') }}.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.3/js/swiper.min.js"></script>--}}
<script>
    // 今日の日付を取得してmin属性に設定（過去の日付を選択不可にする）
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('first_visit_date').setAttribute('min', today);
    document.getElementById('second_visit_date').setAttribute('min', today);

    // 第一希望日が選択された時、第二希望日の最小値を更新
    document.getElementById('first_visit_date').addEventListener('change', function() {
        const firstDate = this.value;
        const secondDateInput = document.getElementById('second_visit_date');

        // 第一希望日以降の日付のみ選択可能にする
        if (firstDate) {
            secondDateInput.setAttribute('min', firstDate);

            // もし第二希望日が第一希望日より前の場合、リセット
            if (secondDateInput.value && secondDateInput.value < firstDate) {
                secondDateInput.value = '';
            }
        }
    });

    // フォーム送信時のバリデーション
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        const firstDate = document.getElementById('first_visit_date').value;
        const secondDate = document.getElementById('second_visit_date').value;

        if (firstDate && secondDate && firstDate === secondDate) {
            const firstTime = document.getElementById('first_visit_time').value;
            const secondTime = document.getElementById('second_visit_time').value;

            if (firstTime === secondTime) {
                e.preventDefault();
                alert('第一希望と第二希望で同じ日時が選択されています。異なる日時を選択してください。');
                return false;
            }
        }
    });
</script>
</body>
</html>
