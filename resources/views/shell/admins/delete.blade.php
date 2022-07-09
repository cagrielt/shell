@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Admin Kullanıcı Sil: {{ $admin->email }}</h2>

    <table class="table table-bordered delete-table">
        <tr>
            <td>E-posta Adresi</td>
            <td>{{ $admin->email }}</td>
        </tr>
    </table>

    <form action="{{ route('admins.destroy', $admin->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <a href="{{ route('admins.index')}}" class="btn btn-secondary">Vazgeç</a>
        <button type="submit" class="btn btn-danger">Sil</button>
    </form>

@endsection