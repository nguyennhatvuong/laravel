<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderStatus;
use Illuminate\Support\Facades\DB;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        OrderStatus::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $data=[
            ['name'=>'Chờ bàn giao'],
            ['name'=>'Đã bàn giao - Đang giao'],
            ['name'=>'Đã bàn giao - Đang hoàn hàng'],
            ['name'=>'Chờ xác nhận giao lại'],
            ['name'=>'Hoàn tất'],
            ['name'=>'Đơn hủy'],
            ['name'=>'Hàng thất lạc - hư hỏng'],
        ];
        OrderStatus::insert($data);
    }
}
