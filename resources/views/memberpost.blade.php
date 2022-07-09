@extends('shared.layout')

@section('content')

@component('components.page-heading', ['page' => $page])
@endcomponent

<section class="section">
    <div class="container">
        <h1>{{ $post->title }}</h1>

        @if($post->pdf)
            <div class="pdf-viewer">
                <object data="{{ url('uploads/' . $post->pdf->slug) }}" type="application/pdf">
                    Your browser doesnt support inline pdf reader.<br><a href="{{ url('uploads/' . $post->pdf->slug) }}" target="_blank" style="text-decoration: underline;">Click to view file</a>
                </object>
            </div>
        @elseif($post->media)
            {!! IMG($post->media,null,"img-block") !!}
        @endif

        {!! $post->content !!}

        <p class="text-right"><strong>{{  date("d.m.Y", strtotime($post->created_at)) }}</strong></p>
    </div>
</section>


@endsection