<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PriceListFormat;
use Illuminate\Support\Facades\DB;

class PriceListFormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        PriceListFormat::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $data=[
            ['price_list_id'=> 2,'parent_price'=> 'now_price','calculation'=> 'sub','value'=> 10,'type'=> 'person']
        ];
        PriceListFormat::insert($data);
    }
}
