<!DOCTYPE html>
<html lang="ru-RU">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<title>Бўш иш ўринлари &#8212; TEXNIK JIHATDAN TARTIBGA SOLISH SOHASIDA NAZORAT INSPEKSIYASI</title>
@include('partials.header')

<body
    class="archive category category-bosh-ish-orinlari category-137 wp-custom-logo wp-embed-responsive post-image-below-header post-image-aligned-center sticky-menu-fade mobile-header mobile-header-logo mobile-header-sticky right-sidebar nav-below-header one-container fluid-header active-footer-widgets-3 nav-search-enabled nav-aligned-left header-aligned-left dropdown-hover elementor-default elementor-kit-12">
<a class="screen-reader-text skip-link" href="#content" title="Перейти к содержимому">Перейти к содержимому</a>
@include('partials.menu-header')
@include('partials.menu')
<div class="site grid-container container feed grid-parent" id="page">
    <div class="site-content" id="content">

        <div class="content-area grid-parent mobile-grid-100 grid-75 tablet-grid-75" id="primary">
            <main class="site-main" id="main">
                <header class="page-header" aria-label="Страница">
                    <h1 class="page-title">Бўш иш ўринлари </h1>
                </header>
                @foreach($vacancies as $vacancy)
                <article id="post-1512"
                         class="post-1512 post type-post status-publish format-standard hentry category-bosh-ish-orinlari no-featured-image-padding">
                    <div class="inside-article">
                        <header class="entry-header">
                            <h2 class="entry-title" itemprop="headline"><a
                                    href="{{route('vacancy_show', $vacancy->id)}}"
                                    rel="bookmark">{{$vacancy->name}}</a></h2>
                            <div
                                class="entry-meta">
                                <span class="posted-on"><time
                                        class="entry-date published" datetime="2021-03-27T10:02:00+05:00"
                                        itemprop="datePublished">{{Carbon\Carbon::parse($vacancy->published_at)->format('d.m.Y') }}</time></span>
                            </div>
                        </header>

                        <div class="entry-summary" itemprop="text">
                            <p>{{$vacancy->organ. $vacancy->specialty }}<a
                                    title="Тадбиркорлик субъектларига ёрдам кўрсатиш бўлимида бош мутахассис лавозими"
                                    class="read-more"
                                    href="{{route('vacancy_show', $vacancy->id)}}">Read
                                    more</a></p>
                        </div>

                        <footer class="entry-meta" aria-label="Мета записи">
                            <span class="cat-links"><span class="screen-reader-text">Рубрики </span><a
                                    href="{{route('vacancy')}}" rel="category tag">Бўш иш ўринлари</a></span>
                        </footer>
                    </div>
                </article>
                @endforeach
                <div class="d-flex justify-content-start">
                    {{ $vacancies->onEachSide(1)->links() }}
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
