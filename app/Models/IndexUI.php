<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndexUI extends Model
{
    use HasFactory;
    protected $table='gd_trang_chu';
    protected $primaryKey = 'Id';
    protected $fillable = [
        'Hinh_Anh',
        'Iframe_YT',
        'Banner_TT',
    ];
}
