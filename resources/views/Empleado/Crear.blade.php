<h1>FORMULARIO DE REGISTRO</h1>

<form action="{{url('/empleado')}}" method="POST" enctype="">
    @csrf
    @include('Empleado.form',['modo'=>'Crear']);


    
</form>