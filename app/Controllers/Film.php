<?php

namespace App\Controllers;

use App\models\Modeldatafilm;

class Film extends BaseController
{
    function __construct()
    {
        $this->variabel = new Modeldatafilm();
    }
    public function index()
    {
        $data = [
            'film' => $this->variabel->findall()
        ];
        return view('/Film/read',$data);
    }
    public function create()
    {
        return view('Film/create');
    }
    public function simpan()
    {
        $id = $this->request->getPost('id_film');
        $judul = $this->request->getPost('judul');
        $tanggal = $this->request->getPost('tanggal');
        $lama = $this->request->getPost('tayang');
        $jumlah = $this->request->getPost('jumlah');
        
        $data = [
            'id_film'       =>$id,
            'judul_film'    =>$judul,
            'tanggal_rilis'=>$tanggal,
            'lama_tayang'   =>$lama,
            'jumlah_penonton'   =>$jumlah,
        ];
        $this->variabel->get_insert($data);
        return redirect()->to(base_url('film/index'));
    }
    function edit($id)
    {
        $data['film']	= $this->variabel->get_data($id);
		echo view('film/edit', $data);
    }
    function update(){
        $id = $this->request->getPost('id_film');
        $judul = $this->request->getPost('judul');
        $tanggal = $this->request->getPost('tanggal');
        $lama = $this->request->getPost('tayang');
        $jumlah = $this->request->getPost('jumlah');
        
        $data = [
            'id_film'       =>$id,
            'judul_film'    =>$judul,
            'tanggal_rilis'=>$tanggal,
            'lama_tayang'   =>$lama,
            'jumlah_penonton'   =>$jumlah
        ];
        $this->variabel->get_update($id,$data);
        return redirect()->to(base_url('Film/index'));
    }
    public function delete($id) {
		$this->variabel->get_delete($id);
        return redirect()->to(base_url('Film/index'));
    }

}
