@csrf

<ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-content">Haber</a></li>
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-seo">SEO</a></li>
    @if($news->status && strlen($news->slug) > 0)
        <li class="nav-item"><a class="nav-link" @if($news->link) href="{{ $news->link }}" @else href="{{ newsUrl($news) }}" @endif target="_blank">Görüntüle <i class="fa fa-external-link"></i></a></li>
    @endif
</ul>

<div class="tab-content">
    <div id="tab-content" class="tab-pane active">
        <div class="row">
            <div class="col-lg-8 col-xl-9">
                <div class="form-group">
                    <label>Başlık</label>
                    <input type="text" name="title" class="form-control" value="{{ $news->title }}">
                </div>
                <div class="form-group">
                    <label>İçerik</label>
                    <textarea name="content" class="form-control ckeditor">{{ $news->content }}</textarea>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="form-group">
                    <label>Durum</label>
                    <select name="status" class="form-control">
                        <option value="0">Taslak</option>
                        <option value="1" @if($news->status) selected @endif>Yayında</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Dil</label>
                    <select name="language" class="form-control">
                        @foreach(config('app.languages') as $language)
                            <option value="{{ $language }}" @if($news->language == $language) selected @endif>{{ $language }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="private" id="input-private" @if($news->private) checked @endif> <label for="input-private">Üyelere Özel</label><br>
                </div>
                <div class="form-group">
                    <label>Haber Linki</label>
                    <p style="font-size: 12px; line-height: 1.2;">Bu alan dolu olursa haber doğrudan bu linke gider</p>
                    <input type="text" name="link" class="form-control" value="{{ $news->link }}">
                </div>
                <div class="form-group">
                    <label>Etkinlik Tipi ve aralığı</label>
                    <input type="text" name="event_date" class="form-control" value="{{ $news->event_date }}">
                </div>
                <div class="form-group">
                    <label>Etkinlik Başlangıç Tarihi</label>
                    <input type="text" name="starts_at" class="form-control" value="{{ $news->starts_at }}">
                </div>
                <div class="form-group">
                    <label>Etkinlik Bitiş Tarihi</label>
                    <input type="text" name="ends_at" class="form-control" value="{{ $news->ends_at }}">
                </div>
                <div class="form-group">
                    <label>Liste Görseli</label>
                    <input type="hidden" name="media_id" value="{{ $news->media_id }}">
                    @component('shell.shared.mediapicker',['media' => $news->media])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
    <div id="tab-seo" class="tab-pane">
        <div class="row">
            <div class="col-lg-8 col-xl-9">
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control" value="{{ $news->slug }}">
                </div>
                <div class="form-group">
                    <label>Anahtar Kelimeler (meta keywords)</label>
                    <input type="text" name="keywords" class="form-control" value="{{ $news->keywords }}">
                </div>
                <div class="form-group">
                    <label>Açıklama (meta description)</label>
                    <input type="text" name="description" class="form-control" value="{{ $news->description }}">
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="form-group">
                    <label>Og Image</label>
                    <input type="hidden" name="ogimage_id" value="{{ $news->ogimage_id }}">
                    @component('shell.shared.mediapicker',['media' => $news->ogimage])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-end">
    <div class="col-lg-4 col-xl-3">
        <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
    </div>
</div>