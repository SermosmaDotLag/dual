<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConsumeModel;
use \Illuminate\View\View;

class ConsumeController extends Controller
{
    public function showConsume(): View{
        $consume = ConsumeModel::getAllConsume();

        return view('consume')
            ->with('consume', $consume);
    }

    public function chartData()
    {
        return response()->json(ConsumeModel::chartData());
    }

    public function index(): View{
        return view('index');
    }
}