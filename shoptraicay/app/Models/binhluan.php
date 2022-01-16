<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class binhluan extends Model
{
    use HasFactory;
    protected $table = 'binh_luan';
    protected $fillable = [
        'ma_binhluan',
        'binhluan_ten',
        'binhluan_email',
        'binhluan_noidung',
        'ma_qua',
        'binhluan_ngay',
    ];
    // const CREATED_AT = 'binhluan_ngay';
    // public $timestamps = TRUE;

}
