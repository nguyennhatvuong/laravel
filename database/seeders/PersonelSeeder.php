<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Personel;
use Illuminate\Support\Facades\DB;

class PersonelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Personel::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $k2=range(2,4);
        $k3=range(5,15);
        
        $array=array("Thử việc","Bán thời gian","Toàn thời gian");

        for($i=2; $i<=15;$i++){
            $start = strtotime("2020-10-01");
            $end =  strtotime(Carbon::today()->toDateString());
            $randomDate = date("Y-m-d", rand($start, $end));
            $k=rand(0,count($array)-1);
            switch (true) {
                case in_array($i, $k2):
                    $salary=22000;
                    $salary_category='Lương theo giờ';
                    $work_category=$array[$k];
                    break;
                case in_array($i, $k3):
                    $salary=22000;
                    $salary_category='Lương theo giờ';
                    $work_category=$array[$k];
                    break;
                
            }
            
            $data=array(
                'user_id'=>$i,
                'salary_category'=>$salary_category,
                'work_category'=>$work_category,
                'salary'=>$salary,
                'start_date'=>$randomDate
            );
            DB::table('personels')->insert($data);

        };
    }
}
