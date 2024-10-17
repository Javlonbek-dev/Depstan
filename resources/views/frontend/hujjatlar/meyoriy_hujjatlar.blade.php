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

                <article id="post-637" class="post-637 page type-page status-publish" itemtype="https://schema.org/CreativeWork" itemscope>
                    <div class="inside-article">

                        <header class="entry-header">
                            <h1 class="entry-title" itemprop="headline">Boshqa me&#8217;yoriy-huquqiy hujjatlar</h1>
                        </header>


                        <div class="entry-content" itemprop="text">
                            <div data-elementor-type="wp-page" data-elementor-id="637" class="elementor elementor-637">
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-769278eb elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="769278eb" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-df6738c" data-id="df6738c" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-780c870 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="780c870" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://new.standart.uz/upload/file/prochie/qaror_gtk_uzstandart_27.03.2020.pdf" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://new.standart.uz/upload/file/prochie/qaror_gtk_uzstandart_27.03.2020.pdf">
                                                                        Oʻzbekiston Respublikasi Davlat bojxona qoʻmitasi va Oʻzbekiston standartlashtirish, metrologiya va sertifikatlashtirish agentligi qarori “Oʻzbekiston Respublikasi Prezidentining «Koronavirus pandemiyasi va global inqiroz holatlarining iqtisodiyot tarmoqlariga salbiy taʼsirini yumshatish boʻyicha birinchi navbatdagi chora-tadbirlar toʻgʻrisida” 2020-yil 19-martdagi PF-5969-son Farmoni ijrosini taʼminlash haqida»						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 31.03.2020 Raqami: - </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1103a857 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="1103a857" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/pdfs/4629122" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/pdfs/4629122">
                                                                        Sifat boʻyicha ekspert-auditorlarni attestatsiyadan oʻtkazish tartibi toʻgʻrisidagi nizomga oʻzgartirishlar kiritish toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 06.12.2019 Raqami: Adliya vazirligi roʻyxat raqami -№2899-1 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-78c40ff0 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="78c40ff0" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://www.lex.uz/docs/3037897" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://www.lex.uz/docs/3037897">
                                                                        Texnik vositalarni oʻlchash vositalari va sinash vositalari jumlasiga kiritish mezonlarini tasdiqlash haqida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 03.10.2016 Raqami: Adliya vazirligi roʻyxat raqami -№2829 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-43e487e7 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="43e487e7" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/2828230" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/2828230">
                                                                        Maishiy isteʼmolchilarning elektr energiyasini hisobga olish priborlarini qiyoslashdan oʻtkazish tartibi toʻgʻrisidagi nizomni tasdiqlash haqida. Elektr energetikada nazorat boʻyicha davlat inspeksiyasi, Oʻzbekiston standartlashtirish, metrologiya va sertifikatlashtirish agentligining qarori						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 09.12.2015 Raqami: Adliya vazirligi roʻyxat raqami - №2736 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-5fa21d5 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="5fa21d5" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/2438834" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/2438834">
                                                                        Gazni hisobga olish priborlarini tekshiruvdan oʻtkazish tartibi toʻgʻrisidagi nizomni tasdiqlash haqida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 04.08.2014 Raqami: №2604 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-b906eec elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="b906eec" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/2251856" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/2251856">
                                                                        Oʻzbekiston Respublikasi Milliy sertifikatlashtirish tizimida ishlar va xizmatlarga haq toʻlash qoidalarini tasdiqlash toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 14.10.2013 Raqami: №2516 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-548dca43 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="548dca43" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/1616024" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/1616024">
                                                                        Qandim kon guruhi uchastkasi, xauzak va shodi uchastkalari, shuningdek, qoʻngʻirot uchastkalariga oid mahsulotni taqsimlash haqidagi 2004-yil 16-iyundagi bitim doirasida va Oʻzbekiston Respublikasi janubiy-gʻarbiy hisor va ustyurt mintaqasi hududlaridagi konlar boʻyicha 2007-yil 23-yanvardagi mahsulot taqsimotiga oid bitim doirasida Oʻzbekiston Respublikasi bojxona chegarasi orqali olib oʻtiladigan tovarlarning bojxona rasmiylashtiruvi qoidalarini tasdiqlash toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 19.04.2010 Raqami: №2097 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-7324ce5 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="7324ce5" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/1573098" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/1573098">
                                                                        Texnik jihatdan tartibga solish sohasidagi ekspert kengashlari toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 17.01.2010 Raqami: №2060 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-6ecf2067 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="6ecf2067" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/1543212" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/1543212">
                                                                        Bolalar sport inshootlari, umumtaʼlim maktablari hamda kollej va akademik litseylarning sport zallarini sport anjomlari va jihozlari bilan taʼminlash meʼyorlarini tasdiqlash toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 11.11.2009 Raqami: №2039 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4d7f3e7c elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="4d7f3e7c" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/1446259" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/1446259">
                                                                        Tayyor goʻsht-sut mahsulotlarining sifati ustidan tizimli kompleks nazorat oʻtkazish tartibi toʻgʻrisidagi nizomni tasdiqlash haqida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 25.02.2009 Raqami: №1910 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-5245eb8b elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="5245eb8b" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/1349434" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/1349434">
                                                                        Qishloq xoʻjalik texnikasi va texnologiyalarini sinovdan oʻtkazish tartibi toʻgʻrisidagi nizomni tasdiqlash haqida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 30.04.2008 Raqami: №18000 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-2110fb39 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="2110fb39" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/1247181" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/1247181">
                                                                        Ishlab chiqarilgan etil spirt - rektifikatini sinovdan oʻtkazish va tayyor mahsulotlar omborxonasiga topshirish tartibi toʻgʻrisida nizomni tasdiqlash haqida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 06.09.2007 Raqami: №1714 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3537f73d elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="3537f73d" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/1169306" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/1169306">
                                                                        Oʻzbekiston Respublikasiga olib kiriladigan benzin va dizel motorlari bilan jihozlangan “M2”, “M3” va “N2” toifalaridagi yangi avtotransport vositalarini “YEVRO-2” ekologik darajadan kam boʻlmagan talablarga muvofiqligi boʻyicha ekologik sertifikatlashtirish tartibi toʻgʻrisidagi vaqtinchalik yoʻriqnomani tasdiqlash haqida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 07.04.2007 Raqami: №1670 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-505e9eb0 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="505e9eb0" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/1040873" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/1040873">
                                                                        Savdo shoxobchalari va bozorlarda goʻsht mahsulotlarini sotishga qoʻyiladigan talablar toʻgʻrisidagi yoʻriqnomani tasdiqlash haqida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 10.08.2006 Raqami: №1610 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1b88eb1e elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="1b88eb1e" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/849719" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/849719">
                                                                        Majburiy tartibda sertifikatlanadigan bir turdagi mahsulotlarning alohida turlarini sertifikatlash qoidalarini tasdiqlash toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 28.09.2005 Raqami: №1513 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1d013d6c elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="1d013d6c" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/537131" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/537131">
                                                                        Mahsulotning xavfsizlik talablariga muvofiqligini deklaratsiyalash tartibi toʻgʻrisida nizomni tasdiqlash haqida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 06.04.2005 Raqami: №1465 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1fb3bb7b elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="1fb3bb7b" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/537122" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/537122">
                                                                        Sertifikatlashtirilgan mahsulotlar va xizmatlarni inspeksiya nazoratidan oʻtkazish qoidalarini tasdiqlash toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 06.04.2005 Raqami: №1464 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-331ed6da elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="331ed6da" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/683169" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/683169">
                                                                        Mahsulotlarni sertifikatlash qoidalarini tasdiqlash toʻgʻrisida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 18.03.2005 Raqami: №1458 </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-5565c265 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="5565c265" data-element_type="widget"
                                                     data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">

                                                            <div class="elementor-icon-box-icon">
                                                                <a href="https://lex.uz/docs/780869" class="elementor-icon elementor-animation-" tabindex="-1">
                                                                    <i aria-hidden="true" class="fas fa-file-alt"></i>				</a>
                                                            </div>

                                                            <div class="elementor-icon-box-content">

                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="https://lex.uz/docs/780869">
                                                                        “Oʻzstandart” agentligida standartlashtirish boʻyicha normativ hujjatlar toifalarini tayyorlash va roʻyxatdan oʻtkazish tartibi toʻgʻrisidagi nizomni tasdiqlash haqida						</a>
                                                                </h3>

                                                                <p class="elementor-icon-box-description">
                                                                    Sana: 11.11.2004 Raqami: №1422 </p>

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
