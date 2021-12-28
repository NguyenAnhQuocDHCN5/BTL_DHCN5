<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitietdondathang extends Model
{
    use HasFactory;
    protected $table = 'chi_tiet_dat_hang';
    protected $fillable = [
        'ma_qua',
        'ma_don_dat_hang',
        'so_luong',
        'thanh_tien',
    ];
}
