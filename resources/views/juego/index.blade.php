<!-- index.blade.php -->
@extends('juego.juegos')
@section('include')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Imagen</th>
        <th>Descripcion</th>
        <th colspan="3">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($juegos as $juego)
      <tr>
        <td>{{$juego['id']}}</td>
        <td>{{$juego['name']}}</td>
        <td>{{$juego['image']}}</td>
        <td>{{$juego['description']}}</td>
        <td><a href="{{action('JUEGOController@edit', $juego['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
            <form action="{{action('JUEGOController@destroy', $juego['id'])}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Eliminar</button>
            </form>
        </td>
        <td><a href="{{action('JUEGOController@info', $juego['id'])}}" class="btn btn-info">Mostrar</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection