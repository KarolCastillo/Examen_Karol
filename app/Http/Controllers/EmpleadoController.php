<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmpleadoController extends Controller
{
    public function listado(){
        $emplaeados = DB::table('registro_de_empleados')
            ->join('users', 'registro_de_empleados.id_usuario', '=', 'users.id')
            ->select('registro_de_empleados.*', 'users.name')
            ->paginate(10);
        return view('Empleados.lista', compact('emplaeados'));
    }

    public function delete($id){
        Empleado::destroy($id);
        return back() ->with('empleadoguardado', 'Empleado guardado con exito');
    }

    public function crear(){

            return view('Empleados.crear');
    }

    public function save(Request $request){
        $validator=$this->validate($request,[

            'codigo_empleado'=>'required',
            'nombre_empleado'=>'required',
            'numero_telefono'=>'required',
            'correo'=>'required|email|unique:registro_de_empleados',
            'direccion'=>'required',
            'departamento'=>'required',

        ]);

        Empleado::create([
                'codigo_empleado' => $validator['codigo_empleado'],
                'nombre_empleado' => $validator['nombre_empleado'],
                'numero_telefono' => $validator['numero_telefono'],
                'correo' => $validator['correo'],
                'direccion' => $validator['direccion'],
                'departamento' => $validator['departamento'],
                'id_usuario'=>Auth()->user()->id

            ]);
            //si funciona este
        return redirect()->route('Listar')
            ->with('empleadoguardado', 'Empleado guardado con exito');
    }

    public function modificar ($id){
        $empleado=Empleado::findorfail($id);
        return view('Empleados.editar', compact('empleado'));
    }

    public function edit(Request $request,$id){
        $datosempleado=request()->except((['_token','_method']));
        Empleado::where('id','=', $id)->update($datosempleado);
        return redirect()->route('Listar')
            ->with('empleadoguardado', 'Empleado modificado con exito');
    }

    public function show($id)
    {
        $empleado = Empleado::find($id);
        return view('Empleados.info', compact('empleado'));
    }

}
