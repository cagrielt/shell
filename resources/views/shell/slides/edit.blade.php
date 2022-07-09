@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Slide Düzenle: {{ $slide->title }}</h2>

    <form action="{{ route('slides.update', $slide->id) }}" method="POST">
        {{ method_field('PUT') }}
        @component('shell.slides.slide',['slide' => $slide])
        @endcomponent
    </form>

@endsection