<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Buihuycuong\Vnfaker\VNFaker;
use Illuminate\Support\Facades\Hash;
use Avatar;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        
                $data=array(
                    array(
                        'name'=>'Admin',
                        'email'=>'nhatvuong0699@gmail.com',
                        'phone'=>vnfaker()->mobilephone($numbers = 10),
                        'code'=>'AD0001',
                        'password'=>Hash::make('nhatvuong99'),
                    )
                );
                User::insert($data);
                $data=array(
                    array(
                        'name'=>'Thu ngân 1',
                        'email'=>'thungan1@gmail.com',
                        'phone'=>vnfaker()->mobilephone($numbers = 10),
                        'code'=>'TN0002',
                        'password'=>Hash::make('nhatvuong99'),
                        
                    ),
                    array(
                        'name'=>'Thu ngân 2',
                        'email'=>'thungan2@gmail.com',
                        'phone'=>vnfaker()->mobilephone($numbers = 10),
                        'code'=>'TN0003',
                        'password'=>Hash::make('nhatvuong99'),
                        

                    ),
                    array(
                        'name'=>'Thu ngân 3',
                        'email'=>'thungan3@gmail.com',
                        'phone'=>vnfaker()->mobilephone($numbers = 10),
                        'code'=>'TN0004',
                        'password'=>Hash::make('nhatvuong99'),
                        

                    )
                );
                User::insert($data);
                $data=array(
                    'name'=>vnfaker()->fullname($word = 3),
                    'email'=>'nhatvuong99@gmail.com',
                    'phone'=>vnfaker()->mobilephone($numbers = 10),
                    'code'=>'KH0005',
                    'password'=>Hash::make('nhatvuong99'),
                );
                User::insert($data);
                $data=array(
                    'name'=>vnfaker()->fullname($word = 3),
                    'email'=>'nhatvuong2206@gmail.com',
                    'phone'=>vnfaker()->mobilephone($numbers = 10),
                    'code'=>'KH0006',
                    'password'=>Hash::make('nhatvuong99'),
                );
                User::insert($data);


                for($i=7; $i<=35; $i++){
                
               
                $data=array(
                    'name'=>vnfaker()->fullname($word = 3),
                    'email'=>vnfaker()->email(),
                    'phone'=>vnfaker()->mobilephone($numbers = 10),
                    'code'=>'KH0000'.$i,
                    'password'=>Hash::make('nhatvuong99'),
                );
                User::insert($data);
                $users=User::get();
                foreach($users as $user){
                    $user->avatar=Avatar::create($user->name)->toBase64();
                    $user->save();
                }

            }
    }
}
