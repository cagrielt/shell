@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Haber Sil: {{ $news->title }}</h2>

    <table class="table table-bordered delete-table">
        <tr>
            <td>Başlık</td>
            <td>{{ $news->title }}</td>
        </tr>
        <tr>
            <td>Durum</td>
            <td>{{ $news->status }}</td>
        </tr>
    </table>

    <form action="{{ route('news.destroy', $news->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <a href="{{ route('news.index')}}" class="btn btn-secondary">Vazgeç</a>
        <button type="submit" class="btn btn-danger">Sil</button>
    </form>

@endsection