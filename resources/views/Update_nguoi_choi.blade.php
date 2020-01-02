@extends('home')
@section('maincontent')               
 <div class="row">
    <div class="col-lg-12">
        <div class="card">
        <div class="card-body">
            <h4 class="mb-3 header-title" style="text-align: center"><b style="font-size: 30px;font-family: Tahoma">CẬP NHẬT NGƯỜI CHƠI</b></h4>
      <form action="{{route('nguoichoi.capnhat',$nguoichoi->id)}}" method="POST">
                        @csrf
        <div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Ten can sua</label>
            <input type="text"    class="form-control"  name="ten_dang_nhap" value="{{$nguoichoi->ten_dang_nhap}}" readonly="readonly">
        </div>
        <div class="form-group">
             <label for="exampleInputEmail1">mật khẩu</label>
            <input type="password"  placeholder="nhập mật khẩu"  class="form-control"  name="mat_khau" value="{{$nguoichoi->mat_khau}}">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text"    class="form-control"  name="email" value="{{$nguoichoi->email}}"  >
        </div><div class="form-group">
            <label for="exampleInputEmail1">Ảnh đại diện</label>
            <input type="text"    class="form-control" id="" name="anh_dai_dien" value="{{$nguoichoi->anh_dai_dien}}">
        </div>  
      </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Điểm cao nhất<style type="text/css"></style></label>
            <input type="text"    class="form-control"  name="diem_cao_nhat" value="{{$nguoichoi->diem_cao_nhat}}" readonly="readonly">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Credit</label>
            <input type="text"    class="form-control" id="" name="credit"  value="{{$nguoichoi->credit}}" readonly="readonly">
        </div>
        <div class="form-group">
            <button style="width: 100%;margin-top: 30px" type="submit" class="btn btn-primary waves-effect waves-light">Lưu</button>
        </div>        
    </div>  
    </div>
        </form>
        @if(session('themthanhcong'))
        <script type="text/javascript"> alert('Sua thanh cong')</script>

        @endif
        </div> <!-- end card-body-->
    </div> <!-- end card-->
</div>
<!-- end col -->@endsection