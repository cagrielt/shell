@csrf

<ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-content">Üye</a></li>
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-seo">SEO</a></li>
    @if($boardMember->status && strlen($boardMember->slug) > 0)
        <li class="nav-item"><a class="nav-link" href="{{ boardMemberUrl($boardMember) }}" target="_blank">Görüntüle <i class="fa fa-external-link"></i></a></li>
    @endif
</ul>

<div class="tab-content">
    <div id="tab-content" class="tab-pane active">
        <div class="row">
            <div class="col-lg-8 col-xl-9">
                <div class="form-group">
                    <label>Ad Soyad</label>
                    <input type="text" name="name" class="form-control" value="{{ $boardMember->name }}">
                </div>
                <div class="form-group">
                    <label>Pozisyon</label>
                    <input type="text" name="position" class="form-control" value="{{ $boardMember->position }}">
                </div>
                <div class="form-group">
                    <label>İçerik</label>
                    <textarea name="content" class="form-control ckeditor">{{ $boardMember->content }}</textarea>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="form-group">
                    <label>Durum</label>
                    <select name="status" class="form-control">
                        <option value="0">Taslak</option>
                        <option value="1" @if($boardMember->status) selected @endif>Yayında</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Dil</label>
                    <select name="language" class="form-control">
                        @foreach(config('app.languages') as $language)
                            <option value="{{ $language }}" @if($boardMember->language == $language) selected @endif>{{ $language }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="category" class="form-control">
                        @foreach(config('app.boardMemberCategories') as $key => $value)
                            <option value="{{ $key }}" @if($key == $boardMember->category) selected @endif>{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Sıralama</label>
                    <p style="font-size: 12px;">Büyük olan önce görünür</p>
                    <input type="number" name="order" class="form-control" value="{{ $boardMember->order }}">
                </div>
                <div class="form-group">
                    <label>E-posta Adresi</label>
                    <input type="text" name="email" class="form-control" value="{{ $boardMember->email }}">
                </div>
                <div class="form-group">
                    <label>Telefon</label>
                    <input type="text" name="tel" class="form-control" value="{{ $boardMember->tel }}">
                </div>
                <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" name="facebook" class="form-control" value="{{ $boardMember->facebook }}">
                </div>
                <div class="form-group">
                    <label>Twitter</label>
                    <input type="text" name="twitter" class="form-control" value="{{ $boardMember->twitter }}">
                </div>
                <div class="form-group">
                    <label>Instagram</label>
                    <input type="text" name="instagram" class="form-control" value="{{ $boardMember->instagram }}">
                </div>
                <div class="form-group">
                    <label>LinkedIn</label>
                    <input type="text" name="linkedin" class="form-control" value="{{ $boardMember->linkedin }}">
                </div>
                <div class="form-group">
                    <label>Görsel</label>
                    <input type="hidden" name="media_id" value="{{ $boardMember->media_id }}">
                    @component('shell.shared.mediapicker',['media' => $boardMember->media])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
    <div id="tab-seo" class="tab-pane">
        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" value="{{ $boardMember->slug }}">
        </div>
        <div class="form-group">
            <label>Anahtar Kelimeler (meta keywords)</label>
            <input type="text" name="keywords" class="form-control" value="{{ $boardMember->keywords }}">
        </div>
        <div class="form-group">
            <label>Açıklama (meta description)</label>
            <input type="text" name="description" class="form-control" value="{{ $boardMember->description }}">
        </div>
    </div>
</div>

<div class="row justify-content-end">
    <div class="col-lg-4 col-xl-3">
        <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
    </div>
</div>