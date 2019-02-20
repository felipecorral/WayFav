<!-- edit.blade.php -->

@extends('master')
@section('include')
<div class="container">
  <form method="post" action="{{action('PLAYERController@update', $id)}}">
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="nmFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nombre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="nmFormGroupInput" placeholder="nombre" name="name" value="{{$player->name}}">
      </div>
    </div>

    <div class="form-group row">
        <label for="diFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">ID Dispositivo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" id="diFormGroupInput" placeholder="id dispositivo" name="device_id" value="{{$player->device_id}}">
        </div>
     </div>

     <div class="form-group row">
            <label for="lvFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nivel</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lvFormGroupInput" placeholder="nivel" name="level" value="{{$player->level}}">
            </div>
         </div>
         
    <div class="form-group row">
        <label for="scFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Puntuacion</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" id="scFormGroupInput" placeholder="nivel" name="score" value="{{$player->score}}">
        </div>
     </div>         

     <div class="form-group row">
            <label for="gdFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Monedas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="gdFormGroupInput" placeholder="monedas" name="gold" value="{{$player->gold}}">
            </div>
    </div>

    <div class="form-group row">
            <label for="ivFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Inventario</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="ivFormGroupInput" placeholder="inventario" name="inventory" value="{{$player->inventory}}">
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