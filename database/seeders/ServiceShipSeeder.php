<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ServiceShip;
class ServiceShipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        ServiceShip::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $data=[
            //nội tỉnh đặc biệt, Nội tỉnh, Nội vùng đặc biệt Nội vùng Liên vùng đặc biệt, Liên vùng, Liên vùng tỉnh
            ['route_ship_id'=>'1','type'=>'Giao hàng chuẩn','weight'=>200,'urban'=>18000,'suburban'=>25000,'more_weight'=>0,'time'=>'6h'],
            ['route_ship_id'=>'3','type'=>'Giao hàng chuẩn','weight'=>200,'urban'=>25000,'suburban'=>35000,'more_weight'=>0,'time'=>'24h'],
            ['route_ship_id'=>'5','type'=>'Giao hàng chuẩn','weight'=>200,'urban'=>25000,'suburban'=>35000,'more_weight'=>0,'time'=>'3-4 ngày'],
            ['route_ship_id'=>'6','type'=>'Giao hàng chuẩn','weight'=>200,'urban'=>27000,'suburban'=>37000,'more_weight'=>0,'time'=>'3-5 ngày'],
            ['route_ship_id'=>'7','type'=>'Giao hàng chuẩn','weight'=>200,'urban'=>27000,'suburban'=>37000,'more_weight'=>0,'time'=>'3-5 ngày'],
            ['route_ship_id'=>'1','type'=>'Giao hàng chuẩn','weight'=>3000,'urban'=>22000,'suburban'=>30000,'more_weight'=>2500,'time'=>'6h'],
            ['route_ship_id'=>'2','type'=>'Giao hàng chuẩn','weight'=>3000,'urban'=>17000,'suburban'=>30000,'more_weight'=>2500,'time'=>'6h'],
            ['route_ship_id'=>'3','type'=>'Giao hàng chuẩn','weight'=>500,'urban'=>30000,'suburban'=>35000,'more_weight'=>2500,'time'=>'24h'],
            ['route_ship_id'=>'4','type'=>'Giao hàng chuẩn','weight'=>500,'urban'=>30000,'suburban'=>35000,'more_weight'=>2500,'time'=>'24-48h'],
            ['route_ship_id'=>'5','type'=>'Giao hàng chuẩn','weight'=>500,'urban'=>30000,'suburban'=>40000,'more_weight'=>5000,'time'=>'3-4 ngày'],
            ['route_ship_id'=>'5','type'=>'Giao hàng nhanh','weight'=>500,'urban'=>33000,'suburban'=>44000,'more_weight'=>10000,'time'=>'24h'],
            ['route_ship_id'=>'6','type'=>'Giao hàng chuẩn','weight'=>500,'urban'=>32000,'suburban'=>40000,'more_weight'=>5000,'time'=>'3-5 ngày'],
            ['route_ship_id'=>'6','type'=>'Giao hàng nhanh','weight'=>500,'urban'=>35000,'suburban'=>50000,'more_weight'=>10000,'time'=>'48h'],
            ['route_ship_id'=>'7','type'=>'Giao hàng chuẩn','weight'=>500,'urban'=>32000,'suburban'=>40000,'more_weight'=>5000,'time'=>'3-5 ngày'],
            ['route_ship_id'=>'7','type'=>'Giao hàng nhanh','weight'=>500,'urban'=>35000,'suburban'=>50000,'more_weight'=>10000,'time'=>'48h'],
        ];
        ServiceShip::insert($data);
    }
}
