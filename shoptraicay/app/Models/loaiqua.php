<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaiqua extends Model
{
    use HasFactory;
    protected $table = 'loai_qua';
    protected $fillable = [
        'ma_loai',
        'ten_loai',
    ];
}
