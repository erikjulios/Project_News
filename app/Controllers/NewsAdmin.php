<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\LiveUpdateModel;
use App\Models\ContactusModel;
use Codeigniter\exception\PageNotFoundException;


class NewsAdmin extends BaseController
{
    public function index()
    {

        $news = new NewsModel();

        // $data['newses'] = $news->paginate(1);
        // $data['pager'] = $news->pager;

        $data = [
            'newses' => $news->paginate(1, 'newses'),
            'pager' => $news->pager
        ];

        return view('admin_list_news', $data);
    }

    public function preview($id)
    {

        $news = new NewsModel();
        $data['news'] = $news->where('id', $id)->first();
        if (!$data['news']) {
            throw PageNotFoundException::forPageNOtFound();
        }
        return view('news_detail', $data);
    }

    public function create()
    {
        //lakukan validasi

        $validation = \Config\Services::validation();
        $validation->setRules(['title' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $news = new NewsModel();
            $news->insert([
                "title" => $this->request->getPost('title'),
                "author" => $this->request->getPost('author'),
                "content" => $this->request->getPost('content'),
                "status" => $this->request->getPost('status'),
                "slug" => url_title($this->request->getPost('title'), '-', TRUE)
            ]);
            return redirect('admin/news');
        }
        return view('admin_create_news');
    }


    public function edit($id)
    {
        //ambil artikel
        $news = new NewsModel();
        $data['news'] = $news->where('id', $id)->first();
        //validasi
        $validation = \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'title' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        //jika valid masukan db
        if ($isDataValid) {
            $news = new NewsModel();
            $news->update($id, [
                "title" => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "status" => $this->request->getPost('status'),
            ]);
            return redirect('admin/news');
        }
        return view('admin_edit_news', $data);
    }

    public function delete($id)
    {
        $news = new NewsModel();
        $news->delete($id);
        return redirect('admin/news');
    }

    public function create_contactus()
    {

        $contact = new ContactusModel();
        $sukses = $contact->insert([
            "nama" => $this->request->getPost('nama'),
            "email" => $this->request->getPost('email'),
            "subjek" => $this->request->getPost('subjek'),
            "pesan" => $this->request->getPost('pesan'),
        ]);



        return redirect('contactus');
    }

    public function view_contactus()
    {

        $contact = new ContactusModel();
        $data = [
            'newses' => $contact->paginate(1, 'newses'),
            'pager' => $contact->pager
        ];
        return view('admin_contactus', $data);
    }
    public function deletect($id)
    {
        $contact = new ContactusModel();
        $contact->delete($id);
        return redirect('admin/contactus');
    }

    public function view_liveupdate()
    {

        $live = new LiveUpdateModel();
        $data = [
            'live' => $live->paginate(1, 'newses'),
            'pager' => $live->pager
        ];
        return view('admin_liveupdate', $data);
    }

    public function editlv($id)
    {
        //ambil artikel
        $live = new LiveUpdateModel();
        $data['lv'] = $live->where('id', $id)->first();
        //validasi
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'email' => 'required',
            'berita' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        //jika valid masukan db
        if ($isDataValid) {
            $liveupdate = new LiveUpdateModel();
            $liveupdate->update($id, [
                "nama" => $this->request->getPost('nama'),
                "email" => $this->request->getPost('email'),
                "no" => $this->request->getPost('no'),
                "berita" => $this->request->getPost('berita'),
            ]);
            return redirect('admin/liveupdate');
        }
        return view('admin_edit_lv', $data);
    }

    public function deletelv($id)
    {
        $live = new LiveUpdateModel();
        $live->delete($id);
        return redirect('admin/liveupdate');
    }
}
