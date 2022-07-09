@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Video Sil: {{ $video->title }}</h2>

    <table class="table table-bordered delete-table">
        <tr>
            <td>Başlık</td>
            <td>{{ $video->title }}</td>
        </tr>
        <tr>
            <td>Durum</td>
            <td>{{ $video->status }}</td>
        </tr>
    </table>

    <form action="{{ route('videos.destroy', $video->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <a href="{{ route('videos.index')}}" class="btn btn-secondary">Vazgeç</a>
        <button type="submit" class="btn btn-danger">Sil</button>
    </form>

@endsection