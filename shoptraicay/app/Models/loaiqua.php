<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaiqua extends Model
{
    use HasFactory;
    protected $table = 'loai_qua';
    protected $fillable = [
        'ten_qua',
    ];
    // protected $guarded = ['ma_loai'];
}
