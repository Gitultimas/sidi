@extends('layouts.layout-p')
@section('contenido')
<div class="col">

    <div  class="row mb-4  pt-3 pb-3 newNotice-title bg-white">
        <div class="col d-flex justify-content-between ">
            <span >FORMATOS DESCARGABLES</span>
            
        </div>
    </div>

    <div class="row">
        @include('layouts.partials-mantenimiento.desarrollo')
    </div>
</div>
@endsection