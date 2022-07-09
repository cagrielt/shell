@php

$templates = ["İletişim","Hakkımızda","Yönetim Kurulu","Blog","AI Güncel","Videolar","Üyelere Özel"];

@endphp

@csrf

<ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-content">Sayfa</a></li>
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-seo">SEO</a></li>
    @if($page->status && strlen($page->slug) > 0)
        <li class="nav-item"><a class="nav-link" href="{{ pageUrl($page) }}" target="_blank">Görüntüle <i class="fa fa-external-link"></i></a></li>
    @endif
</ul>

<div class="tab-content">
    <div id="tab-content" class="tab-pane active">
        <div class="row">
            <div class="col-lg-8 col-xl-9">
                <div class="form-group">
                    <label>Başlık</label>
                    <input type="text" name="title" class="form-control" value="{{ $page->title }}">
                </div>
                <div class="form-group">
                    <label>İçerik</label>
                    <textarea name="content" class="form-control ckeditor">{{ $page->content }}</textarea>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="form-group">
                    <label>Durum</label>
                    <select name="status" class="form-control">
                        <option value="0">Taslak</option>
                        <option value="1" @if($page->status) selected @endif>Yayında</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Dil</label>
                    <select name="language" class="form-control">
                        @foreach(config('app.languages') as $language)
                            <option value="{{ $language }}" @if($page->language == $language) selected @endif>{{ $language }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label><input type="checkbox" name="private" @if($page->private) checked @endif> Üyelere Özel</label><br>
                </div>
                <div class="form-group">
                    <label>Şablon</label>
                    <select name="template" class="form-control">
                        <option value="">Hiçbiri</option>
                        @foreach($templates as $template)
                            <option value="{{ $template }}" @if($page->template == $template) selected @endif>{{ $template }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div id="tab-seo" class="tab-pane">
        <div class="row">
            <div class="col-lg-8 col-xl-9">
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control" value="{{ $page->slug }}">
                </div>
                <div class="form-group">
                    <label>Anahtar Kelimeler (meta keywords)</label>
                    <input type="text" name="keywords" class="form-control" value="{{ $page->keywords }}">
                </div>
                <div class="form-group">
                    <label>Açıklama (meta description)</label>
                    <input type="text" name="description" class="form-control" value="{{ $page->description }}">
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="form-group">
                    <label>Og Image</label>
                    <input type="hidden" name="ogimage_id" value="{{ $page->ogimage_id }}">
                    @component('shell.shared.mediapicker',['media' => $page->ogimage])
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