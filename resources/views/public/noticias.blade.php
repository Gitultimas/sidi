@extends('layouts.layout-p')
@section('contenido')
<div class="col mr-4"><!--COLUMNA IZQUIERDA CONTENEDORA DE COMPONENTES searchNotice, newsSearchFilter -->
    <div id="searchNotice" class="row">
            @include('layouts.partials-p.searchNotice-p')<!--COMPONENTE QUE MUESTRA TODAS LAS NOTICAS DEL DIA ACTUAL-->
        </div>

        <div id="newsSearchFilter" class="row  mb-4">
            @include('layouts.partials-p.newsSearchFilter-p')<!--COMPONENTE QUE MUESTRA TODAS LAS NOTICAS DEL DIA ACTUAL-->
        </div>

        <div id="searchLimit" class="row ">
            @include('layouts.partials-p.searchLimit-p')<!--COMPONENTE QUE MUESTRA TODAS LAS NOTICAS DEL DIA ACTUAL-->
        </div>
    </div>
@endsection