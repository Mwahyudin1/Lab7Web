<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function home()
    {
        return view('home', [
            'title' => 'Halaman Home',
            'content' => 'Ini Halaman Home.'
        ]);
    }

    public function artikel()
    {
        return view('artikel', [
            'title' => 'Halaman Artikel',
            'content' => 'Ini Halaman Artikel'
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'halaman about tentang isi halaman ini berisi content.'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Halaman Contact',
            'content' => 'Ini Halaman Contact'
        ]);
    }

    public function faqs()
    {
        echo "Ini Halaman Faqs";
    }

    public function tos()
    {
        echo "Ini halaman term of service";
    }
}