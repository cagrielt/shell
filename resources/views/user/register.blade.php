@extends('shared.layout')

@php
$areas = [
    "Reklam/Pazarlama",
    "Danışmanlık",
    "Eğitim",
    "E-Ticaret",
    "Finans",
    "Gıda",
    "İnşaat",
    "Lojistik",
    "Sağlık",
    "Sanayi/Endüstri/Üretim",
    "Telekom",
    "Diğer"
];

$interests = [
    "Derin Öğrenme",
    "Makine Öğrenmesi",
    "Doğal Dil İşleme",
    "Genetik Programlama",
    "Diğer"
];

$committees = [
    "Finans",
    "Eğitim",
    "Telekomünikasyon",
    "Sağlık",
    "Enerji",
    "Hukuk",
    "Metaverse ve İletişim Komitesi",
    "Gençlik Komitesi"
];

@endphp

@section('content')

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <h1>Derneğimize Katılmak İçin İlk Adımı Atın.</h1>
                    <p>YZTD ailesine katılmak için formu doldurun.</p>
                    <form id="register-form" class="form-async" method="POST" action="{{ route('api.register') }}">
                        
                        <label>Ad Soyad</label>
                        <input name="name" type="text" class="form-control" placeholder="Ad Soyad" required>

                        <label>E-posta</label>
                        <input name="email" type="email" class="form-control" placeholder="E-posta" required>

                        <label>Telefon Numarası</label>
                        <input name="tel" type="text" class="form-control" placeholder="Telefon Numarası" required>

                        <style>.input-group{display:none;}</style>

                        <label>Başvurmak İstediğiniz Üyelik Modeli</label>
                        <select id="register-type" name="type" class="form-control" required>
                            <option value="">Seçiniz</option>
                            <option value="business">Kurumsal Üyelik</option>
                            <optgroup label="Bireysel Üyelik">
                                <option value="academician">Akademisyen</option>
                                <option value="student">Öğrenci</option>
                                <option value="other">Diğer</option>
                            </optgroup>
                        </select>
                    
                        
                        <div id="business-inputs" class="input-group">
                            <label>Şirket Adı</label>
                            <input name="company" type="text" class="form-control" placeholder="Şirket Adı">

                            <label>Göreviniz</label>
                            <input name="position" type="text" class="form-control" placeholder="Göreviniz">

                            <label>Şirket Faaliyet Alanı</label>
                            <select name="area" class="form-control">
                                <option value="">Seçiniz</option>
                                @foreach($areas as $area)
                                    <option value="{{ $area }}">{{ $area }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div id="academician-inputs" class="input-group">
                            <label>Öğrenim Kurumu Adı</label>
                            <input name="institution" type="text" class="form-control" placeholder="Öğrenim Kurumu Adı">

                            <label>Fakülte</label>
                            <input name="faculty" type="text" class="form-control" placeholder="Fakülte">
                        </div>

                        <div id="student-inputs" class="input-group">
                            <label>Okul Adı</label>
                            <input name="school" type="text" class="form-control" placeholder="Okul Adı">
                            <label>Eğitim Durumu</label>
                            <select name="education" class="form-control">
                                <option value="">Seçiniz</option>
                                <option value="ön lisans">Ön Lisans</option>
                                <option value="lisans">Lisans</option>
                                <option value="yüksek lisans">Yüksek Lisans</option>
                                <option value="doktora">Doktora</option>
                            </select>
                            <label>Bölüm</label>
                            <input name="department" type="text" class="form-control" placeholder="Bölüm">
                        </div>


                        <label>AI İlgi Alanı</label>
                        <select name="interest" class="form-control" required>
                            <option value="">Seçiniz</option>
                            @foreach($interests as $interest)
                                <option value="{{ $interest }}">{{ $interest }}</option>
                            @endforeach
                        </select>

                        <label>YZTD Referansınız</label>
                        <input name="reference" type="text" class="form-control" placeholder="YZTD Referansınız">


                        <label>Dahil olmak istediğiniz komite var mı?</label>
                        <select name="committee" class="form-control">
                            <option value="">Seçiniz</option>
                            @foreach($committees as $committee)
                                <option value="{{ $committee }}">{{ $committee }}</option>
                            @endforeach
                        </select>

                        <label>Neden Yapay Zeka ve Teknoloji Derneği’ne Üye olmak istiyorsunuz?</label>
                        <textarea name="reason" class="form-control" rows="5" required></textarea>

                        <input type="checkbox" name="terms" id="input-terms"><label for="input-terms"><a href="{{ url('tuzuk') }}" target="_blank"><u>YZTD Tüzüğü</u></a>'nü okudum, kabul ediyorum.</label>

                        <p>&nbsp;</p>

                        <div class="text-right">
                            <button type="submit" class="btn">Üyelik Başvurunu Tamamla</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <img id="brain" src="assets/gfx/brain.png">
    <img id="space-shuttle" src="assets/gfx/space-shuttle.png">
</section>

@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            const registerType = $('#register-type');
            const academicianInputs = $('#academician-inputs');
            const studentInputs = $('#student-inputs');
            const businessInputs = $('#business-inputs');

            registerType.change(function(){
                const val = registerType.val();
                academicianInputs.hide();
                studentInputs.hide();
                businessInputs.hide();
                if(val === "business"){
                    businessInputs.slideDown();
                }else if(val === "academician"){
                    academicianInputs.slideDown();
                }else if(val === "student"){
                    studentInputs.slideDown();
                }else if(val === "other"){
                    businessInputs.slideDown();
                }
            });
        });
    </script>
@endpush