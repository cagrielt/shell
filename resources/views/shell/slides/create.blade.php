@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Yeni Slide</h2>

    <form action="{{ route('slides.store') }}" method="POST">
        @component('shell.slides.slide',['slide' => $slide])
        @endcomponent
    </form>

@endsection