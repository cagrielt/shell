@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Yönetim Kurulu Üyesi Düzenle: {{ $boardMember->name }}</h2>

    <form action="{{ route('board-members.update', $boardMember->id) }}" method="POST">
        {{ method_field('PUT') }}
        @component('shell.board-members.board-member',['boardMember' => $boardMember])
        @endcomponent
    </form>

@endsection