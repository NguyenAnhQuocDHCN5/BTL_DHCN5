<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qua extends Model
{
    use HasFactory;
    protected $table = 'qua';
    protected $fillable = [
        'ma_qua',
        'ma_loai',
        'ten_qua',
        'gia_qua',
        'hinh_anh_qua',
        'mo_ta_qua',
    ];

}
