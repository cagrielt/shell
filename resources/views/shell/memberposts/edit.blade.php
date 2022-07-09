@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Yazı Düzenle: {{ $memberpost->title }}</h2>

    <form action="{{ route('memberposts.update', $memberpost->id) }}" method="POST">
        {{ method_field('PUT') }}
        @component('shell.memberposts.memberpost',['memberpost' => $memberpost])
        @endcomponent
    </form>

@endsection