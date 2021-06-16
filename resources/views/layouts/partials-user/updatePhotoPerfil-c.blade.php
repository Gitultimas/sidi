<div class="col-12 p-0 confi-card">
    <div class="confi-title p-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
            <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
        </svg>                               
        Foto de Perfil
        
      
    </div>
    <div class="p-3">
        <form enctype="multipart/form-data" action="{{url('configuracion/updatePhotoPerfil')}}" method="POST" >
        @csrf
        <input type="text" name="user_id" value="{{auth()->user()->id }}" hidden>

            <div class="d-flex justify-content-center mb-4">
                    <img class="confi-photoPerfil" src="{{$user_datper['perf_img'] ? asset('document/'.$user['email'].'/'.$user_datper['perf_img']) : asset('images/userPre.jpg')}}" alt="foto predeterminada para el perfil del usuario">
            </div>
            
            <div class="custom-file mb-3">
                <input type="file" name="file" class="custom-file-input" id="customFileLang" lang="es">
                <label class="custom-file-label" for="customFileLang">Seleccionar Imagen</label>
                
            </div>
            
            <input type="submit" value="Actualizar foto" class="w-100 btn btn-success">
        </form>
    </div>
</div>