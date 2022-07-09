@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Abone Sil: {{ $subscriber->email }}</h2>

    <table class="table table-bordered delete-table">
        <tr>
            <td>E-posta Adresi</td>
            <td>{{ $subscriber->email }}</td>
        </tr>
        <tr>
            <td>Tarih</td>
            <td>{{ $subscriber->created_at }}</td>
        </tr>
    </table>

    <form action="{{ route('subscribers.destroy', $subscriber->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <a href="{{ route('subscribers.index')}}" class="btn btn-secondary">Vazgeç</a>
        <button type="submit" class="btn btn-danger">Sil</button>
    </form>

@endsection