<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCtrl extends Controller
{
    public function idx() {
        return 'Selamat Datang';
    }
}