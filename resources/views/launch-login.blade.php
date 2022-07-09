@extends('shared.layout')

@section('content')

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <h1>Geleceği Birlikte Tasarlıyoruz!</h1>
                    <p>Türkiye'nin yapay zeka alanında geleceğe yön veren ülkeler arasında yer alması misyonuyla yola çıkan; veriye dayalı bir toplum ve ekonomi amacıyla çalışan YZTD, büyük lansman toplantısını gerçekleştiriyor.<br><br>Lansmanı izlemek için lütfen giriş yapın.</p>
                    <form id="launch-login-form" method="POST">
                        @csrf
                        <label>Ad Soyad</label>
                        <input name="name" type="text" class="form-control" placeholder="Ad Soyad" required>

                        <label>E-posta</label>
                        <input name="email" type="email" class="form-control" placeholder="E-posta" required>

                        <label><input type="checkbox" name="terms" required><a href="{{ url('gizlilik-politikasi') }}" target="_blank"><u>Gizlilik politikası</u></a>'nı okudum, kabul ediyorum.</label><br>

                        <label><input type="checkbox" name="permission" required>Bilgilendirme amaçlı benimle iletişime geçilmesine izin veriyorum.</label>

                        <div class="text-right">
                            <button type="submit" class="btn">Giriş Yap</button>
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