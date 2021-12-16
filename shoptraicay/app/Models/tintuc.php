<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    use HasFactory;
    protected $table = 'tin_tuc';
    protected $fillable = [
        'ma_tin_tuc',
        'tieu_de',
        'hinh_anh_tin_tuc',
        'noi_dung_tin_tuc',
        'ngay_dang_tin_tuc',
    ];
}
