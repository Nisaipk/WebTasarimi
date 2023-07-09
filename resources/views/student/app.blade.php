<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <br>
    <title>Kütüphane Otomasyonu | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<!--header-->

<div class="container">
    <header class="d-flex flex-wrap align-items-center py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <p style="font-size: 150%"> <b>Kütüphane Otomasyonu</b> </p>



        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{route('kitap_arama')}}" class="nav-link px-2 link-secondary">Kitap Arama</a></li>
            <li><a href="{{route('kitap_kiralama')}}" class="nav-link px-2">Kitap Kiralama</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <a href="{{route('anasayfa')}}"> <button type="button" class="btn btn-outline-primary me-2">Çıkış</button> </a>

        </div>
    </header>
</div>

<!--/header-->

<!--content-->

<div class="container">

    @yield('content')

</div>

<!--/content-->

<!--footer-->
@yield('footer')
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Company, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
        </ul>
    </footer>
</div>

<!--/footer-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

