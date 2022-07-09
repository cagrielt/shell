@csrf

<div class="row">
    <div class="col-lg-8 col-xl-9">
        <div class="form-group">
            <label>E-posta Adresi</label>
            <input type="email" name="email" class="form-control" value="{{ $admin->email }}">
        </div>
        <div class="form-group">
            <label>Şifre (Şifrelenerek Saklanır)</label>
            <input type="text" name="password" class="form-control" value="{{ $admin->password }}">
        </div>
    </div>
    <div class="col-lg-4 col-xl-3">
        <hr>
        <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
    </div>
</div>