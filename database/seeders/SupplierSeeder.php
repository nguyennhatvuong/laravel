<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;
use Buihuycuong\Vnfaker\VNFaker;
use Illuminate\Support\Facades\DB;
class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Supplier::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $arr=[
            ['i'=>'1','total'=> 23000000,'debt'=>  13000000,'payment'=>  10000000],
            ['i'=>'2','total'=>  21000000,'debt'=>  21000000,'payment'=> 0],
            ['i'=>'3','total'=>  36000000,'debt'=>  20000000,'payment'=> 16000000],
            ['i'=>'4','total'=>  36000000,'debt'=>  36000000,'payment'=> 0],
            ['i'=>'5','total'=>  22100000,'debt'=>  22100000,'payment'=> 0],
        ];
        for($i = 0; $i <count($arr); $i++) {
            $data=[
                'code'=>'NCC00000'.$arr[$i]['i'],
                'name' => vnfaker()->company(),
                'phone'=>vnfaker()->mobilephone($numbers = 10),
                'address'=>vnfaker()->city($array = false),
                'total'=>$arr[$i]['total'],
                'debt'=>$arr[$i]['debt'],
                'payment'=>$arr[$i]['payment'],
            ];
            Supplier::create($data);
        }
        // $data=[
        //     ['code'=>'NCC00001','name' =>'Công ty Cổ phần Đầu tư và Phát triển SACOM','phone'=> '0353000064','address'=> 'Bình Phước','total'=> 23000000,'debt'=>  13000000,'payment'=>  10000000,'status'=>1],
        //     ['code'=>'NCC00002','name' =>'Công ty Cổ phần Nhựa Thiếu niên Tiền Phong','phone'=> '0795561522','address'=> 'Bắc Kạn','total'=>  21000000,'debt'=>  21000000,'payment'=> 0,'status'=>1],
        //     ['code'=>'NCC00003','name' =>'Công ty TNHH Phát triển công nghệ Khí sinh học Môi trường xanh','phone'=> '0915526602','address'=> 'Khánh Hòa','total'=>  36000000,'debt'=>  20000000,'payment'=> 16000000,'status'=>1],
        //     ['code'=>'NCC00004','name' =>'Công ty ChangShin Việt Nam TNHH','phone'=> '0765223666','address'=> 'Bắc Kạn','total'=>  36000000,'debt'=>  36000000,'payment'=> 0,'status'=>1],
        //     ['code'=>'NCC00005','name' =>'Công ty Cổ phần FPT','phone'=> '0895520433','address'=> 'Lạng Sơn','total'=>  22100000,'debt'=>  22100000,'payment'=> 0,'status'=>1]
        // ];    
        //         Supplier::create($data);
    }
}
