@extends('shell.shared.layout')

@section('content')
    <h2 class="page-header">Lansman Katılımcıları <a href="{{ route('launch-users.export') }}" class="btn btn-primary pull-right"><i class="fa fa-table"></i> Export</a></h2>

    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Ad Soyad</th>
                <th>E-posta Adresi</th>
                <th>Şirket</th>
                <th>Pozisyon</th>
                <th>Tarih - Saat</th>
                <th class="action-column">Aksiyon</th>
            </tr>
        </thead>
        <tbody>
            @foreach($launchUsers as $launchUser)
                <tr>
                    <td>{{ $launchUser->name }}</td>
                    <td>{{ $launchUser->email }}</td>
                    <td>{{ $launchUser->company }}</td>
                    <td>{{ $launchUser->position }}</td>
                    <td>{{ $launchUser->created_at }}</td>
                    <td>
                        <a href="{{ route('launch-users.destroy', $launchUser->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection