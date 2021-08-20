<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // App\Models\Page::truncate();
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $data=[
            ['name'=>'Trang chủ','slug'=>'','view'=>'frontend.index'],
            ['name'=>'Đăng nhập','slug'=>'dang-nhap','view'=>'frontend.login'],
            ['name'=>'Sản phẩm','slug'=>'san-pham','view'=>'frontend.product-grid'],
            // ['name'=>'Đối tác giao hàng','slug'=>'doi-tac-giao-hang'],
            // ['name'=>'Khác','slug'=>'khác'],
        ];
        App\Models\Page::insert($data);

    }
}
