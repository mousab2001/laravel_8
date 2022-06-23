<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('histories')->insert([
            [
                'name' => 'Ahmad',
                'email' => 'ahmad@ucas.ps',
                'presence' => 1,
                'departure' => 1
            ],
            [
                'name' => 'Muhammad',
                'email' => 'Muhammad@ucas.ps',
                'presence' => 1,
                'departure' => 1
            ],
            [
                'name' => 'Mustafa',
                'email' => 'Mustafa@ucas.ps',
                'presence' => 1,
                'departure' => 1
            ],
        ]);
    }
}
