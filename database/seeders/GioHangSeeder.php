<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GioHangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('gio_hangs')->delete();
        DB::table('gio_hangs')->truncate();

        DB::table('gio_hangs')->insert([
 [
        'ma_sp' => 'SP05',
        'ten_sp' => 'Laptop Dell XPS 13 Plus 9320 (Core i7-1360P | 32GB | 1TB SSD | Intel Iris Xe | 13.4inch UHD+ | Win 11 | Xám)',
        'don_gia' => 30000000,
        'gia_cu' => 25000000,
        'tinh_trang' => 0,

        'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_7__2_224.png',
        'ma_dm' => 'DM01',
        'mo_ta' => 'CPU: Intel® Core™ i7-1360P (1.2GHz up to 5.0GHz, 18MB Cache). Ram: 32GB LPDDR5 6000MHz. Ổ cứng: 1TB M.2 PCIe 4.0 NVMe SSD. VGA: Intel® Iris Xe Graphics. Display: 13.4inch UHD+ (3840 x 2400), InfinityEdge Touch. Pin: 55Wh, 3Cell. Weight: 1.2 kg. Color: Platinum (Xám). OS: Windows 11 Home bản quyền. NPP: Dell Việt Nam. Xuất xứ: Trung Quốc.',
        'so_luong' => 1,
    ],
    [
        'ma_sp' => 'SP01',
        'ten_sp' => 'Laptop HP Pavilion 15-eg3091TU (Core i5-1335U | 16GB | 512GB SSD | Intel UHD | 15.6inch FHD | Win 11 | Bạc)',
        'don_gia' => 20000000,
        'gia_cu' => 18000000,
         'tinh_trang' => 0,
        'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_6_6_2.png',
        'ma_dm' => 'DM01',
        'mo_ta' => 'CPU: Intel® Core™ i5-1335U (1.3GHz up to 4.6GHz, 12MB Cache). Ram: 16GB DDR4 3200MHz. Ổ cứng: 512GB M.2 PCIe 3.0 SSD. VGA: Intel® UHD Graphics. Display: 15.6inch FHD (1920 x 1080), Anti-glare. Pin: 41Wh, 3Cell. Weight: 1.75 kg. Color: Natural Silver (Bạc). OS: Windows 11 Home bản quyền. NPP: HP Việt Nam. Xuất xứ: Trung Quốc.',
        'so_luong' => 2,
    ],
    [
        'ma_sp' =>'SP02',
        'ten_sp' => 'MacBook Pro 16 M3 Pro 2023 (M3 Pro 11CPU/14GPU | 18GB | 512GB SSD | 16.2inch Liquid Retina XDR | MacOS | Bạc)',
        'don_gia' => 25000000,
        'gia_cu' => 23000000,
         'tinh_trang' => 0,
        'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/d/i/display_14_inch__f298e9zwj02m_large.jpg',
        'ma_dm' => 'DM01',
        'mo_ta' => 'CPU: Apple M3 Pro 11-core CPU. Ram: 18GB Unified Memory. Ổ cứng: 512GB SSD. VGA: Apple 14-core GPU. Display: 16.2inch Liquid Retina XDR (3456 x 2234). Pin: 100Wh. Weight: 2.14 kg. Color: Silver (Bạc). OS: macOS Sonoma. NPP: Apple Việt Nam. Xuất xứ: Trung Quốc.',
        'so_luong' => 1,
    ],
    [
        'ma_sp' => 'SP03',
        'ten_sp' => 'Laptop Asus Zenbook 14 OLED UX3405MA-PH94W (Ultra 7-155H | 32GB | 1TB SSD | Intel Arc | 14.0inch 3K OLED | Win 11 | Xanh)',
        'don_gia' => 18000000,
        'gia_cu' => 16000000,
         'tinh_trang' => 0,
        'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_15_32.png',
        'ma_dm' => 'DM01',
        'mo_ta' => 'CPU: Intel® Core™ Ultra 7 155H (1.4GHz up to 4.8GHz, 24MB Cache). Ram: 32GB LPDDR5X 7467MHz. Ổ cứng: 1TB M.2 PCIe 4.0 NVMe SSD. VGA: Intel® Arc™ Graphics. Display: 14.0inch 3K OLED (2880 x 1800), 120Hz. Pin: 75Wh, 4Cell. Weight: 1.2 kg. Color: Ponder Blue (Xanh). OS: Windows 11 Home bản quyền. NPP: ASUS Việt Nam. Xuất xứ: Trung Quốc.',
        'so_luong' => 1,
    ],
    [
        'ma_sp' => 'SP04',
        'ten_sp' => 'Laptop Lenovo ThinkPad X1 Carbon Gen 11 (Core i7-1355U | 16GB | 1TB SSD | Intel Iris Xe | 14.0inch 2.8K OLED | Win 11 | Đen)',
        'don_gia' => 35000000,
        'gia_cu' => 32000000,
         'tinh_trang' => 0,
        'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_5__9_255_1_1.png',
        'ma_dm' => 'DM01',
        'mo_ta' => 'CPU: Intel® Core™ i7-1355U (1.7GHz up to 5.0GHz, 12MB Cache). Ram: 16GB LPDDR5 6400MHz. Ổ cứng: 1TB PCIe 4.0 NVMe SSD. VGA: Intel® Iris Xe Graphics. Display: 14.0inch 2.8K OLED (2880 x 1800), Anti-reflection, 60Hz. Pin: 57Wh, 3Cell. Weight: 1.12 kg. Color: Black (Đen). OS: Windows 11 Home bản quyền. NPP: Lenovo Việt Nam. Xuất xứ: Trung Quốc.',
        'so_luong' => 1,
    ],
        ]);
    }
}
