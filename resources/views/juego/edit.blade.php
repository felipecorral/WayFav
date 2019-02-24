<!-- edit.blade.php -->

@extends('juego.juegos')
@section('include')
<div class="container">
  <form method="post" action="{{action('JUEGOController@update', $id)}}">
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="nmFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nombre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="nmFormGroupInput" placeholder="nombre" name="name" value="{{$juego->name}}">
      </div>
    </div>

    <div class="form-group row">
        <label for="diFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Imagen</label>
        <div class="col-sm-10">
            <input type="number" class="form-control form-control-lg" id="diFormGroupInput" placeholder="imagen" name="image" value="{{$juego->image}}">
        </div>
     </div>
     <div class="form-group row">
        <label for="lvFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Descripcion</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" id="lvFormGroupInput" placeholder="descripcion" name="description" value="{{$juego->description}}">
        </div>
     </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
@endsection