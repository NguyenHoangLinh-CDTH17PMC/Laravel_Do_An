<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Cauhoi extends Model
{
	use SoftDeletes;
    protected $table = 'cau_hoi';
    protected $fillable = ['id','noidung','linh_vuc_id','phuong_an_a','phuong_an_b','phuong_an_c','phuong_an_d','dap_an'];

    public function linhVuc()
    {
       return $this->belongsTo('App\Linhvuc');
    }
}
