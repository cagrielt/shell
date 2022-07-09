@extends('shared.layout')

@section('content')

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <h1>Geleceği Birlikte Tasarlıyoruz!</h1>
                    <p>Türkiye'nin yapay zeka alanında geleceğe yön veren ülkeler arasında yer alması misyonuyla yola çıkan; veriye dayalı bir toplum ve ekonomi amacıyla çalışan YZTD, büyük lansman toplantısını gerçekleştiriyor.<br><br>Future Bright Group'un hazırladığı Türkiye Yapay Zeka Araştırması ve yakın geleceğe dair birbirinden değerli konuların konuşulacağı toplantıda sizi de aramızda görmekten büyük onur duyarız.</p>
                    <form id="launch-form" class="form-async" method="POST" action="{{ route('api.launch-register') }}">
                        
                        <label>Ad Soyad</label>
                        <input name="name" type="text" class="form-control" placeholder="Ad Soyad" required>

                        <label>E-posta</label>
                        <input name="email" type="email" class="form-control" placeholder="E-posta" required>

                        <label>Şirket Adı</label>
                        <input name="company" type="text" class="form-control" placeholder="Şirket Adı" required>

                        <label>Göreviniz</label>
                        <input name="position" type="text" class="form-control" placeholder="Göreviniz" required>

                        <input type="checkbox" name="terms" id="input-terms"><label for="input-terms"><a href="{{ url('gizlilik-politikasi') }}" target="_blank"><u>Gizlilik politikası</u></a>'nı okudum, kabul ediyorum.</label><br>

                        <input type="checkbox" name="permission" id="input-permission"><label for="input-permission">Bilgilendirme amaçlı benimle iletişime geçilmesine izin veriyorum.</label>

                        <div class="text-right">
                            <button type="submit" class="btn">Kayıt Ol</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <img id="brain" src="{{ url('assets/gfx/brain.png') }}">
    <img id="space-shuttle" src="{{ url('assets/gfx/space-shuttle.png') }}">
</section>

@endsection