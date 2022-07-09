@extends('shell.shared.layout')

@section('content')

<h2 class="page-header">Ortam Dosyasını Sil : {{ $media->title }}</h2>

<div class="row">
    <div class="col-lg-8 col-xl-9">
        <div class="form-group">
            <div id="single-media">
                @if(Str::contains($media->type,'image'))
                    <img src="{{ url('/') }}/uploads/{{ $media->slug }}">
                @elseif(Str::contains($media->type,'video'))
                    <video src="{{ url('/') }}/uploads/{{ $media->slug }}" controls></video>
                @elseif(Str::contains($media->type,'audio'))
                    <audio src="{{ url('/') }}/uploads/{{ $media->slug }}" controls></audio>
                @elseif(Str::contains($media->type,'pdf'))
                    <embed src="{{ url('/') }}/uploads/{{ $media->slug }}" type='application/pdf'>
                @endif
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-xl-3">
        <div class="form-group">
            <table class="table table-bordered">
                <tr>
                    <td><strong>Tip</strong></td>
                    <td>{{ $media->type }}</td>
                </tr>
                <tr>
                    <td><strong>Yüklenme Tarihi</strong></td>
                    <td>{{ $media->created_at }}</td>
                </tr>
                <tr>
                    <td><strong>Dosya Boyutu</strong></td>
                    <td>{{ $data['size'] }}</td>
                </tr>
                @if(isset($data['dimensions']))
                    <tr>
                        <td><strong>Görsel Boyutu</strong></td>
                        <td>{{ $data['dimensions'] }}</td>
                    </tr>
                @endif
                <tr>
                    <td><strong>Dosya Linki</strong></td>
                    <td style="word-break: break-word;"><a href="{{ url('/') }}/uploads/{{ $media->slug }}" target="_blank">/uploads/{{ $media->slug }}</a></td>
                </tr>
            </table>
        </div>
        <div class="form-group">
            <form action="{{ route('media.destroy', $media->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{ route('media.index')}}" class="btn btn-secondary btn-block">Vazgeç</a>
                <button type="submit" class="btn btn-danger btn-block">Sil</button>
            </form>
        </div>
    </div>
</div>

@endsection