<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class guruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->insert([
            'namaguru' => 'Anggara Fabiano',
            'nikguru' => '32859012345952321',
            'namapelajaran' => 'tidak-ada',
            'username' => 'AnggaraFabiano4@gmail.com',
            'password' => 'AnggaraFabiano',
        ]);
    }
}
