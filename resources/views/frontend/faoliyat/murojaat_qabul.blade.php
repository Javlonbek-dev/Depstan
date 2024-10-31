<!DOCTYPE html>
<html lang="ru-RU">

<title>Murojaatlarni qabul qilish &#8212; TEXNIK JIHATDAN TARTIBGA SOLISH SOHASIDA NAZORAT INSPEKSIYASI</title>
@include('partials.header')

<body class="page-template-default page page-id-2755 wp-custom-logo wp-embed-responsive post-image-aligned-center sticky-menu-fade mobile-header mobile-header-logo mobile-header-sticky right-sidebar nav-below-header one-container fluid-header active-footer-widgets-3 nav-search-enabled nav-aligned-left header-aligned-left dropdown-hover elementor-default elementor-kit-12"
      itemtype="https://schema.org/WebPage" itemscope>
<a class="screen-reader-text skip-link" href="#content" title="Перейти к содержимому">Перейти к содержимому</a>
@include('partials.menu-header')
@include('partials.menu')
<div class="site grid-container container hfeed grid-parent" id="page">
    <div class="site-content" id="content">

        <div class="content-area grid-parent mobile-grid-100 grid-75 tablet-grid-75" id="primary">
            <main class="site-main" id="main">

                <article id="post-2755" class="post-2755 page type-page status-publish" itemtype="https://schema.org/CreativeWork" itemscope>
                    <div class="inside-article">

                        <header class="entry-header">
                            <h1 class="entry-title" itemprop="headline">Murojaatlarni qabul qilish</h1>
                        </header>


                        <div class="entry-content" itemprop="text">
                            @foreach($accepts as $accept )
                                <div class="content-item" style="display: flex; align-items: flex-start; gap: 20px; margin-bottom: 20px;">
                                    <figure class="wp-block-image size-large" style="flex-shrink: 0;">
                                        <img decoding="async" src="{{ asset('storage/' . $accept->image) }}" alt="Image Description" style="max-width: 200px; height: auto;" />
                                    </figure>

                                    <div class="text-content" style="flex: 1;">
                                        <p>O‘zbekiston Respublikasi Prezidentining 29.06.2020 yildagi
                                            <a href="https://lex.uz/docs/-4875784">&#171;O‘ZBEKISTON RESPUBLIKASIDA KORRUPSIYAGA QARSHI KURASHISH TIZIMINI TAKOMILLASHTIRISH BO‘YICHA QO‘SHIMCHA CHORA-TADBIRLAR TO‘G‘RISIDA&#187;</a>
                                            PF-6013-son Farmoni, 06.07.2021 yildagi
                                            <a href="https://lex.uz/docs/-5495533">&#171;KORRUPSIYAGA QARSHI KURASHISH FAOLIYATINI SAMARALI TASHKIL ETISHGA DOIR QO‘SHIMCHA CHORA-TADBIRLAR TO‘G‘RISIDA&#187;</a>
                                            PQ-5177-son Qaroriga muvofiq 2021 yil 1 oktabrdan boshlab, barcha davlat organlari va tashkilotlari, shu jumladan viloyat hokimliklarida korrupsiyaga qarshi ichki nazorat tuzilmalari faoliyati yo‘lga qo‘yilishi belgilangan.
                                        </p>

                                        <p>Xususan, O‘zbekiston Texnik jihatdan tartibga solish agentligining Texnik jihatdan tartibga solish, standartlashtirish, sertifikatlashtirish va metrologiya sohasida davlat nazorati departamentida korrupsiya omillariga barham berish maqsadida
                                            bir qancha <a href="{{route('corruption')}}">huquqiy-me’yoriy hujjatlar</a> ishlab chiqilgan.
                                        </p>

                                        <p>Yuqoridagilardan kelib chiqib bizning faoliyatda korrupsiyaviy holatlar yoki byurokratik to‘siqlarga uchrash holatlari aniqlangan holatda bizning quyidagi aloqa manzillarimizga murojaat qilishingiz mumkin.</p>

                                    </div>
                                </div>
                                <div class="contact-info" style="display: flex; flex-wrap: wrap; gap: 40px; align-content: center; justify-content:start; ">
                                    <div>
                                        <p><strong>Rahbar:</strong></p>
                                        <p><strong>Komplayens nazorat bo‘limi:</strong></p>
                                        <p><strong>Qabulxona:</strong></p>

                                    </div>
                                    <div>
                                        <p>{{$accept->manager_name}}</p>
                                        <p>{{$accept->reception_name}}</p>
                                        <p>{{$accept->control_name}}</p>
                                    </div>
                                    <div>
                                        <p><strong>Tel:</strong> {{$accept->employ_phone}}</p>
                                        <p><strong>Tel:</strong> {{$accept->reception_phone}}</p>
                                        <p><strong>Tel:</strong> {{$accept->control_phone}}</p>
                                    </div>
                                </div>

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
