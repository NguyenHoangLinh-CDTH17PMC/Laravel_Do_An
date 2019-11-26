<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
           ['ho_ten'=>'Linh','ten_dang_nhap'=>'admin','mat_khau'=>Hash::make('12345')] 
        ]);
    }
}
