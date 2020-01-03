@extends('home')
@section('maincontent')               
 <div class="row">
    <div class="col-lg-12">
        <div class="card">
		<div class="card-body">
            <h4 class="mb-3 header-title" style="text-align: center"><b style="font-size: 30px;font-family: Tahoma">CẬP NHẬT CÂU HỎI</b></h4>
            <!-- Hiển thị thông báo lỗi khi Validate -->
            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                    {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
        
        @endif
      <form action="{{route('cauhoi.capnhat',['id'=>$id])}}" method="POST">
    					@csrf
    	<div class="row">
    	<div class="col-sm-6">
      	<div class="form-group">
            <label for="exampleInputEmail1">Nội dung</label>
            <input type="text"  value="{{ $dscauhoi->noidung }}"  class="form-control" id="noidung" name="noidung">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" >Lĩnh vực</label>
            <select class="custom-select " id="linh_vuc_id" name="linh_vuc_id">
                <option  >{{ $dscauhoi->linhVuc->ten_linh_vuc }}</option>
                @foreach($dslinhvuc as $Linhvuc)
                <option value="{{$Linhvuc->id}}">{{$Linhvuc->ten_linh_vuc}}</option>
                @endforeach
            </select> 
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Phương án A</label>
            <input type="text"  value="{{ $dscauhoi->phuong_an_a }}"  class="form-control" id="phuong_an_a" name="phuong_an_a">
        </div><div class="form-group">
            <label for="exampleInputEmail1">Phương án B</label>
            <input type="text"  value="{{ $dscauhoi->phuong_an_b }}"  class="form-control" id="phuong_an_b" name="phuong_an_b">
        </div>
      </div>
    <div class="col-lg-6">
      	<div class="form-group">
            <label for="exampleInputEmail1">Phương án C<style type="text/css"></style></label>
            <input type="text"  value="{{ $dscauhoi->phuong_an_c }}"    class="form-control" id="phuong_an_c" name="phuong_an_c">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Phương án D</label>
            <input type="text" value="{{ $dscauhoi->phuong_an_d }}"  class="form-control" id="phuong_an_d" name="phuong_an_d">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Đáp án </label>
            <input type="text" value="{{ $dscauhoi->dap_an }}"    class="form-control" id="dap_an" name="dap_an">
        </div>
        <div class="form-group">
        	<button style="width: 100%;margin-top: 30px" type="submit" class="btn btn-primary waves-effect waves-light">Cập nhật</button>
        </div>        
    </div>	
    </div>
 		</form>
        </div> <!-- end card-body-->
    </div> <!-- end card-->
</div>
<!-- end col -->@endsection