$().ready(function(){

    let botonActive=true;

   $('#boton-menu').on('click', function($botonActive){

       

        if(botonActive == true){

            $('.panel-left').animate({

                width:0
            },200);
    
            $('.panel-top').animate({
    
                paddingLeft:"30px"
            },400)

            botonActive= false;

        }else{


            $('.panel-left').animate({

                width:"280px"
            },200);
    
            $('.panel-top').animate({
    
                paddingLeft:"310px"
            },300)

            botonActive= true;
        }
        
   })

   $('#boton-menu').hover(
       
        function(){

            $('#boton-menu').addClass('botonRota bgBotonMenu');
            $('#boton-menu').removeClass('botonRotaOrigen');

        },
        function(){

            $('#boton-menu').addClass('botonRotaOrigen');
            $('#boton-menu').removeClass('botonRota bgBotonMenu');

        }
    );



        let active={'lista1':false,'lista2':false,'lista3':false,"lista4":false};
        $('.boton-lista').on('click',function(e){


            let botonLista=$(this).attr('id');
           

            function ocultar($id,$active){

                if("boton-lista1" ==$id){

                    if(active.lista1==false){

                        $('.sub-lista1').removeClass('d-none')
                        $('#'+$id).addClass('pb-3')
                        $('.caretRight1').addClass('d-none')
                        $('.caretDown1').removeClass('d-none')
                        active.lista1=true;

                       
                    }else{


                        $('.sub-lista1').addClass('d-none')
                        $('#'+$id).removeClass('pb-3')
                        $('.caretRight1').removeClass('d-none')
                        $('.caretDown1').addClass('d-none')
                        active.lista1=false;
                    }
                    
                }else if("boton-lista2" ==$id){

                    if(active.lista2==false){

                        $('.sub-lista2').removeClass('d-none')
                        $('#'+$id).addClass('pb-3')
                        $('.caretRight2 ').addClass('d-none')
                        $('.caretDown2').removeClass('d-none')
                        active.lista2=true;
                    }else{

                        
                        $('.sub-lista2').addClass('d-none')
                        $('#'+$id).removeClass('pb-3')
                        $('.caretRight2 ').removeClass('d-none')
                        $('.caretDown2').addClass('d-none')
                        active.lista2=false;
                    }

                }else if("boton-lista3" == $id){
                    

                    if(active.lista3==false){
                        
                        
                        $('.sub-lista3').removeClass('d-none')
                        $('#'+$id).addClass('pb-3')
                        $('.caretRight3 ').addClass('d-none')
                        $('.caretDown3').removeClass('d-none')
                        active.lista3=true;
                    }else{
                        $('.sub-lista3').addClass('d-none')
                        $('#'+$id).removeClass('pb-3')
                        $('.caretRight3 ').removeClass('d-none')
                        $('.caretDown3').addClass('d-none')
                        active.lista3=false;
                    }
                    

                }else{


                    if(active.lista4==false){
                        
                        
                        $('.sub-lista4').removeClass('d-none')
                        $('#'+$id).addClass('pb-3')
                        $('.caretRight4 ').addClass('d-none')
                        $('.caretDown4').removeClass('d-none')
                        active.lista4=true;
                    }else{
                        $('.sub-lista4').addClass('d-none')
                        $('#'+$id).removeClass('pb-3')
                        $('.caretRight4 ').removeClass('d-none')
                        $('.caretDown4').addClass('d-none')
                        active.lista4=false;
                    }
                }
                
            }

            ocultar(botonLista);
            event.preventDefault();
        })


        


})