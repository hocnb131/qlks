<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('branch')->insert([
            ['name'=>'quan 7','email'=>'hotelq7@gmail.com','address'=>'356 nvl','phoneNumber'=>'0912344567','description'=>'khach san quan 7','status'=>'1','province_id'=>1],
            ['name'=>'quan 7','email'=>'hotelq7@gmail.com','address'=>'356 nvl','phoneNumber'=>'0912344567','description'=>'khach san quan 7','status'=>'1','province_id'=>2],
            ['name'=>'quan 7','email'=>'hotelq7@gmail.com','address'=>'356 nvl','phoneNumber'=>'0912344567','description'=>'khach san quan 7','status'=>'1','province_id'=>1],
            ['name'=>'quan 7','email'=>'hotelq7@gmail.com','address'=>'356 nvl','phoneNumber'=>'0912344567','description'=>'khach san quan 7','status'=>'1','province_id'=>2],
            ['name'=>'quan 7','email'=>'hotelq7@gmail.com','address'=>'356 nvl','phoneNumber'=>'0912344567','description'=>'khach san quan 7','status'=>'1','province_id'=>1],
            ['name'=>'quan 7','email'=>'hotelq7@gmail.com','address'=>'356 nvl','phoneNumber'=>'0912344567','description'=>'khach san quan 7','status'=>'1','province_id'=>2],

        ]);
    }
}
