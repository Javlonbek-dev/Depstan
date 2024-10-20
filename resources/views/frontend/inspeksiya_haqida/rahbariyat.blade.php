<!DOCTYPE html>
<html lang="ru-RU">
<title>Раҳбарият — TEXNIK JIHATDAN TARTIBGA SOLISH SOHASIDA NAZORAT INSPEKSIYASI</title>
@include('partials.header')


<body
    class="page-template-default page page-id-258 page-child parent-pageid-87 wp-custom-logo wp-embed-responsive post-image-aligned-center sticky-menu-fade mobile-header mobile-header-logo mobile-header-sticky right-sidebar nav-below-header one-container fluid-header active-footer-widgets-3 nav-search-enabled nav-aligned-left header-aligned-left dropdown-hover elementor-default elementor-kit-12"
    itemtype="https://schema.org/WebPage" itemscope>
<a class="screen-reader-text skip-link" href="#content" title="Перейти к содержимому">Перейти к содержимому</a>
@include('partials.menu-header')
{{--menu qismi--}}
@include('partials.menu')

<div class="site grid-container container hfeed grid-parent" id="page">
    <div class="site-content" id="content">
        <div class="content-area grid-parent mobile-grid-100 grid-75 tablet-grid-75" id="primary">
            <main class="site-main" id="main">
                <article id="post-192" class="post-192 page type-page status-publish" itemtype="https://schema.org/CreativeWork" itemscope>
                    <div class="inside-article">
                        <header class="entry-header">
                            <h1 class="entry-title" itemprop="headline">Раҳбарият</h1>
                        </header>
                        <div class="entry-content" itemprop="text">
                            <div data-elementor-type="wp-page" data-elementor-id="192" class="elementor elementor-192">
                              @foreach($managers as $manager)
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-6955463f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6955463f" data-element_type="section" style="display: flex; align-items: center; margin-bottom: 40px;">
                                    <img fetchpriority="high" decoding="async" class="alignnone wp-image-3482 size-medium" src="{{ asset('storage/' . $manager->image) }}" alt="" style="width: 200px; height: 230px; object-fit: cover; margin-right: 20px; border-radius: 10px" />
                                    <div>
                                        <p><strong>{{$manager->position}}</strong></p>
                                        <p><strong><strong>{{$manager->full_name}}</strong></strong></p>
                                        <a href="{{route('employee_info',$manager->id)}}"><p>Биографияси;</p></a>
                                        <p>Телефон: {{$manager->phone}}(1800)</p>
                                        <p>Қабул кунлари: {{$manager->reception_days}}</p>
                                    </div>
                                </section>
                                @endforeach
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

{{--footer qismi--}}
@include('partials.footer')

@include('partials.script')
</body>
</html>
