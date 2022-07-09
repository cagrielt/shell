@extends('mail.layout')

@section('title')
Üyeliğiniz Ön Kabul Aldı
@endsection

@section('content')

<p style="text-align: center; margin-bottom: 24px;">Merhaba {{ $name }},<br><br>
Üyeliğiniz Ön Kabul almıştır.<br>
Yıllık @if($type == "personal") 1.200 TL olan Bireysel Üyelik @else 12.000 TL olan Kurumsal Üyelik @endif aidatınızı aşağıdaki hesap numarasına yatırmanızı rica ederiz.<br>
Tüzüğümüzü bu linkten inceleyebilirsiniz: <a href="{{ url('tuzuk') }}"><u>YZTD Tüzüğü</u></a><br><br>
Veriye dayalı bir toplum ve ekonomi için, Yapay Zeka alanında birlikte nice güzel çalışmalar yapmak hedefiyle.<br>
Sağlıklı ve üretken günler dileriz.<br><br>
Banka Hesap Numarası:<br>
Vakıfbank Beşiktaş Çarşı İstanbul Şubesi-S00579<br>
IBAN No: TR600001500158007312003586<br><br>
Saygılarımızla,<br> YZTD Yönetimi</p>


@endsection