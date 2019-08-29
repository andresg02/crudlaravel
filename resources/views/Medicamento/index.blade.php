@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Medicamentos</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('medicamento.create') }}" class="btn btn-info" >Añadir Medicamento</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Descripcion</th>
               <th>Cantidad</th>
               <th>Fecha de vencimiento</th>
               <th>Laboratorio</th>
               <th>Precio</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($medicamentos->count())  
              @foreach($medicamentos as $medicamento)  
              <tr>
                <td>{{$medicamento->nombre}}</td>
                <td>{{$medicamento->descripcion}}</td>
                <td>{{$medicamento->cantidad}}</td>
                <td>{{$medicamento->fechav}}</td>
                <td>{{$medicamento->laboratorio}}</td>
                <td>{{$medicamento->precio}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('MedicamentoController@edit', $medicamento->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('MedicamentoController@destroy', $medicamento->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>
 
          </table>

                <div>
                  <a href="{{ route('home') }}" class="btn btn-info btn-block" >Atrás</a>
                </div>

        </div>
      </div>
      {{ $medicamentos->links() }}
    </div>
  </div>
</section>
 
@endsection