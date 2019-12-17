<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        // $empleados = Empleado::name($request->get('nombre'))->orderBy('nombre')->paginate(20);
  
        // return view('empleados.index',compact('empleados'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);

        // para buscador en tiempo real
        $empleados = Empleado::name($request->get('nombre'))->orderBy('nombre');
        return view("empleados.index",compact('empleados'));
                    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'    => 'required',
            'unidad'    => 'required',
            'ubicacion' => 'required',
            'piso'      => 'required',
            'telefono'  => 'required',
            'foto'      => 'required',
        ]);

        $entrada=$request->all();

        if($file=$request->file('foto')){
            $nombre=time().$file->getClientOriginalName();
            $file->move('images/img', $nombre);
            $entrada['foto']=$nombre;
        }
        Empleado::create($entrada);

        // Empleado::create($request->all());

        return redirect()->route('empleados.index')
                            ->with('success','Empleado añadido exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return view('empleados.show',compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        return view('empleados.edit',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Empleado $empleado)
    {
        $request->validate([
            'nombre'    => 'required',
        ]);

        $entrada=$request->all();

        if($file=$request->file('foto')){
            $nombre=time().$file->getClientOriginalName();
            $file->move('images/img', $nombre);
            $entrada['foto']=$nombre;
        }
                
        $empleado->update($entrada);

        return redirect()->route('empleados.index')
                         ->with('success','Empleado editado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();

        return redirect()->route('empleados.index')
                         ->with('success','Empleado eliminado exitosamente.');
    }

    // public function listado(){
    //     $empleados = Empleado::orderBy('nombre')->get();
    //     return view('empleados.index', compact('empleados'));
    // }


    public function buscador(Request $request){
        $empleados = Empleado::where("nombre","like","%".$request->texto."%")->get();
        return view('empleados.paginas',compact('empleados'));       
    }
}


