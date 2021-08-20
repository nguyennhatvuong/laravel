<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RouteShip;
class RouteShipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        RouteShip::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $data=[
            ['name'=>'Nội tỉnh đặc biệt','description'=>'Hà Nội - Hà Nội,Đà Nẵng - Đà Nẵng,Tp Hồ Chí Minh - Tp Hồ Chí Minh','checkRegion'=>1,'checkProvince'=>1,'checkSpecial'=>2],
            ['name'=>'Nội tỉnh','description'=>'Tỉnh X - Tỉnh X','checkRegion'=>1,'checkProvince'=>1,'checkSpecial'=>0],
            ['name'=>'Nội vùng đặc biệt','description'=>'Hà Nội - Vùng 1,Đà Nẵng - Vùng 2,Tp Hồ Chí Minh - Vùng 3','checkRegion'=>1,'checkProvince'=>0,'checkSpecial'=>1],
            ['name'=>'Nội vùng','description'=>'Vùng X - Vùng X','checkRegion'=>1,'checkProvince'=>0,'checkSpecial'=>0],
            ['name'=>'Liên vùng đặc biệt','description'=>'Hà Nội - Đà Nẵng - Tp Hồ Chí Minh','checkRegion'=>0,'checkProvince'=>0,'checkSpecial'=>2],
            ['name'=>'Liên vùng','description'=>'Hà Nội - Vùng 2/Vùng 3,Đà Nẵng - Vùng 1/Vùng 3,Tp Hồ Chí Minh - Vùng 1/Vùng 2','checkRegion'=>0,'checkProvince'=>0,'checkSpecial'=>1],
            ['name'=>'Liên vùng tỉnh','description'=>'Vùng 3 - Vùng 1/Vùng 2,Vùng 2 - Vùng 1/Vùng 3,Vùng 1 - Vùng 2/Vùng 3','checkRegion'=>0,'checkProvince'=>0,'checkSpecial'=>0],
        ];
        RouteShip::insert($data);
    }
}
