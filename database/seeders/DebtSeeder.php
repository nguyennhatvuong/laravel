<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Debt;
use Illuminate\Support\Facades\DB;

class DebtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Debt::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        // $arr=[
        //     ['i'=>'1','document_date'=> '2021-07-01 02:30:00','debt'=>  13000000,'payment'=>  10000000],
        //     ['i'=>'2','document_date'=> '2021-07-06 02:32:00 ' ,'debt'=>  20000000,'payment'=> 0],
        //     ['i'=>'3','document_date'=>  '2021-07-09 02:33:00 ','debt'=>  36000000,'payment'=> 16000000],
        //     ['i'=>'4','document_date'=> '2021-07-08 02:34:00 ' ,'debt'=>  21000000,'payment'=> 0],
        //     ['i'=>'5','document_date'=> '2021-07-09 02:35:00 ' ,'debt'=>  22100000,'payment'=> 0],
        // ];
        // for($i = 0; $i <count($arr); $i++) {
        //     $data=[
        //         'code'=>'NCC00000'.$arr[$i]['i'],
        //         'name' => vnfaker()->company(),
        //         'phone'=>vnfaker()->mobilephone($numbers = 10),
        //         'address'=>vnfaker()->city($array = false),
        //         'total'=>$arr[$i]['total'],
        //         'debt'=>$arr[$i]['debt'],
        //         'payment'=>$arr[$i]['payment'],
        //     ];
        //     Supplier::create($data);
        // }
        
        // $data=[
        //     ( 2, 'NCC00001', 'CNPC', 'PN000001', '2021-07-01 02:30:00 ', 13000000, NULL, NULL, 1, NULL, '2021-07-09 07:31:44', '2021-07-09 07:31:44'),
        //     ( 2, 'NCC00003', 'CNPC', 'PN000002', '2021-07-06 02:32:00 ', 20000000, NULL, NULL, 1, NULL, '2021-07-09 07:33:02', '2021-07-09 07:33:02'),
        //     ( 2, 'NCC00004', 'CNPC', 'PN000003', '2021-07-09 02:33:00 ', 36000000, NULL, NULL, 1, NULL, '2021-07-09 07:33:56', '2021-07-09 07:33:56'),
        //     ( 2, 'NCC00002', 'CNPC', 'PN000004', '2021-07-08 02:34:00 ', 21000000, NULL, NULL, 1, NULL, '2021-07-09 07:35:00', '2021-07-09 07:35:00'),
        //     ( 2, 'NCC00005', 'CNPC', 'PN000005', '2021-07-09 02:35:00 ', 22100000, NULL, NULL, 1, NULL, '2021-07-09 07:35:54', '2021-07-09 07:35:54')
        // ]
        // Debt::insert($data);
     

    }
}
