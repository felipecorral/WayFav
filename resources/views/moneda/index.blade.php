<!-- index.blade.php -->
@extends('moneda.monedas')
@section('include')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Imagen</th>
        <th colspan="3">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($monedas as $moneda)
      <tr>
        <td>{{$moneda['id']}}</td>
        <td>{{$moneda['name']}}</td>
        <td>{{$moneda['image']}}</td>

        <td><a href="{{action('MONEDAController@edit', $moneda['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
            <form action="{{action('MONEDAController@destroy', $moneda['id'])}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Eliminar</button>
            </form>
        </td>
        <td><a href="{{action('MONEDAController@info', $moneda['id'])}}" class="btn btn-info">Mostrar</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection