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

@endphp

@section('content')

<section class="section">
    <div class="container">
        <div class="card">
            <h1>{{ $user->name }}, <small>@if($user->type == "business") Kurumsal Üye @else Bireysel Üye @endif</small></h1>
            <p>Üyelik Tarihi: {{ date('d.m.Y', strtotime($user->created_at)) }}</p>
            <hr>
            <form class="form-async" method="POST" action="{{ route('api.save-profile') }}">
                <div class="row">
                    <div class="col-md-6">
                        <label>Ad Soyad</label>
                        <input name="name" type="text" class="form-control" placeholder="Ad Soyad" value="{{ $user->name }}" required>

                        <label>E-posta</label>
                        <input name="email" type="email" class="form-control" placeholder="E-posta" value="{{ $user->email }}" disabled>

                        <label>Telefon Numarası</label>
                        <input name="tel" type="text" class="form-control" placeholder="Telefon Numarası" value="{{ $user->tel }}">

                    </div>
                    <div class="col-md-6">
                        <label>Şirket Adı</label>
                        <input name="company" type="text" class="form-control" placeholder="Şirket Adı" value="{{ $user->company }}">

                        <label>Göreviniz</label>
                        <input name="position" type="text" class="form-control" placeholder="Göreviniz" value="{{ $user->position }}">

                        <label>Şirket Faaliyet Alanı</label>
                        <select name="area" class="form-control">
                            <option value="">Seçiniz</option>
                            @foreach($areas as $area)
                                <option value="{{ $area }}" @if($user->area == $area) selected @endif>{{ $area }}</option>
                            @endforeach
                        </select>

                        <div class="text-right">
                            <button type="submit" class="btn">Kaydet</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection