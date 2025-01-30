<!DOCTYPE html>
<html lang="ru-RU">
<title>TEXNIK JIHATDAN TARTIBGA SOLISH SOHASIDA NAZORAT INSPEKSIYASI</title>
@include('partials.header')

<body
    class="page-template-default page page-id-442 page-child parent-pageid-192 wp-custom-logo wp-embed-responsive post-image-aligned-center sticky-menu-fade mobile-header mobile-header-logo mobile-header-sticky right-sidebar nav-below-header one-container fluid-header active-footer-widgets-3 nav-search-enabled nav-aligned-left header-aligned-left dropdown-hover elementor-default elementor-kit-12"
    itemtype="https://schema.org/WebPage" itemscope>
<a class="screen-reader-text skip-link" href="#content" title="Перейти к содержимому">Перейти к содержимому</a>
@include('partials.menu-header')
@include('partials.menu')
<div class="site grid-container container hfeed grid-parent" id="page">
    <div class="site-content" id="content">

        <div class="content-area grid-parent mobile-grid-100 grid-75 tablet-grid-75" id="primary">
            <main class="site-main" id="main">

                <article id="post-442" class="post-442 page type-page status-publish"
                         itemtype="https://schema.org/CreativeWork" itemscope>
                    <div class="inside-article">

                        <header class="entry-header">
                            <h1 class="entry-title" itemprop="headline">{{$manager->full_name}}</h1></header>


                        <div class="entry-content" itemprop="text">

                            <div class="wp-block-image">
                                <figure class="alignleft is-resized">
                                    <img src="{{ asset('storage/' . $manager->image) }}"  alt="" style="height: 200px;"/>
                                </figure>
                            </div>
                            <p>{{$manager->birth_date}} Жиззах вилояти Зафаробод туманида туғилган.</p>
                            <p>Миллати-{{$manager->nationality}}</p>
                            <p>{{$manager->info}}</p>
                            <p>Партиявийлиги: O’zLiDeP аъзоси</p>
                            <hr style="" class="wp-block-separator"/>
                            <p style="text-align: center; "><strong>Меҳнат фаолияти:</strong></p>
                            <figure class="wp-block-table">
                                <table class="has-fixed-layout">
                                    <tbody>
                                    @foreach( $work_activities as $manager_work )
                                        <tr>
                                            <td>{{ $manager_work['work_activity_date']}}</td>
                                            <td>{{ $manager_work['work_activity_position']}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <figcaption>{{$manager->full_name}} {{$manager->family_info}}</figcaption>
                            </figure>
                            <p></p>
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
