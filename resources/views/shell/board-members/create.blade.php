@extends('shell.shared.layout')

@section('content')

    <h2 class="page-header">Yeni Yönetim Kurulu Üyesi</h2>

    <form action="{{ route('board-members.store') }}" method="POST">
        @component('shell.board-members.board-member',['boardMember' => $boardMember])
        @endcomponent
    </form>

@endsection