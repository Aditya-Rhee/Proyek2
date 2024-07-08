<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriPaketKiloanSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paketKiloan = [
            ['jenis_kategori_paket_kiloans' => '1kg 10,000'],
            ['jenis_kategori_paket_kiloans' => '2kg 20,000'],
            ['jenis_kategori_paket_kiloans' => '3kg 30,000'],
            ['jenis_kategori_paket_kiloans' => '4kg 40,000'],
            ['jenis_kategori_paket_kiloans' => '5kg 50,000'],
            ['jenis_kategori_paket_kiloans' => '6kg 60,000'],
            ['jenis_kategori_paket_kiloans' => '7kg 70,000'],
            ['jenis_kategori_paket_kiloans' => '8kg 80,000'],
            ['jenis_kategori_paket_kiloans' => '9kg 90,000'],
            ['jenis_kategori_paket_kiloans' => '10kg 100,000'],
        ];

        DB::table('kategori_paket_kiloans')->insert($paketKiloan);
    }
}
