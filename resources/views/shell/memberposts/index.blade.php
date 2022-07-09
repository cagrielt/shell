@extends('shell.shared.layout')

@section('content')
    <h2 class="page-header">Üyelere Özel <a href="{{ route('memberposts.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Yeni Ekle</a></h2>

    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Başlık</th>
                <th>Tarih</th>
                <th>Durum</th>
                <th class="action-column" style="width: 120px;">Aksiyon</th>
            </tr>
        </thead>
        <tbody>
            @foreach($memberposts as $memberpost)
                <tr>
                    <td>{{ $memberpost->title }}</td>
                    <td>{{ $memberpost->created_at }}</td>
                    <td>{{ $memberpost->status }}</td>
                    <td>
                        <a href="{{ route('memberposts.edit', $memberpost->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                        <a href="{{ route('memberposts.destroy', $memberpost->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection