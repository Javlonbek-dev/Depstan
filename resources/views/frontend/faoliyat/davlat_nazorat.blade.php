<!DOCTYPE html>
<html lang="ru-RU">

<title>Davlat nazorati boʻyicha &#8212; TEXNIK JIHATDAN TARTIBGA SOLISH SOHASIDA NAZORAT INSPEKSIYASI</title>
@include('partials.header')

<body class="page-template-default page page-id-311 page-child parent-pageid-762 wp-custom-logo wp-embed-responsive post-image-aligned-center sticky-menu-fade mobile-header mobile-header-logo mobile-header-sticky right-sidebar nav-below-header one-container fluid-header active-footer-widgets-3 nav-search-enabled nav-aligned-left header-aligned-left dropdown-hover elementor-default elementor-kit-12 elementor-page elementor-page-311"
      itemtype="https://schema.org/WebPage" itemscope>
<a class="screen-reader-text skip-link" href="#content" title="Перейти к содержимому">Перейти к содержимому</a>
@include('partials.menu-header')
@include('partials.menu')
<div class="site grid-container container hfeed grid-parent" id="page">
    <div class="site-content" id="content">

        <div class="content-area grid-parent mobile-grid-100 grid-75 tablet-grid-75" id="primary">
            <main class="site-main" id="main">

                <article id="post-311" class="post-311 page type-page status-publish" itemtype="https://schema.org/CreativeWork" itemscope>
                    <div class="inside-article">

                        <header class="entry-header">
                            <h1 class="entry-title" itemprop="headline">Davlat nazorati boʻyicha</h1>
                        </header>


                        <div class="entry-content" itemprop="text">
                            <div data-elementor-type="wp-page" data-elementor-id="311" class="elementor elementor-311">
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-54b1bb9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="54b1bb9" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-47c94b70" data-id="47c94b70" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-6c6c4653 elementor-widget elementor-widget-text-editor" data-id="6c6c4653" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                      @foreach($states as $state)
                                                            <p>{!! str_replace('http://localhost',  config('app.url'),  $state->content) !!}</p>
                                                      @endforeach
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

                @include('partials.news')
            </div>
        </div>

    </div>
</div>


@include('partials.footer')
@include('partials.script')

</body>

</html>
