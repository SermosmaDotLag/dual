<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BreadModel;
use \Illuminate\View\View;

class PanController extends Controller
{
    public function showBread(): View{
        $bread = BreadModel::getAllBread();

        return view('show')
            ->with('bread', $bread);
    }
    public function showError(): View{

        return view('error403');
    }

    public function index(): View{
        return view('index');
    }

    public function showAddForm(): View{
        return view('add-bread'); 
    }

    public function saveBread(Request $request){
        $name = $request->input('name');
        $celiac = $request->input('celiac');

        BreadModel::saveNewBread($name, $celiac);
        // return $this->showBread();
        
        //Prueba con JSON, funciona

        // return response()->json([
        //     'name' => $name,
        //     'celiac' => $celiac,
        // ]);

        return response()->json(['message' => 'Pan almacenado', 'data' => $request->all()]); //devuelve tambien el csrf token
    }

    public function deleteBread(int $id){
        $bread = BreadModel::deleteBreadById($id);
        if($bread){
            return back()
                ->with('message', 'Operación completada con éxito');
        }   
        return back()
            ->with('message', 'Algo ha fallado, inténtalo de nuevo');
        //Modificar para que devuelva con un mensaje dependiendo de si es true o false. 
        //Luego en la vista usar el mensaje como un parametro mas para ponerlo en la vista
        
    }

    public function showEditForm(int $id): View{
        $bread = BreadModel::getBreadById($id);

        return view('edit')
            ->with('bread', $bread);
    }

    public function updateBread(Request $request, int $id): \Illuminate\Http\RedirectResponse{
        $name = $request->input('name');
        $celiac = $request->input('celiac');

        $bread = BreadModel::getBreadById($id);
        $bread->updateBread($name, $celiac);

        return redirect()->route('show.bread')
            ->with('success', 'Pan actualizado correctamente');
    }
}
?>
