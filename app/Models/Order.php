<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table='don_hang';
    protected $fillable=[
        'Id',
        'Id_KH',
        'Id_NV',
        'Ngay_Lap',
        'Dia_Chi_Giao_Hang',
        'Tong_Tien',
        'Trang_Thai'


    ];
}
