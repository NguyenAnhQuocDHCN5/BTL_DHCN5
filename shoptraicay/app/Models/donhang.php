<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donhang extends Model
{
    use HasFactory;
    protected $table = 'don_dat_hang';
    protected $fillable = [
        'ma_don_dat_hang',
        'ten_nguoi_nhan',
        'email_nguoi_nhan',
        'sdt_nguoi_nhan',
        'dia_chi_nguoi_nhan',
        'ghi_chu_dat_hang',
        'tong_tien',
        'tinh_trang_dat_hang',
        'hinhthuc_thanhtoan',
        'ngay_dat',
        'ngay_giao',
        'ma_khach_hang',
    ];
    
}
