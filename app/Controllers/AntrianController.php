<?php

namespace App\Controllers;


use App\Models\Modelloket;
use App\Models\Modelantrian;
use App\Models\Modelpelayanan;

class AntrianController extends BaseController
{
    protected $antrian;
    protected $pelayanan;
    protected $loket;

    function __construct()
    {
        $this->antrian = new Modelantrian();
        $this->loket = new Modelantrian();
        $this->pelayanan = new Modelantrian();
        helper('form');
    }

    public function index()
    {
        $data['antrian'] = $this->antrian->findAll();
        return view('pages/antrian/index', $data);
    }
    public function create()
    {
        // $getdata =$this->pelayanan->getdata();

        // $data =array(
        //     'pelayanan' => $getdata,
        // );

        $getdata = $this->pelayanan->getpelayanan();
        $getdata = $this->loket->getloket();

        $data = array(
            'pelayanan' => $getdata,
            'loket' => $getdata
        );
        // $model = new Modelantrian();
        // $data['antrian'] = $model->getdata();

        return view('pages/antrian/create', $data);
    }
    public function store()
    {
        if (!$this->validate([
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_antrian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'status' => [
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
            'waktu_panggil' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'id_loket' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->antrian->insert([
            'tanggal' => $this->request->getVar('tanggal'),
            'no_antrian' => $this->request->getVar('no_antrian'),
            'status' => $this->request->getVar('status'),
            'id_pelayanan' => $this->request->getVar('id_pelayanan'),
            'waktu_panggil' => $this->request->getVar('waktu_panggil'),
            'waktu_selesai' => $this->request->getVar('waktu_selesai'),
            'id_loket' => $this->request->getVar('id_loket'),


        ]);
        session()->setFlashdata('message', 'Tambah Data antrian Berhasil');
        return redirect()->to('antrian');
    }
    function edit($id)
    {
        $dataAntrian = $this->antrian->find($id);
        if (empty($dataAntrian)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data antrian Tidak ditemukan !');
        }
        $data['antrian'] = $dataAntrian;
        return view('pages/antrian/edit', $data);
    }
    public function update($id)
    {
        if (!$this->validate([
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_antrian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'status' => [
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
            'waktu_panggil' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'id_loket' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->antrian->update($id, [
            'tanggal' => $this->request->getVar('tanggal'),
            'no_antrian' => $this->request->getVar('no_antrian'),
            'status' => $this->request->getVar('status'),
            'id_pelayanan' => $this->request->getVar('id_pelayanan'),
            'waktu_panggil' => $this->request->getVar('waktu_panggil'),
            'waktu_selesai' => $this->request->getVar('waktu_selesai'),
            'id_loket' => $this->request->getVar('id_loket'),
        ]);
        session()->setFlashdata('message', 'Update Data Antrian Berhasil');
        return redirect()->to('/antrian');
    }
    function delete($id)
    {
        $dataantrian = $this->antrian->find($id);
        if (empty($dataantrian)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Pegawai Tidak ditemukan !');
        }
        $this->antrian->delete($id);
        session()->setFlashdata('message', 'Delete Data antrian Berhasil');
        return redirect()->to('antrian');
    }
}
