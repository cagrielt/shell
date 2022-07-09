@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Yazı Düzenle: {{ $post->title }}</h2>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        {{ method_field('PUT') }}
        @component('shell.posts.post',['post' => $post])
        @endcomponent
    </form>

@endsection