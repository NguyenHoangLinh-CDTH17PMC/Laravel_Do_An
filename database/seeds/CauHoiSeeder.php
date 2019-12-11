<?php

use Illuminate\Database\Seeder;
use App\LinhVuc;
use App\CauHoi;

class CauHoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
        	["noidung"=>'Lập trình','linh_vuc_id'=>1,'phuong_an_a'=>'3','phuong_an_b'=>'3','phuong_an_c'=>'3','phuong_an_d'=>'3','dap_an'=>'3'],
        	["noidung"=>'Toan','linh_vuc_id'=>1,'phuong_an_a'=>'3','phuong_an_b'=>'3','phuong_an_c'=>'3','phuong_an_d'=>'3','dap_an'=>'3'],
 
        	['noidung'=>'Lich su','linh_vuc_id'=>1,'phuong_an_a'=>'3','phuong_an_b'=>'3','phuong_an_c'=>'3','phuong_an_d'=>'3','dap_an'=>'3']
 
        ];

        foreach ($data as $dt) {
        	CauHoi::create($dt);
          }
        
    }
}
