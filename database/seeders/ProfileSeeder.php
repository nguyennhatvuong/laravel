<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;

use Buihuycuong\Vnfaker\VNFaker;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Profile::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        // $faker = Faker\Factory::create();
        
    for($i = 1; $i <=6; $i++) {
            Profile::create([
                'user_id' => $i,
                'name'=>vnfaker()->fullname($word = 3),
                'phone'=>vnfaker()->fixedLineNumber($numbers = 10),
                'province'=>'203,Đà Nẵng',
                'address'=>'356/87 Hoàng Diệu',
                'district'=>'1527,Quận Thanh Khê',
                'ward'=>'40202,Phường Chính Gián',
                'default'=>1,
                'region'=>2,
                'urban'=>1,
                'type'=>'Nhà riêng'
                ]);    
    }
    // for($i = 62; $i <=80; $i++) {
    //         Profile::create([
    //             'user_id' => $i,
    //             'name'=>vnfaker()->fullname($word = 3),
    //             'phone'=>vnfaker()->fixedLineNumber($numbers = 10),
    //             'province'=>'201,Quảng Nam',
    //             'address'=>'137 Đỗ Đăng Tuyển',
    //             'district'=>'1482,Đại Lộc',
    //             'ward'=>'11010,Ái Nghĩa',
    //             'default'=>0,
    //             'region'=>2,
    //             'urban'=>0
    //             ]);    
    //         Profile::create([
    //             'user_id' => $i,
    //             'name'=>vnfaker()->fullname($word = 3),
    //             'phone'=>vnfaker()->fixedLineNumber($numbers = 10),
    //             'province'=>'201,Quảng Nam',
    //             'address'=>'137 Đỗ Đăng Tuyển',
    //             'district'=>'1482,Đại Lộc',
    //             'ward'=>'11010,Ái Nghĩa',
    //             'default'=>0,
    //             'region'=>2,
    //             'urban'=>0
    //             ]);    
    // }


    }
}
