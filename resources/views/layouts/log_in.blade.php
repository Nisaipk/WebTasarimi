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
            TC Kimlik No : <input placeholder=""><br>
            Şifre : <input placeholder="">
            <br><br>
            <a href="{{route('anasayfa1')}}"><button id="btn-login">Giriş Yap</button> </a>
            <a href=""> <button id="btn-forgot">Şifremi Unuttum</button> </a>

        </div>
        <br><br>
        <div class="login-box">
            <h2 class="login-text">Öğrenci Girişi</h2>
            <br>
            TC Kimlik No : <input placeholder=""> <br>
            Şifre        : <input placeholder="">
            <br><br>
            <a href="{{route('anasayfa2')}}"><button id="btn-login">Giriş Yap</button> </a>
            <a href=""> <button id="btn-forgot">Şifremi Unuttum</button> </a>

        </div>
    </div>

@endsection

@section('footer')
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
