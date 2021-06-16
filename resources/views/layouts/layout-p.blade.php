<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/estildos-layout-p.css')}}">
    <title>Ultimas noticias intranet SIDI</title>
</head>
<body style="background-color:#f4f5f6;">
    <div class="container-fluid">
        <div class="row">
           @include('layouts.partials-p.sessionNavegation-p')
        </div>
        <div id="searchEmployed" class="row justify-content-end">
            @include('layouts.partials-p.searchEmployed-p')
        </div>
        <nav class="row">
            @include('layouts.partials-p.navegation-p')
        </nav>

        <section class="row pl-5 pr-5 pt-4">
            @if(!Route::is('public.galeria') and !Route::is('public.empleados') and !Route::is('documentos') and !Route::is('public.empleadosSearchName') and !Route::is('public.empleadosSearchCargo') and !Route::is('userConfiguration'))
                <div class="col-3 mr-4">
                    <div class="row mb-5">
                        @include('layouts.partials-p.topMember-p')
                    </div>
                    <div class="row">
                        @include('layouts.partials-p.todaysMenu-p')
                    </div>
                </div>
            @elseif(Route::is('public.empleados')  or Route::is('public.empleadosSearchName') or Route::is('public.empleadosSearchCargo'))
                
               @yield('componentesEmpleados')

            @else

                @yield('componentesUserConfiguracionleft')

                
            @endif  

                @yield('contenido')

            @if(Route::is('userConfiguration'))

                @yield('componentesUserConfiguracionRight')

            @endif

        </section>

        <footer class="row p-5 mt-5">
                <div class="col-12 p-0">
                    Intranet Demo ultimas 
                </div>
        </footer>
    </div>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>