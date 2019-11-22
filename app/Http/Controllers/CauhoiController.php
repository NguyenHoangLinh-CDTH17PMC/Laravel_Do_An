<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cauhoi;
use App\Linhvuc;
use Illuminate\Support\Facades\DB;
class CauhoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dscauhoi = CauHoi::all();
        return view('cauhoi',compact('dscauhoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dslinhvuc = Linhvuc::all();

        return view('themmoi_cauhoi',compact('dslinhvuc'));  
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $dscauhoi = CauHoi::withTrashed()->find($id);
        $dscauhoi->restore();
        return redirect()->route('cauhoi.danhsach');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cau_hoi = new  Cauhoi;
        $cau_hoi-> noidung =$request->noidung;
        $cau_hoi->linh_vuc_id =$request->linh_vuc_id;
        $cau_hoi-> phuong_an_a =$request->phuong_an_a;
        $cau_hoi-> phuong_an_b =$request->phuong_an_b;
        $cau_hoi-> phuong_an_c =$request->phuong_an_c;
        $cau_hoi-> phuong_an_d =$request->phuong_an_d;
        $cau_hoi-> dap_an =$request->dap_an;
        $cau_hoi->save();
        return redirect()->action('CauhoiController@index');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dscauhoi = CauHoi::find($id);
        $dslinhvuc= Linhvuc::all();
        return view('capnhat_cauhoi',compact(['dscauhoi','dslinhvuc']),['id'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cau_hoi = new Cauhoi;
        $cau_hoi->noidung = $request->noidung;
        $cau_hoi->linh_vuc_id =$request->linh_vuc_id;
        $cau_hoi->phuong_an_a=$request->phuong_an_a;
        $cau_hoi->phuong_an_b=$request->phuong_an_b;
        $cau_hoi->phuong_an_c=$request->phuong_an_c;
        $cau_hoi->phuong_an_d=$request->phuong_an_d;
        $cau_hoi->dap_an=$request->dap_an;

        Cauhoi::where('id',$id)->update([
            'noidung' => $request->noidung,
            'linh_vuc_id' =>$request->linh_vuc_id,
          'phuong_an_a'=>$request->phuong_an_a,
           'phuong_an_b'=>$request->phuong_an_b,
           'phuong_an_c'=>$request->phuong_an_c,
            'phuong_an_d'=>$request->phuong_an_d,
            'dap_an'=>$request->dap_an,
        ]);
        return redirect()->action('CauhoiController@index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($sId)
    {
        $id = Cauhoi::find($sId);
        $id->delete();
        return redirect()->route('cauhoi.danhsach');
    }
    public function recycle(){
        $dscauhoi = DB::table('cau_hoi')->get();
        return view('cau_hoi_thungrac',compact('dscauhoi'));
    }
}
