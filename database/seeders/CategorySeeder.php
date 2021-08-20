<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Category::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $data=[
            ['title'=> 'Áo đấu','slug'=> 'ao-dau','photo'=>'/photos/1/product/a6.jpg', 'is_parent'=>1, 'parent_id'=>NULL, 'status'=>'1'],
            ['title'=> 'Áo tập','slug'=> 'ao-tap','photo'=>'/photos/1/product/201624069_516053556379519_6484856252563459194_n.jpg', 'is_parent'=>1, 'parent_id'=>NULL, 'status'=>'1'],
            ['title'=> 'Áo cổ điển','slug'=> 'ao-co-dien','photo'=>'/photos/1/product/4-chelsea-2019-20-retro-kit.jpg', 'is_parent'=>1, 'parent_id'=>NULL, 'status'=>'1'],
            ['title'=> 'Phụ kiện','slug'=> 'phu-kien','photo'=>'/photos/1/product/chelsea-2021-champions-mug_ss4_p.jpg', 'is_parent'=>1, 'parent_id'=>NULL, 'status'=>'1'],
            ['title'=> 'Áo sân nhà','slug'=> 'ao-san-nha','photo'=>NULL, 'is_parent'=>0, 'parent_id'=>1, 'status'=>'1'],
            ['title'=> 'Áo sân khách','slug'=> 'ao-san-khach','photo'=>NULL, 'is_parent'=>0, 'parent_id'=>1, 'status'=>'1'],
            ['title'=> 'Áo sân thứ 3','slug'=> 'ao-san-thu-3','photo'=>NULL, 'is_parent'=>0, 'parent_id'=>1, 'status'=>'1'],
        ];
        Category::insert($data);
    }
}
