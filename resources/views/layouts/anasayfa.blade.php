@extends('layouts.app')
@section('title')

    Anasayfa

@endsection

@section('content')

   <h1>Kitap Listesi</h1>
   <hr>
   <br><br><br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Kitap Adı</th>
            <th scope="col">Yazar Adı</th>
            <th scope="col">Yayınlayan</th>
            <th scope="col">Basım Yılı</th>
            <th scope="col">Kitap Dili</th>
            <th scope="col">Sayfa Sayısı</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
        <tr>
            <th>{{ $book->id }}</th>
            <td>{{ $book->ISBN }}</td>
            <td>{{ $book->KitapAdi }}</td>
            <td>{{ $book->YazarAdi }}</td>
            <td>{{ $book->yayinlayan }}</td>
            <td>{{ $book->YayinTarihi }}</td>
            <td>{{ $book->KitapDili }} </td>
            <td>{{ $book->SayfaSayisi }}</td>


        </tr>
        @endforeach

        </tbody>
    </table>


@endsection
