@extends('mail.layout')

@section('content')

<p style="text-align: center; margin-bottom: 24px;">Sevgili {{ $name }},<br>Aşağıdaki butonu tıklayarak yeni şifrenizi belirleyebilirsiniz. Bu bağlantı 3 gün boyunca geçerlidir.</p>

<p style="text-align: center; padding: 12px 0px;">
    <a style="display: inline-block; font-size: 14px; text-decoration: none; color: #ffffff; padding: 12px 36px; background-color: #cc2b5e; border-radius: 24px;" href="{{ route('home.reset-password', ['token' => $token]) }}" target="_blank">Şifremi Sıfırla</a>
</p>

@endsection