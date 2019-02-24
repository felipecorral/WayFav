<!-- create.blade.php -->

@extends('moneda.monedas')
@section('include')
<div class="container">
  <form method="post" action="{{url('moneda')}}">
    <div class="form-group row">
        {{csrf_field()}}
      <label for="nmFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nombre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="nmFormGroupInput" placeholder="nombre" name="name">
      </div>
    </div>
    <div class="form-group row">
        <label for="diFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Imagen</label>
        <div class="col-sm-10">
          <input type="number" class="form-control form-control-lg" id="diFormGroupInput" placeholder="imagen" name="image">
        </div>
    </div>
    <!--<div class="form-group row">
        <label for="lvFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nivel</label>
        <div class="col-sm-10">
          <input type="number" min="0" class="form-control form-control-lg" id="lvFormGroupInput" placeholder="nivel" name="level">
        </div>
    </div>
    <div class="form-group row">
        <label for="scFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Score</label>
        <div class="col-sm-10">
          <input type="number" min="0" class="form-control form-control-lg" id="scFormGroupInput" placeholder="puntuacion" name="score">
        </div>
    </div>
    <div class="form-group row">
        <label for="gdFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Monedas</label>
        <div class="col-sm-10">
          <input type="number" min="0" class="form-control form-control-lg" id="gdFormGroupInput" placeholder="monedas" name="gold">
        </div>
    </div>
    <div class="form-group row">
        <label for="inFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Inventario</label>
        <div class="col-sm-10">
          <input type="number" min="0" class="form-control form-control-lg" id="inFormGroupInput" placeholder="inventario" name="inventory">
        </div>
    </div>-->
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
@endsection