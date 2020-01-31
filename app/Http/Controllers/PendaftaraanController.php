<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaraanController extends Controller
{
    public function pass1()
    {
        $siswa = [
            ['No_pendaftaraan'=>'089776','Nama Lengkap'=>'Rizki','Jenis Kelamin'=>'L','Asal Sekolah'=>'smp gravitasi','Agama'=>'islam','Golongan_Darah'=>'O','No_telepon'=>'089553523532'],

        ];
        return view('pass4',['data'=>$siswa]);
    }
}
