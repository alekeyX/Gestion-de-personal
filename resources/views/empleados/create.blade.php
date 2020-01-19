@extends('empleados.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb p-3 mt-3 mb-2 border rounded shadow-sm bg-danger">
        <div class="pull-left">
            <h2>Añadir Nuevo Empleado</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-light" href="{{ route('empleados.index') }}"> Átras</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Hay algunos problemas con los datos de entrada.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('empleados.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row p-3 border border-danger rounded shadow p-3 mb-5 bg-white rounded">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="form-group row">
                <h3 class="col-sm-3">Nombre:</h3>
                <div class="col-sm-7">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12">
            <div class="form-group row">
                <h3 class="col-sm-3">Unidad:</h3>
                <div class="col-sm-7">
                    <input type="text" name="unidad" class="form-control" placeholder="Unidad" required>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12">
            <div class="form-group row">
                <h3 class="col-sm-3">Ubicación:</h3>
                <div class="col-sm-7">
                    <input type="text" name="ubicacion" class="form-control" placeholder="Ubicacion" required>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12">
            <div class="form-group row">
                <h3 class="col-sm-3">Piso:</h3>
                <div class="col-sm-7">
                    <input type="text" name="piso" class="form-control" placeholder="Piso" required>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12">
            <div class="form-group row">
                <h3 class="col-sm-3">Teléfono:</h3>
                <div class="col-sm-7">
                    <input type="text" name="telefono" class="form-control" placeholder="Telefono" required>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12">
            <div class="form-group row">
                <h3 class="col-sm-3">Foto:</h3>
                <div  class="col-sm-7">
                    <input type="file" name="foto" id="foto">
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-danger">Guardar</button>
        </div>
    </div>
   
</form>
@endsection