@extends('layouts.app')

@section('content')
<div class="container">




@if (Session::has('mensaje'))
{{Session::get('mensaje')}}
    
@endif
<a href="{{url('empleado/create')}}"><button class="btn btn-success">Registrar Empleado</button></a>

<br><br>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($empleados as $empleado)
            
        
        <tr>
            
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->Apellido}}</td>
            <td>{{$empleado->Direccion}}</td>
            <td>{{$empleado->Correo}}</td>
            <td>{{$empleado->Usuario}}</td>
            <td>{{$empleado->Contraseña}}</td>
            <td>
                <a href="{{ url('/empleado/'.$empleado->id.'/edit')}}"><button class="btn btn-warning">Editar</button></a>

                <form action="{{url ('/empleado/'.$empleado->id)}}" class="d-inline" method="POST">
                @csrf
                {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('Quieres eliminar?')" class="btn btn-danger" value="Eliminar">
                </form>
            
            </td>
        </tr>
        @endforeach
       
    </tbody>
</table>
</div>
@endsection