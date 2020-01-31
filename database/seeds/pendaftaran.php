<?php

use Illuminate\Database\Seeder;

class pendaftaran extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $posts [
            ['No_pendaftaraan'=>'31234', 'Nama_Lengkap'=>'agunggumelar', 'Jenis_kelamin'=>'gitar', 'asal_sekolah'=>'2020-01-24', 'Agama'=>'buah', 'Golongan_Darah'=>'500000', 'No_telepon'=>'2']

        ];
        DB::table('Pendaftaraan')->insert($posts);
    }
}
