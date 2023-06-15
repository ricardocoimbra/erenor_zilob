<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KindshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kindships')->insert([
            ['name' => 'Pai'],
            ['name' => 'Mãe'],
            ['name' => 'Avô'],
            ['name' => 'Avó'],
            ['name' => 'Tio(a)'],
            ['name' => 'Irmão(a)'],
            ['name' => 'Conjuge'],
            ['name' => 'Enteado(a)'],
            ['name' => 'Primo(a)'],
            ['name' => 'Filho(a)'],
        ]);
    }
}
