@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Marka Sil: {{ $brand->title }}</h2>

    <table class="table table-bordered delete-table">
        <tr>
            <td>Başlık</td>
            <td>{{ $brand->title }}</td>
        </tr>
        <tr>
            <td>Durum</td>
            <td>{{ $brand->status }}</td>
        </tr>
    </table>

    <form action="{{ route('brands.destroy', $brand->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <a href="{{ route('brands.index')}}" class="btn btn-secondary">Vazgeç</a>
        <button type="submit" class="btn btn-danger">Sil</button>
    </form>

@endsection