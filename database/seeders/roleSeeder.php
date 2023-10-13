<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'role_name'=>"admin",
            'created_at'=>Carbon::now()
        ]);
        DB::table('roles')->insert([
            'role_name'=>"user",
            'created_at'=>Carbon::now()
        ]);
    }
}
