<?php

use Illuminate\Database\Seeder;

class siswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $posts = [
            ["nama"=>"Agung Gumelar", "nis"=>"0213425", "jenis_kelamin"=>"laki_laki", "alamat"=>"cisirung", "tgl_lahir"=>"09092003", "umur"=>19],
            ["nama"=>"peter", "nis"=>"08754", "jenis_kelamin"=>"laki_laki", "alamat"=>"cisirung", "tgl_lahir"=>"5454577", "umur"=>19]
        ];
        DB::table('siswa')->insert($posts);
    }
}
