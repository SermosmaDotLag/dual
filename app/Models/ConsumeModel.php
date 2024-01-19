<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsumeModel extends Model
{
    protected $table = 'consume';

    public static function getAllConsume(){
        return self::all();
    }

    public static function chartData(){
        return self::select('monthName', 'consume')
        ->get()
        ->toArray();
    
    }
}