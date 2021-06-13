@extends('layouts.plantilla')
@section('content')




<h4>Resultado de Busqueda</h4>
  <div class="row">
    <div class="col-lx-12">
        <div class="table-responsive">
            <table class="table table-striped">
                 <thead>
                 <tr>
                     <th>Nombre</th>
                     <th>Apellidos</th>
                     <th>Ocupacion</th>
                 </tr>
                 </thead>
                <tbody>
                @if(count($solicitantes)<=0)
                    <tr>
                        <td colspan="8">No hay resultados</td>
                    </tr>
                    @else

                @foreach($solicitantes as $solicitante)
                <tr>
                    <th>{{$solicitante->nombre}}</th>
                    <th>{{$solicitante->apellido}}</th>
                    <th>{{$solicitante->ocupacion}}</th>
                </tr>
                @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
  </div>
@endsection
