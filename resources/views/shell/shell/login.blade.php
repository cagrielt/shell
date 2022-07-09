<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Admin</title>
    <link href="{{ url('/assets/css/shell.css') }}" rel="stylesheet">
</head>
<body>
    <div id="shell-login">
        <form method="POST">
            @csrf
            <img id="project-logo" src="{{ url('assets/gfx/logo.png') }}" />
            <label>E-posta</label>
            <input type="email" name="email" class="form-control" required/>
            <label>Şifre</label>
            <input type="password" name="password" class="form-control" required/>
            <hr />
            <button type="submit" class="btn btn-block btn-primary">Giriş</button>
        </form>
    </div>
</body>
</html>