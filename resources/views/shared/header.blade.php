@php
$lang = app()->getLocale();
@endphp

<header id="header">
    <div class="container">
        <a id="header-logo" href="{{ __('global.home_url') }}" title="yztd">
            <img src="{{ url('/assets/gfx/logo.png') }}" alt="yztd">
        </a>
        <ul id="main-menu">
            @foreach($menuItems as $menuItem)
                <li @if($menuItem->children->count() > 0) class="has-submenu" @endif>
                    <a href="{{ $menuItem->url }}" @if($menuItem->newtab) target="_blank" @endif>{{ $menuItem->title }}</a>
                    @if($menuItem->children->count() > 0)
                        <ul class="submenu">
                            @foreach($menuItem->children as $child)
                                <li><a href="{{ $child->url }}" @if($child->newtab) target="_blank" @endif>{{ $child->title }}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
        <ul id="membership-menu">
            <li><button id="btn-search" class="btn"><i class="fa fa-search"></i></button></li>
            @if($lang == "tr")
                @php
                    $user = session('user');
                @endphp
                @if($user)
                    <li class="has-submenu">
                        <button id="btn-user" class="btn">
                            <i class="fa fa-user"></i>
                        </button>
                        <ul class="submenu">
                            <li>{{ $user->name }}</li>
                            <li><a href="{{ route('home.change-password') }}">Şifremi Değiştir</a></li>
                            <li><a href="{{ route('home.profile') }}">Profilim</a></li>
                            <li><a href="{{ route('home.logout') }}">Çıkış Yap</a></li>
                        </ul>
                    </li>
                @else
                    <li class="has-submenu">
                        <button id="btn-user" class="btn">
                            <i class="fa fa-user"></i>
                            <span class="button-text">Üyelik</span>
                        </button>
                        <ul class="submenu">
                            <li>Üyelere özel içerikleri keşfedin.</li>
                            <li>
                                <a class="btn" href="{{ route('home.login') }}">Giriş Yap</a>
                                <a class="btn" href="{{ route('home.register') }}">Üye Ol</a>
                            </li>
                        </ul>
                    </li>
                @endif
            @endif
            <li class="lang-switch">
                @if(app()->getLocale() == 'tr')
                    <a href="{{ url('/en') }}">EN</a>
                @else
                    <a href="{{ url('/') }}">TR</a>
                @endif
            </li>
        </ul>
        <div id="menu-switch"></div>
    </div>
    <div id="search-holder">
        <div class="container">
            <form id="search-form" action="{{ __('global.search_url') }}" method="GET">
                <input type="text" name="s" class="form-control" placeholder="{{ __('global.search') }}">
                <button type="button" id="search-close" class="btn"></button>
            </form>
        </div>
    </div>
</header>