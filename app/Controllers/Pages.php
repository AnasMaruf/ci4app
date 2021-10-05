<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home |Latihan Codeigniter 4'
        ];
        return view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About |Latihan Codeigniter 4'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us |Latihan Codeigniter 4',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'jl. pattimura',
                    'kota' => 'Jepara'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'jl. singosari',
                    'kota' => 'Bali'
                ],
                [
                    'tipe' => 'Hotel',
                    'alamat' => 'jl. Ahmad Yani',
                    'kota' => 'Semarang'
                ],
            ]
        ];
        return view('pages/contact', $data);
    }
}
