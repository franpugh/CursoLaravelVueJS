@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Listado de Personas</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('persona.create') }}" class="btn btn-info" >Crear Persona</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Email</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($personas->count())  
              @foreach($personas as $persona)  
              <tr>
                <td>{{$persona->nombre}}</td>
                <td>{{$persona->apellido}}</td>
                <td>{{$persona->email}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('PersonaController@edit', $persona->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('PersonaController@destroy', $persona->id)}}" method="post">
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
      {{ $personas->links() }}
    </div>
  </div>
</section>

@endsection