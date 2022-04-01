@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has("mensaje"))
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">

{{ Session::get("mensaje") }}

</button>

@endif


<a href="{{ url("empleado/create") }}" class="btn btn-success" >Registrar nuevo empleado</a>
<br/>
<br/>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            
            <th>Foto</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Correo</th>
        </tr>
    </thead>







    <tbody>
        @foreach( $empleados as $empleado)
        <tr>
            <td>{{$empleado->id }}</td>
            <td>
                <img src="{{ asset("storage")."/".$empleado->Foto }} alt="">
                </td>
                <td>{{$empleado->Apellido }}</td>
                <td>{{$empleado->Nombre }}</td>
                                            
                <td>{{$empleado->Correo }}</td>
            <td>
                
            <a href="{{url("/empleado/".$empleado->id."/edit") }}" class="btn btn-warning">
            
            Editar | 

             </a>
                

            <form action="{{ url("/empleado/" .$empleado->id) }}" class="d-inline" method="post">
            @csrf
            {{method_field("DELETE") }}
            <input class="btn btn-danger" type="submit"onclick=return confirm("¿Quieres Borrar?)" value="Borrar">
            

            
             </form>
             
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>
{!!$empleados->links()!!}
</div>
@endsection