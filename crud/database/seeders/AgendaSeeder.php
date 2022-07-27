<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agendas')->insert([
            'namaguru' => 'Anggara Fabiano',
            'materipembelajaran' => 'tambah kurang',
            'matapelajaran' => 'MTk',
            'jampelajaran' => 'dsa',
            'absensi' => 'hadir',
            'kelas' => 'XI',
            'jenispembelajaran' => 'hadir',
            'linkpembelajaran' => 'link',
            'dokumentasi' => 'Berkas',
            'keterangan' => 'dnai',
        ]);
    }
}
