<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class leftsideController extends Controller
{
	public function dashboard(){
    	return view('dashboard');
    }

    public function kategoriUnit(){
    	return view('kategori-unit');
    }

    public function kategoriPersonal(){
    	return view('kategori-personal');
    }

    //apd karyawan
    public function pesanPersonal($id){
        (int)$id_kat = (int)$id;
        $apd = DB::table('apd')
        ->where('apd.id_kategori', $id_kat)
        ->get();

        return view('apd-personal', ['apd' => $apd]);
    }

    public function pesanUnit($id){
        (int)$id_kat = (int)$id;
        $apd = DB::table('apd')
        ->where('apd.id_kategori', $id_kat)
        ->get();

        return view('apd-unit', ['apd' => $apd]);
    }

    //apd admin
    public function tambahApd($id){
        (int)$id_kat = (int)$id;
        $apd = DB::table('apd')
        ->where('apd.id_kategori', $id_kat)
        ->get();

        return view('apd', ['apd' => $apd]);
    }

    //riwayat karyawan
    public function riwayat(){

        return view('riwayat');
    }
    
    //riwayat admin
    public function riwayatadmin(){
        $pinjam = DB::table('peminjaman')
        ->join('apd', 'peminjaman.kode_apd', '=', 'apd.kode_apd')
        ->join('karyawan','karyawan.nik','=','peminjaman.nik')
        ->select('peminjaman.kode_pinjam', 'peminjaman.jenis', 'apd.nama_apd','peminjaman.jumlah_apd',
        'karyawan.nama_karyawan','karyawan.departemen','peminjaman.tgl_pinjam','peminjaman.tgl_kembali',
        'peminjaman.status')
        ->get();

        return view('riwayat',['pinjam' => $pinjam]);
    }

    public function verifPinjam(){
        $pinjam = DB::table('peminjaman')
        ->join('apd', 'peminjaman.kode_apd', '=', 'apd.kode_apd')
        ->join('karyawan','karyawan.nik','=','peminjaman.nik')
        ->where('status', '=', 'Pesan')
        ->select('peminjaman.kode_pinjam', 'peminjaman.jenis', 'apd.nama_apd','peminjaman.jumlah_apd',
        'karyawan.nama_karyawan','karyawan.departemen','peminjaman.tgl_pinjam')
        ->get(); 

        return view('verif-pinjam',['pinjam' => $pinjam]);
    }

    public function verifKembali(){
        $kembali = DB::table('peminjaman')
        ->join('apd', 'peminjaman.kode_apd', '=', 'apd.kode_apd')
        ->join('karyawan','karyawan.nik','=','peminjaman.nik')
        ->where('status', '=', 'Pinjam')
        ->select('peminjaman.kode_pinjam', 'peminjaman.jenis', 'apd.nama_apd','peminjaman.jumlah_apd',
        'karyawan.nama_karyawan','karyawan.departemen','peminjaman.tgl_pinjam','apd.durasi')
        ->get(); 

        return view('verif-kembali',['kembali' => $kembali]);
    }
}
