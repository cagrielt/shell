@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Haber Düzenle: {{ $news->title }}</h2>

    <form action="{{ route('news.update', $news->id) }}" method="POST">
        {{ method_field('PUT') }}
        @component('shell.news.news',['news' => $news])
        @endcomponent
    </form>

@endsection