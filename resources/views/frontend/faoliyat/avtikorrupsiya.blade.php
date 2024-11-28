<!DOCTYPE html>
<html lang="ru-RU">

<title>DAVLAT NAZORATI DEPARTAMENTINING KORRUPSIYAGA QARSHI KURASHISH MENEJMENT TIZIMI &#8212; TEXNIK JIHATDAN TARTIBGA SOLISH SOHASIDA NAZORAT INSPEKSIYASI</title>
@include('partials.header')

<body class="page-template-default page page-id-2732 wp-custom-logo wp-embed-responsive post-image-aligned-center sticky-menu-fade mobile-header mobile-header-logo mobile-header-sticky right-sidebar nav-below-header one-container fluid-header active-footer-widgets-3 nav-search-enabled nav-aligned-left header-aligned-left dropdown-hover elementor-default elementor-kit-12"
      itemtype="https://schema.org/WebPage" itemscope>
<a class="screen-reader-text skip-link" href="#content" title="Перейти к содержимому">Перейти к содержимому</a>
@include('partials.menu-header')
@include('partials.menu')
<div class="site grid-container container feed grid-parent" id="page">
    <div class="site-content" id="content">

        <div class="content-area grid-parent mobile-grid-100 grid-75 tablet-grid-75" id="primary">
            <main class="site-main" id="main">

                <article id="post-2732" class="post-2732 page type-page status-publish" itemscope>
                    <div class="inside-article">

                        @foreach ($titles as $title)
                            <header class="entry-header">
                                <br>
                                <h1 class="entry-title" itemprop="headline">{{ $title->title }}</h1>
                            </header>

                            <div class="entry-content" itemprop="text">
                                @forelse ($title->corruption as $corruption)
                                    <p>
                                        <strong>
                                            <a href="{{ route('corruptions.download', $corruption->id) }}">
                                                {{ $corruption->name }}
                                            </a>
                                        </strong>
                                    </p>
                                @empty
                                    <p><strong>No files available for this title.</strong></p>
                                @endforelse
                            </div>
                        @endforeach
                        <br>
                            <h1 class="wp-block-heading"><strong>Korrupsiyaga qarshi jamoatchilik fikrini o&#8217;rganish</strong></h1>
                            <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSfYuk_OsVpVwzJy30hd_iWv2Rq-KH9FqzeQwTLrrGYLQczRcw/viewform" data-type="URL" data-id="https://docs.google.com/forms/d/e/1FAIpQLSfYuk_OsVpVwzJy30hd_iWv2Rq-KH9FqzeQwTLrrGYLQczRcw/viewform">So&#8217;rovnomaga havola</a></p>
                            <h2 class="wp-block-heading" id="block-46564d96-e3fb-4b5e-93ae-dd303e31a4c6"><strong><em>MUROJAATLAR UCHUN:</em></strong></h2>
                        <p id="block-c587fc8b-bd62-4627-9ab8-d82c12a18bb7">Tel: (71) 202-00-11(1814)<br>Telegram bot: <a
                                href="https://t.me/DSC_anticorbot">@DSC_anticorbot</a><br>E-mail:
                            uzstdepartament@umail.uz<br>Facebook: <a
                                href="https://www.facebook.com/departmentOfstateControl/" data-type="URL">www.departmentOfstateControl</a>
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
