<div id="updateDatper" class="col-12 p-0">
    <div class="updateDatper-title p-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
            <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
        </svg>                                  
        Información Personal
        
       @if($user_datper == null)
        <span class="updateDatper-adv">
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-exclamation-circle mr-1" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                </svg>
                Porfavor actualize su información
        </span>
       @endif
    </div>
    <div class=" p-3">
        <form action="{{url('configuracion/updateDatper')}}" method="POST" class="form-card d-flex flex-column">
            @csrf    

            <input type="text" name="user_id" value="{{auth()->user()->id }}" hidden>
            
            <label for="">
                <span>
                    Fecha de nacimiento
                </span><br>
                <input name="fech_nac" type="date" value="{{$user_datper['fech_nac']}}">
            </label>
                       
            <label for="">
                <span>
                    Cedula
                </span><br>
               
                <input type="text" name="cedula" value="{{$user_datper['cedula'] ? $user_datper['cedula']: 'N/A'}}" >  
            </label>

            <label for="">
                <span>
                    Sexo
                </span><br>
                @if($user_datper['sexo'] == 'M')
                    <select name="sexo" id="">
                        <option value="H" >Hombre</option>
                        <option value="M" selected>Mujer</option>
                    </select> 
                @else
                    <select name="sexo" id="">
                        <option value="H" selected>Hombre</option>
                        <option value="M" >Mujer</option>
                    </select>  
                @endif
            </label>


            <label for="">
                <span>
                    Estado Civil
                </span><br>

                @if($user_datper['est_civil'] == 'V')
                    <select name="est_civil" id="">
                        <option value="S" >Soltero/a</option>
                        <option value="C">Casado/a</option>
                        <option value="D">Divorciado/a</option>
                        <option value="V" selected>Viudo/a</option>
                    </select> 
                @elseif($user_datper['est_civil'] == 'C')
                    <select name="est_civil" id="">
                        <option value="S" >Soltero/a</option>
                        <option value="C" selected>Casado/a</option>
                        <option value="D">Divorciado/a</option>
                        <option value="V">Viudo/a</option>
                    </select>    
                @elseif($user_datper['est_civil'] == 'D')
                    <select name="est_civil" id="">
                        <option value="S" >Soltero/a</option>
                        <option value="C">Casado/a</option>
                        <option value="D" selected>Divorciado/a</option>
                        <option value="V">Viudo/a</option>
                    </select> 
                @else
                    <select name="est_civil" id="">
                        <option value="S" selected>Soltero/a</option>
                        <option value="C" >Casado/a</option>
                        <option value="D">Divorciado/a</option>
                        <option value="V">Viudo/a</option>
                    </select>
                @endif
                                
            </label>

            <input type="submit" value="{{$user_datper ? 'Actualizar':'Registrar Datos'}}" class="btn btn-success mb-4">
        </form>
    </div>
</div>