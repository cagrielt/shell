@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Yeni Yazı</h2>

    <form action="{{ route('posts.store') }}" method="POST">
        @component('shell.posts.post',['post' => $post])
        @endcomponent
    </form>

@endsection