@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Sayfa Düzenle: {{ $page->title }}</h2>

    <form action="{{ route('pages.update', $page->id) }}" method="POST">
        {{ method_field('PUT') }}
        @component('shell.pages.page',['page' => $page])
        @endcomponent
    </form>

@endsection