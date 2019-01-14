<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class leftsideController extends Controller
{
	public function dashboard(){
    	return view('dashboard');
    }

    public function kategori(){
    	return view('kategori');
    }
    
    public function pesanApd(){
    	return view('pesan-apd');
    }
    
    public function riwayat(){
    	return view('riwayat');
    }

    public function apd(){
        return view('apd');
    }

    public function verifPinjam(){
        return view('verif-pinjam');
    }

    public function verifKembali(){
        return view('verif-kembali');
    }

}
