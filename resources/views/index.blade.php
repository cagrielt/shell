@extends('shared.layout')

@section('content')

@if($slides->count() > 0)

    <section id="home" class="section">
        <div id="main-slider" class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($slides as $slide)
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-10 col-lg-8">
                                    <div class="slide-content">
                                        <h3>{{ $slide->title }}</h3>
                                        {!! $slide->content !!}
                                        @if($slide->button)
                                            <a class="btn" href="{{ $slide->link }}" @if($slide->newtab) target="_blank" @endif>{{ $slide->button }}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endif

@if($brands->count() > 0)
    @component('partials.brands',['brands' => $brands])
    @endcomponent
@endif

<section class="section" style="margin: 0px; padding-bottom: 0px;">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-md-5">
                <h1>{{ __('home.who_we_are_title') }}</h1>
            </div>
            <div class="col-md-6">
                <p>{{ __('home.who_we_are_text') }}</p>
                <br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="fancy-card">
                    <img src="{{ url('assets/gfx/misyon.png') }}">
                    <h3>{{ __('home.mission_title') }}</h3>
                    <p>{{ __('home.mission_text') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fancy-card">
                    <img src="{{ url('assets/gfx/vizyon.png') }}">
                    <h3>{{ __('home.vision_title') }}</h3>
                    <p>{{ __('home.vision_text') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fancy-card">
                    <img src="{{ url('assets/gfx/yapay-zeka-ekosistemi.png') }}">
                    <h3>{{ __('home.ecosystem_title') }}</h3>
                    <p>{{ __('home.ecosystem_text') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

@if($boardMembers->count() > 0)

    <section id="home-board-members" class="section">
        <div class="container">
            <h1 class="section-title"><span>{{ __('home.board_members_title') }}</span></h1>
            <div class="board-members">
                <div class="row">
                    @foreach($boardMembers as $boardMember)
                        <div class="col-4 col-md-3 col-lg-2">
                            <div class="member-circle">
                                <div class="image-holder">
                                    @if($boardMember->media)
                                        {!! IMG($boardMember->media,"library") !!}
                                    @endif
                                </div>
                                <h5>{{ $boardMember->name }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center">
                <a href="{{ __('home.board_members_url') }}" class="btn btn-red">{{ __('home.btn_board_members') }}</a>
            </div>
        </div>
    </section>

@endif

@if($videos->count() > 0)

    <section class="section" style="margin-bottom: 0px;">
        <div class="container">
            <h1 class="section-title"><span>{{ __('global.videos') }}</span></h1>

            @component('partials.videos',['videos' => $videos])
            @endcomponent

            <div class="text-right">
                <a href="{{ __('home.videos_url') }}" class="btn btn-text">{{ __('global.see_all') }}</a>
            </div>
        </div>
    </section>

@endif

@if($posts->count() > 0)

    <section class="section bg-light-blue">
        <div class="container">
            <h1 class="section-title"><span>Blog</span></h1>

            @component('partials.posts',['posts' => $posts])
            @endcomponent

            <div class="text-right">
                <a href="{{ __('home.blog_url') }}" class="btn btn-text">{{ __('global.see_all') }}</a>
            </div>

        </div>
    </section>

@endif

@if($news->count() > 0)

    <section class="section">
        <div class="container">
            <h1 class="section-title"><span>{{ __('home.news_title') }}</span></h1>

            <div class="row">
                @foreach($news as $item)
                    <div class="col-sm-6 col-lg-4">
                        @component('components.news-thumbnail', ['news' => $item])
                        @endcomponent
                    </div>
                @endforeach
            </div>

            <div class="text-right">
                <a href="{{ __('home.news_url') }}" class="btn btn-text">{{ __('global.see_all') }}</a>
            </div>

        </div>
    </section>

@endif

@if(app()->getLocale() == "tr")

    <section id="cta" class="section">
        <div class="section-animation">
            <img class="layer" src="{{ url('assets/gfx/robot.png') }}">
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-xl-8">
                    <h1>Sizi de YZTD’de Görmek İsteriz</h1>
                    <p>Hem bilginin hem yaratıcı fikirlerin paylaştıkça artacağına inanıyoruz. Bu yüzden bizimle aynı amaçlar doğrultusunda hareket etmek isteyen tüm kurumları ve bireyleri aramızda görmeyi isteriz. Değişimin öncüsü, gelişimin bir parçası olmak için siz de derneğimize üye olabilirsiniz.</p><br>
                    <a class="btn btn-red" href="{{ url('yonetim-kurulu') }}">Yönetim Kurulu ve Üyelerimiz</a>
                    <span>&nbsp;&nbsp;&nbsp;</span>
                    <a class="btn btn-red" href="{{ route('home.register') }}">Üye Ol</a>
                </div>
            </div>
        </div>
    </section>

@endif

@endsection