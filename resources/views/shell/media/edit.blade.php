@extends('shell.shared.layout')

@section('content')

<h2 class="page-header">Ortam Dosyası : {{ $media->title }}</h2>

<form action="{{ route('media.update', $media->id) }}" method="post">
    @csrf
    {{ method_field('PUT') }}
    <div class="row">
        <div class="col-lg-8 col-xl-9">
            <div class="form-group">
                <label>Başlık</label>
                <input type="text" name="title" class="form-control" value="{{ $media->title }}" required>
            </div>
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
                <label>Klasör</label>
                <select id="Folder" name="folder" class="form-control">
                    @foreach($folders as $folder)
                        <option value="{{ $folder }}" @if( $media->folder == $folder) selected @endif>{{ $folder }}</option>
                    @endforeach
                </select>
                <br />
                <div class="input-group">
                    <input id="new-folder" type="text" class="form-control" placeholder="Yeni Klasör" />
                    <div class="input-group-append">
                        <button id="add-new-folder" type="button" class="btn btn-info">Klasör Ekle</button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">Kaydet</button>
                <a href="{{ route('media.index') }}" class="btn btn-secondary btn-block">Vazgeç</a>
                <a href="{{ route('media.show', $media->id) }}" class="btn btn-danger btn-block">Sil</a>
            </div>
        </div>
    </div>
</form>

@endsection

@push('scripts')

<script type="text/javascript">
    $(document).ready(function () {
        $('#add-new-folder').click(function () {
            var inputFolder = $('#new-folder');
            if (inputFolder.val().length > 0) {
                $('select#Folder').append($('<option>', {
                    value: inputFolder.val(),
                    text: inputFolder.val()
                }));
                $('select#Folder').val(inputFolder.val());
                inputFolder.val('');
            }
            return false;
        });
    });
</script>

@endpush