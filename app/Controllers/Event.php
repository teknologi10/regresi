<?php

namespace App\Controllers;

use Dompdf\Options;
use TCPDF;

class Event extends BaseController
{
    public function index()
    {
        $event = $this->db->table('event')->get()->getResultArray();
        $data['event'] = $event;
        return view('event/index', $data);
    }

    public function tambah()
    {
        if ($this->request->getVar('submit') == 'tambah') {
            // dd($this->request->getVar());
            $this->db->table('event')
                ->set('nama_event', $this->request->getVar('nama_event'))
                ->set('alamat', $this->request->getVar('alamat'))
                ->set('deskripsi', $this->request->getVar('deskripsi'))
                ->insert();
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');
            return redirect()->to(base_url('/event'));
        }
        return view('event/tambah');
    }

    public function edit($id)
    {
        $event = $this->db->table('event')->where('id_event', $id)
            ->get()->getRowArray();
        $data['event'] = $event;
        if ($this->request->getVar('submit') == 'edit') {
            // dd($this->request->getVar());
            $this->db->table('event')
                ->set('nama_event', $this->request->getVar('nama_event'))
                ->set('alamat', $this->request->getVar('alamat'))
                ->set('deskripsi', $this->request->getVar('deskripsi'))
                ->where('id_event', $id)
                ->update();
            session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
            return redirect()->to(base_url('/event'));
        }
        // dd($data);
        return view('event/edit', $data);
    }

    public function hapus($id)
    {
        $this->db->table('event')->where('id_event', $id)->delete();
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to(base_url('/event'));
    }
}
