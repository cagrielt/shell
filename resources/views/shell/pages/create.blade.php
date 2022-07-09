@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Yeni Sayfa</h2>

    <form action="{{ route('pages.store') }}" method="POST">
        @component('shell.pages.page',['page' => $page])
        @endcomponent
    </form>

@endsection