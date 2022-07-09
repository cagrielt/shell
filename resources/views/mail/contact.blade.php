@extends('mail.layout')

@section('title')
İletişim Formu
@endsection

@section('content')

<p style="padding: 0px 32px;">
    {{ config('app.name') }} iletişim formu dolduruldu. Detaylar aşağıdadır:<br><br>
    Ad Soyad: {{ $name }}<br>
    E-posta Adresi: {{ $email }}<br>
    Kurum: {{ $company }}<br>
    Telefon: {{ $tel }}<br>
    Mesaj: {{ $msg }}
</p>

@endsection