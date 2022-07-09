@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Kullanıcı Sil: {{ $user->name }}</h2>

    <table class="table table-bordered delete-table">
        <tr>
            <td>Ad Soyad</td>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <td>E-posta Adresi</td>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <td>Durum</td>
            <td>{{ $user->status }}</td>
        </tr>
    </table>

    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <a href="{{ route('users.index')}}" class="btn btn-secondary">Vazgeç</a>
        <button type="submit" class="btn btn-danger">Sil</button>
    </form>

@endsection