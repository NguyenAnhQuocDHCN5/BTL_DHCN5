<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    use HasFactory;
    protected $table = 'khachhang';
    protected $fillable = [
        'ma_khach_hang',
        'kh_email',
        'kh_matkhau',
        'kh_ten',
        'kh_sdt',
        'kh_diachi',
    ];
    
    
}
