@csrf

<div class="row">
    <div class="col-lg-8 col-xl-9">
        <div class="form-group">
            <label>Başlık</label>
            <input type="text" name="title" class="form-control" value="{{ $video->title }}">
        </div>
        <div class="form-group">
            <label>Embed Kodu</label>
            <textarea name="code" rows="5" class="form-control">{{ $video->code }}</textarea>
        </div>
    </div>
    <div class="col-lg-4 col-xl-3">
        <div class="form-group">
            <label>Durum</label>
            <select name="status" class="form-control">
                <option value="0">Taslak</option>
                <option value="1" @if($video->status) selected @endif>Yayında</option>
            </select>
        </div>
        <div class="form-group">
            <label>Dil</label>
            <select name="language" class="form-control">
                @foreach(config('app.languages') as $language)
                    <option value="{{ $language }}" @if($video->language == $language) selected @endif>{{ $language }}</option>
                @endforeach
            </select>
        </div>
        @if($video->id != 0)
            <div class="form-group">
                <label>Tarih</label>
                <input type="text" name="created_at" class="form-control" value="{{ $video->created_at }}">
            </div>
        @endif
        <div class="form-group">
            <label>Thumbnail Görseli</label>
            <input type="hidden" name="media_id" value="{{ $video->media_id }}">
            @component('shell.shared.mediapicker',['media' => $video->media])
            @endcomponent
        </div>
    </div>
</div>


<div class="row justify-content-end">
    <div class="col-lg-4 col-xl-3">
        <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
    </div>
</div>