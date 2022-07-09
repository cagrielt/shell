@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Yeni Admin Kullanıcı</h2>

    <form action="{{ route('admins.store') }}" method="POST">
        @component('shell.admins.admin',['admin' => $admin])
        @endcomponent
    </form>

@endsection