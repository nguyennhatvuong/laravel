<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Session;
class Salary extends Model
{
    protected $table = 'salaries';
    protected $fillable = ['month', 'year', 'name', 'slug', 'total','isPay'];
   
    public static function checkSalary(){
        $salary = Salary::get();
        $time = Carbon::now();
        $month_now = (int)Carbon::now()->format('m');
        $year_now = (int)Carbon::now()->format('Y');
        if($month_now==1){
            $month=12;
            $year=$year_now-1;
        }
        else{
            $month=$month_now-1;
            $year=$year_now;
        }
        $salary=Salary::where('month',$month)->where('year',$year)->first();
        // dd($salary);
        return $salary;
        // return Salary::where('month',$month)->where('year',$year)->first();
        
    }
    public static function createSalary()
    {
        $salary = Salary::orderBy('id','desc')->first();
        $time = Carbon::now();
        $month_now = (int)Carbon::now()->format('m');
        $year_now = (int)Carbon::now()->format('Y');
        $month;
        $year;
        if ($salary == null)
        {
            if ($month_now == 1)
            {
                $month = 12;
                $year = $year_now - 1;
            }
            else
            {
                $month = $month_now - 1;
                $year = $year_now;
            }
        }
        else
        {
            switch (true)
            {
                case ($month_now == 1 && $salary->month == 11):
                    $month = 12;
                    $year = $salary->year;
                break;
                case ($month_now == 2 && $salary->month == 12):
                    $month = 1;
                    $year = $year_now;

                break;
                case ($salary->month == $month_now - 2):
                    $month = $month_now - 1;
                    $year = $year_now;
                break;
                
            }

        }
        if(isset($month)&&isset($year)){
            $name = 'B???ng l????ng th??ng ' . $month . '/' . $year ;
            $slug = Salary::createSlug($name);
            $salary = new Salary();
            $salary->name = $name;
            $salary->slug = $slug;
            $salary->month = $month;
            $salary->year = $year;
            $salary->save();
            return $salary;
        }
        else{
            return false;
        }
            
    }
    public static function store($request,$salary){
        $salary->total=$request->total;
        $salary->save();
        foreach($request->listSalary as $item){
            DetailSalary::store($item,$request->type);
        }
        return true;
    }
    public static function updateSalary($request,$salary){
        $salary->total=$request->total;
        $salary->save();
        foreach($request->listSalary as $item){
            DetailSalary::updateDetail($item);
        }
        return true;
    }
    public static function createSlug($title)
    {
        $replacement = '-';
        $map = array();
        $quotedReplacement = preg_quote($replacement, '/');
        $default = array(
            '/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???|??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???|??/' => 'a',
            '/??|??|???|???|???|??|???|???|???|???|???|??|??|???|???|???|??|???|???|???|???|???|??/' => 'e',
            '/??|??|???|???|??|??|??|???|???|??|??/' => 'i',
            '/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???|??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???|??/' => 'o',
            '/??|??|???|???|??|??|???|???|???|???|???|??|??|???|???|??|??|???|???|???|???|???|??|??/' => 'u',
            '/???|??|???|???|???|???|??|???|???|???/' => 'y',
            '/??|??/' => 'd',
            '/??/' => 'c',
            '/??/' => 'n',
            '/??|??/' => 'ae',
            '/??/' => 'oe',
            '/??/' => 'ue',
            '/??/' => 'Ae',
            '/??/' => 'Ue',
            '/??/' => 'Oe',
            '/??/' => 'ss',
            '/[^\s\p{Ll}\p{Lm}\p{Lo}\p{Lt}\p{Lu}\p{Nd}]/mu' => ' ',
            '/\\s+/' => $replacement,
            sprintf('/^[%s]+|[%s]+$/', $quotedReplacement, $quotedReplacement) => '',
        );
        $title = urldecode($title);
        $map = array_merge($map, $default);
        return strtolower(preg_replace(array_keys($map) , array_values($map) , $title));
    }
}
//

