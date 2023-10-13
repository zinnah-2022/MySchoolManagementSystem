<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class settingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'name'=>"our School Name",
            'phone'=>"01716571233",
            'address'=>"#120,Uttara Dhaka, Bangladesh",
            'est'=>"2003",
            'code'=>"1236547",
            'eiin'=>"103598",
            'logo'=>"logo.png",
            'email'=>"school@gmail.com",
            'created_at'=>Carbon::now()

        ]);
    }
}
