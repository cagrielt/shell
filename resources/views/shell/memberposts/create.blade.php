@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Yeni Yazı</h2>

    <form action="{{ route('memberposts.store') }}" method="POST">
        @component('shell.memberposts.memberpost',['memberpost' => $memberpost])
        @endcomponent
    </form>

@endsection