<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adm extends Model
{
    use HasFactory;
    protected $table = 'adm';
    protected $fillable = [
        'ma_adm',
        'ten_dn',
        'mat_khau',
        'ten_adm',
        'sdt',
        'dia_chi',
    ];
}
