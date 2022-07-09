@php
$lang = app()->getLocale();
@endphp
<!DOCTYPE html>
<html lang="{{ $lang }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @php
    
    $title = isset($metas['title']) && $metas['title'] != "" ? $metas['title'] . " | YZTD" : "Yapay Zeka ve Teknoloji Derneği";
    $description = isset($metas['description']) && $metas['description'] != "" ? $metas['description'] : __('global.meta_description');
    $keywords = isset($metas['keywords']) && $metas['keywords'] != "" ? $metas['keywords'] : __('global.meta_keywords');

    @endphp

    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">

    <meta property="og:title" content="{{ $title }}"/>
    <meta property="og:site_name" content="Yapay Zeka ve Teknoloji Derneği"/>
    <meta property="og:description" content="{{ $description }}"/>
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ url('yztd-og-image.png') }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="Yapay Zeka ve Teknoloji Derneği">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image" content="{{ url('yztd-og-image.png') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ url('favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ url('favicons/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="{{ url('favicons/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ url('assets/css/style.css?ver=19') }}" rel="stylesheet">
    @stack('styles')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-179502504-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-179502504-1');
    </script>
</head>
<body>
    @include('shared.header')

    <div id="content">
        @yield('content')

        <section id="subscribe" class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                        <p>{{ __('global.subscribe_title') }}</p>
                        <form class="form-async" id="subscribe-form" method="POST" action="{{ route('api.subscribe') }}">
                            <input name="email" type="email" class="form-control" placeholder="{{ __('global.subscribe_email') }}" required>
                            <button type="submit" class="btn">{{ __('global.btn_register') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('shared.footer')

    <div id="stage" @if(session()->has('message')) class="has-message" @endif>
        @if(session()->has('message'))
            <p class="message-holder">{{ session('message') }}</p>
        @endif
    </div>
    
    <script>
        var errDefault = "{{ __('global.err_default') }}";
        var lang = "{{ $lang }}";
    </script>
    <script src="{{ url('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ url('assets/js/swiper.min.js') }}"></script>
    <script src="{{ url('assets/js/main.js?ver=18') }}"></script>
    @stack('scripts')
</body>
</html>