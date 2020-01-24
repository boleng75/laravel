<?php

use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $posts [
            ['kode'=>'31234', 'nama'=>'agunggumelar', 'nama_barang'=>'gitar', 'tgl_pembelian'=>'2020-01-24', 'satuan'=>'buah', 'harga_satuan'=>'500000', 'jumlah_barang'=>'2', 'total_harga'=>'10000000']

        ];
        DB::table('produks')->insert($posts);
    }
}
