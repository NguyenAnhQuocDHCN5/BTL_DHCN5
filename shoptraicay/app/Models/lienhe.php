<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lienhe extends Model
{
    use HasFactory;
    protected $table = 'lien_he';
    protected $fillable = [
        'ma_lien_he',
        'ten_nguoi_lien_he',
        'sdt_nguoi_lien_he',
        'email_nguoi_lien_he',
        'tieude_lien_he',
        'noi_dung',
        'ngay_lien_he',
        'ma_khach_hang',
    ];
    const CREATED_AT = 'ngay_lien_he';
    const UPDATED_AT = NULL;
}
