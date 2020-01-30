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
    }
        public function gaji() {
            $data = [
                ['Nama'=>'Agung','Agama'=>'Islam','Alamat'=>'kpbojong_tanjung','jenis_kelamin'=>'L','Jabatan'=>'Manager','jam_kerja'=>'12'],
                ['Nama'=>'Anji','Agama'=>'Kristen','Alamat'=>'dayeuhkolot','jenis_kelamin'=>'L','Jabatan'=>'Sekretaris','jam_kerja'=>'11'],
                ['Nama'=>'Agung','Agama'=>'Budha','Alamat'=>'kpbojong_tanjung','jenis_kelamin'=>'L','Jabatan'=>'Staff','jam_kerja'=>'10']
            ];
            foreach($data as $key => $value){
                if($value['jabatan'] == 'manajer'){
                    $gaji = 5000000;
                    if($value['jam_kerja'] >= 250){
                        $gaji2 = (10/100)*$gaji;
                        $bonus = $gaji + $gaji2;
                    } if ($value['jam_kerja'] >= 200){
                        $gaji2 = $gaji*0.05;
                        $bonus = $gaji+$gaji2;
                    }
                    if($value['jabatan'] == 'Sekretaris'){
                    $gaji = 5000000;
                    if($value['jam_kerja'] >= 250){
                        $gaji2 = (10/100)*$gaji;
                        $bonus = $gaji + $gaji2;
                    } if ($value['jam_kerja'] >= 200){
                        $gaji2 = $gaji*0.05;
                        $bonus = $gaji+$gaji2;
                    }
                    if($value['jabatan'] == 'Staff'){
                    $gaji = 5000000;
                    if($value['jam_kerja'] >= 250){
                        $gaji2 = (10/100)*$gaji;
                        $bonus = $gaji + $gaji2;
                    } if ($value['jam_kerja'] >= 200){
                        $gaji2 = $gaji*0.05;
                        $bonus = $gaji+$gaji2;
                    }


                    else{
                        echo"";
                    }
                    $PPN = $bonus*0.025;
                    $total=$bonus - $PPN;


                    echo "Nama              : ". $value['Nama'].
                         "<br>Agama         : ". $value['Kelas'].
                         "<br>Alamat        : ". $value['Alamat'].
                         "<br>Jenis Kelamin : ". $value['jenis_kelamin'].
                         "<br>Jabatan       : ". $value['Jabatan'].
                         "<br>Jam Kerja     : ". $value['jam_kerja'].
                         "<br>Gaji          : ". $gaji.
                         "<br>bonus         : ". $gaji2.
                         "<br>PPN           : ". $PPN.
                         "<br>Total Gaji    : ". $total.
                         "<hr>";
                }
            }
        }
    }
}
}
