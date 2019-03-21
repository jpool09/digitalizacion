@extends('layouts.layout')

@section('contenido')

    Home
        
@endsection

@section('content')

    <h1>Bienvenido <br> <span> <img class="img" src="img/Scotti.png" alt="AsoScotiabank"> </span></h1> 
        
@endsection

@section('Tipo')
<br><br><br>
            <ul class="gap">
            <li><a href="home"><img class="logo" src="img/Asociación.png" alt="AsoScotiabank"></a></li>
            <li><a href="{{route('asociado_t')}}">Asociados</a></li>
            <li><a href="financiera">Área Financiera</a></li>
            <li><a href="administrativa">Área Administrativa</a></li>
            <li><a href="negocios">Área de Negocios</a></li>
            <li><a href="login">Logout</a></li>
            </ul>    
@endsection