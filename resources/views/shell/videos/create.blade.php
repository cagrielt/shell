@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Yeni Video</h2>

    <form action="{{ route('videos.store') }}" method="POST">
        @component('shell.videos.video',['video' => $video])
        @endcomponent
    </form>

@endsection