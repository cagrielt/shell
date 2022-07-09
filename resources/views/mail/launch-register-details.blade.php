@extends('mail.layout')

@section('title')
Online Toplantı Kaydı 
@endsection

@section('content')

<p style="padding: 0px 32px;">
    {{ config('app.name') }} online toplantı kayıt formu dolduruldu. Detaylar aşağıdadır:<br><br>
    Ad Soyad: {{ $name }}<br>
    E-posta Adresi: {{ $email }}<br>
    Şirket Adı: {{ $company }}<br>
    Görevi: {{ $position }}<br>
</p>

@endsection