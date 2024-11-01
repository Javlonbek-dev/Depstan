<!DOCTYPE html>
<html lang="ru-RU">

<title>{{$young->title}} &#8212; TEXNIK JIHATDAN TARTIBGA SOLISH SOHASIDA NAZORAT INSPEKSIYASI</title>
@include('partials.header')

<body class="post-template-default single single-post postid-1177 single-format-standard wp-custom-logo wp-embed-responsive post-image-above-header post-image-aligned-center sticky-menu-fade mobile-header mobile-header-logo mobile-header-sticky right-sidebar nav-below-header one-container fluid-header active-footer-widgets-3 nav-search-enabled nav-aligned-left header-aligned-left dropdown-hover featured-image-active elementor-default elementor-kit-12 elementor-page elementor-page-1177">
<a class="screen-reader-text skip-link" href="#content" title="Перейти к содержимому">Перейти к содержимому</a>
@include('partials.menu-header')
@include('partials.menu')
<div class="site grid-container container hfeed grid-parent" id="page">
    <div class="site-content" id="content">

        <div class="content-area grid-parent mobile-grid-100 grid-75 tablet-grid-75" id="primary">
            <main class="site-main" id="main">

                <article id="post-1177" class="post-1177 post type-post status-publish format-standard has-post-thumbnail hentry category-yoshlar-siyosati" itemtype="https://schema.org/CreativeWork" itemscope>
                    <div class="inside-article">
                        <div class="featured-image  page-header-image-single ">
                            <img fetchpriority="high" width="1000" height="541" src="{{asset('storage/' . $young->image)}}" class="attachment-full size-full" alt="" itemprop="image" decoding="async" sizes="(max-width: 1000px) 100vw, 1000px" />
                        </div>
                        <header class="entry-header">
                            <h1 class="entry-title" itemprop="headline">{{$young->title}}</h1>
                            <div class="entry-meta">
                                <span class="posted-on"><time class="entry-date published"  itemprop="datePublished">{{\Carbon\Carbon::parse($young->published_at)->format('d.m.Y')}}</time></span>                                    </div>
                        </header>

                        <div class="entry-content" itemprop="text">
                            <div data-elementor-type="wp-post" data-elementor-id="1177" class="elementor elementor-1177">
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-6a58dfb7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6a58dfb7" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-19a5c642" data-id="19a5c642" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-6c5a50cc elementor-widget elementor-widget-text-editor" data-id="6c5a50cc" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>{!! str_replace('http://localhost', config('app.url'), $young->content) !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>

                        <footer class="entry-meta" aria-label="Мета записи">
                            <span class="cat-links"><span class="screen-reader-text">Рубрики </span><a href="{{route('young')}}" rel="category tag">Yoshlar siyosati</a></span>
                            <nav id="nav-below" class="post-navigation"
                                 aria-label="Записи">
                            </nav>
                        </footer>
                    </div>
                </article>
            </main>
        </div>

        <div class="widget-area sidebar is-right-sidebar grid-25 tablet-grid-25 grid-parent" id="right-sidebar">
            <div class="inside-right-sidebar">
                @include('partials.news')
            </div>
        </div>

    </div>
</div>
@include('partials.footer')
@include('partials.script')
</body>

</html>
