<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nguoichoi;

class NguoiChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Nguoichoi=Nguoichoi::all();
        return view('danhsachnguoichoi',compact('Nguoichoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('them_moi_nguoichoi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Nguoichoi = new Nguoichoi;
        $Nguoichoi -> ten_dang_nhap = $request->ten_dang_nhap;
        $Nguoichoi -> mat_khau= $request->mat_khau;
        $Nguoichoi -> email= $request->email;
        $Nguoichoi -> anh_dai_dien= $request->anh_dai_dien;
        $Nguoichoi -> diem_cao_nhat= $request->diem_cao_nhat;
        $Nguoichoi -> credit= $request->credit;
        $Nguoichoi ->save();
        return redirect()->route('nguoichoi.themmoi')->with('themthanhcong','them thanh cong');

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
       $nguoichoi=Nguoichoi::find($id);
       return View('Update_nguoi_choi',compact('nguoichoi'));
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
        $nguoichoi=Nguoichoi::find($id);
        $nguoichoi -> ten_dang_nhap = $request->ten_dang_nhap;
        $nguoichoi -> mat_khau= $request->mat_khau;
        $nguoichoi -> email= $request->email;
        $nguoichoi -> anh_dai_dien= $request->anh_dai_dien;
        $nguoichoi -> diem_cao_nhat= $request->diem_cao_nhat;
        $nguoichoi -> credit= $request->credit;
        $nguoichoi ->save();
        return redirect('nguoichoi')->with('themthanhcong','Xóa thành công');    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Nguoichoi::where('id',$id)->delete();
       return redirect('nguoichoi')->with('success','Xóa thành công');
    }
  
}
