<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // fungsi index
    public function index(){
        return 'Selamat Datang';
    }

    // fungsi about
    public function about(){
        return 'Nama: Muhammad Helmi Permana Agung<br>NIM: 2141762140';
    }

    // fungsi articles
    public function articles($id){
        return 'Halaman Artikel dengan ID '.$id;
    }
}
