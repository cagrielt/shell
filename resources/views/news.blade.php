@extends('shared.layout')

@section('content')

@component('components.page-heading', ['page' => $pageNews])
@endcomponent

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-9">
                <h1>{{ $news->title }}</h1>
                
                @if($news->media)
                    {!! IMG($news->media,null,"img-block") !!}
                @endif

                {!! $news->content !!}

                @component('components.sharer', ['title' => $news->title, 'createdAt' => $news->created_at])
                @endcomponent
            </div>

        </div>
    </div>
</section>


@endsection