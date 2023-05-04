<?php

namespace App\Controllers;

use Dompdf\Options;
use TCPDF;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('dashboard/index');
    }
}
