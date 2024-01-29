<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConsumeModel;
use \Illuminate\View\View;

class ConsumeController extends Controller
{
    public function showDataTableConsume(): View{
        $consume = ConsumeModel::getAllConsume();

        return view('consume-content-datatable')
            ->with('consume', $consume);
    }

    public function showChartConsume(): View{
        $consume = ConsumeModel::getAllConsume();

        return view('consume-content-chart')
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