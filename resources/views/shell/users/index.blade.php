@extends('shell.shared.layout')

@section('content')
    <h2 class="page-header">Kullanıcılar <a href="{{ route('users.export') }}" class="btn btn-primary pull-right"><i class="fa fa-table"></i> Export</a></h2>

    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Ad Soyad</th>
                <th>E-posta</th>
                <th>Tip</th>
                <th>Faaliyet Alanı</th>
                <th>AI İlgi Alanı</th>
                <th>Üyelik Tarihi</th>
                <th>Durum</th>
                <th class="action-column">Aksiyon</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->type }}</td>
                    <td>{{ $user->area }}</td>
                    <td>{{ $user->interest }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        {{ $user->status }}
                        @if(!$user->status)
                             - <a href="{{ route('users.confirm', ['id' => $user->id]) }}" class="btn btn-primary btn-sm">Onayla</a>
                             - <a href="{{ route('users.preconfirm', ['id' => $user->id]) }}" class="btn btn-primary btn-sm">Ön Onay Gönder</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                        <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection