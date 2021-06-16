<div id="topMember" class="col-12 p-0">
    <div class="p-4 topMember-title">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
            </svg>
            Revision de los documentos
        </span>
    </div>
    @if(!isset($user->vitae) and !isset($user->rif) and  !isset($user->cedula) and !isset($user->acta))
        <div class="lead">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum eligendi dolore voluptatem consequatur veritatis molestiae quas numquam temporibus molestias, culpa doloribus ipsum omnis quae fuga itaque debitis. Facilis, dolorum quas.    
        </div>
    @else
        @if(isset($user->vitae))  
            <div class="p-4 d-flex flex-column topMember-list">
            
                    @if($user->vitae->observacion != null and $user->vitae->fecha != null) 
                        <div>
                            <h6 class="d-flex align-items-center">

                                @if($user->vitae->status->id != 1)

                                    <span class="mr-1" style="background-color:lightgreen;border-radius:50%;height:15px;width:15px;display:inline-block;"></span>
                                @else
                                
                                    <span class="mr-1" style="background-color:tomato;border-radius:50%;height:15px;width:15px;display:inline-block;"></span>
                                @endif
                                Sintesis curricular
                            </h6>
                            <small>{{$user->vitae->observacion}}</small>
                        </div>
                        <div class="align-self-end">
                        <small>Ultima revision {{$user->vitae->fecha}}</small>
                        </div>
                    @else
                        <div>
                            <h6>
                            
                                @if($user->vitae->status->id != 1)

                                    <span class="mr-1" style="background-color:lightgreen;border-radius:50%;height:15px;width:15px;display:inline-block;"></span>
                                @else
                                
                                    <span class="mr-1" style="background-color:tomato;border-radius:50%;height:15px;width:15px;display:inline-block;"></span>
                                @endif
                                Sintesis curricular
                            </h6>
                            <small>En este momento no se ha realizado la revision de su sintesis curricular, porfavor debe estar atento en los siguientes días.</small>
                        </div>
                        <div class="align-self-end">
                        <small>Sin revision</small>
                        </div>
                    @endif
            
            </div>
        @endif
        @if(isset($user->rif))
            <div class="p-4 d-flex flex-column topMember-list">
            
                    @if($user->rif->observacion != null and $user->rif->fecha != null)
                        <div>
                            <h6 class="d-flex align-items-center">

                                @if($user->rif->status->id != 1)

                                <span class="mr-1" style="background-color:lightgreen;border-radius:50%;height:15px;width:15px;display:inline-block;"></span>
                                @else

                                <span class="mr-1" style="background-color:tomato;border-radius:50%;height:15px;width:15px;display:inline-block;"></span>
                                @endif
                                Rif
                            </h6>
                            <small>{{$user->rif->observacion}}</small>
                        </div>
                        <div class="align-self-end">
                        <small>Ultima revision {{$user->rif->fecha}}</small>
                        </div>
                    @else
                        <div>
                            <h6>
                                @if($user->rif->status->id != 1)

                                <span class="mr-1" style="background-color:lightgreen;border-radius:50%;height:15px;width:15px;display:inline-block;"></span>
                                @else

                                <span class="mr-1" style="background-color:tomato;border-radius:50%;height:15px;width:15px;display:inline-block;"></span>
                                @endif
                                Rif
                            </h6>
                            <small>En este momento no se ha realizado la revision de su rif, porfavor debe estar atento en los siguientes días.</small>
                        </div>
                        <div class="align-self-end">
                        <small>Sin revision</small>
                        </div>
                    @endif
            
            </div>
        @endif
        @if(isset($user->cedula))
            <div class="p-4 d-flex flex-column topMember-list">
                
                    @if($user->cedula->observacion != null and $user->cedula->fecha)
                        <div>
                            <h6>
                                @if($user->cedula->status->id != 1)

                                <span class="mr-1" style="background-color:lightgreen;border-radius:50%;height:15px;width:15px;display:inline-block;"></span>
                                @else

                                <span class="mr-1" style="background-color:tomato;border-radius:50%;height:15px;width:15px;display:inline-block;"></span>
                                @endif
                                Cedula
                            </h6>
                            <small>{{$user->cedula->observacion}}</small>
                        </div>
                        <div class="align-self-end">
                        <small>Ultima revision {{$user->cedula->fecha}}</small>
                        </div>
                    @else
                        <div>
                            <h6>
                                @if($user->cedula->status->id != 1)

                                <span class="mr-1" style="background-color:lightgreen;border-radius:50%;height:15px;width:15px;display:inline-block;"></span>
                                @else

                                <span class="mr-1" style="background-color:tomato;border-radius:50%;height:15px;width:15px;display:inline-block;"></span>
                                @endif
                                Cedula
                            </h6>
                            <small>En este momento no se ha realizado la revision de su cedula, porfavor debe estar atento en los siguientes días.</small>
                        </div>
                        <div class="align-self-end">
                        <small>Sin revision</small>
                        </div>
                    @endif
            
            </div>
        @endif
        @if(isset($user->acta))
            <div class="p-4 d-flex flex-column topMember-list">
                
                    @if($user->acta->observacion != null and $user->acta->fecha)
                        <div>
                            <h6>
                                @if($user->acta->status->id != 1)

                                <span class="mr-1" style="background-color:lightgreen;border-radius:50%;height:15px;width:15px;display:inline-block;"></span>
                                @else

                                <span class="mr-1" style="background-color:tomato;border-radius:50%;height:15px;width:15px;display:inline-block;"></span>
                                @endif
                                Partida de nacimiento
                            </h6>
                            <small>{{$user->acta->observacion}}</small>
                        </div>
                        <div class="align-self-end">
                        <small>Ultima revision {{$user->acta->fecha}}</small>
                        </div>
                    @else
                        <div>
                            <h6>
                                @if($user->acta->status->id != 1)

                                <span class="mr-1" style="background-color:lightgreen;border-radius:50%;height:15px;width:15px;display:inline-block;"></span>
                                @else

                                <span class="mr-1" style="background-color:tomato;border-radius:50%;height:15px;width:15px;display:inline-block;"></span>
                                @endif
                                Partida de nacimiento
                            </h6>
                            <small>En este momento no se ha realizado la revision de su partida de nacimiento, porfavor debe estar atento en los siguientes días.</small>
                        </div>
                        <div class="align-self-end">
                        <small>Sin revision</small>
                        </div>
                    @endif
            </div>
        @endif
    @endif








    
</div>