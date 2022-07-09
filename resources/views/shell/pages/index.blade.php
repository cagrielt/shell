@extends('shell.shared.layout')

@section('content')
    <h2 class="page-header">Sayfalar <a href="{{ route('pages.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Yeni Ekle</a></h2>

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
                            <th>Başlık</th>
                            <th>Durum</th>
                            <th class="action-column">Aksiyon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pages->where('language',$language) as $page)
                            <tr>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->status }}</td>
                                <td>
                                    <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('pages.destroy', $page->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>

@endsection