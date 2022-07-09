<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Admin</title>
    <link href="{{ url('/') }}/assets/css/shell.css" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <div id="left-column" data-current="Shell">
        <a id="logo" href="{{ url('/') }}" target="_blank">
            <img src="{{ url('assets/gfx/logo.png') }}" />
        </a>
        <div id="menu-switch">
            <i class="fa fa-bars"></i>
        </div>
        <div id="menu-holder">
            <ul class="left-menu">
                <li><a href="{{ route('shell.index') }}"><i class="fa fa-dashboard"></i> Kontrol Paneli</a></li>
                <li><a href="{{ route('slides.index') }}"><i class="fa fa-picture-o"></i> Slider</a></li>
                <li><a href="{{ route('board-members.index') }}"><i class="fa fa-briefcase"></i> Yönetim Kurulu</a></li>
                <li><a href="{{ route('brands.index') }}"><i class="fa fa-black-tie"></i> Markalar</a></li>
                <li><a href="{{ route('users.index') }}"><i class="fa fa-users"></i> Kullanıcılar</a></li>
                <li><a href="{{ route('posts.index') }}"><i class="fa fa-pencil"></i> Blog</a></li>
                <li><a href="{{ route('news.index') }}"><i class="fa fa-newspaper-o"></i> AI Güncel</a></li>
                <li><a href="{{ route('videos.index') }}"><i class="fa fa-play"></i> Videolar</a></li>
                <li><a href="{{ route('memberposts.index') }}"><i class="fa fa-file-text"></i> Üyelere Özel</a></li>
                <li><a href="{{ route('pages.index') }}"><i class="fa fa-file-text"></i> Sayfalar</a></li>
                <li><a href="{{ route('media.index') }}"><i class="fa fa-picture-o"></i> Ortam Kütüphanesi</a></li>
                <li><a href="{{ route('subscribers.index') }}"><i class="fa fa-envelope"></i> E-Bülten Aboneleri</a></li>
                <li><a href="{{ route('menuitems.index') }}"><i class="fa fa-bars"></i> Menüler</a></li>
                <li><a href="{{ route('admins.index') }}"><i class="fa fa-user-secret"></i> Admin Kullanıcılar</a></li>
            </ul>
            <ul class="bottom-menu">
                <li>{{ session('admin') }}</li>
                <li><a href="{{ route('shell.logout') }}"><i class="fa fa-sign-out"></i> Çıkış</a></li>
                <li class="copyright">Powered by <a href="https://teknofikir.com.tr" target="_blank">teknofikir</a></li>
            </ul>
        </div>
    </div>

    <div id="page-wrapper">
        @yield('content')
    </div>

    <div id="media-picker">
        <div id="media-picker-content">
            <div id="media-toolbar">
                <input class="form-control form-control-sm" placeholder="Filtre" />
            </div>
            <div id="media-items">

            </div>
            <form id="media-upload" enctype="multipart/form-data">
                @csrf
                <div class="form-content">
                    <div class="form-group">
                        <label>Başlık</label>
                        <input type="text" name="title" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Klasör</label>
                        <input id="input-upload-folder" type="text" name="folder" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Ortam Dosyası</label>
                        <input type="file" name="files[]" class="form-control" accept=".jpg, .jpeg, .png, .gif, .doc, .docx, .pdf, .xls, .xlsx,.ppt,.pptx,.txt,.mp4,.mp3,.mov,.svg" multiple required />
                    </div>
                    <div class="text-center">
                        <button class="btn btn-success">YÜKLE</button>
                        <button id="btn-cancel-upload" class="btn btn-secondary">VAZGEÇ</button>
                    </div>
                </div>
            </form>
            <div id="media-picker-buttons">
                <button id="btn-upload-media" class="btn btn-success btn-sm">DOSYA YÜKLE</button>
                <button id="btn-remove-media" class="btn btn-danger btn-sm">DOSYAYI KALDIR</button>
                <button id="btn-cancel" class="btn btn-secondary btn-sm">VAZGEÇ</button>
                <button id="btn-apply" class="btn btn-primary btn-sm">UYGULA</button>
            </div>
        </div>
    </div>
    
    @if(count($errors) || Session::has('message'))
        <div id="alert-message">
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
            @if(Session::has('message'))
                {{ Session::get('message') }}
            @endif
        </div>
    @endif

    <script type="text/javascript" src="{{ url('assets/js/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/sortable.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/shell.js') }}"></script>
    @stack('scripts')

</body>
</html>