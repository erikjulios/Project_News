<?php

namespace App\Controllers;
use App\Models\NewsModel;
use Codeigniter\exception\PageNotFoundException;
class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
}
