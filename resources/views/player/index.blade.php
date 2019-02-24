<!-- index.blade.php -->
@extends('master')
@section('include')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>ID Dispositivo</th>
        <th>Nivel</th>
        <th>Puntuacion</th>
        <th>Monedas</th>
        <th>Inventario</th>
        <th colspan="3">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($players as $player)
      <tr>
        <td>{{$player['id']}}</td>
        <td>{{$player['name']}}</td>
        <td>{{$player['device_id']}}</td>
        <td>{{$player['level']}}</td>
        <td>{{$player['score']}}</td>
        <td>{{$player['gold']}}</td>
        <td>{{$player['inventory']}}</td>

        <td><a href="{{action('PLAYERController@edit', $player['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
            <form action="{{action('PLAYERController@destroy', $player['id'])}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Eliminar</button>
            </form>
        </td>
        <td><a href="{{action('PLAYERController@info', $player['device_id'])}}" class="btn btn-info">Mostrar</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection