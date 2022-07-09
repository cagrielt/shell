@extends('shell.shared.layout')

@section('content')

    <h1 class="page-header">Kontrol Paneli</h1>

    <div class="row">
        @foreach ($data as $object)
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="statistic">
                    <p>
                        <i class="fa {{ $object->icon }}"></i>
                        <span>{{ $object->count }}</span><br>
                        {{ $object->title }}
                    </p>
                    <a href="{{ $object->url }}">Tümünü Gör <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        @endforeach
    </div>

    <a href="{{ route('shell.render-sitemap') }}" class="btn btn-primary">Sitemap.xml Üret</a>
@endsection