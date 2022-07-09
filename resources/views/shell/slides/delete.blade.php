@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Slide Sil: {{ $slide->title }}</h2>

    <table class="table table-bordered delete-table">
        <tr>
            <td>Başlık</td>
            <td>{{ $slide->title }}</td>
        </tr>
        <tr>
            <td>Durum</td>
            <td>{{ $slide->status }}</td>
        </tr>
    </table>

    <form action="{{ route('slides.destroy', $slide->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <a href="{{ route('slides.index')}}" class="btn btn-secondary">Vazgeç</a>
        <button type="submit" class="btn btn-danger">Sil</button>
    </form>

@endsection