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

                <article id="post-631" class="post-631 page type-page status-publish" itemtype="https://schema.org/CreativeWork" itemscope>
                    <div class="inside-article">

                        <header class="entry-header">
                            <h1 class="entry-title" itemprop="headline">Vazirlar Mahkamasi qaror va farmoyishlari</h1>
                        </header>


                        <div class="entry-content" itemprop="text">
                            <div data-elementor-type="wp-page" data-elementor-id="631" class="elementor elementor-631">
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-58379e36 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="58379e36" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-31e30a4d" data-id="31e30a4d" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-12795a6d elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="12795a6d" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/pdfs/4481469" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/pdfs/4481469">
                                                                        Yuridik va jismoniy shaxslarning elektr energiyasi, tabiiy gaz, ichimlik va issiq suvni hisobga olish uskunalarini (hisoblagichlarni) yechish, qiyoslashdan oʻtkazish va oʻrnatish boʻyicha davlat xizmatlari koʻrsatishning maʼmuriy reglamentlarini tasdiqlash toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 20.08.2019 Raqami: 698-son </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-208d6a27 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="208d6a27" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/pdfs/4305425" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/pdfs/4305425">
                                                                        Muvofiqlikni baholash organlarini akkreditatsiyadan oʻtkazish sohasidagi ishlarni takomillashtirishga doir qoʻshimcha chora-tadbirlar toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 24.04.2019 Raqami: 349-son </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4d4b6c58 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="4d4b6c58" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/pdfs/4305020" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/pdfs/4305020">
                                                                        Oʻzbekiston standartlashtirish, metrologiya va sertifikatlashtirish agentligining faoliyatini yana-da takomillashtirish chora-tadbirlari toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 24.04.2019 Raqami: 348-son </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-6869625f elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="6869625f" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/4241164" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/4241164">
                                                                        “Oʻzstandart” agentligi huzuridagi Standartlashtirish, sertifikatlashtirish va texnik jihatdan tartibga solish ilmiy-tadqiqot instituti faoliyatini tashkil etish toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 14.03.2019 Raqami: 220-son </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-286106f8 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="286106f8" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/3912636" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/3912636">
                                                                        Gaz ballonlari bilan jihozlangan avtotransport vositalari, shuningdek, tabiiy gazda ishlaydigan markazlashtirilgan qozonxonalardan bexatar foydalanishga doir shoshilinch chora-tadbirlar toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 19.09.2018 Raqami: 745-son </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-b35cc43 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="b35cc43" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/3594128" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/3594128">
                                                                        Xalqaro sifat standartlari va foydalanish xavfsizligiga javob beradigan temir yoʻl mahsulotini ishlab chiqarishni taʼminlash chora-tadbirlari toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 22.03.2018 Raqami: 211-son </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-7351a53e elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="7351a53e" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/3560526" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/3560526">
                                                                        Tibbiyotda qoʻllanadigan laboratoriya va diagnostika uskunalarining metrologik nazoratini takomillashtirish chora-tadbirlari toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 15.02.2018 Raqami: 112-son </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1c91c549 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="1c91c549" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/3499851" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/3499851">
                                                                        Oʻzbekiston Respublikasida oʻlcham birliklarini qoʻllash toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 10.01.2018 Raqami: 21-son </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-58ccd760 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="58ccd760" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/3380345" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/3380345">
                                                                        Avtomobillarni gaz bilan toʻldirish kompressor stansiyalari tarmogʻini rivojlantirish va avtotransport vositalarini siqilgan tabiiy gazga bosqichli oʻtkazish, hamda ularda gazballon asbob-uskunalarini xavfsiz ishlatishni taʼminlash qoʻshimcha chora-tadbirlari toʻgʻrisida toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 11.10.2017 Raqami: 815 - son </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-45b78bea elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="45b78bea" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/2903853" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/2903853">
                                                                        2016-yil uchun qonunlar loyihalarini ishlab chiqish va Oʻzbekiston Respublikasi Oliy Majlisining qonunchilik palatasiga kiritish dasturini tasdiqlash toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 24.02.2016 Raqami: № 42 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-2fa87466 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="2fa87466" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/2792831" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/2792831">
                                                                        2020-yilgacha boʻlgan davrda milliy infratuzilmalar sifatini rivojlantirish dasturini tasdiqlash toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 19.10.2015 Raqami: № 298 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-2d8461f0 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="2d8461f0" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/2793261" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/2793261">
                                                                        “Muvofiqlikni baholash toʻgʻrisida”gi Oʻzbekiston Respublikasi Qonunini amalga oshirish chora-tadbirlari toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 14.10.2015 Raqami: №292 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-be4c1ca elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="be4c1ca" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/2619558" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/2619558">
                                                                        Respublikada sotiladigan maishiy elektr priborlarini, yangidan quriladigan binolar va inshootlarni energetika jihatidan majburiy markirovkalash va sertifikatlash tizimini joriy etish chora-tadbirlari toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 09.04.2015 Raqami: №86 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-28db5dcc elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="28db5dcc" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/2534723" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/2534723">
                                                                        Tadbirkorlik subyektlariga davlat xizmatlari koʻrsatish tartibini yana-da takomillashtirish chora-tadbirlari toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 31.12.2014 Raqami: №377 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-7efac133 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="7efac133" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/2438731" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/2438731">
                                                                        2014-2018-yillarga moʻljallangan texnik reglamentlarni ishlab chiqish Dasturini tasdiqlash toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 30.07.2014 Raqami: №207 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-108504b9 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="108504b9" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/2026318" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/2026318">
                                                                        “Texnik jihatdan foydalanishda temir yoʻl transporti xavfsizligi toʻgʻrisida”gi umumiy texnik reglamentni tasdiqlash haqida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 04.07.2012 Raqami: №192 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-7d88b34b elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="7d88b34b" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/2027473" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/2027473">
                                                                        “Avtotransport vositalari konstruksiyasining foydalanish shartlari boʻyicha xavfsizligi toʻgʻrisida”gi umumiy texnik reglamentni tasdiqlash haqida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 04.07.2012 Raqami: №191 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3d92bb9e elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="3d92bb9e" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/1787116" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/1787116">
                                                                        Sertifikatlashtirish tartibotlarini va sifat menejmenti tizimlarini joriy etishni takomillashtirishga doir qoʻshimcha chora-tadbirlar toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 28.04.2011 Raqami: №122 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4122ebf1 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="4122ebf1" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/1624984" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/1624984">
                                                                        “Texnik jihatdan tartibga solish toʻgʻrisida”gi Oʻzbekiston Respublikasi Qonunini amalga oshirishni davom ettirish chora-tadbirlari haqida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 10.05.2010 Raqami: №86 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-2d07ce03 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="2d07ce03" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/1493628" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/1493628">
                                                                        Respublika korxonalarida xalqaro standartlarga muvofiq boʻlgan sifatni boshqarish tizimlarini joriy etishni kengaytirishga doir qoʻshimcha chora-tadbirlar toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 19.06.2009 Raqami: №173 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-52a693c9 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="52a693c9" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/1057751" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/1057751">
                                                                        Oʻzbekiston Respublikasining ayrim qonun hujjatlariga oʻzgartirish va qoʻshimchalar kiritish hamda baʼzilarini oʻz kuchini yoʻqotgan deb hisoblash toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 14.09.2006 Raqami: №194 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-71202586 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="71202586" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/345374" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/345374">
                                                                        Oʻzbekiston davlat standartlashtirish, metrologiya va sertifikatlashtirish agentligi tuzilmasini takomillashtirish va uning faoliyatini tashkil etish toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 05.08.2004 Raqami: №373 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-26795ef4 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="26795ef4" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/337769" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/337769">
                                                                        Mahsulotlarni sertifikatlashtirish tartibotini soddalashtirishga doir qoʻshimcha chora-tadbirlar toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 06.07.2004 Raqami: №318 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-38f99774 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="38f99774" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/342890" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/342890">
                                                                        Korxonalarda xalqaro standartlarga muvofiq boʻlgan sifatni boshqarish tizimlarini joriy etish chora-tadbirlari toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 22.07.2004 Raqami: №349 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-11a137bd elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="11a137bd" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/342890" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/342890">
                                                                        Standartlashtirish, metrologiya va mahsulotlar hamda xizmatlarni sertifikatlashtirish tizimini takomillashtirish chora-tadbirlari toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 03.10.2002 Raqami: №342 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-e6919d3 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="e6919d3" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/324828" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/324828">
                                                                        Oʻzbekiston Respublikasida ishlab chiqariladigan tovarlarga shtrixli kodlashni joriy etish toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 21.09.1999 Raqami: №438 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-18d16177 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="18d16177" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/803702" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/803702">
                                                                        Oʻzbekiston Respublikasi Hukumatining ayrim qarorlariga oʻzgartirishlar va qoʻshimchalar kiritish toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 12.10.2015 Raqami: №410 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-23887499 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="23887499" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/803702" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/803702">
                                                                        Xavfsizligini tasdiqlash talab etiladigan tovarlarni Oʻzbekiston Respublikasi hududiga keltirish va ularni uning tashqarisiga chiqarish tartibini tasdiqlash haqida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 12.08.1994 Raqami: №409 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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


<div class="site-footer">
    <footer class="site-info" aria-label="Сайт" itemtype="https://schema.org/WPFooter" itemscope>
        <div class="inside-site-info grid-container grid-parent">
            <div class="copyright-bar">
                <span class="copyright">&copy; 2024 TEXNIK JIHATDAN TARTIBGA SOLISH SOHASIDA NAZORAT INSPEKSIYASI</span></div>
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
