<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>{{ config('app.name') }} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body style="margin: 0px; padding: 0px; font-family: Helvetica, Arial, sans-serif; background-color: #ffffff;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
        <tr>
            <td align="center">
                    <table border="0" cellspacing="0" cellpadding="0" width="640" style="width: 640px;border-collapse: collapse;">
                        <tr>
                            <td align="center" style="padding: 24px 0 24px 0;">
                                <a href="{{ url('/') }}" target="_blank" style="display:block;">
                                    <img src="{{ url('/assets/gfx/logo.png') }}" width="200" height="41" style="display: block;width: 200px;height: 41px;border: 0 none;">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="padding: 24px 48px 24px 48px;font-family: Arial, Helvetica, sans-serif;font-size: 16px; line-height: 20px;color: #444444;">
                                @yield('content')
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 24px 0 24px 0;border-bottom: solid 1px #e0e0e0;"></td>
                        </tr>
                        <tr>
                            <td style="padding: 12px 24px 12px 24px;font-family: Arial, Helvetica, sans-serif;font-size: 12px; line-height: 16px;text-align:center;color: #999999;">
                                Türkiye’de yapay zekâ ekosisteminin tüm aktörlerini ve bileşenlerini bir araya getirmek ve en etkin işleyişi oluşturmak amacını güden Yapay Zekâ ve Teknoloji Derneği, alanında en üst konumda olan ve gönüllü çalışan bir sivil toplum kuruluşudur.
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="padding: 6px 0 6px 0;">
                                <table border="0" cellspacing="0" cellpadding="0" width="200" style="width: 200px;border-collapse: collapse;">
                                    <tr>
                                        <td width="40"><a href="https://www.facebook.com/Yapay-Zeka-ve-Teknoloji-Derneği-101590688377046" target="_blank" style="display: block;"><img src="https://yztd.org.tr/mailing/facebook.png" width="32" height="32" style="width: 32;height: 32px;border: 0 none;"></a></td>
                                        <td width="40"><a href="https://www.instagram.com/yztdernegi/" target="_blank" style="display: block;"><img src="https://yztd.org.tr/mailing/instagram.png" width="32" height="32" style="width: 32;height: 32px;border: 0 none;"></a></td>
                                        <td width="40"><a href="https://www.linkedin.com/company/yztdernegi/" target="_blank" style="display: block;"><img src="https://yztd.org.tr/mailing/linkedin.png" width="32" height="32" style="width: 32;height: 32px;border: 0 none;"></a></td>
                                        <td width="40"><a href="https://twitter.com/yztdernegi" target="_blank" style="display: block;"><img src="https://yztd.org.tr/mailing/twitter.png" width="32" height="32" style="width: 32;height: 32px;border: 0 none;"></a></td>
                                        <td width="40"><a href="https://www.youtube.com/channel/UCfTs3kERyicux2NiCtDeHyw" target="_blank" style="display: block;"><img src="https://yztd.org.tr/mailing/youtube.png" width="32" height="32" style="width: 32;height: 32px;border: 0 none;"></a></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="padding: 6px 48px 6px 48px;font-family: Arial, Helvetica, sans-serif;font-size: 12px; line-height: 16px;color: #999999;">© {{ config('app.name') }} {{ date('Y') }} Tüm hakları saklıdır</td>
                        </tr>
                        <tr>
                            <td align="center">
                                <a href="{{ url('gizlilik-politikasi') }}" target="_blank" style="font-family: Arial, Helvetica, sans-serif;font-size: 12px; line-height: 16px;color: #999999;text-decoration: underline;">Gizlilik Politikası</a>
                                &nbsp;
                                <a href="{{ url('iletisim') }}" target="_blank" style="font-family: Arial, Helvetica, sans-serif;font-size: 12px; line-height: 16px;color: #999999;text-decoration: underline;">İletişim</a>
                            </td>
                        </tr>
                    </table>
                </td>
        </tr>
    </table>
</body>
</html>