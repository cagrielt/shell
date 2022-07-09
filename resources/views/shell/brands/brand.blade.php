@csrf

<div class="row">
    <div class="col-lg-8 col-xl-9">
        <div class="form-group">
            <label>Başlık</label>
            <input type="text" name="title" class="form-control" value="{{ $brand->title }}">
        </div>
        <div class="form-group">
            <label>Web Sitesi</label>
            <input type="text" name="website" class="form-control" value="{{ $brand->website }}">
        </div>
    </div>
    <div class="col-lg-4 col-xl-3">
        <div class="form-group">
            <label>Durum</label>
            <select name="status" class="form-control">
                <option value="0">Taslak</option>
                <option value="1" @if($brand->status) selected @endif>Yayında</option>
            </select>
        </div>
        <div class="form-group">
            <label>Sıralama</label>
            <input type="number" name="order" class="form-control" value="{{ $brand->order }}">
        </div>
        <div class="form-group">
            <label>Logo</label>
            <input type="hidden" name="media_id" value="{{ $brand->media_id }}">
            @component('shell.shared.mediapicker',['media' => $brand->media])
            @endcomponent
        </div>
    </div>
</div>


<div class="row justify-content-end">
    <div class="col-lg-4 col-xl-3">
        <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
    </div>
</div>