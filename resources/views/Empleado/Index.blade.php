mostrar empleado
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
                <a href="{{ url('/empleado/'.$empleado->id.'/Editar/')}}"><input type="button" value="Editar"></a>

                <form action="{{url ('/empleado/'.$empleado->id)}}" method="POST">
                @csrf
                {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('Quieres eliminar?')" value="Eliminar">
                </form>
            
            </td>
        </tr>
        @endforeach
       
    </tbody>
</table>