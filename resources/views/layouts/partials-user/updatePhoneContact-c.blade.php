<div class="col-12 p-0 confi-card">
    <div class="confi-title p-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
        </svg>                            
        Contacto
        
       
    </div>
    <div class="p-3">
        <form action="{{url('configuracion/updatePhoneContact')}}" method="POST" class="confi-form">
        @csrf
        <input type="text" name="user_id" value="{{auth()->user()->id }}" hidden>

            <label for="">
                <span>
                    Numero movil
                </span><br>
                <input type="text" name="num_movil" value="{{$user_datper['num_movil'] ? $user_datper['num_movil']: 'N/A'}}">
            </label><br>

            <label for="">
                <span>
                    Numero fijo
                </span><br>
                <input type="text" name="num_fijo" value="{{$user_datper['num_fijo'] ? $user_datper['num_fijo']: 'N/A'}}">
            </label><br>

            <label for="">
                <span>
                    Correo personal
                </span><br>
                <input type="text" name="correo_pers" value="{{$user_datper['correo_pers'] ? $user_datper['correo_pers']: 'N/A'}}">
            </label><br>
            
            <input type="submit" class="btn btn-success w-100" value="actualizar">
        </form>
    </div>
</div>