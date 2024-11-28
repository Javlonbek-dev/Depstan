<!DOCTYPE html>
<html lang="ru-RU">

<title>Ёшлар сиёсати &#8212; TEXNIK JIHATDAN TARTIBGA SOLISH SOHASIDA NAZORAT INSPEKSIYASI</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
@include('partials.header')

<body class="archive category category-yoshlar-siyosati category-104 wp-custom-logo wp-embed-responsive post-image-below-header post-image-aligned-center sticky-menu-fade mobile-header mobile-header-logo mobile-header-sticky right-sidebar nav-below-header one-container fluid-header active-footer-widgets-3 nav-search-enabled nav-aligned-left header-aligned-left dropdown-hover elementor-default elementor-kit-12"
itemscope>
<a class="screen-reader-text skip-link" href="#content" title="Перейти к содержимому">Перейти к содержимому</a>
@include('partials.menu-header')
@include('partials.menu')
<div class="site grid-container container hfeed grid-parent" id="page">
    <div class="site-content" id="content">

        <div class="content-area grid-parent mobile-grid-100 grid-75 tablet-grid-75" id="primary">
            <main class="site-main" id="main">
                <header class="page-header" aria-label="Страница">

                    <h1 class="page-title">
                        Ёшлар сиёсати </h1>

                </header>
                @foreach($youth as $young)
                <article id="post-1177" class="post-1177 post type-post status-publish format-standard has-post-thumbnail hentry category-yoshlar-siyosati no-featured-image-padding" itemtype="https://schema.org/CreativeWork" itemscope>
                    <div class="inside-article">
                        <header class="entry-header">
                            <h2 class="entry-title" itemprop="headline"><a href="{{route('young_show', $young->id)}}"
                                                                           rel="bookmark">{{$young->title}}</a></h2>
                            <div class="entry-meta">
                                <span class="posted-on"><time class="entry-date published"
                                                              datetime="2020-10-07T09:36:11+05:00"
                                                              itemprop="datePublished">{{\Carbon\Carbon::parse($young->published_at)->format('d.m.Y')}}</time></span>
                            </div>
                        </header>
                        <div class="post-image">
{{--                            <a href="{{route('young_show', $young->id)}}">--}}
{{--                                <img style="border-radius: 5px" fetchpriority="high" width="500" height="300"--}}
{{--                                     src="{{ asset('storage/' . $young->image) }}"--}}
{{--                                     class="attachment-full size-full wp-post-image" alt="" itemprop="image"--}}
{{--                                     decoding="async" sizes="(max-width: 1000px) 100vw, 1000px"/>--}}
{{--                            </a>--}}
                        </div>
                        <div class="entry-summary" itemprop="text">
                            <p>{{\Illuminate\Support\Str::words(strip_tags($young->content), 50)}}<a
                                    title="{{$young->title}}" class="read-more"
                                    href="{{route('young_show', $young->id)}}">Read more</a></p>
                        </div>

                        <footer class="entry-meta" aria-label="Мета записи">
                            <span class="cat-links"><span class="screen-reader-text">Рубрики </span><a
                                    href="{{route('young')}}" rel="category tag">Yoshlar siyosati</a></span>
                        </footer>
                    </div>
                </article>
                @endforeach

                <div class="d-flex justify-content-start">
                    {{ $youth->onEachSide(1)->links() }}
                </div>
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
