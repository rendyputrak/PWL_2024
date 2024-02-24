<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    public function about($nim = '2241720124', 
    $name = 'Rendy Putra Kusuma'){
        return 'Nama saya adalah ' . $name . 
        ' dan NIM saya adalah ' . $nim;
    }
    public function articles($id=null){
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
