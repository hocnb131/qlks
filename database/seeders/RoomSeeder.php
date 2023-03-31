<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('room')->insert([
            ['name'=>'Premium King Room','price'=>159,'size'=>'30 ft','capacity'=>'Max persion 3','bed'=>'King Beds','services'=>'Wifi, Television, Bathroom,...'],
        ]);
    }
}
