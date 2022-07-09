@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Sayfa Sil: {{ $page->title }}</h2>

    <table class="table table-bordered delete-table">
        <tr>
            <td>Başlık</td>
            <td>{{ $page->title }}</td>
        </tr>
        <tr>
            <td>Durum</td>
            <td>{{ $page->status }}</td>
        </tr>
    </table>

    <form action="{{ route('pages.destroy', $page->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <a href="{{ route('pages.index')}}" class="btn btn-secondary">Vazgeç</a>
        <button type="submit" class="btn btn-danger">Sil</button>
    </form>

@endsection