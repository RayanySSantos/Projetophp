<?php

namespace App\Http\Controllers;


class SiteController extends Controller{

public function index(){

    $name = 'Rayany';
    $fruta = ['pinha', 'amora', 'uva'];
    
    return view('home', [
        'name' => $name,
        'fruta' => $fruta
    ]);
}
    
}
