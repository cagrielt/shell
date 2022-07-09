@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Yönetim Kurulu Üyesi Sil: {{ $boardMember->name }}</h2>

    <table class="table table-bordered delete-table">
        <tr>
            <td>Ad Soyad</td>
            <td>{{ $boardMember->name }}</td>
        </tr>
        <tr>
            <td>Pozisyon</td>
            <td>{{ $boardMember->position }}</td>
        </tr>
        <tr>
            <td>Durum</td>
            <td>{{ $boardMember->status }}</td>
        </tr>
    </table>

    <form action="{{ route('board-members.destroy', $boardMember->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <a href="{{ route('board-members.index')}}" class="btn btn-secondary">Vazgeç</a>
        <button type="submit" class="btn btn-danger">Sil</button>
    </form>

@endsection