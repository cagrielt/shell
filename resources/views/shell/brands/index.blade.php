@extends('shell.shared.layout')

@section('content')
    <h2 class="page-header">Markalar <a href="{{ route('brands.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Yeni Ekle</a></h2>

    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Başlık</th>
                <th>Sıralama</th>
                <th>Durum</th>
                <th class="action-column">Aksiyon</th>
            </tr>
        </thead>
        <tbody>
            @foreach($brands as $brand)
                <tr>
                    <td>{{ $brand->title }}</td>
                    <td>{{ $brand->order }}</td>
                    <td>{{ $brand->status }}</td>
                    <td>
                        <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                        <a href="{{ route('brands.destroy', $brand->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection