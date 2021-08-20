<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PriceList;
use Illuminate\Support\Facades\DB;

class PriceListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        PriceList::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $data=[
            ['title'=>'Bảng giá niêm yết','default'=>1,'status'=>0,'apply'=>0,'end_date'=>null,'start_date'=>null],
            ['title'=>'Bảng giá tháng 7','default'=>0,'status'=>1,'apply'=>1,'end_date'=>'2021-07-31 12:00:00','start_date'=>'2021-07-09 02:43:00']
        ];
        PriceList::insert($data);
    }
}
