@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Yazı Sil: {{ $post->title }}</h2>

    <table class="table table-bordered delete-table">
        <tr>
            <td>Başlık</td>
            <td>{{ $post->title }}</td>
        </tr>
        <tr>
            <td>Durum</td>
            <td>{{ $post->status }}</td>
        </tr>
    </table>

    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <a href="{{ route('posts.index')}}" class="btn btn-secondary">Vazgeç</a>
        <button type="submit" class="btn btn-danger">Sil</button>
    </form>

@endsection