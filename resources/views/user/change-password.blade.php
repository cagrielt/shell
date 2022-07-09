@extends('shared.layout')

@section('content')

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <h1>Şifremi Değiştir</h1>
                    <p>Hesabınızı korumak için özgün bir şifre seçin.</p>
                    <form class="form-async" method="POST" action="{{ route('api.change-password') }}">
                        <label>Mevcut Şifre</label>
                        <input type="password" class="form-control" name="oldpassword" required>

                        <label>Yeni Şifre</label>
                        <input type="password" class="form-control" name="newpassword" required>
                        
                        <div class="text-right">
                            <button type="submit" class="btn">Kaydet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection