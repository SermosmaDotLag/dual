<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class DownloadController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function downloadDog(){
        $path = public_path('assets/perro.png');

        return response()->download($path, 'perro.png');
    }
}
