<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PriceRange;
use Illuminate\Support\Facades\DB;

class PriceRangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        PriceRange::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $data=[
            ['title'=>'Dưới 100k','from'=>0, 'to'=>100000],
            ['title'=>'Từ 100k - 200k','from'=>100000, 'to'=>200000],
            ['title'=>'Từ 200k - 500k','from'=>200000, 'to'=>500000],
            ['title'=>'Từ 500k - 1 triệu','from'=>500000, 'to'=>1000000],
            ['title'=>'Từ 1 - 2 triệu','from'=>1000000, 'to'=>2000000],
        ];
        PriceRange::insert($data);
    }
}
