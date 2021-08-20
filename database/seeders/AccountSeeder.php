<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Account;
class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Account::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $data=[
            ['name'=>'Tiền mặt'],
            ['name'=>'VNPAY-QR'],
            ['name'=>'VNPAY-POS'],
            ['name'=>'ZALO-PAY'],
        ];
        Account::insert($data);
    }
}
