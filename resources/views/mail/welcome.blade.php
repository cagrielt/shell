@extends('mail.layout')

@section('title')
Üyeliğiniz Onaylandı
@endsection

@section('content')

<p style="text-align: center; margin-bottom: 24px;">Merhaba {{ $name }},<br><br>
Üyeliğiniz onaylanmıştır.<br>
Aşağıdaki butonu kullanarak şifrenizi oluşturup YZTD web sitesine giriş yapabilirsiniz.</p>

<p style="text-align: center; padding: 12px 0px;">
    <a style="display: inline-block; font-size: 14px; text-decoration: none; color: #ffffff; padding: 12px 36px; background-color: #cc2b5e; border-radius: 24px;" href="{{ route('home.confirmation', ['activationcode' => $activationcode]) }}" target="_blank">Giriş Yap</a>
</p>

<p>Veriye dayalı bir toplum ve ekonomi için, Yapay Zeka alanında birlikte nice güzel çalışmalar yapmak hedefiyle.<br>
Sağlıklı ve üretken günler dileriz.<br><br>
Saygılarımızla,<br> YZTD Yönetimi</p>

@endsection