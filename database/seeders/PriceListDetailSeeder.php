<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PriceListDetail;
use Illuminate\Support\Facades\DB;

class PriceListDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        PriceListDetail::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $data=[
            ['price_list_id'=>1,'product_id'=>1,'cost_price'=>200000,'on_price'=>250000,'off_price'=>240000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>2,'cost_price'=>300000,'on_price'=>350000,'off_price'=>340000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>3,'cost_price'=>400000,'on_price'=>450000,'off_price'=>440000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>4,'cost_price'=>500000,'on_price'=>550000,'off_price'=>540000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>5,'cost_price'=>200000,'on_price'=>250000,'off_price'=>240000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>6,'cost_price'=>300000,'on_price'=>350000,'off_price'=>340000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>7,'cost_price'=>400000,'on_price'=>450000,'off_price'=>440000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>8,'cost_price'=>500000,'on_price'=>550000,'off_price'=>540000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>9,'cost_price'=>200000,'on_price'=>250000,'off_price'=>240000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>10,'cost_price'=>300000,'on_price'=>350000,'off_price'=>340000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>11,'cost_price'=>400000,'on_price'=>450000,'off_price'=>440000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>12,'cost_price'=>500000,'on_price'=>550000,'off_price'=>540000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>13,'cost_price'=>200000,'on_price'=>250000,'off_price'=>240000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>14,'cost_price'=>300000,'on_price'=>350000,'off_price'=>340000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>15,'cost_price'=>400000,'on_price'=>450000,'off_price'=>440000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>16,'cost_price'=>500000,'on_price'=>550000,'off_price'=>540000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>17,'cost_price'=>200000,'on_price'=>250000,'off_price'=>240000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>18,'cost_price'=>300000,'on_price'=>350000,'off_price'=>340000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>19,'cost_price'=>400000,'on_price'=>450000,'off_price'=>440000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>20,'cost_price'=>500000,'on_price'=>550000,'off_price'=>540000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>21,'cost_price'=>200000,'on_price'=>250000,'off_price'=>240000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>22,'cost_price'=>300000,'on_price'=>350000,'off_price'=>340000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>23,'cost_price'=>400000,'on_price'=>450000,'off_price'=>440000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>24,'cost_price'=>500000,'on_price'=>550000,'off_price'=>540000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>25,'cost_price'=>200000,'on_price'=>250000,'off_price'=>240000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>26,'cost_price'=>300000,'on_price'=>350000,'off_price'=>340000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>27,'cost_price'=>400000,'on_price'=>450000,'off_price'=>440000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>28,'cost_price'=>500000,'on_price'=>550000,'off_price'=>540000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>29,'cost_price'=>200000,'on_price'=>250000,'off_price'=>240000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>30,'cost_price'=>300000,'on_price'=>350000,'off_price'=>340000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>31,'cost_price'=>400000,'on_price'=>450000,'off_price'=>440000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>1,'product_id'=>32,'cost_price'=>500000,'on_price'=>550000,'off_price'=>540000,'promotion_on_price'=>null,'promotion_off_price'=>null],
            ['price_list_id'=>2,'product_id'=> 1,'cost_price'=> 200000,'on_price'=> 250000,'off_price'=> 240000,'promotion_on_price'=> 225000,'promotion_off_price'=> 216000],
            ['price_list_id'=>2,'product_id'=> 2,'cost_price'=> 300000,'on_price'=> 350000,'off_price'=> 340000,'promotion_on_price'=> 315000,'promotion_off_price'=> 306000],
            ['price_list_id'=>2,'product_id'=> 3,'cost_price'=> 400000,'on_price'=> 450000,'off_price'=> 440000,'promotion_on_price'=> 405000,'promotion_off_price'=> 396000],
            ['price_list_id'=>2,'product_id'=> 4,'cost_price'=> 500000,'on_price'=> 550000,'off_price'=> 540000,'promotion_on_price'=> 495000,'promotion_off_price'=> 486000],
            ['price_list_id'=>2,'product_id'=> 5,'cost_price'=> 200000,'on_price'=> 250000,'off_price'=> 240000,'promotion_on_price'=> 225000,'promotion_off_price'=> 216000],
            ['price_list_id'=>2,'product_id'=> 6,'cost_price'=> 300000,'on_price'=> 350000,'off_price'=> 340000,'promotion_on_price'=> 315000,'promotion_off_price'=> 306000],
            ['price_list_id'=>2,'product_id'=> 7,'cost_price'=> 400000,'on_price'=> 450000,'off_price'=> 440000,'promotion_on_price'=> 405000,'promotion_off_price'=> 396000]
        ];
        PriceListDetail::insert($data);
        
        
    }
}
