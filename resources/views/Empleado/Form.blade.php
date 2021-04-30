

<h1>{{$modo}} Empleado</h1>
<label for="Nombre"> Nombre </label>
        <input type="text" name="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}" id="Nombre"> <br>

    <label for="Apellido"> Apellido </label>
        <input type="text" name="Apellido" value="{{isset($empleado->Apellido)?$empleado->Apellido:''}}" id="Apellido"> <br>

    <label for="Direccion"> Direccion </label>
        <input type="text" name="Direccion" value="{{isset($empleado->Direccion)?$empleado->Direccion:''}}" id="Direccion"> <br>

    <label for="Usuario"> Usuario </label>
        <input type="text" name="Usuario" value="{{isset($empleado->Usuario)?$empleado->Usuario:''}}" id="Usuario"> <br>

    <label for="Contraseña"> Contraseña </label>
        <input type="password" name="Contraseña" value="{{isset($empleado->Contraseña)?$empleado->Contraseña:''}}" id="Contraseña"> <br>

    <input type="submit"value="{{$modo}} Datos"> <br>

    <a href="{{url('empleado/')}}"><input type="button" value="Regresar"></a>
