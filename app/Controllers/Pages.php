<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [

            'tittle' => 'Home',
            'tes' => ['satu', 'dua', 'tiga']
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [

            'tittle' => 'About',
        ];
        return view('pages/about', $data);
    }
}
