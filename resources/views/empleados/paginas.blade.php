
<table class="table table-sm table-head table-hover border border-danger margen-b">
        <thead class="bg-danger">
            <tr>
                <th style="width:33%">Nombre</th>
                <th>Unidad</th>
                <th>Ubicación</th>
                <th>Piso</th>
                <th>Telefono</th>
                <th>Ver</th>
            </tr>
        </thead>
</table>
<div id="tb-scroll"> 
    <table class="table table-sm table-hover border border-danger margen-b bg-light">
    {{-- @if (count($empleados)) --}}
        @foreach ($empleados as $item)
            <tbody>
                <tr>
                    <td class="text-left">{{ $item->nombre }}</td>
                    <td class="text-center">{{ $item->unidad }}</td>
                    <td class="text-center">{{ $item->ubicacion }}</td>
                    <td class="text-center">{{ $item->piso }}</td>
                    <td class="text-center">{{ $item->telefono }}</td>
                    <td class="text-center">
                        <a class="btn btn-danger" href="{{ route('empleados.show',$item->id) }}"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>
            </tbody>
    
        @endforeach
    {{-- @endif --}}
    </table>
</div>
