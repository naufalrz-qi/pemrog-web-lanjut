<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mid_002 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mid_002 = [
            'judul' => '2001040002',
            'isi' => 'Rekayasa Perangkat Lunak',
            'penulis' => 'Naufal Rifqi Zuhrian',
            'keterangan' => '-',
            'tahun_terbit' => 2022,
            'created_at' => new \DateTime,
            'updated_at' => null
        ];
        DB::table('mid_002')->insert($mid_002);
    }
}
