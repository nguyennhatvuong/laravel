<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Color;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Color::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $array=array('#001489','#282A27','#BBD5E0','#45CD69','#9FA09B','#fff','#386AAF','#ECCC5F','#C4202B');
        foreach($array as $val){
            $data=[
                'name'=>$val
            ];
            Color::insert($data);
        }
    }
}
