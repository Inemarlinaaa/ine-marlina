<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboardpetugas extends BaseController
{
    public function index()
    {
        $data['intro'] = '<div class="jumbotron mt-5">
		<h1>Hai Selamat Datang , ' . session()->get('nama_petugas') . '</h1>
		<p>Silahkan gunakan halaman ini untuk menampilkan informasi Hotel SANTIKA!</p>
	  </div>';
        return view('dashboard', $data);
    }
}
