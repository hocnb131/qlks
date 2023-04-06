<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Nguyễn Bá Học',
            'email'=>'hocnb@gmail.com',
            'address'=>'123 nhà bè',
            'phoneNumber'=>'0123456789',
            'password'=> bcrypt('123123123'),
            'role'=>'1',
            // 'status'=>'1'
        ]);
    }
}
