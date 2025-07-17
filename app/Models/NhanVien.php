<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    protected $table = 'nhan_viens';
    protected $fillable = [
        'ma_nv',
        'ho_ten',
        'ngay_sinh',
        'dia_chi',
        'ngay_vao_lam',
        'luong_cb',
        'vai_tro',
        'sdt',
        'mat_khau',
        'email',
        'trang_thai',
        'ghi_chu'
    ];
    const TAM_TAT   = 0;
    const HOAT_DONG     = 1;
}
