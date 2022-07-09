@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Admin Kullanıcı Düzenle: {{ $admin->email }}</h2>

    <form action="{{ route('admins.update', $admin->id) }}" method="POST">
        {{ method_field('PUT') }}
        @component('shell.admins.admin',['admin' => $admin])
        @endcomponent
    </form>

@endsection