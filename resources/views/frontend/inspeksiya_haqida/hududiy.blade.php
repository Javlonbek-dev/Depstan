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
<nav id="mobile-header" data-auto-hide-sticky="true"
     class="main-navigation mobile-header-navigation has-branding has-sticky-branding"
     itemtype="https://schema.org/SiteNavigationElement" itemscope>
    <div class="inside-navigation grid-container grid-parent">
        <form method="get" class="search-form navigation-search" action="{{route('index')}}">
            <input type="search" class="search-field" value="" name="s" title="Поиск"/>
        </form>
        <div class="site-logo mobile-header-logo">
            <a href="{{route('index')}}" title="TEXNIK JIHATDAN TARTIBGA SOLISH SOHASIDA NAZORAT INSPEKSIYASI"
               rel="home">
                <img src="{{ Vite::asset('resources/images/LOGO.svg') }}"
                     alt="TEXNIK JIHATDAN TARTIBGA SOLISH SOHASIDA NAZORAT INSPEKSIYASI"/>
            </a>
        </div>
        <div class="mobile-bar-items">
            <span class="search-item">
				<a aria-label="Открыть строку поиска" href="#"></a>
			</span>
        </div>
        <button class="menu-toggle" aria-controls="mobile-menu" aria-expanded="false">
            <span class="mobile-menu">Меню</span>
        </button>
        <div id="primary-menu" class="main-nav">
            <ul id="menu-bosh-menyu-4" class=" menu sf-menu">
                <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-40 current_page_item menu-item-79">
                    <a href="{{route('index')}}" aria-current="page">Bosh sahifa</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-521">
                    <a href="{{route('index')}}">
                        Inspeksiya haqida<span role="presentation" class="dropdown-menu-toggle"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-571">
                            <a href="{{route('general_information')}}">Umumiy maʼlumot</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-570">
                            <a href="{{route('management')}}">Rahbariyat</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-569">
                            <a href="{{route('regional_department')}}">Hududiy boʻlinmalar</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-568">
                            <a href="{{route('structure')}}">Tashkiliy tuzilma</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-567">
                            <a href="{{route('higher_authority')}}">Yuqori turuvchi organ</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-600">
                    <a href="{{route('index')}}">
                        Hujjatlar<span role="presentation" class="dropdown-menu-toggle"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3426">
                            <a href="{{route('approval_files')}}">Ma`qullash hujjatlari</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-653">
                            <a href="{{route('laws')}}">Oʻzbekiston Respublikasi Qonunlari</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-652">
                            <a href="{{route('decrees')}}">Prezidentining farmon va qarorlari</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-651">
                            <a href="{{route('minister_law')}}">Vazirlar Mahkamasi qaror va farmoyishlari</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-650">
                            <a href="{{route('standard_documents')}}">Boshqa me &#8217;yoriy-huquqiy hujjatlar</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-649">
                            <a href="{{route('weak_norm_documents')}}">Kuchini yo`qotgan meyoriy hujjatlar</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-693">
                    <a href="{{route('index')}}">
                        Axborot xizmati<span role="presentation" class="dropdown-menu-toggle"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-757">
                            <a href="{{route('press_release')}}">Press-reliz</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-756">
                            <a href="{{route('media_representatives')}}">OAV vakillarini akkreditatsiya qilish</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-755">
                            <a href="{{route('photo_gallery')}}">Foto galereya</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-758">
                            <a href="{{route('video_gallery')}}">Video galereya</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-761">
                            <a href="{{route('publications')}}">Nashrlar</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-754">
                            <a href="{{route('ads_tenders')}}">E &#8217;lonlar va tenderlar</a>
                        </li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-752">
                            <a href="{{route('analytical_data')}}">Tahliliy ma &#8217;lumotlar</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1400">
                            <a href="{{route('state_budget')}}">Davlat byudjetining ijrosi</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1719">
                            <a href="{{route('presentations')}}">Taqdimotlar</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-766">
                    <a href="{{route('index')}}">
                        Faoliyat<span role="presentation" class="dropdown-menu-toggle"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-786">
                            <a href="{{route('state_control')}}">Davlat nazorati boʻyicha</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2734">
                            <a href="{{route('corruption')}}">Antikorrupsiya</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2759">
                            <a href="{{route('application_accept')}}">Murojaatlarni qabul qilish</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-883">
                    <a href="{{route('index')}}">
                        Xizmatlar<span role="presentation" class="dropdown-menu-toggle"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-887">
                            <a href="{{route('open_data')}}">Ochiq maʼlumotlar</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-885">
                            <a href="{{route('export_help')}}">Eksport qiluvchiga yordam</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-884">
                            <a href="{{route('consumption_help')}}">Iste &#8217;molchiga yordam</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-886">
                            <a href="{{route('citizens')}}">Fuqarolar murojaatlari</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-888">
                            <a href="{{route('complaint_application')}}">Shikoyat va arizalar</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-889">
                            <a href="{{route('interactive_services')}}">Interaktiv xizmatlar</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1323">
                    <a href="{{route('vacancy')}}">Bo &#8217;sh ish o &#8217;rinlari</a>
                </li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1106">
                    <a href="{{route('young')}}">Yoshlar siyosati</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- .inside-navigation -->
</nav>
<!-- #site-navigation -->
<nav class="main-navigation sub-menu-right" id="site-navigation" aria-label="Основной"
     itemtype="https://schema.org/SiteNavigationElement" itemscope>
    <div class="inside-navigation grid-container grid-parent">
        <form method="get" class="search-form navigation-search" action="{{route('index')}}">
            <input type="search" class="search-field" value="" name="s" title="Поиск"/>
        </form>
        <div class="mobile-bar-items">
                <span class="search-item">
				<a aria-label="Открыть строку поиска" href="#">
									</a>
			</span>
        </div>
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <span class="mobile-menu">Меню</span></button>
        <div id="primary-menu" class="main-nav">
            <ul id="menu-bosh-menyu-4" class=" menu sf-menu">
                <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-40 current_page_item menu-item-79">
                    <a href="{{route('index')}}" aria-current="page">Bosh sahifa</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-521">
                    <a href="{{route('index')}}">
                        Inspeksiya haqida<span role="presentation" class="dropdown-menu-toggle"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-571">
                            <a href="{{route('general_information')}}">Umumiy maʼlumot</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-570">
                            <a href="{{route('management')}}">Rahbariyat</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-569">
                            <a href="{{route('regional_department')}}">Hududiy boʻlinmalar</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-568">
                            <a href="{{route('structure')}}">Tashkiliy tuzilma</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-567">
                            <a href="{{route('higher_authority')}}">Yuqori turuvchi organ</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-600">
                    <a href="{{route('index')}}">
                        Hujjatlar<span role="presentation" class="dropdown-menu-toggle"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3426">
                            <a href="{{route('approval_files')}}">Ma`qullash hujjatlari</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-653">
                            <a href="{{route('laws')}}">Oʻzbekiston Respublikasi Qonunlari</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-652">
                            <a href="{{route('decrees')}}">Prezidentining farmon va qarorlari</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-651">
                            <a href="{{route('minister_law')}}">Vazirlar Mahkamasi qaror va farmoyishlari</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-650">
                            <a href="{{route('standard_documents')}}">Boshqa me &#8217;yoriy-huquqiy hujjatlar</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-649">
                            <a href="{{route('weak_norm_documents')}}">Kuchini yo`qotgan meyoriy hujjatlar</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-693">
                    <a href="{{route('index')}}">
                        Axborot xizmati<span role="presentation" class="dropdown-menu-toggle"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-757">
                            <a href="{{route('press_release')}}">Press-reliz</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-756">
                            <a href="{{route('media_representatives')}}">OAV vakillarini akkreditatsiya qilish</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-755">
                            <a href="{{route('photo_gallery')}}">Foto galereya</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-758">
                            <a href="{{route('video_gallery')}}">Video galereya</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-761">
                            <a href="{{route('publications')}}">Nashrlar</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-754">
                            <a href="{{route('ads_tenders')}}">E &#8217;lonlar va tenderlar</a>
                        </li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-752">
                            <a href="{{route('analytical_data')}}">Tahliliy ma &#8217;lumotlar</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1400">
                            <a href="{{route('state_budget')}}">Davlat byudjetining ijrosi</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1719">
                            <a href="{{route('presentations')}}">Taqdimotlar</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-766">
                    <a href="{{route('index')}}">
                        Faoliyat<span role="presentation" class="dropdown-menu-toggle"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-786">
                            <a href="{{route('state_control')}}">Davlat nazorati boʻyicha</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2734">
                            <a href="{{route('corruption')}}">Antikorrupsiya</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2759">
                            <a href="{{route('application_accept')}}">Murojaatlarni qabul qilish</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-883">
                    <a href="{{route('index')}}">
                        Xizmatlar<span role="presentation" class="dropdown-menu-toggle"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-887">
                            <a href="{{route('open_data')}}">Ochiq maʼlumotlar</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-885">
                            <a href="{{route('export_help')}}">Eksport qiluvchiga yordam</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-884">
                            <a href="{{route('consumption_help')}}">Iste &#8217;molchiga yordam</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-886">
                            <a href="{{route('citizens')}}">Fuqarolar murojaatlari</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-888">
                            <a href="{{route('complaint_application')}}">Shikoyat va arizalar</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-889">
                            <a href="{{route('interactive_services')}}">Interaktiv xizmatlar</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1323">
                    <a href="{{route('vacancy')}}">Bo &#8217;sh ish o &#8217;rinlari</a>
                </li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1106">
                    <a href="{{route('young')}}">Yoshlar siyosati</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="site grid-container container hfeed grid-parent" id="page">
				<div class="site-content" id="content">
	<div class="content-area grid-parent mobile-grid-100 grid-75 tablet-grid-75" id="primary">
		<main class="site-main" id="main">

<article id="post-547" class="post-547 page type-page status-publish" itemtype="https://schema.org/CreativeWork" itemscope="">
	<div class="inside-article">
			<header class="entry-header">
                <h1 class="entry-title" itemprop="headline">Hududiy boʻlinmalar</h1>
            </header>
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
					<a href="https://depstan.uz/2024/02/15/fast-withdrawal-online-casino-in-australia-a-wealth-of-bonuses-for-new-and-regular-players-alike/">Fast Withdrawal Online Casino in Australia: A Wealth of Bonuses for New and Regular Players Alike</a>
									</li>
											<li>
					<a href="https://depstan.uz/2024/01/18/rocket-play-good-casino-no-negative-experiences-so-far/">Rocket Play good casino, no negative experiences so far</a>
									</li>
											<li>
					<a href="https://depstan.uz/2023/10/18/all-casinos-that-accept-ezeewallet-as-a-banking-method/">All Casinos That Accept eZeeWallet as a Banking Method</a>
									</li>
											<li>
					<a href="https://depstan.uz/2023/09/20/1/">1</a>
									</li>
											<li>
					<a href="https://depstan.uz/2022/11/22/yangi-mehnat-kodeksidagi-ozgarishlar/">Янги Меҳнат Кодексидаги ўзгаришлар</a>
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
                <span class="copyright">&copy; 2024 TEXNIK JIHATDAN TARTIBGA SOLISH SOHASIDA NAZORAT INSPEKSIYASI</span> </div>
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
