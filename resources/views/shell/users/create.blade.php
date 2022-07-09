@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Yeni Kullanıcı</h2>

    <form action="{{ route('users.store') }}" method="POST">
        @component('shell.users.user',['user' => $user])
        @endcomponent
    </form>

@endsection