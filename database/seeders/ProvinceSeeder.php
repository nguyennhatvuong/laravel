<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Province;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Province::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $data=[
            ['id'=>'268', 'name'=>"Hưng Yên","special"=>0,'region_id'=>1],
            ['id'=>'267', 'name'=>"Hòa Bình","special"=>0,'region_id'=>1],
            ['id'=>'266', 'name'=>"Sơn La","special"=>0,'region_id'=>1],
            ['id'=>'265', 'name'=>"Điện Biên","special"=>0,'region_id'=>1],
            ['id'=>'264', 'name'=>"Lai Châu","special"=>0,'region_id'=>1],
            ['id'=>'263', 'name'=>"Yên Bái","special"=>0,'region_id'=>1],
            ['id'=>'262', 'name'=>"Bình Định","special"=>0,'region_id'=>2],
            ['id'=>'261', 'name'=>"Ninh Thuận","special"=>0,'region_id'=>3],
            ['id'=>'260', 'name'=>"Phú Yên","special"=>0,'region_id'=>3],
            ['id'=>'259', 'name'=>"Kon Tum","special"=>0,'region_id'=>2],
            ['id'=>'258', 'name'=>"Bình Thuận","special"=>0,'region_id'=>3],
            ['id'=>'253', 'name'=>"Bạc Liêu","special"=>0,'region_id'=>3],
            ['id'=>'252', 'name'=>"Cà Mau","special"=>0,'region_id'=>3],
            ['id'=>'250', 'name'=>"Hậu Giang","special"=>0,'region_id'=>3],
            ['id'=>'249', 'name'=>"Bắc Ninh","special"=>0,'region_id'=>1],
            ['id'=>'248', 'name'=>"Bắc Giang","special"=>0,'region_id'=>1],
            ['id'=>'247', 'name'=>"Lạng Sơn","special"=>0,'region_id'=>1],
            ['id'=>'246', 'name'=>"Cao Bằng","special"=>0,'region_id'=>1],
            ['id'=>'245', 'name'=>"Bắc Kạn","special"=>0,'region_id'=>1],
            ['id'=>'244', 'name'=>"Thái Nguyên","special"=>0,'region_id'=>1],
            ['id'=>'243', 'name'=>"Quảng Nam","special"=>0,'region_id'=>2],
            ['id'=>'242', 'name'=>"Quảng Ngãi","special"=>0,'region_id'=>2],
            ['id'=>'241', 'name'=>"Đắk Nông","special"=>0,'region_id'=>2],
            ['id'=>'240', 'name'=>"Tây Ninh","special"=>0,'region_id'=>3],
            ['id'=>'239', 'name'=>"Bình Phước","special"=>0,'region_id'=>3],
            ['id'=>'238', 'name'=>"Quảng Trị","special"=>0,'region_id'=>2],
            ['id'=>'237', 'name'=>"Quảng Bình","special"=>0,'region_id'=>2],
            ['id'=>'236', 'name'=>"Hà Tĩnh","special"=>0,'region_id'=>1],
            ['id'=>'235', 'name'=>"Nghệ An","special"=>0,'region_id'=>1],
            ['id'=>'234', 'name'=>"Thanh Hóa","special"=>0,'region_id'=>1],
            ['id'=>'233', 'name'=>"Ninh Bình","special"=>0,'region_id'=>1],
            ['id'=>'232', 'name'=>"Hà Nam","special"=>0,'region_id'=>1],
            ['id'=>'231', 'name'=>"Nam Định","special"=>0,'region_id'=>1],
            ['id'=>'230', 'name'=>"Quảng Ninh","special"=>0,'region_id'=>1],
            ['id'=>'229', 'name'=>"Phú Thọ","special"=>0,'region_id'=>1],
            ['id'=>'228', 'name'=>"Tuyên Quang","special"=>0,'region_id'=>1],
            ['id'=>'227', 'name'=>"Hà Giang","special"=>0,'region_id'=>1],
            ['id'=>'226', 'name'=>"Thái Bình","special"=>0,'region_id'=>1],
            ['id'=>'225', 'name'=>"Hải Dương","special"=>0,'region_id'=>1],
            ['id'=>'224', 'name'=>"Hải Phòng","special"=>0,'region_id'=>1],
            ['id'=>'223', 'name'=>"Thừa Thiên - Huế","special"=>0,'region_id'=>2],
            ['id'=>'221', 'name'=>"Vĩnh Phúc","special"=>0,'region_id'=>3],
            ['id'=>'220', 'name'=>"Cần Thơ","special"=>0,'region_id'=>3],
            ['id'=>'219', 'name'=>"Kiên Giang","special"=>0,'region_id'=>3],
            ['id'=>'218', 'name'=>"Sóc Trăng","special"=>0,'region_id'=>3],
            ['id'=>'217', 'name'=>"An Giang","special"=>0,'region_id'=>3],
            ['id'=>'216', 'name'=>"Đồng Tháp","special"=>0,'region_id'=>3],
            ['id'=>'215', 'name'=>"Vĩnh Long","special"=>0,'region_id'=>3],
            ['id'=>'214', 'name'=>"Trà Vinh","special"=>0,'region_id'=>3],
            ['id'=>'213', 'name'=>"Bến Tre","special"=>0,'region_id'=>3],
            ['id'=>'212', 'name'=>"Tiền Giang","special"=>0,'region_id'=>3],
            ['id'=>'211', 'name'=>"Long An","special"=>0,'region_id'=>3],
            ['id'=>'210', 'name'=>"Đắk Lắk","special"=>0,'region_id'=>2],
            ['id'=>'209', 'name'=>"Lâm Đồng","special"=>0,'region_id'=>3],
            ['id'=>'208', 'name'=>"Khánh Hòa","special"=>0,'region_id'=>2],
            ['id'=>'207', 'name'=>"Gia Lai","special"=>0,'region_id'=>2],
            ['id'=>'206', 'name'=>"Bà Rịa - Vũng Tàu","special"=>0,'region_id'=>3],
            ['id'=>'205', 'name'=>"Bình Dương","special"=>0,'region_id'=>3],
            ['id'=>'204', 'name'=>"Đồng Nai","special"=>0,'region_id'=>3],
            ['id'=>'203', 'name'=>"Đà Nẵng","special"=>1,'region_id'=>2],
            ['id'=>'202', 'name'=>"Hồ Chí Minh","special"=>1,'region_id'=>3],
            ['id'=>'201', 'name'=>"Hà Nội","special"=>1,'region_id'=>1],
            ['id'=>'269', 'name'=>"Lào Cai","special"=>0,'region_id'=>1],
        ];
        
        Province::insert($data);
    }
}
