@extends('empleados.layout')
@section('content')

<div class="mt-3 col-lg-12 ">
        <div class="card border border-danger shadow">
            <div class="card-header  mb-2 border bg-danger rounded">
                <div class="pull-left">
                    <h2> Información de Empleado</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-light" href="{{ route('empleados.index') }}"> Átras</a>
                </div>
            </div>
            <div class="card-body ">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="form-group row">
                        <h3 class="col-5"><strong class="text-dark">Nombre:</strong></h3>
                        <h3 class="col-5">{{ $empleado->nombre }}</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="form-group row">
                        <h3 class="col-5"><strong class="text-dark">Unidad:</strong></h3>
                        <h3 class="col-5">{{ $empleado->unidad }}</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="form-group row">
                        <h3 class="col-5"><strong class="text-dark">Ubicación:</strong></h3>
                        <h3 class="col-5">{{ $empleado->ubicacion }}</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="form-group row">
                        <h3 class="col-5"><strong class="text-dark">Piso:</strong></h3>
                        <h3 class="col-5">{{ $empleado->piso }}</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="form-group row">
                        <h3 class="col-5"><strong class="text-dark">Teléfono:</strong></h3>
                        <h3 class="col-5">{{ $empleado->telefono }}</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="form-group row">
                        <h3 class="col-3"><strong class="text-dark">Foto:</strong></h3>
                        <img class="" src="/images/{{ $empleado->foto }}" alt="">
                    </div>
                </div>
                @if (Auth::user())
                    <div class="col-12">
                        <form action="{{ route('empleados.destroy',$empleado->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        
                            <button type="submit" class="btn btn-danger float-right ml-2" id="btn-eliminar"><i class="fas fa-trash-alt"></i></button>
                            <a class="btn btn-primary float-right" id="btn-editar" href="{{ route('empleados.edit',$empleado->id) }}"><i class="fas fa-edit"></i></a>
                        
                        </form>
                    </div>
                @endif
            </div>
        </div>
</div>
          
@endsection