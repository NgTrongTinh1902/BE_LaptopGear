<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = 'khach_hangs';
protected $fillable = [
    'ma_kh', 'ho_ten', 'email', 'sdt', 'dia_chi','avatar', 'gioi_tinh', 'mat_khau',
];
        const TAM_TAT   = 0;
    const HOAT_DONG     = 1;
}
