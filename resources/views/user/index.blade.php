<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultimas noticias intranet SIDI</title>
    <style>
    *{
        box-sizing:border-box;
        margin:0;
        padding:0;
    }
    .vh-100{
            height:100vh;
    }

    .d-flex{

        display:flex;
        justify-content:space-between;
    }

    .c-flex-center{

        display:flex;
        justify-content:center;
        align-items:center;
    }
    form{

        
        width:22vw;
    }

    form span{
        font-size:20px;
        margin-bottom:35px;
        font-family:arial;
        display:block;
        
    }

    form div input[type="text"],input[type="password"]{

        display:block;
        padding:12px;
        border-radius:5px 5px 5px 5px;
        border:1px solid rgb(200,200,200);
        width:100%;
        background-color:rgb(244,244,244);
    }

    form .input{
        display:block;
        margin-bottom:35px;
    }
    
    .invalid-feedback{

        font-size:12px;
        color:red;
    }
    form input::placeholder{
        color:black;
    }

    form div{
        display:flex;
        justify-content:center;
    }

    form img{

        margin-bottom:35px;
    }

    form input[type="submit"]{

        display:block;
        padding:8px;
        margin-bottom:30px;
        border-radius:5px 5px 5px 5px;
        width:40%;
        border:none;
        background-color:#3f48cc;
        color:white;
        
    }


    .boton{

        border-radius:5px 5px 5px 5px;
        display:block;
        padding:7px;
        text-align:center;
        border:none;
        width:40%;
        align-self:flex-start;
        color:white;
        background-color:black;
        font-family:helvetica;

    }
    </style>
</head>
<body>
    <div class="vh-100 c-flex-center">
        <form action=""  method="POST" action="{{ route('login') }}">
            <div>
                <img src="{{asset('images/logoUn.jpg')}}" alt="" width="80%">
            </div>
            @csrf
            <span>Iniciar Sesión</span>

            <div class="input">
                <input type="text" placeholder="Correo Empresarial"  name="email"  autocomplete="off">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="input">
                <input type="password" placeholder="Contraseña" name="password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="d-flex">
                <a class="boton" href="{{ URL::previous() }}" style="text-decoration:none;">REGRESAR</a>
                <input type="submit" value="INGRESAR">
            </div>
           <!-- <a href="">Olvidé mi contraseña</a> -->
        </form>
    </div>
</body>
</html>