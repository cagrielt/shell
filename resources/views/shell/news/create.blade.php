@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Yeni Haber</h2>

    <form action="{{ route('news.store') }}" method="POST">
        @component('shell.news.news',['news' => $news])
        @endcomponent
    </form>

@endsection