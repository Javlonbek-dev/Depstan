<!DOCTYPE html>
<html lang="ru-RU">

<title>Seryogʻlilik sifat koʻrsatkichimi? &#8212; TEXNIK JIHATDAN TARTIBGA SOLISH SOHASIDA NAZORAT
    INSPEKSIYASI</title>
@include('partials.header')

<body
    class="post-template-default single single-post postid-966 single-format-standard wp-custom-logo wp-embed-responsive post-image-above-header post-image-aligned-center sticky-menu-fade mobile-header mobile-header-logo mobile-header-sticky right-sidebar nav-below-header one-container fluid-header active-footer-widgets-3 nav-search-enabled nav-aligned-left header-aligned-left dropdown-hover featured-image-active elementor-default elementor-kit-12"
    itemtype="https://schema.org/Blog" itemscope>
<a class="screen-reader-text skip-link" href="#content" title="Перейти к содержимому">Перейти к содержимому</a>
@include('partials.menu-header')
@include('partials.menu')
<div class="site grid-container container hfeed grid-parent" id="page">
    <div class="site-content" id="content">

        <div class="content-area grid-parent mobile-grid-100 grid-75 tablet-grid-75" id="primary">
            <main class="site-main" id="main">

                <article id="post-966"
                         class="post-966 post type-post status-publish format-standard has-post-thumbnail hentry category-tahliliy-malumotlar"
                         itemtype="https://schema.org/CreativeWork" itemscope>
                    <div class="inside-article">
                        <div class="featured-image  page-header-image-single ">
                            <img fetchpriority="high" width="814" height="580"
                                 src="{{asset('storage/' . $analytic->image)}}"
                                 class="attachment-full size-full" alt="" itemprop="image" decoding="async"
                                 sizes="(max-width: 814px) 100vw, 814px"/>
                        </div>
                        <header class="entry-header">
                            <h1 class="entry-title" itemprop="headline">{{$analytic->title}}</h1>
                            <div class="entry-meta">
                                <span class="posted-on"><time class="entry-date published"
                                                              datetime="2020-04-22T09:00:00+05:00"
                                                              itemprop="datePublished">{{\Illuminate\Support\Carbon::parse($analytic->published_at)->format('d.m.Y')}}</time></span></div>
                        </header>
                        <div class="entry-content" itemprop="text">
                            <p>{!! str_replace('http://localhost', config('app.url'), $analytic->text) !!}
                            </p>
                            <p class="has-text-align-right"><strong></strong></p>
                        </div>




                        <footer class="entry-meta" aria-label="Мета записи">
                            <span class="cat-links"><span class="screen-reader-text">Рубрики </span><a
                                    href="{{route('analytical_data')}}" rel="category tag">Tahliliy ma'lumotlar</a></span>
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
