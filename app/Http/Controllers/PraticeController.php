<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tabungan;

class PraticeController extends Controller
{
    public function pass()
    {
        $data = "Agung boleng";
        return view ('latihan',compact('data'));
    }
    public function pass1()
    {
        $siswa = [
            ['nama'=>'Kasman','kelas'=>'XI-RPL 1'],
            ['nama'=>'Kisman','kelas'=>'XI-RPL 2'],
        ];
        return view('latihan1',['data'=>$siswa]);
    }
    public function pass2($id)
    {
        $tabungan = tabungan::all()->take(10);
        return view('latihan3',compact('tabungan'));
    }
}
