@extends('layouts.layout-p')
@section('contenido')
    <div class="col-6 mr-4"><!--COLUMNA IZQUIERDA CONTENEDORA DE COMPONENTES searchNotice, newsSearchFilter -->
        <div id="newNotice" class="row">
            @include('layouts.partials-p.newNotice-p')<!--COMPONENTE QUE MUESTRA TODAS LAS NOTICAS DEL DIA ACTUAL-->
        </div>
    </div>
@endsection