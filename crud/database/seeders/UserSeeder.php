<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Anggara Fabiano',
            'email' => 'AnggaraFabiano@gmail.com',
            'email_verified_at' => '',
            'password' => 'AnggaraFabiano',
            'role' => 'guru',
        ]);
    }
}
