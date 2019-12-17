@extends('empleados.layout')
 
@section('content')


<div class="container text-center">
    <img src="images/logo.png">
</div>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="bg-danger pl-2 pr-2 rounded">Lista de Personal</h2>
            </div>
            @if (Auth::user())
                <div class="pull-right">
                    <a class="btn btn-danger" href="{{ route('empleados.create') }}"> Añadir Empleado</a>
                </div>
            @endif
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    
    <div>
        <div class="input-group mb-3 border rounded">
            <input type="text" class="form-control" id="texto" placeholder="Ingrese nombre"">
                {{-- <div class="input-group-append"> --}}
                    <span class="input-group-text"> Buscar</span>
                {{-- </div> --}}
            </div>
        <div id="resultados"></div>
    </div>

@endsection