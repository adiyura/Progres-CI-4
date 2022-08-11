<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Comic extends BaseController
{

    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }
    public function index()
    {
        $komik = $this->komikModel->findAll();
        $data = [

            'tittle' => 'Comic',
            'komik' => $komik
        ];

        return view('comic/index', $data);
    }

    public function detail($slug)
    {
        echo $slug;


        //coba perubahan nya.......
    }
}
