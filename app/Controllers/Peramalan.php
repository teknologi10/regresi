<?php

namespace App\Controllers;

use Dompdf\Options;
use TCPDF;

class Peramalan extends BaseController
{
    public function index()
    {
        $wisatawan = $this->db->table('wisatawan')->get()->getResultArray();
        $data['wisatawan'] = $wisatawan;
        $total = $this->db->table('wisatawan')
            ->select('SUM(event) as tot_event, SUM(jumlah_wisatawan) as tot_wisatawan, SUM(event*event) as tot_event2, SUM(jumlah_wisatawan*jumlah_wisatawan) as tot_wisatawan2, SUM(event*jumlah_wisatawan) as tot_xy')
            ->get()->getRowArray();
        $data['tot_event'] = $total['tot_event'];
        $data['tot_wisatawan'] = $total['tot_wisatawan'];
        $data['tot_event2'] = $total['tot_event2'];
        $data['tot_wisatawan2'] = $total['tot_wisatawan2'];
        $data['tot_xy'] = $total['tot_xy'];

        if ($this->request->getVar('submit') == 'hitung') {
            $data['periode'] = $this->request->getVar('periode');
            $data['x'] = $this->request->getVar('x');
            $data['hasil'] = ($this->request->getVar('a') + ($this->request->getVar('b') * $this->request->getVar('x')));
        } else {
            $data['periode'] = $this->request->getVar('periode');
            $data['x'] = '';
            $data['hasil'] = 0;
        }
        // dd($data);
        return view('peramalan/index', $data);
    }
}
