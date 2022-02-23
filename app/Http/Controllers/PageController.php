<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return "Hi! Selamat Datang di Website Laravel";
    }

    public function about()
    {
        return "
    NIM     : 2041720098 <br>
    Nama    : Daffa Aqila Rahmatullah <br>
    Kelas   : TI - 2G";
    }
    
    public function articles($id)
    {
        return "Ini adalah halaman Artikel dengan ID " . $id;
    }

}
