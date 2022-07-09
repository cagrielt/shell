@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Marka Düzenle: {{ $brand->title }}</h2>

    <form action="{{ route('brands.update', $brand->id) }}" method="POST">
        {{ method_field('PUT') }}
        @component('shell.brands.brand',['brand' => $brand])
        @endcomponent
    </form>

@endsection