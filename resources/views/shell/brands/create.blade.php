@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Yeni Marka</h2>

    <form action="{{ route('brands.store') }}" method="POST">
        @component('shell.brands.brand',['brand' => $brand])
        @endcomponent
    </form>

@endsection