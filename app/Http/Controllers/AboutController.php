<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return "
    NIM     : 2041720098 <br>
    Nama    : Daffa Aqila Rahmatullah <br>
    Kelas   : TI - 2G";
    }
}
