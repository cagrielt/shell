@extends('shell.shared.layout')

@section('content')
    <h2 class="page-header">Admin Kullanıcılar <a href="{{ route('admins.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Yeni Ekle</a></h2>

    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>E-posta Adresi</th>
                <th class="action-column">Aksiyon</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
                <tr>
                    <td>{{ $admin->email }}</td>
                    <td>
                        <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                        <a href="{{ route('admins.destroy', $admin->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection