<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Size;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Size::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $array=array('S','M','L','XL','XXL');
        foreach($array as $val){
            $data=[
                'name'=>$val
            ];
            Size::insert($data);
        }
        
        
    }
}
