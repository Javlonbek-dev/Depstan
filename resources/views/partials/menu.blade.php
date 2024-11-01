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
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1106">
                    <a href="{{route('news')}}">Yangiliklar</a>
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
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1106">
                    <a href="{{route('news')}}">Yangiliklar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
