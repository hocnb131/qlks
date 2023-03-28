<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('province')->insert([
            ['name'=>'quan 7'],
            ['name'=>'quan 8'],
            ['name'=>'quan 9'],
            ['name'=>'quan 2'],
            ['name'=>'quan 1'],
            ['name'=>'quan 3'],
        ]);
    }
}
