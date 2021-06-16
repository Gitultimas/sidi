@extends('layouts.layout-p')
@section('componentesEmpleados')
<div class="col-3 mr-4">
    <div class="row mb-5">
        @include('layouts.partials-p.searchEmployedCargos-p')
    </div>
</div>
@endsection
@section('contenido')
    <div class="col">
    
        <div class="row">
            <div class="col">
                <div  class="row mb-4  pt-3 pb-3 newNotice-title bg-white">
                    <div class="col d-flex justify-content-between ">
                        <span >Empleados</span>
                    </div>
                </div>
            </div>        
        </div>


        <div class="row">
            <div class="col p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">email</th>
                        <th scope="col">telefono</th>
                        <th scope="col">cargo</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        @foreach($personas as $persona)
                            <tr>
                            <th scope="row">{{$persona->name}}</th>
                            <td>{{$persona->email}}</td>
                            @if($persona->telephonenumber != null)
                                <td>{{$persona->telephonenumber}}</td>
                            @else
                                <td>N/A</td>
                            @endif
                            <td>{{$persona->title}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{$personas->links()}}
            </div>
        </div>
    </div>
@endsection


    