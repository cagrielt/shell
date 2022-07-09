@extends('shared.layout')

@section('content')

@component('components.page-heading', ['page' => $pageBlog])
@endcomponent

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-9">
                <h1>{{ $post->title }}</h1>
                
                @if($post->media)
                    {!! IMG($post->media,null,"img-block") !!}
                @endif

                {!! $post->content !!}

                @component('components.sharer', ['title' => $post->title, 'createdAt' => $post->created_at])
                @endcomponent
            </div>

        </div>
    </div>
</section>


@endsection