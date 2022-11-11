<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tabel_kelas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            'fakultas' => 'Teknik dan Desain',
            'prodi' => 'S1 RPL',
            'kelas' => 'A',
            'isi' => 2001040002,
            'created_at' => new \DateTime,
            'updated_at' => null
        ];
        DB::table('tabel_kelas')->insert($kelas);
    }
}
