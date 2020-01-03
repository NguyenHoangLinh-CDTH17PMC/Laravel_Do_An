<?php

use Illuminate\Database\Seeder;
use App\LinhVuc;

class ThemLinhVucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
        	['ten_linh_vuc'=>'Thể Thao'],
        	['ten_linh_vuc'=>'Lịch sử'],
        	['ten_linh_vuc'=>'Âm nhạc-Phim'],
        	['ten_linh_vuc'=>'Địa lý'],
        	['ten_linh_vuc'=>'Văn học'],
        	['ten_linh_vuc'=>'Y học'],
        	['ten_linh_vuc'=>'Văn hóa-sự kiện'],
        	['ten_linh_vuc'=>'Khoa học tự nhiên'],
        ];

        foreach ($data as $dt) {
        	LinhVuc::create($dt);
        }    }
}
