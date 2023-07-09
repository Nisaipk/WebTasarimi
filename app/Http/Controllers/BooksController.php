<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BooksController extends Controller
{
    public function add() {

        $books = new Books;
        $books->ISBN = 978975080662;
        $books->KitapAdi = 'Sırça Köşk';
        $books->YazarAdi = 'Sabahattin Ali';
        $books->Yayinlayan = 'Yapı Kredi Yayınları';
        $books->YayinTarihi = 2012;
        $books->KitapDili = 'Türkçe';
        $books->SayfaSayisi = 141;
        $books->save();

        return "Veri kaydedildi.";

        return "add fonksiyonu";
    }
}
