@extends('layouts.layout-p')
@section('componentesUserConfiguracionleft')
<div class="col">
    <div class="row mb-3">
        @include('layouts.partials-user.updatePhotoPerfil-c')
    </div>

    <div class="row">
        @include('layouts.partials-user.updateDatper-c')
    </div>
</div>
@endsection

@section('componentesUserConfiguracionRight')
<div class="col">
    <div class="row mb-3">
        @include('layouts.partials-user.updatePhoneContact-c')
    </div>

    
</div>
@endsection

@section('contenido')
<div class="col-6 ml-3 mr-3">


    <div class="row confi-card">
        <div class="col">
            <div class="row">
                <div class="col p-3 confi-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-signpost-split" viewBox="0 0 16 16">
                        <path d="M7 7V1.414a1 1 0 0 1 2 0V2h5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.8 5.6a1 1 0 0 1-.8.4H9v10H7v-5H2a1 1 0 0 1-.8-.4L.225 9.3a.5.5 0 0 1 0-.6L1.2 7.4A1 1 0 0 1 2 7h5zm1 3V8H2l-.75 1L2 10h6zm0-5h6l.75-1L14 3H8v2z"/>
                    </svg>
                    Información Académica

                    @if($user_dataca == null)
                        <span class="updateDatper-adv">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-exclamation-circle mr-1" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                            </svg>
                            Porfavor actualize su información
                        </span>
                    @endif
                </div>
            </div>
            <div class="row ">
                <div class="col">
                    <form action="{{url('configuracion/updateDataca')}}" method="POST" class="confi-form p-3">
                        @csrf
                        <input type="text" name="user_id" value="{{auth()->user()->id }}" hidden>

                        <label for="" class="m-0">
                            <span>
                               Acerca de
                            </span> <br>
                             <textarea name="acerca_de" id="" placeholder="Descripción personal">{{$user_dataca['acerca_de'] ? $user_dataca['acerca_de']:'N/A'}}</textarea>
                        </label>

                        <label for="" class="m-0">
                            <span>
                                Nivel de estudios
                            </span> <br>
                            <select name="niv_aca" id="">
                                @if($user_dataca['niv_aca'] == 'B')
                                    <option value="N/A">
                                        N/A
                                    </option>
                                    <option value="B" selected>
                                        Bachiller
                                    </option>
                                    <option value="U">
                                        Universitario
                                    </option>
                                    <option value="AC">
                                        Cursando estudios
                                    </option>
                                @elseif($user_dataca['niv_aca'] == 'U')
                                    <option value="N/A">
                                        N/A
                                    </option>
                                    <option value="B">
                                        Bachiller
                                    </option>
                                    <option value="U" selected>
                                        Universitario
                                    </option>
                                    <option value="AC">
                                        Cursando estudios
                                    </option>
                                @elseif($user_dataca['niv_aca'] == 'AC')
                                    <option value="N/A">
                                        N/A
                                    </option>
                                    <option value="B">
                                        Bachiller
                                    </option>
                                    <option value="U">
                                        Universitario
                                    </option>
                                    <option value="AC" selected>
                                        Cursando estudios
                                    </option>
                                @else
                                    <option value="N/A" selected>
                                        N/A
                                    </option>
                                    <option value="B">
                                        Bachiller
                                    </option>
                                    <option value="U">
                                        Universitario
                                    </option>
                                    <option value="AC">
                                        Cursando estudios
                                    </option>
                                @endif
                            </select>
                        </label><br>

                        <label for="">
                            <span>
                                Nombre del Instituto
                            </span><br>
                            <input name="nombre_inst" type="text" placeholder="IUTOMS Intstituto Universitario Tegnologico Mariscal..." value="{{$user_dataca['nombre_inst'] ? $user_dataca['nombre_inst']: 'N/A'}}">
                        </label><br>

                        <label for="">
                            <span>
                                Nombre de la carrera universitaria 
                            </span><br>
                            <input name="nombre_carr" type="text" placeholder="Ingenieria en informatica" value="{{$user_dataca['nombre_carr'] ? $user_dataca['nombre_carr']: 'N/A'}}">
                        </label><br>

                        <label for="" class="d-flex justify-content-end">
                            <input class="btn btn-success" type="submit" value="Actualizar">
                        </label>
                    </form> 
                </div> 
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col p-3">
            
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="">
                
            </form> 
        </div>
    </div>
</div>
@endsection
