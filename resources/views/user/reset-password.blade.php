@extends('shared.layout')

@section('content')

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <h1>Şifremi Sıfırla</h1>
                    <p>Hesabınızı korumak için özgün bir şifre seçin.</p>
                    <form class="form-async" method="POST" action="{{ route('api.reset-password') }}">
                        <input type="hidden" name="token" value="{{ $passwordReset->token }}">
                        <label>Yeni Şifre</label>
                        <input name="password" type="password" class="form-control" required>
                        <label>Yeni Şifre (Tekrar)</label>
                        <input name="confirmation" type="password" class="form-control" required>
                        
                        <div class="row align-items-center">
                            <div class="col">
                                <a href="{{ route('home.login') }}"><u>Giriş Yap</u></a>
                            </div>
                            <div class="col text-right">
                                <button class="btn">Sıfırla</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection