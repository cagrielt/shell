@extends('shell.shared.layout')

@section('content')
    <h2 class="page-header">E-Bülten Aboneleri  <a href="{{ route('subscribers.export') }}" class="btn btn-primary pull-right"><i class="fa fa-table"></i> Export</a></h2>

    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>E-posta Adresi</th>
                <th>Tarih</th>
                <th class="action-column">Aksiyon</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subscribers as $subscriber)
                <tr>
                    <td>{{ $subscriber->email }}</td>
                    <td>{{ $subscriber->created_at }}</td>
                    <td>
                        <a href="{{ route('subscribers.destroy', $subscriber->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection