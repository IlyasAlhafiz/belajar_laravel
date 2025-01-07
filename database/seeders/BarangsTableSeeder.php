<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang'=>'kulkas', 'merk'=>'Samsung', 'harga'=>5000000],
            ['nama_barang'=>'televisi', 'merk'=>'LG', 'harga'=>3000000],
            ['nama_barang'=>'mesin cuci', 'merk'=>'Panasonic', 'harga'=>4000000],
            ['nama_barang'=>'AC', 'merk'=>'Daikin', 'harga'=>3500000],
            ['nama_barang'=>'kipas angin', 'merk'=>'Miyako', 'harga'=>200000]
        ];

        DB::table('barangs')->insert($barangs);
    }
}
