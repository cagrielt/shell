@csrf

<div class="row">
    <div class="col-lg-8 col-xl-9">
        <div class="form-group">
            <label>Ad Soyad</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" disabled>
        </div>
        <div class="form-group">
            <label>E-posta Adresi</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" disabled>
        </div>
        <div class="form-group">
            <label>Şifre</label>
            <input type="text" name="password" class="form-control" value="{{ $user->password }}" disabled>
        </div>
        <div class="form-group">
            <label>Aktivasyon Kodu</label>
            <input type="text" name="activationcode" class="form-control" value="{{ $user->activationcode }}" disabled>
        </div>
        <div class="form-group">
            <label>Telefon</label>
            <input type="text" name="tel" class="form-control" value="{{ $user->tel }}" disabled>
        </div>
        @if($user->type === 'business' || $user->type === 'other')
            <div class="form-group">
                <label>Çalışılan Firma</label>
                <input type="text" name="company" class="form-control" value="{{ $user->company }}" disabled>
            </div>
            <div class="form-group">
                <label>Görev</label>
                <input type="text" name="position" class="form-control" value="{{ $user->position }}" disabled>
            </div>
            <div class="form-group">
                <label>Faaliyet Alanı</label>
                <input type="text" name="area" class="form-control" value="{{ $user->area }}" disabled>
            </div>
        @endif
        @if($user->type === 'academician')
            <div class="form-group">
                <label>Öğrenim Kurumu Adı</label>
                <input type="text" name="institution" class="form-control" value="{{ $user->institution }}" disabled>
            </div>
            <div class="form-group">
                <label>Fakülte</label>
                <input type="text" name="faculty" class="form-control" value="{{ $user->faculty }}" disabled>
            </div>
        @elseif($user->type === 'student') 
            <div class="form-group">
                <label>Okul Adı</label>
                <input type="text" name="school" class="form-control" value="{{ $user->school }}" disabled>
            </div>
            <div class="form-group">
                <label>Eğitim Durumu</label>
                <input type="text" name="education" class="form-control" value="{{ $user->education }}" disabled>
            </div>  
            <div class="form-group">
                <label>Bölüm</label>
                <input type="text" name="department" class="form-control" value="{{ $user->department }}" disabled>
            </div>   
        @endif
        <div class="form-group">
            <label>AI İlgi Alanı</label>
            <input type="text" name="interest" class="form-control" value="{{ $user->interest }}" disabled>
        </div>
        <div class="form-group">
            <label>Dahil Olmak İstenilen Komite </label>
            <input type="text" name="committee" class="form-control" value="{{ $user->committee }}" disabled>
        </div>
        <div class="form-group">
            <label>Neden Üye Oldu</label>
            <textarea name="reason" rows="5" class="form-control" disabled>{{ $user->reason }}</textarea>
        </div>
    </div>
    <div class="col-lg-4 col-xl-3">
        <div class="form-group">
            <label>Durum</label>
            <select name="status" class="form-control">
                <option value="0">Onaysız</option>
                <option value="1" @if($user->status) selected @endif>Onaylanmış</option>
            </select>
        </div>
        <div class="form-group">
            <label>Üyelik Tipi</label>
            <input type="text" name="type" class="form-control" value="{{ $user->type }}" disabled>
        </div>
        <div class="form-group">
            <label>Referans</label>
            <input type="text" name="reference" class="form-control" value="{{ $user->reference }}" disabled>
        </div>
        <div class="form-group">
            <label>Üyelik Tarihi</label>
            <input type="text" name="created_at" class="form-control" value="{{ $user->created_at }}" disabled>
        </div>
        <div class="form-group">
            <label>Profil Fotoğrafı</label>
            <input type="hidden" name="profile_id" value="{{ $user->profile_id }}">
            @component('shell.shared.mediapicker',['media' => $user->profile])
            @endcomponent
        </div>
    </div>
</div>

<div class="row justify-content-end">
    <div class="col-lg-4 col-xl-3">
        <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
    </div>
</div>