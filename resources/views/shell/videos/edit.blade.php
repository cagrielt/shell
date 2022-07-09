@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Video Düzenle: {{ $video->title }}</h2>

    <form action="{{ route('videos.update', $video->id) }}" method="POST">
        {{ method_field('PUT') }}
        @component('shell.videos.video',['video' => $video])
        @endcomponent
    </form>

@endsection