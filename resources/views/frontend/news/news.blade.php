<!DOCTYPE html>
<html lang="ru-RU">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<title> TEXNIK JIHATDAN TARTIBGA SOLISH SOHASIDA NAZORAT INSPEKSIYASI</title>

@include('partials.header')
<style>
    .news-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid #ddd;
        padding: 15px 0;
        gap: 15px;
    }

    .news-content {
        flex: 1;
    }

    .news-category {
        font-size: 14px;
        color: #888;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .news-title {
        font-size: 18px;
        font-weight: bold;
        margin: 0;
    }

    .news-title a {
        text-decoration: none;
        color: #000;
    }

    .news-title a:hover {
        color: #007BFF;
    }

    .news-image {
        width: 150px;
        height: 100px;
        flex-shrink: 0;
        border-radius: 5px;
        overflow: hidden;
    }

    .news-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

</style>
<body
    class="archive date wp-custom-logo wp-embed-responsive post-image-below-header post-image-aligned-center sticky-menu-fade mobile-header mobile-header-logo mobile-header-sticky right-sidebar nav-below-header one-container fluid-header active-footer-widgets-3 nav-search-enabled nav-aligned-left header-aligned-left dropdown-hover elementor-default elementor-kit-12">
<a class="screen-reader-text skip-link" href="#content" title="Перейти к содержимому">Перейти к содержимому</a>
@include('partials.menu-header')
@include('partials.menu')
<div class="site grid-container container hfeed grid-parent" id="page">
    <div class="site-content" id="content">

        <div class="content-area grid-parent mobile-grid-100 grid-75 tablet-grid-75" id="primary">
            <main class="site-main" id="main">
                <header class="page-header" aria-label="Страница">
                    <form method="GET" action="{{ route('news') }}">
                        <select name="year" style="border-radius: 5px" onchange="this.form.submit()">
                            <option value="">All Years</option>
                            <option value="2020" {{ request('year') == '2020' ? 'selected' : '' }}>2020</option>
                            <option value="2021" {{ request('year') == '2021' ? 'selected' : '' }}>2021</option>
                            <option value="2022" {{ request('year') == '2022' ? 'selected' : '' }}>2022</option>
                            <option value="2023" {{ request('year') == '2023' ? 'selected' : '' }}>2023</option>
                            <option value="2024" {{ request('year') == '2024' ? 'selected' : '' }}>2024</option>
                        </select>
                    </form>

                    <h1 class="page-title"></h1>

                </header>
                @foreach($news as $new)
                    <article class="news-item">
                        <div class="news-content">
                            <div class="news-category">{{$new->category ?? 'Yangiliklar'}}</div>
                            <h2 class="news-title">
                                <a href="{{ route('news_show', $new->id) }}">{{$new->title}}</a>
                            </h2>
                            <div class="entry-meta">
                <span class="posted-on">
                    <time class="entry-date published" itemprop="datePublished">
                        {{ Carbon\Carbon::parse($new->published_at)->format('d.m.Y') }}
                    </time>
                </span>
                            </div>
                            <p>{{ \Illuminate\Support\Str::words(html_entity_decode(strip_tags($new->content)), 30) }}
                                <a href="{{ route('news_show', $new->id) }}"> Batafsil...</a>
                            </p>

                        </div>

                        <div class="news-image">
                            @php
                                $images = is_array($new->images) ? $new->images : json_decode($new->images, true);
                            @endphp
                            @if(!empty($images) && is_array($images))
                                <a href="{{ route('news_show', $new->id) }}">
                                    <img src="{{ asset('storage/' . $images[0]) }}" alt="News Image">
                                </a>
                            @endif
                        </div>
                    </article>
                @endforeach


                <div class="d-flex justify-content-start">
                    {{ $news->onEachSide(1)->links() }}
                </div>

            </main>
        </div>

        <div class="widget-area sidebar is-right-sidebar grid-25 tablet-grid-25 grid-parent" id="right-sidebar">
            <div class="inside-right-sidebar">

                @include('partials.news', ['allNews' =>$allNews])
            </div>
        </div>

    </div>
</div>


@include('partials.footer')
@include('partials.script')
</body>

</html>
