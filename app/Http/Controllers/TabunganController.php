<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tabungan;

class TabunganController extends Controller
{
    public function index()
    {
        $tabungan = tabungan::all();
            return $tabungan;
    }

    public function show($id)
    {
        $tabungan = tabungan::findOrFail($id);
        return $tabungan;
    }

    public function store($nis, $nama, $kelas, $jml)
    {
        $tabungan = new tabungan();
        $tabungan->nis = $nis;
        $tabungan->nama = $nama;
        $tabungan->kelas = $kelas;
        $tabungan->jml = $jml;
        $tabungan->save();
        return $tabungan;
    }

    public function update($id, $nis, $nama, $kelas, $jml)
    {
        $tabungan = new tabungan();
        $tabungan->nis = $nis;
        $tabungan->nama = $nama;
        $tabungan->kelas = $kelas;
        $tabungan->jml = $jml;
        $tabungan->save();
        return $tabungan;
    }

    public function delete($id)
    {
        $tabungan = tabungan::find($id);
        $tabungan->delete();
        return $tabungan."<br> Berhasil Dihapus";
    }
}
