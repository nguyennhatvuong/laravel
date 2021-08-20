<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Information;
use Illuminate\Support\Facades\DB;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Information::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $data=[
            'logo'=>'photos/1/logo/logo.svg',
            'photo'=>'photos/1/logo/logo.svg',
            'description'=>'TrueBlues Shop',
            'name'=>'TrueBlues Shop',
            'phone'=>'0896204185',
            'email'=>'nguyennhatvuong2206@gmail.com',
            'address'=>'137 Đỗ Đăng Tuyển',
            'province'=>'243,Quảng Nam',
                'district'=>'1917,Huyện Đại Lộc',
                'ward'=>'340501,Thị Trấn Ái Nghĩa',
                'region'=>2,
                'urban'=>0,
        ];
        Information::create($data);
    }
}
