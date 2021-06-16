@extends('layouts.layout-p')
@section('componentesUserConfiguracionleft')
    <div class="col-3 mr-4">
        <div class="row mb-5">
            @include('layouts.partials-user.estatusDocumentos-c')
        </div>           
    </div>
@endsection
@section('contenido')
<div class="col">
    <div  class="row mb-4  pt-3 pb-3 newNotice-title bg-white">
        <div class="col d-flex justify-content-between ">
            <span >Documentos personales</span>
            @if(isset($user->cedula) and isset($user->vitae) and isset($user->rif) and isset($user->acta))

                @if($user->cedula->estatu_id == 1 || $user->acta->estatu_id == 1 || $user->vitae->estatu_id == 1 || $user->rif->estatu_id == 1 )
                <div>
                        <span class="align-self-center ml-2"  style="background-color:lightgreen;border-radius:50%;height:25px;width:25px;display:inline-block;"></span>
                        <span class="align-self-center ml-2" style="box-shadow:0 0 10px tomato;background-color:tomato;border-radius:50%;height:25px;width:25px;display:inline-block;"></span>
                        <span class="align-self-center ml-2" style="background-color:#ffc107;border-radius:50%;height:25px;width:25px;display:inline-block;"></span>
                </div>
                @else
                    <div>
                        <span class="align-self-center ml-2"  style="box-shadow:0 0 10px green;background-color:lightgreen;border-radius:50%;height:25px;width:25px;display:inline-block;"></span>
                        <span class="align-self-center ml-2"  style="background-color:tomato;border-radius:50%;height:25px;width:25px;display:inline-block;"></span>
                        <span class="align-self-center ml-2" style="background-color:#ffc107;border-radius:50%;height:25px;width:25px;display:inline-block;"></span>
                    </div>
                @endif
            @elseif(isset($user->cedula) || isset($user->vitae) || isset($user->rif) || isset($user->acta))
                <div>
                        <span class="align-self-center ml-2"  style="background-color:lightgreen;border-radius:50%;height:25px;width:25px;display:inline-block;"></span>
                        <span class="align-self-center ml-2" style="background-color:tomato;border-radius:50%;height:25px;width:25px;display:inline-block;"></span>
                        <span class="align-self-center ml-2" style="box-shadow:0 0 10px #ffc107;background-color:#ffc107;border-radius:50%;height:25px;width:25px;display:inline-block;"></span>
                </div>
            @endif
        </div>
    </div>
    <div class="row mb-4 ">
        <div class="col pl-0">
            @if(empty($user->vitae))   
                <div class="card " style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Síntesis curricular</h5>
                            <p class="card-text">Los datos de su hoja de vida deben estar actualizados para el departamento de recursos humanos.</p>
                            <form enctype="multipart/form-data" action="{{url('/documentos/vitae')}}" method="POST" >
                                    @csrf
                                    <input type="text" name="user_id" value="{{auth()->user()->id }}" hidden>
                                    <div class="custom-file mb-4">
                                        <input type="file" name="file" class="custom-file-input" required>
                                        <label class="custom-file-label">Ingrese archivo...</label>
                                    </div>
                                    <input type="submit" class="btn btn-success" value="Actualizar">
                            </form>
                        </div>
                </div>
            @else
                <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">Síntesis curricular</h5>

                            <p class="card-text">Los datos de su hoja de vida deben estar actualizados para el departamento de recursos humanos.</p>
                            
                            <button class="btn btn-primary">Descargar</button>                            
                            <button class="btn btn-danger">Eliminar</button>                            
                        </div>
                </div>
            @endif
        </div>
        
        <div class="col pl-0">
            @if(empty($user->rif))  
                <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Rif</h5>
                            <p class="card-text">El documento de incorporacion fiscal debe ser vigente y no debe estar vencido.</p>
                            
                            <form enctype="multipart/form-data"  action="{{url('/documentos/rif')}}" method="POST">
                                    @csrf
                                    <input type="text" name="user_id" value="{{auth()->user()->id }}" hidden>
                                    <div class="custom-file mb-4">
                                        <input type="file" name="file" class="custom-file-input" required>
                                        <label class="custom-file-label" >Ingrese archivo...</label>
                                    </div>
                                    <input type="submit" class="btn btn-success" value="Actualizar">
                            </form>
                        </div>
                </div>
            @else
                <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Rif</h5>
                            <p class="card-text">El documento de incorporacion fiscal debe ser vigente y no debe estar vencido.</p>
                            
                            <button class="btn btn-primary">Descargar</button>                            
                            <button class="btn btn-danger">Eliminar</button>                            
                        </div>
                </div>
            @endif
        </div>

        <div class="col pl-0">
            @if(empty($user->cedula))  
                <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Cedula</h5>
                            <p class="card-text">El documento de la cedula debe estar legible para el departamento de recursos humanos</p>
                            
                            <form enctype="multipart/form-data" action="{{url('/documentos/cedula')}}" method="POST">
                                    @csrf
                                    <input type="text" name="user_id" value="{{auth()->user()->id }}" hidden>
                                    <div class="custom-file mb-4">
                                        <input type="file" name="file" class="custom-file-input" required>
                                        <label class="custom-file-label" >Ingrese archivo...</label>
                                    </div>
                                    <input type="submit" class="btn btn-success" value="Actualizar">
                            </form>
                        </div>
                </div>
            @else
                <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Cedula</h5>
                            <p class="card-text">El documento de la cedula debe estar legible para el departamento de recursos humanos</p>
                            
                            <button class="btn btn-primary">Descargar</button>                            
                            <button class="btn btn-danger">Eliminar</button>                            
                        </div>
                </div>
            @endif
        </div>
        
    </div>
    <div class="row">
        <div class="col pl-0">
                @if(empty($user->acta))  
                    <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Acta de nacimiento</h5>
                                <p class="card-text">El documento de la cedula debe estar legible para el departamento de recursos humanos</p>
                                
                                <form enctype="multipart/form-data" action="{{url('/documentos/acta')}}" method="POST">
                                        @csrf
                                        <input type="text" name="user_id" value="{{auth()->user()->id }}" hidden>
                                        <div class="custom-file mb-4">
                                            <input type="file" name="file" class="custom-file-input" required>
                                            <label class="custom-file-label" >Ingrese archivo...</label>
                                        </div>
                                        <input type="submit" class="btn btn-success" value="Actualizar">
                                </form>
                            </div>
                    </div>
                @else
                    <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Acta de nacimiento</h5>
                                <p class="card-text">El documento debe ser legible</p>
                                
                                <button class="btn btn-primary">Descargar</button>                            
                                <button class="btn btn-danger">Eliminar</button>                            
                            </div>
                    </div>
                @endif
            </div>
    </div>
</div>    

@endsection