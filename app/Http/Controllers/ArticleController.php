<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // fungsi articles
    public function articles($id){
        return 'Halaman Artikel dengan ID '.$id;
    }
}
