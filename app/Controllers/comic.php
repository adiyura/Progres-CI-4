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
        // $komik = $this->komikModel->findAll();
        $data = [

            'tittle' => 'Komik',
            'komik' => $this->komikModel->getKomik()
        ];
        return view('comic/index', $data);
    }

    public function detail($slug)
    {

        $data = [
            'tittle' => 'Detail Komik',
            'komik' => $this->komikModel->getKomik($slug)
        ];

        return view('comic/detail', $data);
    }


    public function create()
    {
        $data = [
            'tittle' => 'Form Tambah Data'
        ];

        return view('comic/create', $data);
    }

    public function save()
    {


        $slug =  url_title($this->request->getVar('judul'), '-', true);
        $tambah = $this->komikModel->save(
            [
                'judul' => $this->request->getVar('judul'),
                'penulis' => $this->request->getVar('penulis'),
                'sampul' => $this->request->getVar('sampul'),
                'slug' => $slug
            ]
        );

        if ($tambah) {
            session()->setFlashdata('pesan', 'Berhasil Tambah Data');
            return redirect()->to('/comic');
        }
    }
}
