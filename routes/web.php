<?php
Route::get('/',function() {
        return View('welcome');
});

Route::get('profil/nama',function(){
        return '<h1>Halo Nama Saya agung</h1>';
});

Route::get('profil/alamat',function() {
        return 'Alamat saya di Kp.Bojong Tanjung rt02/rw12 jl.cisirung';
});

Route::get('profil/hobby',function() {
        return 'Hobby Saya Adalah Main Kendang';
});

Route::get('profil/citacita',function() {
        return 'Cita-cita Saya adalah Jadi Dalang';
});
//route parameter
Route::get('biodata/{nama}/{kelas}/{agama}/{alamat}/{hobby}',function($a,$b,$c,$d,$e){
        return '<center><h1>MY BIODATA</h1></center>'.
                '<br>Nama : ' .$a .
                '<br>Kelas : ' .$b .
                '<br>Agama : ' .$c .
                '<br>Alamat : ' .$d .
                '<br>hobby : ' .$e;
});

//Route Optional parameter
Route::get('name/{param}',function($a = 'agung') {
        return 'Your Name is : ' .$a;
});

Route::get('pesan/{baso?}/{enteh?}',function($a = null, $b = null){
        if($a == null){
                return 'Anda harus pesan dulu';
        }
        elseif($b == null){
                return 'Anda pesan : '. $a;
        }
        else{
                return 'Anda pesan : '. $a. ' dan ' . $b;
        }
});

Route::get("mesen/{makan?}/{minum?}/{harga?}",function($a = null, $b = null, $c = null)
{
        $str = "Silahkan Anda Memesan Terlebih Dahulu";

        if (isset($a)) {
                $str = " Anda Memesan $a";
        }
        if (isset($b)) {
                $str .= " dan $b";
        }

        if (isset($c)) {
                $str .= " Dengan Harga $c";

                if($c >= 35000) {
                        $str .= " Anda Mendapatkan size Large";
                }
                if($c >= 25000) {
                        $str .= " Anda Mendapatkan size Medium";
                }
                if($c < 25000) {
                        $str .= " Anda Mendapatkan size Small";
                }

        }
        return $str;
});
Route::get("masuk/{nama?}/{bb?}/{umur?}",function($a = null, $b = null, $c = null)
{
        $gung = "<h1>Silahkan isi data anda terlebih dahulu</h1>";

        if (isset($a)) {
                $gung = " Nama Anda : $a";
        }
        if (isset($b)) {
                $gung .= "<br> Berat Badan : $b";
                if($b >= 75 && $b <100){
                        $gung .= " anda harus turun berat badan";
                }
                else if ($b >= 65 && $b <75) {
                        $gung .=" berat badan anda ideal";
                }
                else if ($b >= 50 && $b <65) {
                        $gung .=" naikan berat badan anda";
                }
                else if ($b >= 50) {
                        $gung .=" anda kurang nutrisi";
                }
        }

        if (isset($c)) {
                $gung .= "<br> Umur : $c";

                if($c >= 30 && $c <40){
                        $gung .= " pewira";
                }

                else if($c >= 40 && $c <50){
                        $gung .= " Laksamana";
                }

                else if($c >= 50 && $c <60){
                        $gung .= " Jendral";
                }

        }
        return $gung;
});
        Route::get('testmodel', function() {
        return $query;
        });

        Route::get('tambah/{a?}/{b?}','LatihanController@tambah');
        Route::get('kurang/{a?}/{b?}','LatihanController@kurang');
        Route::get('kali/{a?}/{b?}','LatihanController@kali');
        Route::get('bagi/{a?}/{b?}','LatihanController@bagi');
        Route::get('/data-1','LatihanController@loop');
        Route::get('/gaji','LatihanController@gaji');
        Route::get('tabungan','tabunganfactory@index');
        Route::get('tabungan','TabunganController@index');
        Route::get('tabungan/(id)','TabunganController@show');
        Route::get('tabungan-tambah/{nis?}/{nama?}/{kelas?}/{jml?}','TabunganController@store');
        Route::get('tabungan-edit/{nis?}/{nama?}/{kelas?}/{jml?}','TabunganController@uptade');
        Route::get('tabungan-delete/{id}','TabunganController@delete');
        Route::get('customer-tambah/{code_customer?}/{name?}/{email?}/{country?}/{city?}/{address?}/{contact_number?}','TabunganController@store');
        Route::get('pass','PraticeController@data');
        Route::get('pass1','PraticeController@pass1');
        Route::get('pass2','PraticeController@lpass2');

?>
