@extends('shell.shared.layout')

@section('content')

<h2 class="page-header">
    Ortam Kütüphanesi
    <a href="{{ route('media.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Yeni Ekle</a>
    <button id="btn-choose-mass-media" class="btn btn-info pull-right" style="margin-right: 8px;">Toplu Seçim</button>
</h2>

<div id="media-toolbar">
    @foreach ($folders as $f)
        <a href="{{ route('media.index', ['folder' => $f]) }}" class="btn btn-folder btn-sm @(folder == f ? "active":"")"><i class="fa fa-folder"></i> {{ $f }}</a>
    @endforeach
    <form class="form-inline pull-right" method="GET">
        <div class="input-group">
            <input name="s" class="form-control form-control-sm" placeholder="Arama" value="{{ $s }}" />
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary btn-sm">Ara</button>
            </div>
        </div>
    </form>
</div>

<div id="media-items">
    @foreach ($medias as $media)
        <a href="{{ route('media.edit', $media->id) }}" class="media-item" data-media-id="{{ $media->id }}">
            @if(Str::contains($media->type,'image'))
                @if(Str::contains($media->type,'svg'))
                    <img src="{{ url('/') }}/uploads/{{ $media->slug }}">
                @else
                    {!! IMG($media, 'library') !!}
                @endif
                <p>{{ $media->title }}</p>
            @elseif(Str::contains($media->type,'audio') || Str::contains($media->type, 'video'))
                <i class="fa fa-play-circle"></i>
                <p class="visible">{{ $media->title }}</p>
            @else
                <i class="fa fa-file"></i>
                <p class="visible">{{ $media->title }}</p>
            @endif
        </a>
    @endforeach
</div>

{{ $medias->links() }}

<form id="mass-media-form" action="{{ route('media.mass-action') }}" method="post">
    @csrf
    <label id="lbl-chosen-items">0 Öğe Seçildi</label>
    <input id="input-action" type="hidden" name="action" value="delete" />
    <input id="input-medias" type="hidden" name="medias" value="" />
    <button id="btn-delete" class="btn btn-danger">Seçilenleri Sil</button>
    <label id="lbl-or">veya</label>
    <select name="folder" class="form-control">
        @foreach($folders as $f)
            <option value="{{ $f }}">{{ $f }}</option>
        @endforeach
    </select>
    <button id="btn-move-to-folder" class="btn btn-info">Klasörüne Taşı</button>
</form>

@endsection

@push('scripts')

    <script type="text/javascript">
        $(document).ready(function () {
            var massChosing = false;
            var massMediaForm = $('#mass-media-form');
            var mediaItems = $('#media-items');
            var labelChosen = massMediaForm.find('#lbl-chosen-items');
            var inputMedias = massMediaForm.find('#input-medias');
            var massMediaForm, chosenLabel, inputMedias, mediaItems;

            $('#btn-choose-mass-media').click(function () {
                massChosing = true;
                massMediaForm.show();
                $(this).hide();
            });

            mediaItems.find('.media-item').click(function () {
                if (massChosing) {
                    $(this).toggleClass('active');
                    var mediaIDs = [];
                    mediaItems.find('.media-item.active').each(function () {
                        mediaIDs.push($(this).data('media-id'));
                    });
                    labelChosen.text(mediaIDs.length + ' Öğe Seçildi');
                    inputMedias.val(mediaIDs.join());
                    return false;
                }
            });

            massMediaForm.find('#btn-delete').click(function () {
                massMediaForm.find('#input-action').val("delete");
                return confirm("Seçili öğeleri silmek istediğinizden emin misiniz? Eğer silmek istediğiniz ortam dosyası bir içerikte öne çıkan görsel olarak kullanılıyorsa silinmez.");
            });

            massMediaForm.find('#btn-move-to-folder').click(function () {
                massMediaForm.find('#input-action').val("move");
            });
        });
    </script>

@endpush

