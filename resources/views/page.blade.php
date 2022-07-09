@extends('shared.layout')

@section('content')

@component('components.page-heading', ['page' => $page])
@endcomponent

<section class="section">
    <div class="container">
        {!! $page->content !!}

        @isset($data['board-members'])
            @component('partials.board-members', ['boardMembers' => $data['board-members']])
            @endcomponent
        @endisset

        @isset($data['posts'])
            @component('partials.posts', ['posts' => $data['posts']])
            @endcomponent
        @endisset

        @isset($data['news'])
            @component('partials.news', ['news' => $data['news']])
            @endcomponent
        @endisset

        @isset($data['videos'])
            @component('partials.videos', ['videos' => $data['videos']])
            @endcomponent
        @endisset

        @isset($data['memberPosts'])
            @component('partials.memberposts',['memberPosts' => $data['memberPosts']])
            @endcomponent
        @endisset

        @if(isset($data['pages']) && $data['pages']->count() > 0)
            <h3>{{ __('global.pages') }}</h3>
            <p>
                @foreach($data['pages'] as $page)
                    <a href="{{ pageUrl($page) }}"><strong>{{ $page->title }}</strong></a><br>
                @endforeach
            </p>
        @endif
    </div>
</section>

@isset($data['brands'])
    @component('partials.brands', ['brands' => $data['brands']])
    @endcomponent
@endisset

@endsection