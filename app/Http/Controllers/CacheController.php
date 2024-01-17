<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cache;

class CacheController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function show(){
        return view('cache');
    }

    public function test()
    {
        Cache::forever('key', '2234');
        
        $value = Cache::get('key');
        echo 'Hecho con get<br>';
        echo $value;

        echo '<br>';

        if (Cache::has('key')) {
            echo 'Existe la caché llamada key';
        }

        Cache::increment('key');
        $value = Cache::get('key');
        echo '<br>Valor incrementado a '.$value;

        Cache::decrement('key', 1000);
        $value = Cache::get('key');
        echo '<br>Valor disnimuido a '.$value;


        

    }
}