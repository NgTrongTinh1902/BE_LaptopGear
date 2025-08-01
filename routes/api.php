<?php

use App\Http\Controllers\ChiTietDonHangController;
use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\ChucNangController;
use App\Http\Controllers\ClientHomeController;
use App\Http\Controllers\DanhGiaController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\DonDatHangController;
use App\Http\Controllers\DonHangController;
use App\Http\Controllers\GioHangController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\MonAnController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\PhanQuyenController;
use App\Http\Controllers\QuanAnController;
use App\Http\Controllers\QuanHuyenController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\ShipperController;
use App\Http\Controllers\ThanhToanController;
use App\Http\Controllers\ThongKeController;
use App\Http\Controllers\TinhThanhController;
use App\Http\Controllers\VoucherController;
use App\Models\ChiTietDonHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// =========================================================================================================
// ===========================================    ADMIN   ===============================================
// =========================================================================================================

//==== Đăng Nhập ======
Route::post('/admin/dang-nhap', [NhanVienController::class, 'dangNhap']);

//==== Danh mục ======
Route::get('/admin/danh-muc/get-data', [DanhMucController::class, 'getData']);
Route::post('/admin/danh-muc/add-data', [DanhMucController::class, 'addData']);
Route::post('/admin/danh-muc/update', [DanhMucController::class, 'update']);
Route::post('/admin/danh-muc/delete', [DanhMucController::class, 'destroy']);
Route::post('/admin/danh-muc/change-status', [DanhMucController::class, 'changeStatus']);

//==== Sản Phẩm ======
Route::get('/admin/san-pham/get-data', [SanPhamController::class, 'getData']);
Route::post('/admin/san-pham/add-data', [SanPhamController::class, 'addData']);
Route::post('/admin/san-pham/update', [SanPhamController::class, 'update']);
Route::post('/admin/san-pham/delete', [SanPhamController::class, 'destroy']);
Route::post('/admin/san-pham/change-status', [SanPhamController::class, 'changeStatus']);

//==== Đơn Hàng ======
Route::get('/admin/don-hang/get-data', [HoaDonController::class, 'getData']);
Route::post('/admin/don-hang/delete', [HoaDonController::class, 'destroy']);
Route::post('/admin/don-hang/change-status', [HoaDonController::class, 'changeStatus']);

//==== Nhân Viên ======
Route::get('/admin/nhan-vien/get-data', [NhanVienController::class, 'getData']);
Route::post('/admin/nhan-vien/add-data', [NhanVienController::class, 'addData']);
Route::post('/admin/nhan-vien/update', [NhanVienController::class, 'update']);
Route::post('/admin/nhan-vien/delete', [NhanVienController::class, 'destroy']);
Route::post('/admin/nhan-vien/change-status', [NhanVienController::class, 'changeStatus']);

//==== Khách Hàng ======
Route::get('/admin/khach-hang/get-data', [KhachHangController::class, 'getData']);
// Route::post('/admin/khach-hang/add-data', [KhachHangController::class, 'addData']);
Route::post('/admin/khach-hang/update', [KhachHangController::class, 'update']);
Route::post('/admin/khach-hang/delete', [KhachHangController::class, 'destroy']);
// Route::post('/admin/khach-hang/change-status', [KhachHangController::class, 'changeStatus']);

//==== Đánh Gía ======
Route::get('/admin/danh-gia/get-data', [DanhGiaController::class, 'getData']);
Route::post('/admin/danh-gia/delete', [DanhGiaController::class, 'destroy']);
Route::post('/admin/danh-gia/change-status', [DanhGiaController::class, 'changeStatus']);

//==== Thống Kê ======
Route::post('/admin/thong-ke/duyet-khach-hang', [ThongKeController::class, 'duyetKhachHang']);
Route::post('/admin/thong-ke/duyet-hoa-don', [ThongKeController::class, 'duyetHoaDon']);


// // =========================================================================================================
// // ===========================================    KHÁCH HÀNG    ===============================================
// // =========================================================================================================

//==== Trang Chủ ======
Route::get('/khach-hang/danh-muc/get-data', [DanhMucController::class, 'getData']);

//==== Đăng Nhập ======
Route::post('/khach-hang/dang-nhap', [KhachHangController::class, 'dangNhap']);
Route::post('/khach-hang/dang-ky', [KhachHangController::class, 'dangKy']);
Route::get('/khach-hang/dang-xuat', [KhachHangController::class, 'DangXuat']);
Route::get('/khach-hang/dang-xuat-tat-ca', [KhachHangController::class, 'DangXuatAll']);
// Route::post('/khach-hang/dang-ky/change-status', [KhachHangController::class, 'changeStatus']);

//==== Profile ======
Route::post('/khach-hang/profile/update', [KhachHangController::class, 'updateKhachHang']);
Route::post('/admin/profile/update', [NhanVienController::class, 'updateAdmin']);


Route::get('/client/Laptop/get-data', [SanPhamController::class, 'getDataClient']);
Route::get('/client/Laptop/get-data-trang-chu', [SanPhamController::class, 'getDataTrangChu']);
Route::get('/client/Laptop/san-pham/{id_san_pham}', [SanPhamController::class, 'getSanPhamById']);


//==== Giỏ Hàng ======
Route::get('/khach-hang/gio-hang/get-data', [GioHangController::class, 'getData']);
Route::post('/khach-hang/chi-tiet-san-pham/add-data', [GioHangController::class, 'addData']);
Route::post('/khach-hang/gio-hang/delete', [GioHangController::class, 'delData']);
Route::post('/khach-hang/gio-hang/update', [GioHangController::class, 'update']);
Route::post('/khach-hang/gio-hang/dat-hang', [ThanhToanController::class, 'store']);


//==== Thanh Toán ======
Route::get('/khach-hang/thanh-toan/get-data', [ThanhToanController::class, 'getData']);
Route::post('/khach-hang/gio-hang/remove', [GioHangController::class, 'remove']);


//==== Hóa Đơn ======
Route::post('/khach-hang/thanh-toan/dat-hang', [HoaDonController::class, 'datHang']);
Route::get('/khach-hang/hoa-don/get-data', [HoaDonController::class, 'getData']);



