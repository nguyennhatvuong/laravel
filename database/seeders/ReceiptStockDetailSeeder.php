<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReceiptStockDetail;
use Illuminate\Support\Facades\DB;

class ReceiptStockDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        ReceiptStockDetail::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $data=[
            ['receipt_id'=> 1,'product_id'=> 1,'cost_price'=> 200000,'quantity'=> 10,'amount'=> 2000000, 'note'=>NULL],
            ['receipt_id'=> 1,'product_id'=> 2,'cost_price'=> 300000,'quantity'=> 10,'amount'=> 3000000, 'note'=>NULL],
            ['receipt_id'=> 1,'product_id'=> 3,'cost_price'=> 400000,'quantity'=> 10,'amount'=> 4000000, 'note'=>NULL],
            ['receipt_id'=> 1,'product_id'=> 4,'cost_price'=> 500000,'quantity'=> 10,'amount'=> 5000000, 'note'=>NULL],
            ['receipt_id'=> 1,'product_id'=> 5,'cost_price'=> 200000,'quantity'=> 10,'amount'=> 2000000, 'note'=>NULL],
            ['receipt_id'=> 1,'product_id'=> 6,'cost_price'=> 300000,'quantity'=> 10,'amount'=> 3000000, 'note'=>NULL],
            ['receipt_id'=> 1,'product_id'=> 7,'cost_price'=> 400000,'quantity'=> 10,'amount'=> 4000000, 'note'=>NULL],
            ['receipt_id'=> 2,'product_id'=> 8,'cost_price'=> 500000,'quantity'=> 15,'amount'=> 7500000, 'note'=>NULL],
            ['receipt_id'=> 2,'product_id'=> 9,'cost_price'=> 200000,'quantity'=> 15,'amount'=> 3000000, 'note'=>NULL],
            ['receipt_id'=> 2,'product_id'=> 10,'cost_price'=> 300000,'quantity'=> 15,'amount'=> 4500000, 'note'=>NULL],
            ['receipt_id'=> 2,'product_id'=> 11,'cost_price'=> 400000,'quantity'=> 15,'amount'=> 6000000, 'note'=>NULL],
            ['receipt_id'=> 2,'product_id'=> 12,'cost_price'=> 500000,'quantity'=> 15,'amount'=> 7500000, 'note'=>NULL],
            ['receipt_id'=> 2,'product_id'=> 13,'cost_price'=> 200000,'quantity'=> 15,'amount'=> 3000000, 'note'=>NULL],
            ['receipt_id'=> 2,'product_id'=> 14,'cost_price'=> 300000,'quantity'=> 15,'amount'=> 4500000, 'note'=>NULL],
            ['receipt_id'=> 3,'product_id'=> 15,'cost_price'=> 400000,'quantity'=> 20,'amount'=> 8000000, 'note'=>NULL],
            ['receipt_id'=> 3,'product_id'=> 16,'cost_price'=> 500000,'quantity'=> 20,'amount'=> 10000000, 'note'=>NULL],
            ['receipt_id'=> 3,'product_id'=> 17,'cost_price'=> 200000,'quantity'=> 20,'amount'=> 4000000, 'note'=>NULL],
            ['receipt_id'=> 3,'product_id'=> 18,'cost_price'=> 300000,'quantity'=> 20,'amount'=> 6000000, 'note'=>NULL],
            ['receipt_id'=> 3,'product_id'=> 19,'cost_price'=> 400000,'quantity'=> 20,'amount'=> 8000000, 'note'=>NULL],
            ['receipt_id'=> 4,'product_id'=> 20,'cost_price'=> 500000,'quantity'=> 10,'amount'=> 5000000, 'note'=>NULL],
            ['receipt_id'=> 4,'product_id'=> 21,'cost_price'=> 200000,'quantity'=> 10,'amount'=> 2000000, 'note'=>NULL],
            ['receipt_id'=> 4,'product_id'=> 22,'cost_price'=> 300000,'quantity'=> 10,'amount'=> 3000000, 'note'=>NULL],
            ['receipt_id'=> 4,'product_id'=> 23,'cost_price'=> 400000,'quantity'=> 10,'amount'=> 4000000, 'note'=>NULL],
            ['receipt_id'=> 4,'product_id'=> 24,'cost_price'=> 500000,'quantity'=> 10,'amount'=> 5000000, 'note'=>NULL],
            ['receipt_id'=> 4,'product_id'=> 25,'cost_price'=> 200000,'quantity'=> 10,'amount'=> 2000000, 'note'=>NULL],
            ['receipt_id'=> 5,'product_id'=> 26,'cost_price'=> 300000,'quantity'=> 10,'amount'=> 3000000, 'note'=>NULL],
            ['receipt_id'=> 5,'product_id'=> 27,'cost_price'=> 400000,'quantity'=> 5,'amount'=> 2000000, 'note'=>NULL],
            ['receipt_id'=> 5,'product_id'=> 28,'cost_price'=> 500000,'quantity'=> 5,'amount'=> 2500000, 'note'=>NULL],
            ['receipt_id'=> 5,'product_id'=> 29,'cost_price'=> 200000,'quantity'=> 1,'amount'=> 200000, 'note'=>NULL],
            ['receipt_id'=> 5,'product_id'=> 30,'cost_price'=> 300000,'quantity'=> 12,'amount'=> 3600000, 'note'=>NULL],
            ['receipt_id'=> 5,'product_id'=> 31,'cost_price'=> 400000,'quantity'=> 12,'amount'=> 4800000, 'note'=>NULL],
            ['receipt_id'=> 5,'product_id'=> 32,'cost_price'=> 500000,'quantity'=> 12,'amount'=> 6000000, 'note'=>NULL],
        ];
        ReceiptStockDetail::insert($data);
        
    }
}
