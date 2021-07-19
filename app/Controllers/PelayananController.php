<?php

namespace App\Controllers;

use App\Models\Modelpelayanan;

class PelayananController extends BaseController
{
    protected $pelayanan;

    function __construct()
    {
        $this->pelayanan = new Modelpelayanan();
    }

    public function index()
    {
        $data['pelayanan'] = $this->pelayanan->findAll();
        return view('pages/pelayanan/index', $data);
    }
    public function create()
    {
        return view('pages/pelayanan/create');
    }
    public function store()
    {
        if (!$this->validate([
            'nama_pelayanan' => [
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
            'code_pelayanan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->pelayanan->insert([
            'nama_pelayanan' => $this->request->getVar('nama_pelayanan'),
            'keterangan' => $this->request->getVar('keterangan'),
            'code_pelayanan' => $this->request->getVar('code_pelayanan')
        ]);
        session()->setFlashdata('message', 'Tambah Data Pelayanan Berhasil');
        return redirect()->to('pelayanan');
    }
    function edit($id)
    {
        $dataPelayanan = $this->pelayanan->find($id);
        if (empty($dataPelayanan)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Pelayanan Tidak ditemukan !');
        }
        $data['pelayanan'] = $dataPelayanan;
        return view('pages/pelayanan/edit', $data);
    }
    public function update($id)
    {
        if (!$this->validate([
            'nama_pelayanan' => [
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
            'code_pelayanan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->pelayanan->update($id, [
            'nama_pelayanan' => $this->request->getVar('nama_pelayanan'),
            'keterangan' => $this->request->getVar('keterangan'),
            'code_pelayanan' => $this->request->getVar('code_pelayanan')
        ]);
        session()->setFlashdata('message', 'Update Data Pelayanan Berhasil');
        return redirect()->to('/pelayanan');
    }
    function delete($id)
    {
        $dataPelayanan = $this->pelayanan->find($id);
        if (empty($dataPelayanan)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Pegawai Tidak ditemukan !');
        }
        $this->pelayanan->delete($id);
        session()->setFlashdata('message', 'Delete Data Pelayanan Berhasil');
        return redirect()->to('pelayanan');
    }
}
