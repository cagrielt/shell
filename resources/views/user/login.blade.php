@extends('shared.layout')

@section('content')

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <h1>Yapay zeka dünyasına adım atın!</h1>
                    <p>Giriş yaparak size özel gelişmelerden haberdar olun.</p>
                    <form class="form-async" method="POST" action="{{ route('api.login') }}">
                        <label>E-posta</label>
                        <input name="email" type="email" class="form-control" placeholder="E-posta" required>
                        <label>Şifre</label>
                        <input name="password" type="password" class="form-control" placeholder="Şifre" required>
                        
                        <div class="row align-items-center">
                            <div class="col">
                                <a href="{{ route('home.forgot-password') }}"><u>Şifremi Unuttum</u></a>
                            </div>
                            <div class="col text-right">
                                <button type="submit" class="btn">Giriş Yap</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection