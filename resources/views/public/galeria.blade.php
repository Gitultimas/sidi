@extends('layouts.layout-p')
@section('contenido')  
<div class="col">
   
    <div class="row">

        

        <div class="col-8">
            <div  class="row mb-4  pt-3 pb-3 newNotice-title bg-white">
                <div class="col d-flex justify-content-between ">
                    <span >Instalaciones</span>
                    
                </div>
            </div>
        
        
            <div class="row">
            
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('images/edificio.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/edificio.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/edificio.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-4 ">
            
            <div  class="row mb-4 pl-3 ">
                <div class="col  pt-3 pb-3 newNotice-title bg-white">
                    <span >Comedor</span>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col pr-0">
                    <img class="d-block w-100" src="{{asset('images/edificio.jpg')}}" alt="First slide">
                </div>
            </div>
            <div class="row">
                <div class="col pr-0">
                    <img class="d-block w-100" src="{{asset('images/edificio.jpg')}}" alt="First slide">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
