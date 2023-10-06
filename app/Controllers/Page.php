<?php 
namespace App\Controllers;

class Page extends BaseController
{
    public function about(){
        echo "Tampilan halaman pada fungsi about";
    }

    public function contact(){
        return View("contactus");
    }

    public function faqs(){
        echo "Tampilan halaman pada fungsi faqs";
    }

    public function tos(){
        echo "Halaman terms of service";
    }

    public function news(){
        return View("news");
    }

    public function gallery(){
        return View("gallery");
    }

    public function liveupdate(){
        return View("liveupdate");
    }
}
