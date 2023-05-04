<?php

namespace App\Controllers;

use Dompdf\Options;
use TCPDF;

class Wisatawan extends BaseController
{
    public function index()
    {
        $wisatawan = $this->db->table('wisatawan')->get()->getResultArray();
        $data['wisatawan'] = $wisatawan;
        return view('wisatawan/index', $data);
    }

    public function tambah()
    {
        if ($this->request->getVar('submit') == 'tambah') {
            // dd($this->request->getVar());
            $this->db->table('wisatawan')
                ->set('periode', $this->request->getVar('periode'))
                ->set('event', $this->request->getVar('event'))
                ->set('jumlah_wisatawan', $this->request->getVar('jumlah_wisatawan'))
                ->insert();
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');
            return redirect()->to(base_url('/wisatawan'));
        }
        return view('wisatawan/tambah');
    }

    public function edit($id)
    {
        $wisatawan = $this->db->table('wisatawan')->where('id', $id)
            ->get()->getRowArray();
        $data['wisatawan'] = $wisatawan;
        if ($this->request->getVar('submit') == 'edit') {
            // dd($this->request->getVar());
            $this->db->table('wisatawan')
                ->set('periode', $this->request->getVar('periode'))
                ->set('event', $this->request->getVar('event'))
                ->set('jumlah_wisatawan', $this->request->getVar('jumlah_wisatawan'))
                ->where('id', $id)
                ->update();
            session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
            return redirect()->to(base_url('/wisatawan'));
        }
        // dd($data);
        return view('wisatawan/edit', $data);
    }

    public function hapus($id)
    {
        $this->db->table('wisatawan')->where('id', $id)->delete();
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to(base_url('/wisatawan'));
    }
}
