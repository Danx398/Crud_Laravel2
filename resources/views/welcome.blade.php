@extends('layout.main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 text-center">
                <h2 class="mt-3 mb-5">Crud de Animales<i class="fa-solid fa-dragon"></i></h2>
                <a href="{{route('animales.create')}}" class="btn btn-outline-success">Agregar Nuevo Animal</a>
                <table class="mt-5 table table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Tipo Habilidad</th>
                            <th>Localizacion</th>
                            <th>Esta en Peligro de Extinción</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($animales as $item)
                            
                        <tr>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->habilidad}}</td>
                            <td>{{$item->localizacion}}</td>
                            <td>{{$item->peligro}}</td>
                            <td>
                                <a href="{{route('animales.edit',$item->id)}}" class="btn btn-warning">Editar</a>
                            </td>
                            <td>
                                <form action="{{route('animales.destroy',$item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    
@endsection