<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Region::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $data=[
            ['name'=>'Khu vực 1','description'=>'Từ Hà Tĩnh trở ra các tỉnh miền Bắc'],
            ['name'=>'Khu vực 2','description'=>'Từ Quảng Ngãi ra tới Quảng Bình'],
            ['name'=>'Khu vực 3','description'=>' Từ Bình Định trở vào các tỉnh miền Nam'],
        ];
        Region::insert($data);
    }
}
