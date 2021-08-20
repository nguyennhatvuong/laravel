<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slug;
use Illuminate\Support\Facades\DB;

class SlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Slug::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $products=App\Models\Product::get();
        $categories=App\Models\Category::get();
        $pages=App\Models\Page::get();
        foreach($products as $item){
            $slug=new Slug();
            $slug->slug=$item->slug;
            $slug->reference_id=$item->id;
            $slug->reference_type='App\Models\Product';
            $slug->save();
        }
        foreach($categories as $item){
            $slug=new Slug();
            $slug->slug=$item->slug;
            $slug->reference_id=$item->id;
            $slug->reference_type='App\Models\Category';
            $slug->save();
        }
        foreach($pages as $item){
            $slug=new Slug();
            $slug->slug=$item->slug;
            $slug->reference_id=$item->id;
            $slug->reference_type='App\Models\Page';
            $slug->save();
        }
    }
}
