@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Yazı Sil: {{ $memberpost->title }}</h2>

    <table class="table table-bordered delete-table">
        <tr>
            <td>Başlık</td>
            <td>{{ $memberpost->title }}</td>
        </tr>
        <tr>
            <td>Durum</td>
            <td>{{ $memberpost->status }}</td>
        </tr>
    </table>

    <form action="{{ route('memberposts.destroy', $memberpost->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <a href="{{ route('memberposts.index')}}" class="btn btn-secondary">Vazgeç</a>
        <button type="submit" class="btn btn-danger">Sil</button>
    </form>

@endsection