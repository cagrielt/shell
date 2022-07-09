@extends('shared.layout')

@section('content')

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <h1>Şifremi Belirle</h1>
                    <p>Sevgili {{ $user->name }}, YZTD'ye hoş geldiniz. Devam etmeden önce lütfen şifrenizi belirleyin.</p>
                    <form class="form-async" method="POST" action="{{ route('api.define-password') }}">
                        <input type="hidden" name="activationcode" value="{{ $user->activationcode }}">
                        <label>Şifre</label>
                        <input type="password" class="form-control" name="password" required>

                        <label>Şifre (Tekrar)</label>
                        <input type="password" class="form-control" name="confirmation" required>
                        
                        <div class="text-right">
                            <button type="submit" class="btn">Giriş Yap</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection