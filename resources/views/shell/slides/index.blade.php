@extends('shell.shared.layout')

@section('content')
    <h2 class="page-header">Slider <a href="{{ route('slides.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Yeni Ekle</a></h2>

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
                            <th>Sıralama</th>
                            <th>Durum</th>
                            <th class="action-column" style="width: 120px;">Aksiyon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($slides->where('language',$language) as $slide)
                            <tr>
                                <td>{{ $slide->title }}</td>
                                <td>{{ $slide->order }}</td>
                                <td>{{ $slide->status }}</td>
                                <td>
                                    <a href="{{ route('slides.create', ['origin_id' => $slide->id]) }}" class="btn btn-info btn-sm"><i class="fa fa-copy"></i></a>
                                    <a href="{{ route('slides.edit', $slide->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('slides.destroy', $slide->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>

@endsection