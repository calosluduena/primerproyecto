   <h1> {{$modo}} empleado </h1>

   @if(count($errors)>0)


        <div class="alert alert-danger" role="alert">
            <ul>
                 @foreach( $errors->all() as $error)
                    <li> {{$error}} </li>
        @endforeach
</ul>
    @endif

      
   
   <div class="form-grup">

    <label for="Nombre"> Nombre </label>

<input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:"" }}" id="Nombre">
</div>

<div class="form-grup">
<label for="Apellido"> Apellido </label>
<input type="text" class="form-control" name="Apellido" value="{{ isset($empleado->Apellido) ?$empleado->Apellido:"" }}" id="Apellido">
</div>


<div class="form-grup">
<label for="Correo"> Correo </label>
<input type="text" class="form-control" name="Correo" value="{{ isset($empleado->Correo) ?$empleado->Correo:"" }}" id="Correo">
</div>


<div class="form-grup">
<label for="Foto"> Foto </label>

@if(isset($empleado->Foto))

<img src="{{ asset("storage")."/".$empleado->Foto }}"  width="100" alt=""> 


@endif

<input  type="file" class="form-control" name="Foto" value="" id="Foto">
</div>

<input  type="submit" value="{{$modo }} Datos">

<a class="btn btn-primary" href="{{ url("empleado/") }}">Regresar</a>
<br>