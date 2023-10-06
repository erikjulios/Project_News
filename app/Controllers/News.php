<?php 
namespace App\Controllers;
use App\Models\NewsModel;
use App\Models\LiveUpdateModel;
use Codeigniter\exception\PageNotFoundException;
class News extends BaseController
{
    public function index(){

        $news = new NewsModel();
         $data = [
            'newses' => $news->where('status', 'published')->paginate(1, 'newses'),
            'pager' => $news->pager
        ];
        return view('news', $data);
    }

    public function viewNews($slug){
        $news = new NewsModel();
        $data['news'] = $news->where([
            'slug' => $slug,
            'status' => 'published'
        ])->first();

        if (!$data['news']) {
            throw PageNotFoundException::forPageNOtFound();
        }
        return view('news_detail', $data);
    }

    public function create_liveupdate(){

             $liveModel = new LiveUpdateModel();
             $liveModel->insert([
                "nama" => $this->request->getPost('nama'),
                "email" => $this->request->getPost('email'),
                "no" => $this->request->getPost('no'),
                "berita" => $this->request->getPost('berita')
            ]);

             return View('liveupdate');
    }

    
}
