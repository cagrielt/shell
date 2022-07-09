@csrf

<ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-content">Yazı</a></li>
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-seo">SEO</a></li>
    @if($post->status && strlen($post->slug) > 0)
        <li class="nav-item"><a class="nav-link" href="{{ postUrl($post) }}" target="_blank">Görüntüle <i class="fa fa-external-link"></i></a></li>
    @endif
</ul>

<div class="tab-content">
    <div id="tab-content" class="tab-pane active">
        <div class="row">
            <div class="col-lg-8 col-xl-9">
                <div class="form-group">
                    <label>Başlık</label>
                    <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label>İçerik</label>
                    <textarea name="content" class="form-control ckeditor">{{ $post->content }}</textarea>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="form-group">
                    <label>Durum</label>
                    <select name="status" class="form-control">
                        <option value="0">Taslak</option>
                        <option value="1" @if($post->status) selected @endif>Yayında</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Dil</label>
                    <select name="language" class="form-control">
                        @foreach(config('app.languages') as $language)
                            <option value="{{ $language }}" @if($post->language == $language) selected @endif>{{ $language }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label><input type="checkbox" name="private" @if($post->private) checked @endif> Üyelere Özel</label><br>
                </div>
                @if($post->id != 0)
                    <div class="form-group">
                        <label>Tarih</label>
                        <input type="text" name="created_at" class="form-control" value="{{ $post->created_at }}">
                    </div>
                @endif
                <div class="form-group">
                    <label>Liste Görseli</label>
                    <input type="hidden" name="media_id" value="{{ $post->media_id }}">
                    @component('shell.shared.mediapicker',['media' => $post->media])
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
                    <input type="text" name="slug" class="form-control" value="{{ $post->slug }}">
                </div>
                <div class="form-group">
                    <label>Anahtar Kelimeler (meta keywords)</label>
                    <input type="text" name="keywords" class="form-control" value="{{ $post->keywords }}">
                </div>
                <div class="form-group">
                    <label>Açıklama (meta description)</label>
                    <input type="text" name="description" class="form-control" value="{{ $post->description }}">
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="form-group">
                    <label>Og Image</label>
                    <input type="hidden" name="ogimage_id" value="{{ $post->ogimage_id }}">
                    @component('shell.shared.mediapicker',['media' => $post->ogimage])
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