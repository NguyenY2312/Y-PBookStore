<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table='sach';
    protected $fillable =[
        'Ten_Sach',
        'Nha_Xuat_Ban',
        'Tac_Gia',
        'Anh_Bia',
        'Phien_Ban',
        'Loai_Bia',
        'So_Trang',
        'SKU',
        'Gia_Tien',
        'Mo_Ta',
        'The_Loai',
        'Trang_Thai',
        'So_Luong'
    ];
    public function NhaXuatBan(){
        return $this->belongsTo('', 'Nha_Xuat_Ban', 'Id');
    }
    public function TheLoai(){
        return $this->belongsTo('App\Models\Category', 'The_Loai', 'Id');
    }
}
