<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/panelAdministrativo.css')}}">
    <title>Últimas noticias intranet SIDI</title>
</head>
<body>
    <div class="container-fluid">
		<div class="row ">
            <div class="col-auto  visible hidden-sm-down panel-left"><!--columna del panel de navegacion vertical-->
                <div class="row justify-content-center cabezera-panel">
                    <div class="col-auto text-center">
                        <span class="name-panel">{{Auth::user()->name}} </span><br>
                        <span class="email-panel">{{Auth::user()->email}}</span>
                        <span class="img-panel" style="background:url({{asset('document/'.Auth::user()->email.'/'.Auth::user()->dat_per['perf_img'])}});background-size:cover;"> </span>
                    </div>
                </div>
                <div class="row m-0 pb-3" >
					<div class="col  {{! Route::is('rrhh.index') ?: 'iconpanelSelected'}}" >
 						<a  class="d-flex" href="{{url('galeria/')}}" >
						 <span class="icon-monitor {{! Route::is('rrhh.index') ? 'iconpanel': ' '}} mr-4" style="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
                                <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                            </svg>
						 </span>Analytics
						</a>	
					</div>
				</div>



				<div class="row m-0 pb-3" >
					<div class="col {{! Route::is('rrhh.entradas') ?: 'iconpanelSelected'}}" >
 						<div id="boton-lista1" class="row boton-lista">
                            <div class="col  d-flex justify-content-between ">
                                <a class="d-flex"  href="{{url('galeria/')}}" >
                                    <span class="icon-monitor {{! Route::is('galeria.index') ? 'iconpanel': ' '}} mr-4" style="">
                                        <svg class="bi bi-files-alt icon" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10z"/>
                                                <path d="M10.648 8.646a.5.5 0 0 1 .577-.093l1.777 1.947V14h-12v-1l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71z"/>
                                                <path fill-rule="evenodd" d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z"/>
                                        </svg>
                                    </span>Entradas
                                </a>
                                <span class="align-self-center pr-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#3f48cc" class="bi bi-caret-right-fill caretRight1 " viewBox="0 0 16 16">
                                        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#3f48cc" class="bi bi-caret-down-fill caretDown1 d-none" viewBox="0 0 16 16">
                                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        
                        <div class="row sub-lista1 d-none">
                            <div class="col pl-5">
                                <ul class="nav flex-column pl-3">
                                    <li class="pb-3">
                                        <a href="">Historial</a>
                                    </li>
                                    <li class="pb-3">
                                        <a href="">Crear</a>
                                    </li>
                                </ul>                                    
                            </div>
                        </div>

					</div>
				</div>	



				<div class="row m-0 pb-3">
					<div class="col  {{! Route::is('rrhh.paginas') ?: 'iconpanelSelected'}}">
						
                        <div id="boton-lista2" class="row boton-lista">
                            <div class="col d-flex justify-content-between">
                                <a class="d-flex" href="{{url('/colecciones')}}">
                                    <span class="icon-user-plus  {{! Route::is('colecciones.index') ? 'iconpanel': ' '}} mr-4" >
                                        <svg class="bi bi-plus-square icon" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1H2a2 2 0 0 1 2-2z"/>
                                            <path d="M2 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm3-6.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-5z"/>
                                            <path fill-rule="evenodd" d="M6 11.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5z"/>
                                        </svg>
                                    </span>Paginas
                                </a>

                                <span class="align-self-center pr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#3f48cc" class="bi bi-caret-right-fill caretRight2" viewBox="0 0 16 16">
                                        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#3f48cc" class="bi bi-caret-down-fill caretDown2 d-none" viewBox="0 0 16 16">
                                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <div class="row sub-lista2 d-none">
                            <div class="col pl-5">
                                <ul class="nav flex-column pl-3">
                                    <li class="pb-3">
                                        <a href="">Gimnasio</a>
                                    </li>
                                    <li class="pb-3">
                                        <a href="">Organigrama</a>
                                    </li>
                                    <li class="pb-3">
                                        <a href="">Transporte</a>
                                    </li>
                                    <li class="pb-3">
                                        <a href="">Ubicación</a>
                                    </li>
                                    <li class="pb-3">
                                        <a href="">Galeria</a>
                                    </li>
                                </ul>                                    
                            </div>
                        </div>
					</div>
				</div>
				@if(Auth::user()->roles[0]['nombre'] =="admin")
				<div class="row m-0 pb-3">
					<div class="col {{! Route::is('privado') ?: 'iconpanelSelected'}}">
						<div id="boton-lista3" class="row boton-lista ">
                            <div class="col d-flex justify-content-between">
                                <a  class="d-flex"  href="{{url('/privado')}}">
                                    <span class="icon-user-plus mr-4 {{! Route::is('privado') ? 'iconpanel': ' '}}" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-calendar4-event" viewBox="0 0 16 16">
                                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                        </svg>
                                    </span>Personas 
                                </a>

                                <span class="align-self-center pr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#3f48cc" class="bi bi-caret-right-fill caretRight3 " viewBox="0 0 16 16">
                                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#3f48cc" class="bi bi-caret-down-fill caretDown3 d-none" viewBox="0 0 16 16">
                                                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                            </svg>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col pl-5 sub-lista3 d-none">
                                    <ul class="nav flex-column pl-3">
                                        <li class="pb-3">
                                            <a href="">Empleados</a>
                                        </li>
                                        <li class="pb-3">
                                            <a href="">Usuarios</a>
                                        </li>
                                    </ul>                                    
                            </div>
                        </div>
					</div>
				</div>
				@elseif(Auth::user()->roles[0]['nombre'] =="rrhh")
                    <div class="row m-0 pb-3">
                        <div class="col {{! Route::is('privado') ?: 'iconpanelSelected'}}">
                            <a  class="d-flex"  href="{{url('/privado')}}">
                                <span class="icon-user-plus mr-4 {{! Route::is('privado') ? 'iconpanel': ' '}}" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-calendar4-event" viewBox="0 0 16 16">
                                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                    </svg>
                                </span>Empleados 
                            </a>     
                        </div>
                    </div>
                @endif
				<div class="row m-0 pb-3" >
					<div class="col {{! Route::is('galeria.papelera') ?: 'iconpanelSelected'}}" >
 						<a class="d-flex"  href="{{url('galeria/papelera')}}" >
						 <span class="icon-monitor {{! Route::is('galeria.papelera') ? 'iconpanel': ' '}} mr-4" style="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
                                <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                            </svg>
						 </span>Formatos

                         
						</a>	
					</div>
				</div>

                <div class="row m-0 pb-3" >
					<div class="col {{! Route::is('galeria.papelera') ?: 'iconpanelSelected'}}" >
                        <div id="boton-lista4" class="row boton-lista">
                                <div class="col d-flex justify-content-between">
                                    <a  class="d-flex"  href="{{url('/privado')}}">
                                        <span class="icon-user-plus mr-4 {{! Route::is('privado') ? 'iconpanel': ' '}}" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-calendar4-event" viewBox="0 0 16 16">
                                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                            </svg>
                                        </span>Documentos 
                                    </a>

                                    <span class="align-self-center pr-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#3f48cc" class="bi bi-caret-right-fill caretRight4 " viewBox="0 0 16 16">
                                                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                                </svg>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#3f48cc" class="bi bi-caret-down-fill caretDown4 d-none" viewBox="0 0 16 16">
                                                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                                </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col pl-5 sub-lista4 d-none">
                                        <ul class="nav flex-column pl-3">
                                            <li class="pb-3">
                                                <a href="">Curriculum</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="">Cedulas</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="">Partidas de nacimiento</a>
                                            </li>
                                            <li class="pb-3">
                                                <a href="">Rif</a>
                                            </li>
                                        </ul>                                    
                                </div>
                            </div>
					</div>
				</div>
                
                
                
			</div><!--fin columna del panel de navegacion vertical -->
            <div class="col">
                <div class="row visibleb ml-0 pr-2  pt-3 pb-3 panel-top justify-content-between align-items-center">
                    <div class="col-auto ">
                        <span id="boton-menu" class="" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#444444" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </span>
                    </div>
                    <div class="col-auto"> 
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <div class="dropdown ">
                            <a class="mr-4 dropdown-toggle d-flex align-items-center" href="{{url('configuracion')}}" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="img-panelTop" style="background:url({{asset('document/'.Auth::user()->email.'/'.Auth::user()->dat_per['perf_img'])}});background-size:cover;"> </span>
                                <span>{{auth()->user()->name }}</span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{url('/')}}" >Intranet</a>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="d-flex align-items-center dropdown-item">
                                <span class="mr-1">Cerrar sesión </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                                        <path d="M7.5 1v7h1V1h-1z"/>
                                         <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
       <div class="row" style="padding-top:80px;"><!--estilo en linea para serparar la columna horizontal del contenido principal-->
			<div class="col-12">
				<div class="row pl-md-5 justify-content-between">
					@yield('contenido')
                   
				</div>
			</div>	
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/funcionalidad.js')}}"> </script>
<script src="{{asset('js/panel.js')}}"> </script>
</body>
</html>