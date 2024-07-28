<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'name'=>'Nisar Ahmad',
            'fname'=>'M.Zia',
            'phone'=> '0779144172',
            'address'=>'Ghazni province , Nowabad',
            'description'=>'He is the writter of this code and now he is studying in kabul university in faculty of computer science department'
        ]);
    }
}
