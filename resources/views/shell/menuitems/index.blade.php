@extends('shell.shared.layout')

@section('content')

@php

$menus = ["Ana Menü","Footer Menü"];

@endphp

<h2 class="page-header">Menüler</h2>

<ul id="lang-tabs" class="nav nav-tabs">
    @foreach(config('app.languages') as $language)
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-{{ $language }}">{{ $language }}</a></li>
    @endforeach
</ul>

<div class="tab-content">
    @foreach(config('app.languages') as $language)
        <div id="tab-{{ $language }}" class="tab-pane">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Menü</th>
                        <th class="action-column">Aksiyon</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menus as $menu)
                        <tr>
                            <td>{{ $menu }} - {{ $language }}</td>
                            <td><a href="{{ route('menuitems.edit', ['position' => $menu, 'language' => $language]) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
</div>

@endsection