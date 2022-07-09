@csrf

<div class="row">
    <div class="col-lg-8 col-xl-9">
        <div class="form-group">
            <label>Başlık</label>
            <input type="text" name="title" class="form-control" value="{{ $slide->title }}">
        </div>
        <div class="form-group">
            <label>İçerik</label>
            <textarea name="content" class="form-control ckeditor">{{ $slide->content }}</textarea>
        </div>
    </div>
    <div class="col-lg-4 col-xl-3">
        <div class="form-group">
            <label>Durum</label>
            <select name="status" class="form-control">
                <option value="0">Taslak</option>
                <option value="1" @if($slide->status) selected @endif>Yayında</option>
            </select>
        </div>
        <div class="form-group">
            <label>Dil</label>
            <select name="language" class="form-control">
                @foreach(config('app.languages') as $language)
                    <option value="{{ $language }}" @if($slide->language == $language) selected @endif>{{ $language }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Sıralama</label>
            <input type="number" name="order" class="form-control" value="{{ $slide->order }}">
        </div>
        <div class="form-group">
            <label>Buton Linki</label>
            <input type="text" name="link" class="form-control" value="{{ $slide->link }}">
        </div>
        <div class="form-group">
            <label>Buton Metni</label>
            <input type="text" name="button" class="form-control" value="{{ $slide->button }}">
        </div>
        <div class="form-group">
            <input type="checkbox" name="newtab" id="input-newtab" @if($slide->newtab) checked @endif> <label for="input-newtab">Yeni Sekmede Aç</label><br>
        </div>
    </div>
</div>


<div class="row justify-content-end">
    <div class="col-lg-4 col-xl-3">
        <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
    </div>
</div>