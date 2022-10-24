@extends('layout.main')
@section('contenido')
<div class="container">
    <div class="row">
        <h1 class="text-center mt-3 mb-5">Editar Animal</h1>
        <div class="col-4"></div>
        <div class="col-4">
                <form action="{{ route('animales.update',$item->id)}}" method="POST" autocomplete="off">
                    @csrf
                    @method("PUT")
                    <div class="form-floating mb-3">
                        <input value="{{$item->nombre}}" autofocus name="nombre" type="text" class="form-control" id="animalNameInput" placeholder="animal">
                        <label    el for="animalNameInput">Nombre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="{{$item->habilidad}}" name="habilidad" type="text" class="form-control" id="tipoHabilidadInput" placeholder="animal">
                        <label    el for="tipoHabilidadInput">Tipo de Habilidad</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="{{$item->localizacion}}" name="localizacion" type="text" class="form-control" id="localizacionInput" placeholder="animal">
                        <label    el for="localizacionInput">Localización</label>
                    </div>
                    <label for="">¿Se encuentra en peligro de Extinción?</label><br>
                    <div class="form-check form-check-inline mx-auto" style="width: 100px;">
                        <input {{$item->peligro == 'Si' ? 'checked':''}} name="peligro" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Si">
                        <label class="form-check-label" for="inlineRadio1">Si</label>
                    </div>
                    <div class="form-check form-check-inline" style="width: 200px;">
                        <input {{$item->peligro == 'No' ? 'checked':''}} name="peligro" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="No">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                    <button class="btn btn-outline-dark mt-3">Guardar</button>
                    <a href="{{ route('animales.index')}}" class="btn btn-outline-info mt-3">Regresar</a>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection