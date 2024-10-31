<!DOCTYPE html>
<html lang="ru-RU">

<title>{{$vacancy->name}}</title>
@include('partials.header')

<body class="post-template-default single single-post postid-1512 single-format-standard wp-custom-logo wp-embed-responsive post-image-above-header post-image-aligned-center sticky-menu-fade mobile-header mobile-header-logo mobile-header-sticky right-sidebar nav-below-header one-container fluid-header active-footer-widgets-3 nav-search-enabled nav-aligned-left header-aligned-left dropdown-hover elementor-default elementor-kit-12"
      itemtype="https://schema.org/Blog" itemscope>
<a class="screen-reader-text skip-link" href="#content" title="Перейти к содержимому">Перейти к содержимому</a>
@include('partials.menu-header')
@include('partials.menu')
<div class="site grid-container container hfeed grid-parent" id="page">
    <div class="site-content" id="content">

        <div class="content-area grid-parent mobile-grid-100 grid-75 tablet-grid-75" id="primary">
            <main class="site-main" id="main">

                <article id="post-1512" class="post-1512 post type-post status-publish format-standard hentry category-bosh-ish-orinlari" itemtype="https://schema.org/CreativeWork" itemscope>
                    <div class="inside-article">
                        <header class="entry-header">
                            <h1 class="entry-title" itemprop="headline">{{$vacancy->name}}</h1>
                            <div class="entry-meta">
                                <span class="posted-on"><time class="entry-date published" itemprop="datePublished">{{Carbon\Carbon::parse($vacancy->published_at)->format('d.m.Y') }}</time></span>                                    </div>
                        </header>

                        <div class="entry-content" itemprop="text">

                            <figure class="wp-block-table">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="has-text-align-left" data-align="left">Номи</td>
                                        <td>{{$vacancy->name}}</td>
                                    </tr>
                                    <tr>
                                        <td class="has-text-align-left" data-align="left">Ташкилот: &nbsp;</td>
                                        <td>{{$vacancy->organ}}</td>
                                    </tr>
                                    <tr>
                                        <td class="has-text-align-left" data-align="left">Чоп этилган сана: &nbsp;</td>
                                        <td>{{Carbon\Carbon::parse($vacancy->published_at)->format('d.m.Y') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="has-text-align-left" data-align="left">Бўлим: &nbsp;</td>
                                        <td>{{$vacancy->branch}}</td>
                                    </tr>
                                    <tr>
                                        <td class="has-text-align-left" data-align="left">Маош: &nbsp;</td>
                                        <td>{{$vacancy->salary}}</td>
                                    </tr>
                                    <tr>
                                        <td class="has-text-align-left" data-align="left">Мутахассислик: &nbsp;</td>
                                        <td>{{$vacancy->specialty}}</td>
                                    </tr>
                                    <tr>
                                        <td class="has-text-align-left" data-align="left">Талаб этиладиган иш тажрибаси: &nbsp;</td>
                                        <td>{{$vacancy->experience}}</td>
                                    </tr>
                                    <tr>
                                        <td class="has-text-align-left" data-align="left">Бандлик: &nbsp;</td>
                                        <td>{{$vacancy->employment}}</td>
                                    </tr>
                                    <tr>
                                        <td class="has-text-align-left" data-align="left">Маълумоти: &nbsp;</td>
                                        <td>{{$vacancy->information}}</td>
                                    </tr>
                                    <tr>
                                        <td class="has-text-align-left" data-align="left">Жинси: &nbsp;</td>
                                        <td>{{$vacancy->gender}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </figure>
                        </div>

                        <footer class="entry-meta" aria-label="Мета записи">
                            <span class="cat-links"><span class="screen-reader-text">Рубрики </span><a href="{{route('vacancy')}}" rel="category tag">Бўш иш ўринлари</a></span>
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
