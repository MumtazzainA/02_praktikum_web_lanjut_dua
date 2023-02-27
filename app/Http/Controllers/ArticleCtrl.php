<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleCtrl extends Controller
{
    public function article($id) {
        return "Halaman Artikel ke-$id";
    }
}