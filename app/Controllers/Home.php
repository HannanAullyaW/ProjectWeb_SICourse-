<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function template()
    {
        $data = [
            'title' => 'Template'
        ];
        return view('templates/template',$data);
    }

}
