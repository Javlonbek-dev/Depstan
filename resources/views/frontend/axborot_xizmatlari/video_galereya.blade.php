<!DOCTYPE html>
<html lang="ru-RU">
<title>Video galereya — TEXNIK JIHATDAN TARTIBGA SOLISH SOHASIDA NAZORAT INSPEKSIYASI</title>
@include('partials.header')

<body
        class="page-template-default page page-id-715 page-child parent-pageid-692 wp-custom-logo wp-embed-responsive post-image-aligned-center sticky-menu-fade mobile-header mobile-header-logo mobile-header-sticky right-sidebar nav-below-header one-container fluid-header active-footer-widgets-3 nav-search-enabled nav-aligned-left header-aligned-left dropdown-hover elementor-default elementor-kit-12"
        itemtype="https://schema.org/WebPage" itemscope>
<a class="screen-reader-text skip-link" href="#content" title="Перейти к содержимому">Перейти к содержимому</a>
@include('partials.menu-header')
@include('partials.menu')
<div class="site grid-container container hfeed grid-parent" id="page">
    <div class="site-content" id="content">

        <div class="content-area grid-parent mobile-grid-100 grid-75 tablet-grid-75" id="primary">
            <main class="site-main" id="main">

                <article id="post-715" class="post-715 page type-page status-publish"
                         itemtype="https://schema.org/CreativeWork" itemscope>
                    <div class="inside-article">

                        <header class="entry-header">
                            <h1 class="entry-title" itemprop="headline">Video galereya</h1>
                        </header>


                        <div class="entry-content" itemprop="text">
                            @foreach($videos as $video)
                                <figure
                                        class="wp-block-embed-youtube wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
                                    <div class="wp-block-embed__wrapper">
                                        @php
                                            $embedLink = str_replace('youtu.be/', 'www.youtube.com/embed/', $video->link);
                                        @endphp
                                        <iframe style="border-radius: 10px" title="Komil Bekmirzayev" width="991"
                                                height="557" src="{{ $embedLink }}"></iframe>
                                    </div>
                                    <figcaption><strong>{{ $video->content }}</strong></figcaption>
                                    <figcaption style="color: #0e9dd2">
                                        <strong>{{$video->published_at = Carbon\Carbon::parse($video->published_at)->format('d.m.Y') }}</strong>
                                    </figcaption>
                                </figure>
                            @endforeach

                        </div>
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
