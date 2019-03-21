@extends('layouts.layout')

@section('contenido')

    Asociados
        
@endsection

@section('link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection

@section('Tipo')
<br><br><br>
            <ul class="gap">
            <li><a href="#?"><img class="logo" src="img/Asociación.png" alt="AsoScotiabank"></a></li>
            <li><a href="home">Home</a></li>
            <li><a href="#?">Información General</a></li>
            <li><a href="#?">Información Crediticia</a></li>
            <li><a href="#?">Subsidios</a></li>
            <li><a href="#?">Pólizas</a></li>
            <li><a href="#?">Garantías</a></li>
            </ul>        
@endsection

@section('content')
<div class="">
        <h4 class="card-header">
            Crear Usuario
        </h4>
        <div class="card-body">
            <form method="POST" action="{{url('usuarios')}}">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" style="width: 50%; margin-left: 20%;">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Crear Usuario</button>
                <a href="{{url('usuarios')}}" class="btn btn-link" >Regresar al listado de usuarios</a>
            </form>
        </div>
    </div>
@endsection