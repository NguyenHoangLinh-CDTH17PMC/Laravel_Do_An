@extends('home')
@section('css')
<!-- third party css -->
        <link href= "{{asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href= "{{asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href= "{{asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href= "{{asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->
@endsection
@section('js')
<!-- third party js -->
        <script src= "{{asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
        <script src= "{{asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        <script src= "{{asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script type="text/javascript">
		    $(document).ready(function() {
		    $("#linhvuc-datatable").DataTable({
		        language: {
		            paginate: {
		                previous: "<i class='mdi mdi-chevron-left'>",
		                next: "<i class='mdi mdi-chevron-right'>"
		            }
		        },
		        drawCallback: function() {
		            $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
		        }
		    });
		});
        </script>

@endsection
@section('maincontent')
<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4  class="header-title" style="font-family: Tahoma">DANH SÁCH NGƯỜI CHƠI</h4>
            <a href="{{route('nguoichoi.themmoi')}}" type="button" class="btn btn-warning waves-effect waves-light">Thêm mới người chơi<i class="mdi mdi-pen-plus"></i></a>
            

            <table id="linhvuc-datatable" class="table dt-responsive nowrap">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tên đăng nhập</th>
                        <th>Email</th>
                        <th>Ảnh đại diện</th>
                        <th>Điểm cao nhất</th>
                        <th>Credit</th>
                    </tr>
                </thead>
                    @foreach( $Nguoichoi as $nguoichoi)
                    <tr>
                        <td>{{$nguoichoi->id}}</td>
                        <td>{{$nguoichoi->ten_dang_nhap}}</td>
                        <td>{{$nguoichoi->email}}</td>
                        <td>{{$nguoichoi->anh_dai_dien}}</td>
                        <td>{{$nguoichoi->diem_cao_nhat}}</td>
                        <td>{{$nguoichoi->credit}}</td>
                        <td><a href=""><button  type="button" class="btn btn-danger waves-effect waves-light"><i class="fas fa-pencil-alt"></i></button></a>
                        <a href=""><button type="submit" class="btn btn-danger waves-effect waves-light"><i class=" fas fa-trash-alt"></i></button></a>
                        </td>
                    </tr>
                    @endforeach</td>
                    </tr>
            
                <tbody>
             
				<tbody>
            </table>

        </div> <!-- end card body-->
    </div> <!-- end card -->
</div><!-- end col-->
</div>
                <!-- end row-->
                @if(session('themthanhcong'))
                
                    @php
                     echo "<script >alert('them thanh cong')</script>";
                    @endphp
                @endif
@endsection
