<!DOCTYPE html>
<html lang="ru-RU">
@include('partials.header')


<body
    class="page-template-default page page-id-258 page-child parent-pageid-87 wp-custom-logo wp-embed-responsive post-image-aligned-center sticky-menu-fade mobile-header mobile-header-logo mobile-header-sticky right-sidebar nav-below-header one-container fluid-header active-footer-widgets-3 nav-search-enabled nav-aligned-left header-aligned-left dropdown-hover elementor-default elementor-kit-12"
    itemtype="https://schema.org/WebPage" itemscope>
<a class="screen-reader-text skip-link" href="#content" title="Перейти к содержимому">Перейти к содержимому</a>
<header class="site-header" id="masthead" aria-label="Сайт" itemtype="https://schema.org/WPHeader" itemscope>
    <div class="inside-header grid-container grid-parent">
        <div class="site-branding-container">
            <div class="site-logo">
                <a href="{{route('index')}}" rel="home">
                    <img class="header-image is-logo-image"
                         alt="TEXNIK JIHATDAN TARTIBGA SOLISH SOHASIDA NAZORAT INSPEKSIYASI"
                         src="{{ Vite::asset('resources/images/LOGO.svg') }}">
                </a>
            </div>
            <div class="site-branding">
                <p class="main-title" itemprop="headline">
                    <a href="{{route('index')}}" rel="home">TEXNIK JIHATDAN TARTIBGA SOLISH SOHASIDA NAZORAT
                        INSPEKSIYASI</a>
                </p>

            </div>
        </div>
    </div>
</header>
{{--menu qismi--}}
@include('partials.menu')

<div class="site grid-container container hfeed grid-parent" id="page">
    <div class="site-content" id="content">

        <div class="content-area grid-parent mobile-grid-100 grid-75 tablet-grid-75" id="primary">
            <main class="site-main" id="main">

                <article id="post-3421" class="post-3421 page type-page status-publish" itemtype="https://schema.org/CreativeWork" itemscope>
                    <div class="inside-article">

                        <header class="entry-header">
                            <h1 class="entry-title" itemprop="headline">Ma`qullash hujjatlari</h1>
                        </header>
                        <div class="entry-content" itemprop="text">
                            <p><a href="https://depstan.uz/wp-content/uploads/2024/07/buyurtma.docx">Buyurtma</a></p>
                            <p><a href="https://depstan.uz/wp-content/uploads/2024/07/texnik-pasporti.docx">Texnik passport</a></p>
                            <p><a href="https://depstan.uz/wp-content/uploads/2024/07/maqullash-sohasi.docx">Ma&#8217;qullash sohasi</a></p>
                            <p><em>Ma&#8217;qullash hujjatlarini yuborish uchun elektron pochta: <a href="mailto:approval@depstan.uz">approval@depstan.uz</a></em></p>
                            <p></p>
                        </div>
                    </div>
                </article>
            </main>
        </div>

        <div class="widget-area sidebar is-right-sidebar grid-25 tablet-grid-25 grid-parent" id="right-sidebar">
            <div class="inside-right-sidebar">
                <aside id="recent-posts-2" class="widget inner-padding widget_recent_entries">
                    <h2 class="widget-title">Сўнгги янгиликлар</h2>
                    <ul>
                        <li>
                            <a href="https://depstan.uz/2022/11/22/yangi-mehnat-kodeksidagi-ozgarishlar/">Янги Меҳнат Кодексидаги ўзгаришлар</a>
                        </li>
                        <li>
                            <a href="https://depstan.uz/2022/11/22/2826/">O&#8217;zbekiston Respublikasi Mehnat Kodeksiga kiritilgan o&#8217;zgartirishlar</a>
                        </li>
                        <li>
                            <a href="https://depstan.uz/2022/08/30/oziq-ovqat-mahsulotlarini-tamgalashga-qoyilgan-talablar/">OZIQ OVQAT MAHSULOTLARINI TAMG`ALASHGA QO`YILGAN TALABLAR…</a>
                        </li>
                        <li>
                            <a href="https://depstan.uz/2022/08/10/importni-ornini-bosuvchi-eksportbob-mahsulotlar-organildi/">IMPORTNI O`RNINI BOSUVCHI EKSPORTBOB MAHSULOTLAR O`RGANILDI.</a>
                        </li>
                        <li>
                            <a href="https://depstan.uz/2022/08/09/xalqaro-ekspertlar-boshchiligida-treyning-seminar/">XALQARO EKSPERTLAR BOSHCHILIGIDA TREYNING SEMINAR&#8230;</a>
                        </li>
                    </ul>

                </aside>
            </div>
        </div>

    </div>
</div>


<div class="site-footer">
    <footer class="site-info" aria-label="Сайт" itemtype="https://schema.org/WPFooter" itemscope>
        <div class="inside-site-info grid-container grid-parent">
            <div class="copyright-bar">
                <span class="copyright">&copy; 2024 TEXNIK JIHATDAN TARTIBGA SOLISH SOHASIDA NAZORAT INSPEKSIYASI</span> &bull; Создано с помощью <a href="https://generatepress.com" itemprop="url">GeneratePress</a> </div>
        </div>
    </footer>
</div>

<script id="generate-a11y">
    !function () {
        "use strict";
        if ("querySelector" in document && "addEventListener" in window) {
            var e = document.body;
            e.addEventListener("mousedown", function () {
                e.classList.add("using-mouse")
            }), e.addEventListener("keydown", function () {
                e.classList.remove("using-mouse")
            })
        }
    }();
</script>
<script type='text/javascript'>
    const lazyloadRunObserver = () => {
        const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
        const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    let lazyloadBackground = entry.target;
                    if (lazyloadBackground) {
                        lazyloadBackground.classList.add('e-lazyloaded');
                    }
                    lazyloadBackgroundObserver.unobserve(entry.target);
                }
            });
        }, {
            rootMargin: '200px 0px 200px 0px'
        });
        lazyloadBackgrounds.forEach((lazyloadBackground) => {
            lazyloadBackgroundObserver.observe(lazyloadBackground);
        });
    };
    const events = [
        'DOMContentLoaded',
        'elementor/lazyload/observe',
    ];
    events.forEach((event) => {
        document.addEventListener(event, lazyloadRunObserver);
    });
</script>
<script></script>
<!-- Pageviews SDK -->
<script>
    var _pv_config = {
        "account": "35e12d4f15d82fa24413204390dcdac7ccd7b15e",
        "incr": 258,
        "base": "https:\/\/pv.pjtsu.com\/v1"
    };
    (function () {
        var js = document.createElement('script');
        js.type = 'text/javascript';
        js.async = true;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(js, s);
    })();
</script>
<script id="generate-menu-js-extra">
    var generatepressMenu = {
        "toggleOpenedSubMenus": "1",
        "openSubMenuLabel": "\u041e\u0442\u043a\u0440\u044b\u0442\u044c \u043f\u043e\u0434\u043c\u0435\u043d\u044e",
        "closeSubMenuLabel": "\u0417\u0430\u043a\u0440\u044b\u0442\u044c \u043f\u043e\u0434\u043c\u0435\u043d\u044e"
    };
</script>
<script id="generate-navigation-search-js-extra">
    var generatepressNavSearch = {
        "open": "\u041e\u0442\u043a\u0440\u044b\u0442\u044c \u0441\u0442\u0440\u043e\u043a\u0443 \u043f\u043e\u0438\u0441\u043a\u0430",
        "close": "\u0417\u0430\u043a\u0440\u044b\u0442\u044c \u043f\u0430\u043d\u0435\u043b\u044c \u043f\u043e\u0438\u0441\u043a\u0430"
    };
</script>
</body>

</html>
