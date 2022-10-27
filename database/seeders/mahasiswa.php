<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa = [
            'nim' => '2001040002',
            'nama' => 'Naufal Rifqi Zuhrian',
            'jurusan' => 'RPL',
            'prodi' => 'S1 RPL',
            'created_at' => new \DateTime,
            'updated_at' => null
        ];
        DB::table('mahasiswa')->insert($mahasiswa);
    }
}
