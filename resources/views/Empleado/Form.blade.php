<label for="Nombre"> Nombre </label>
        <input type="text" name="Nombre" value="{{$empleado->Nombre}}" id="Nombre"> <br>

    <label for="Apellido"> Apellido </label>
        <input type="text" name="Apellido" value="{{$empleado->Apellido}}" id="Apellido"> <br>

    <label for="Direccion"> Direccion </label>
        <input type="text" name="Direccion" value="{{$empleado->Direccion}}" id="Direccion"> <br>

    <label for="Usuario"> Usuario </label>
        <input type="text" name="Usuario" value="{{$empleado->Usuario}}" id="Usuario"> <br>

    <label for="Contraseña"> Contraseña </label>
        <input type="password" name="Contraseña" value="{{$empleado->Contraseña}}" id="Contraseña"> <br>

    
    <input type="submit"value="Registrar"> <br>
