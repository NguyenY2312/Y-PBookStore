<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table='binh_luan';
    protected $fillable=[
        'Id',
        'Id_Sach',
        'Id_TK',
        'Noi_Dung',
        'Thoi_Gian',
        'Trang_Thai'

    ];
}
