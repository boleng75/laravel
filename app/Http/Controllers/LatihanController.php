<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function tambah($a=null,$b=null)
    {
            $hasil=$a+$b;
            return $a .' + '. $b . ' = '. $hasil;
    }
     public function kurang($a,$b)
    {
            $hasil=$a-$b;
            return $a .' - '. $b . ' = ' .$hasil;
    }
     public function kali($a,$b)
    {
            $hasil=$a*$b;
            return $a .' * '. $b . ' = ' .$hasil;
    }
     public function bagi($a,$b)
    {
            $hasil=$a/$b;
            return $a .' / '. $b . ' = ' .$hasil;
    }
    public function loop()
    {
        $data = [
        ['Nama'=>'Hari','Kelas'=>'XI RPL 1','Uang_Jajan'=>'10000'],
        ['Nama'=>'Memet','Kelas'=>'XI RPL 1','Uang_Jajan'=>'100000'],
        ['Nama'=>'Restu','Kelas'=>'XI RPL 1','Uang_Jajan'=>'1000000'],
        ['Nama'=>'david','Kelas'=>'XI RPL 1','Uang_Jajan'=>'1000000'],
        ['Nama'=>'Setiawan','Kelas'=>'XI RPL 1','Uang_Jajan'=>'1000000'],
        ];
        foreach($data as $val => $key){
        if($key['Uang_Jajan'] >= 50000) {
            $tabungan = $key['Uang_Jajan'] * 25 /100;
            $sisa = $key['Uang_Jajan'] - $tabungan;
        }
        else if($key['Uang_Jajan'] >= 25000) {
            $tabungan = $key['Uang_Jajan'] * 15 /100;
            $sisa = $key['Uang_Jajan'] - $tabungan;
        }
        else if($key['Uang_Jajan'] >= 10000) {
            $tabungan = $key['Uang_Jajan'] * 10 /100;
            $sisa = $key['Uang_Jajan'] - $tabungan; }

        {
            echo "Nama             : ". $key['Nama'].
                "<br>Kelas         : ". $key['Kelas'].
                "<br>Uang Jajan    : ". $key['Uang_Jajan'].
                "<br>Uang Tabungan : ". $tabungan.
                "<br>Uang Sisa     : ". $sisa.
                "<hr>";
            }
        }
        public function gaji(){
            $data = [
                ['Nama'=>'Agung','Agama'=>'Islam','Alamat'=>'kpbojong_tanjung','jenis_kelamin'=>'L','Jabatan'=>'Manager','jam_kerja'=>'12'],
                ['Nama'=>'Anji','Agama'=>'Islam','Alamat'=>'dayeuhkolot','jenis_kelamin'=>'L','Jabatan'=>'Sekretaris','jam_kerja'=>'11'],
                ['Nama'=>'Agung','Agama'=>'Islam','Alamat'=>'kpbojong_tanjung','jenis_kelamin'=>'L','Jabatan'=>'Staff','jam_kerja'=>'10']
            ];
        }
    }
}
