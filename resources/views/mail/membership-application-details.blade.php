@extends('mail.layout')

@section('title')
Üyelik Başvurusu
@endsection

@section('content')

<p style="padding: 0px 32px;">
    {{ config('app.name') }} üyelik formu dolduruldu. Detaylar aşağıdadır:<br><br>
    Ad Soyad: {{ $name }}<br>
    E-posta Adresi: {{ $email }}<br>
    Telefon: {{ $tel }}<br>
    Üyelik Modeli: {{ $type }}<br>
    @if($type == "business" || $type == "other")
    Şirket Adı: {{ $company }}<br>
    Görevi: {{ $position }}<br>
    Faaliyet Alanı: {{ $area }}<br>
    @elseif($type == "academician")
    Öğrenim Kurumu Adı: {{ $institution }}<br>
    Fakülte: {{ $faculty }}<br>
    @elseif($type == "student")
    Okul Adı: {{ $school }}<br>
    Eğitim Durumu: {{ $education }}<br>
    Bölüm: {{ $department }}<br>
    @endif
    AI İlgi Alanı: {{ $interest }}<br>
    YZTD Referansı: {{ $reference }}<br>
    Neden Üye Olmak İstiyorsunuz: {{ $reason }}<br>
</p>

@endsection