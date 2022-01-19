@extends('admin.admin_layout')
@section('admin_content')
<style>
    table{
        font-weight: bold;
    }
    tr,td{
        padding:  5px;
    }
</style>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                          Cập nhật trạng thái đơn hàng
                        </header>
                        <div class="panel-body">
                            <table align="center">
                                <tr>
                                    <td>Mã đơn đặt hàng: </td>
                                    <td>{{$don_hang[0]->ma_don_dat_hang}}</td>
                                </tr>
                                <tr>
                                    <td>Tên khách hàng: </td>
                                    <td>{{$don_hang[0]->ten_nguoi_nhan}}</td>
                                </tr>
                                <tr>
                                    <td>Số điện thoại: </td>
                                    <td>{{$don_hang[0]->sdt_nguoi_nhan}}</td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ: </td>
                                    <td>{{$don_hang[0]->dia_chi_nguoi_nhan}}</td>
                                </tr>
                                <tr>
                                    <td>Tổng tiền: </td>
                                    <td style="color:red;">{{$don_hang[0]->tong_tien}}</td>
                                </tr>
                            </table>
                        @foreach($don_hang  as $key => $edit_value) 
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-dondathang/'.$edit_value->ma_don_dat_hang)}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1"></label>Trạng thái</label>
                                    <select name="tinh_trang_dat_hang" class="form-control input-sm m-bot15">
                                         <option value="Chờ xác nhận">Chờ xác nhận </option>
                                            <option value="Đang vận chuyển">Đang vận chuyển</option>
                                            <option value="Đã giao hàng">Đã giao hàng</option>
                                            <option value="Đã hủy">Đã hủy</option>
                                            
                                    </select>
                                                             
                            </div>
                                
                                  
                              
                                
                                <button type="submit" name="update_admin" class="btn btn-info">Cập nhật </button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
@endsection