@extends('empleados.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb p-3 mt-3 mb-2 border rounded shadow-sm bg-danger">
            <div class="pull-left">
                <h2>Editar Información de Empleado</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-light" href="{{ route('empleados.index') }}"> Átras</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <h3>Whoops!</h3> Hay algunos problemas con tu entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('empleados.update',$empleado->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row p-3 border border-danger rounded shadow p-3 mb-5 bg-white rounded">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="form-group row">
                    <h3 class="col-sm-3">Nombre:</h3>
                    <div class="col-sm-7">
                        <input type="text" name="nombre" value="{{ $empleado->nombre }}" class="form-control" placeholder="Nombre" required>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12">
                <div class="form-group row">
                    <h3 class="col-sm-3">Unidad:</h3>
                    <div class="col-sm-7">
                        <input type="text" name="unidad" value="{{ $empleado->unidad }}" class="form-control" placeholder="Unidad" required>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12">
                <div class="form-group row">
                    <h3 class="col-sm-3">Ubicación:</h3>
                    <div class="col-sm-7">
                        <input type="text" name="ubicacion" value="{{ $empleado->ubicacion }}" class="form-control" placeholder="Ubicacion" required>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12">
                <div class="form-group row">
                    <h3 class="col-sm-3">Piso:</h3>
                    <div class="col-sm-7">
                        <input type="text" name="piso" value="{{ $empleado->piso }}" class="form-control" placeholder="Piso" required>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12">
                <div class="form-group row">
                    <h3 class="col-sm-3">Teléfono:</h3>
                    <div class="col-sm-7">
                        <input type="text" name="piso" value="{{ $empleado->telefono }}" class="form-control" placeholder="Telefono" required>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12">
                <div class="form-group row">
                    <h3 class="col-sm-3">Foto:</h3>
                    <div  class="col-sm-7">
                        <input type="file" name="foto" id="foto" value="{{ $empleado->foto }}" required>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger">Guardar</button>
            </div>
        </div>
   
    </form>
@endsection