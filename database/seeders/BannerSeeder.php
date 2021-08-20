<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Buihuycuong\Vnfaker\VNFaker;
use App\Models\Banner;
class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Banner::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $data=[
            ['title'=> 'Bản lĩnh đội phó đương kim vô địch Champion League',
            'photo'=> '/photos/1/banner/Jorginho-celebration-Italy-vs-Sp.jpg',
            ],
            ['title'=> 'Giấc mơ chung kết Euro',
            'photo'=> '/photos/1/banner/Mount-celebrations-England-vs-De.jpg',
            ],
            ['title'=> 'Đương kim vô địch Champion League',
            'photo'=> '/photos/1/banner/c1.jpg',
            ],
            
        ];
        Banner::insert($data);
    }
}
