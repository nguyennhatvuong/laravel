<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        PaymentMethod::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $data=[
            ['name'=>'Thanh toán khi nhận hàng (COD)','image'=>null],
            ['name'=>'Thanh toán online qua Zalo','image'=>'photos\1\logo\logo-zalopay.jpg'],
            ['name'=>'Thanh toán online qua MOMO','image'=>'photos\1\logo\logo-momo.png'],
            ['name'=>'Thanh toán online qua VNPAY','image'=>'photos\1\logo\logo-vnpay.png'],
        ];
        PaymentMethod::insert($data);
    }
}
