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
                <article id="post-192" class="post-192 page type-page status-publish" itemtype="https://schema.org/CreativeWork" itemscope>
                    <div class="inside-article">
                        <header class="entry-header">
                            <h1 class="entry-title" itemprop="headline">Раҳбарият</h1>
                        </header>
                        <div class="entry-content" itemprop="text">
                            <div data-elementor-type="wp-page" data-elementor-id="192" class="elementor elementor-192">
                                <!-- First Section -->
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-6955463f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6955463f" data-element_type="section" style="display: flex; align-items: center; margin-bottom: 40px;">
                                    <img fetchpriority="high" decoding="async" class="alignnone wp-image-3482 size-medium" src="{{ Vite::asset('resources/images/1.jpg') }}" alt="" style="width: 200px; height: 200px; object-fit: cover; margin-right: 20px;" />
                                    <div>
                                        <p><strong>Техник жихатдан тартибга солиш соҳасида назорат инспекцияси бошлиғи</strong></p>
                                        <p><strong><strong>Абдурахманов Азамат Абдулхакимович</strong></strong></p>
                                        <p>Биографияси;</p>
                                        <p>Телефон: (71) 202 00 11(1800)</p>
                                        <p>Қабул кунлари: Пайшанба 08-00 дан 11-00 гача</p>
                                    </div>
                                </section>

                                <!-- Second Section -->
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-7bc34d1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7bc34d1" data-element_type="section" style="display: flex; align-items: center;">
                                    <img decoding="async" class="alignnone size-medium wp-image-3487" src="{{ Vite::asset('resources/images/2.jpg') }}" alt="" style="width: 200px; height: 200px; object-fit: cover; margin-right: 20px;" />
                                    <div>
                                        <p><strong>Техник жихатдан тартибга солиш соҳасида назорат инспекцияси бошлиғи уринбосари</strong></p>
                                        <p><b>Ниезов Сухбатжон Абдумуталибович</b></p>
                                        <p>Биографияси;</p>
                                        <p>Телефон: (71) 202 00 11(1801)</p>
                                        <p>Қабул кунлари: Пайшанба 08-00 дан 11-00 гача</p>
                                    </div>
                                </section>
                            </div>
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

{{--footer qismi--}}
@include('partials.footer')


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
