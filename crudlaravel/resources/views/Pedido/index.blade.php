@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Listado de Pedidos</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('pedido.create') }}" class="btn btn-info" >Crear Pedido</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Vianda ID</th>
               <th>Persona ID</th>
               <th>Fecha de Solicitud</th>
               <th>Fecha de Entrega</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($pedidos->count())  
              @foreach($pedidos as $pedido)  
              <tr>
                <td>{{$pedido->vianda_id}}</td>
                <td>{{$pedido->persona_id}}</td>
                <td>{{$pedido->fecha_solicitud}}</td>
                <td>{{$pedido->fecha_entrega}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('PedidoController@edit', $pedido->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('PedidoController@destroy', $pedido->id)}}" method="post">
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
        </div>
      </div>
      {{ $pedidos->links() }}
    </div>
  </div>
</section>

@endsection