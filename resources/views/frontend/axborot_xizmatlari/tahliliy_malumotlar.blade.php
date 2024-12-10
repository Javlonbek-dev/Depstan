<!DOCTYPE html>
<html lang="ru-RU">
<title>Tahliliy ma’lumotlar — TEXNIK JIHATDAN TARTIBGA SOLISH SOHASIDA NAZORAT INSPEKSIYASI</title>
@include('partials.header')

<body class="archive category category-tahliliy-malumotlar category-34 wp-custom-logo wp-embed-responsive post-image-below-header post-image-aligned-center sticky-menu-fade mobile-header mobile-header-logo mobile-header-sticky right-sidebar nav-below-header one-container fluid-header active-footer-widgets-3 nav-search-enabled nav-aligned-left header-aligned-left dropdown-hover elementor-default elementor-kit-12"
      itemtype="https://schema.org/Blog" itemscope>
<a class="screen-reader-text skip-link" href="#content" title="Перейти к содержимому">Перейти к содержимому</a>
@include('partials.menu-header')
@include('partials.menu')
<div class="site grid-container container hfeed grid-parent" id="page">
    <div class="site-content" id="content">

        <div class="content-area grid-parent mobile-grid-100 grid-75 tablet-grid-75" id="primary">
            <main class="site-main" id="main">
                <header class="page-header" aria-label="Страница">

                    <h1 class="page-title">
                        Tahliliy ma&#8217;lumotlar </h1>

                </header>
                @foreach($analytics as $analytic)
                    <article id="post-983" class="post-983 post type-post status-publish format-standard has-post-thumbnail hentry category-tahliliy-malumotlar no-featured-image-padding" itemtype="https://schema.org/CreativeWork" itemscope>
                        <div class="inside-article">
                            <header class="entry-header">
                                <h2 class="entry-title" itemprop="headline"><a href="{{route('analytical_data_show', $analytic->id)}}" rel="bookmark">{{$analytic->title}}</a></h2>
                                <div class="entry-meta">
                                    <span class="posted-on"><time class="entry-date published" datetime="2020-04-24T13:22:48+05:00" itemprop="datePublished">{{Carbon\Carbon::parse($analytic->published_at)->format('d.m.Y') }}</time></span> </div>
                            </header>
                            @if(!$analytic->image == null)
                            <div class="post-image">
                                <a href="{{route('analytical_data_show', $analytic->id)}}">
                                    <img fetchpriority="high" width="1500" height="800" src="{{asset('storage/' . $analytic->image )}}" class="attachment-full size-full wp-post-image" alt="" itemprop="image" decoding="async" sizes="(max-width: 1500px) 100vw, 1500px" />
                                </a>
                            </div>
                            @else
                            @endif

                            <div class="entry-summary" itemprop="text">
                                <p>{{\Illuminate\Support\Str::words(strip_tags($analytic->text),30)}}<a title="{{$analytic->title}}" class="read-more" href="{{route('analytical_data_show', $analytic->id)}}">Read more</a></p>
                            </div>

                            <footer class="entry-meta" aria-label="Мета записи">
                                <span class="cat-links"><span class="screen-reader-text">Рубрики </span><a href="{{route('analytical_data')}}" rel="category tag">Tahliliy ma'lumotlar</a></span>
                            </footer>
                        </div>
                    </article>
                @endforeach
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
