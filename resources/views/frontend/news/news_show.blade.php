<!DOCTYPE html>
<html lang="ru-RU">

<style>
    .image-gallery {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
    }

    .img-small {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }
    .entry-content {
        margin-top: 0px; /* Content oldidan ortiqcha bo‘sh joyni olib tashlash */
        padding-top: 0px;
    }

    .wp-block-embed__wrapper iframe {
        display: block; /* Inline blok bo‘lishini oldini oladi */
        margin: 0 auto; /* O‘rtaga joylashadi */
        margin-bottom: 10px; /* Content bilan masofani kamaytiradi */
    }


</style>
<title>{{$new->title}}. &#8212; TEXNIK JIHATDAN TARTIBGA SOLISH SOHASIDA NAZORAT INSPEKSIYASI</title>
@include('partials.header')

<body
    class="post-template-default single single-post postid-2709 single-format-standard wp-custom-logo wp-embed-responsive post-image-above-header post-image-aligned-center sticky-menu-fade mobile-header mobile-header-logo mobile-header-sticky right-sidebar nav-below-header one-container fluid-header active-footer-widgets-3 nav-search-enabled nav-aligned-left header-aligned-left dropdown-hover featured-image-active elementor-default elementor-kit-12"
    itemscope>
<a class="screen-reader-text skip-link" href="#content" title="Перейти к содержимому">Перейти к содержимому</a>
@include('partials.menu-header')
@include('partials.menu')
<div class="site grid-container container hfeed grid-parent" id="page">
    <div class="site-content" id="content">

        <div class="content-area grid-parent mobile-grid-100 grid-75 tablet-grid-75" id="primary">
            <main class="site-main" id="main">

                <article id="post-2709"
                         class="post-2709 post type-post status-publish format-standard has-post-thumbnail hentry category-yangiliklar" itemscope>
                    <div class="inside-article">
                        <div class="featured-image  page-header-image-single ">

                            @if(!empty($new->images) && count($new->images) > 1)
                                <div class="image-gallery">
                                    @foreach($new->images as $image)
                                        <img fetchpriority="high"
                                             src="{{ asset('storage/' . $image) }}"
                                             class="attachment-full size-full img-small" alt="" itemprop="image"
                                             decoding="async"
                                             sizes="(max-width: 640px) 100vw, 640px"/>
                                    @endforeach
                                </div>
                            @else
                                <img src="{{ asset('storage/' . ($new->images[0] ?? 'default-image.jpg')) }}"
                                     alt=""
                                     sizes="full "
                                     style="width: 100%; max-width: 991px;"/>
                            @endif

                        </div>
                        <header class="entry-header">
                            <h1 class="entry-title" style="padding-bottom: 20px"
                                itemprop="headline">{{$new->title}}</h1>
                            @foreach ($file_name_files as $file)
                                <div>
                                    <a href="{{ route('news.download', ['id' => $new->id, 'file' => $file['file']]) }}"
                                       class="btn btn-primary">{{ $file['file_name'] }}</a>
                                </div>
                            @endforeach
                        </header>

                        <div class="entry-content" itemprop="text">
                            <figure
                                class="wp-block-embed-youtube wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
                                <div class="wp-block-embed__wrapper">
                                    @php
                                        $embedLink = str_replace('youtu.be/', 'www.youtube.com/embed/', $new->link);
                                    @endphp
                                    <iframe style="border-radius: 10px" title="{{$new->content}}" width="991"
                                            height="557" src="{{ $embedLink }}"></iframe>
                                </div>
                            </figure>
                            <p>{!! str_replace('http://localhost', config('app.url'), $new->content) !!}</p>
                        </div>
                        <div class="entry-meta">
                            <span class="posted-on"><time style="font-size: 15px" class="entry-date published"
                                                          itemprop="datePublished">{{Carbon\Carbon::parse($new->published_at)->format('d.m.Y') }}</time>
                            </span>
                        </div>

                        <footer class="entry-meta" aria-label="Мета записи">
                            <span class="cat-links"><span class="screen-reader-text">Рубрики </span><a
                                    href="{{route('news')}}" rel="category tag">Yangiliklar</a></span>
                            <nav id="nav-below" class="post-navigation" aria-label="Записи">
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
