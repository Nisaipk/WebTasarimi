@extends('layouts.app')

@section('title')
    Giriş Yap
@endsection

@section('content')
    <br><br><br>
    <div class="outer-box">

        <div class="login-box">
            <h2 class="login-text">Görevli Girişi</h2>
            <br>
            <input placeholder="TC Kimlik No">
            <input placeholder="Şifre">
            <br><br>
            <a href=""><button id="btn-login">Giriş Yap</button> </a>
            <a href=""> <button id="btn-forgot">Şifremi Unuttum</button> </a>

        </div>
        <br><br>
        <div class="login-box">
            <h2 class="login-text">Öğrenci Girişi</h2>
            <br>
            <input placeholder="TC Kimlik No">
            <input placeholder="Şifre">
            <br><br>
            <a href=""><button id="btn-login">Giriş Yap</button> </a>
            <a href=""> <button id="btn-forgot">Şifremi Unuttum</button> </a>

        </div>
    </div>

@endsection

@section('footer')
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
