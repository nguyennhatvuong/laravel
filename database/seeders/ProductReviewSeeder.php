<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductReview;
use Illuminate\Support\Facades\DB;

class ProductReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        ProductReview::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        for($i=1; $i<=200;$i++){
            $data=[ 
                'user_id'=>rand(5,35),
                'product_id'=>rand(1,32),
                'rate'=>rand(3,5),
                'review'=>vnfaker()->sentences()
            ];
            ProductReview::insert($data);
        }
       
    }
}
