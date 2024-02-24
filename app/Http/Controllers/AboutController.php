<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{       
    public function about($nim = '2241720124', 
    $name = 'Rendy Putra Kusuma'){
        return 'Nama saya adalah ' . $name . 
        ' dan NIM saya adalah ' . $nim;
    }
}
