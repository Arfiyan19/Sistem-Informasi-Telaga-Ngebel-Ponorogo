<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;

use Illuminate\Http\Request;

class DataWisataController extends Controller
{
    public function dataWisata()
{
    $collection = new Collection(['Nama : Wisata Telaga Ngebel', 'Alamat : Ponorogo', 'Tiket Masuk : 25.000', 'Buka : Senin-Minggu']);
    
    return view('index', ['dataWisata' => $collection]);
}
public function about()
{

    return view('about');
}
public function contactUs()
{

    return view('contact-us');
}

}
