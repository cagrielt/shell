@extends('shared.layout')

@section('content')

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <h1>Şifremi Unuttum</h1>
                    <p>E-posta adresinizi girerek yeni şifrenizi oluşturun.</p>
                    <form class="form-async" method="POST" action="{{ route('api.forgot-password') }}">
                        <label>E-posta</label>
                        <input name="email" type="email" class="form-control" placeholder="E-posta" required>
                        
                        <div class="row align-items-center">
                            <div class="col">
                                <a href="{{ route('home.login') }}"><u>Giriş Yap</u></a>
                            </div>
                            <div class="col text-right">
                                <button type="submit" class="btn">Gönder</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection