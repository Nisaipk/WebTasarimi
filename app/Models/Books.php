<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table  ='books';
    protected $fillable = ['ISBN','KitapAdi','YazarAdi','Yayinevi','BasimYili','KitapDili','SayfaSayisi'];
}
