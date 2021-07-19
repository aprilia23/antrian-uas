<?php

namespace App\Controllers;

use App\Models\Modelloket;
use App\Models\Modelpelayanan;

class LoketController extends BaseController
{
    protected $loket;
    protected $pelayanan;

    function __construct()
    {
        $this->loket = new Modelloket();
        $this->pelayanan = new Modelpelayanan();
        helper('form');
    }

    public function index()
    {   
        
        $data['loket'] = $this->loket->findAll();
        $data['pelayanan'] = $this->pelayanan->findAll();
        return view('pages/loket/index', $data);



    }
	public function create()
    {   
        $model = new Modelloket();
        $data['pelayanan'] = $model->getdata();
        return view('pages/loket/create', $data);
    }
	public function store()
    {
        if (!$this->validate([
            'nama_loket' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'id_pelayanan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->loket->insert([
            'nama_loket' => $this->request->getVar('nama_loket'),
            'keterangan' => $this->request->getVar('keterangan'),
            'id_pelayanan' => $this->request->getVar('id_pelayanan')
        ]);
        session()->setFlashdata('message', 'Tambah Data loket Berhasil');
        return redirect()->to('loket');
    }
	function edit($id)
    {
        $dataLoket = $this->loket->find($id);
        if (empty($dataLoket)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data loket Tidak ditemukan !');
        }
        $data['loket'] = $dataLoket;
        return view('pages/loket/edit', $data);
    }
    public function update($id)
    {
        if (!$this->validate([
            'nama_loket' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'id_pelayanan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->loket->update($id, [
            'nama_loket' => $this->request->getVar('nama_loket'),
            'keterangan' => $this->request->getVar('keterangan'),
            'id_pelayanan' => $this->request->getVar('nama_pelayanan')
        ]);
        session()->setFlashdata('message', 'Update Data Loket Berhasil');
        return redirect()->to('/loket');
    }
	function delete($id)
    {
        $dataloket = $this->loket->find($id);
        if (empty($dataloket)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Pegawai Tidak ditemukan !');
        }
        $this->loket->delete($id);
        session()->setFlashdata('message', 'Delete Data loket Berhasil');
        return redirect()->to('loket');
    }
}