<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home Page | Wahni Adnani'
        ];
        return view('page/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Page | Wahni Adnani'
        ];
        return view('page/about', $data);
    }

    //--------------------------------------------------------------------

}
