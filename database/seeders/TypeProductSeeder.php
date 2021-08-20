<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeProduct;
use Illuminate\Support\Facades\DB;

class TypeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        TypeProduct::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        TypeProduct::insert([
            ['title'=>'Nam'],
            ['title'=>'Nữ'],
            ['title'=>'Trẻ em']
        ]);
    }
}
