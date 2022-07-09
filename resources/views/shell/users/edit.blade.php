@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Kullanıcı Düzenle: {{ $user->name }}</h2>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        {{ method_field('PUT') }}
        @component('shell.users.user',['user' => $user])
        @endcomponent
    </form>

@endsection