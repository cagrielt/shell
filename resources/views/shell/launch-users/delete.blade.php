@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Katılımcı Sil: {{ $launchUser->email }}</h2>

    <table class="table table-bordered delete-table">
        <tr>
            <td>Ad Soyad</td>
            <td>{{ $launchUser->name }}</td>
        </tr>
        <tr>
            <td>E-posta Adresi</td>
            <td>{{ $launchUser->email }}</td>
        </tr>
        <tr>
            <td>Şirket</td>
            <td>{{ $launchUser->company }}</td>
        </tr>
        <tr>
            <td>Pozisyon</td>
            <td>{{ $launchUser->position }}</td>
        </tr>
    </table>

    <form action="{{ route('launch-users.destroy', $launchUser->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <a href="{{ route('launch-users.index')}}" class="btn btn-secondary">Vazgeç</a>
        <button type="submit" class="btn btn-danger">Sil</button>
    </form>

@endsection