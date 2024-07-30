@extends('dashboard.master')
@section('titulo','Personas')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
    <h1>Listado de Personas</h1>
    <br>
    <a href="{{url('dashboard/person/create')}}" class="btn btn-primary btn-sm">Nueva Persona</a>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Id Persona</th>
                <th>Tipo</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Tipo de Documento</th>
                <th>Numero de Documento</th>
                <th>Dirreccion</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($person as $person)
            <tr>
                <td scope="row">{{$person->id}}</td>
                <td>{{$person->type}}</td>
                <td>{{$person->First_Name}}</td>
                <td>{{$person->Last_Name}}</td>
                <td>{{$person->Document_Type}}</td>
                <td>{{$person->Document_number}}</td>
                <td>{{$person->Adress}}</td>
                <td>{{$person->Phone}}</td>
                <td>{{$person->Email}}</td>
                
                <td>
                    <a href="{{url('dashboard/person/'.$person->id.'/edit')}}" class="bi bi-pencil-square"></a></td>
                <td>
                    <form action="{{url('dashboard/person/'.$person->id) }}" method="post">
                        @method("DELETE")
                        @csrf
                        <button class="bi bi-eraser-fill" type="submit"></button>
                    </form>
                </td>
            </tr>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table> 

    </div>
</main>

@endsection