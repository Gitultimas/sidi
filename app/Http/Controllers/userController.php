<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\dat_per;
use App\dat_aca;
use App\vitae;
use App\rif;
use App\cedula;
use App\acta;
use App\statu;
use App\User;
class userController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }


    public function index(){

        $user_datper= User::findOrFail(Auth::user()->id)->dat_per;
        $user_dataca= User::findOrFail(Auth::user()->id)->dat_aca;
        $user= User::find(Auth::user()->id);

        
        if($user_datper == null || $user_dataca == null){

           
        }else{

            $user_datper= User::findOrFail(Auth::user()->id)->dat_per->toArray();
            $user_dataca= User::findOrFail(Auth::user()->id)->dat_aca->toArray();


        }


        
       return view('user.configuracion',compact('user_datper','user_dataca','user'));
    }

    public function updateDatper(Request $request){

        $dat_per=dat_per::where('user_id',$request->user_id)->get();
        $dat_per->toArray();
        
        if(!isset($dat_per[0])){

            $dat_per = new dat_per;
            $dat_per->fech_nac = $request->fech_nac;
            $dat_per->user_id = $request->user_id;
            $dat_per->cedula =$request->cedula;
            $dat_per->sexo = $request->sexo;
            $dat_per->est_civil = $request->est_civil;  

            $dat_per->save(); 

        }else{


            $dat_per= user::find($request->user_id)->dat_per;
            $dat_per->fech_nac = $request->fech_nac;
            $dat_per->user_id = $request->user_id;
            $dat_per->cedula =$request->cedula;
            $dat_per->sexo = $request->sexo;
            $dat_per->est_civil = $request->est_civil;  
           
            $dat_per->save();
        }

        return redirect()->back();
    }



    public function updateDataca(Request $request){

        $dat_aca=dat_aca::where('user_id',$request->user_id)->get();
        $dat_aca->toArray();
        
       
        
        if(!isset($dat_aca[0])){

            
            $dat_aca = new dat_aca;
            $dat_aca->user_id = $request->user_id;
            $dat_aca->acerca_de = $request->acerca_de;
            $dat_aca->niv_aca = $request->niv_aca;
            $dat_aca->nombre_inst =$request->nombre_inst;
            $dat_aca->nombre_carr = $request->nombre_carr;

            $dat_aca->save();

        }else{

           
            $dat_aca= user::find($request->user_id)->dat_aca;
            $dat_aca->acerca_de = $request->acerca_de;
            $dat_aca->niv_aca = $request->niv_aca;
            $dat_aca->nombre_inst =$request->nombre_inst;
            $dat_aca->nombre_carr = $request->nombre_carr;
           
            $dat_aca->save();
        }
        
        return redirect()->back();
        
    }


    public function updatePhoneContact(Request $request){

        $dat_per=dat_per::where('user_id',$request->user_id)->get();
        $dat_per->toArray();

        


        if(!isset($dat_per[0])){

            $dat_per = new dat_per;
            $dat_per->user_id = $request->user_id;
            $dat_per->num_movil = $request->num_movil;
            $dat_per->num_fijo = $request->num_fijo;
            $dat_per->correo_pers =$request->correo_pers;
            
            $dat_per->save(); 

        }else{

            
            $dat_per= user::find($request->user_id)->dat_per;
            $dat_per->user_id = $request->user_id;
            $dat_per->num_movil = $request->num_movil;
            $dat_per->num_fijo = $request->num_fijo;
            $dat_per->correo_pers =$request->correo_pers;
           
            $dat_per->save();
        }

        return redirect()->back();
    }

    public function updatePhotoPerfil(Request $request){

        $user= user::find($request->user_id)->dat_per;
        $correo=user::find($request->user_id);
        $dat_per=dat_per::where('user_id',$request->user_id)->get();


       if(!isset($user)){
              

            if($archivo=$request->file('file')){

                $ruta='document/'.$correo->email;
                $extencion= $archivo->getClientOriginalExtension();
                $nombre="fotoPerfil.".$extencion;
                $archivo->move($ruta,$nombre);
                $data['ruta']=$nombre;


                $dat_per =New dat_per;
                $dat_per->fech_nac;
                $dat_per->user_id =$request->user_id;
                $dat_per->cedula;
                $dat_per->sexo;
                $dat_per->est_civil;
                $dat_per->perf_img =$nombre;
                $dat_per->save();


            }

       }else{
            if($archivo=$request->file('file')){

                $ruta='document/'.$correo->email;
                $extencion= $archivo->getClientOriginalExtension();
                $nombre="fotoPerfil.".$extencion;
                $archivo->move($ruta,$nombre);
                $data['ruta']=$nombre;
                $user->perf_img =$nombre;
                $user->save();

            }
       }

       return redirect()->back();
    }


    /*FUNCIONES PARA LA VISUALIZACION Y CARGA DE LOS DOCUMENTOS POR PARTE DEL USUARIO*/

    public function document(){

        $user=User::find(Auth::user()->id);
        $estatus=statu::find(1);

        
        return view('user.documentos',compact('user'));
    }

    public function updateVitae(Request $request){

        $user= User::find($request->user_id);
        $vitae= $user->vitae;



        if($archivo=$request->file('file')){

            if(empty($vitae)){

                
                $ruta='document/'.$user->email;
                $extencion= $archivo->getClientOriginalExtension();
                $nombre="curriculum.".$extencion;
                $archivo->move($ruta,$nombre);
                $data['ruta']=$nombre;

               
                $vitae=New vitae;
                $vitae->user_id=$request->user_id;
                $vitae->estatu_id=1;//estatus pendiente
                $vitae->ruta=$nombre;
                $vitae->save();

           
           
            }else{
                

                
                $ruta='document/'.$user->email;
                $extencion= $archivo->getClientOriginalExtension();
                $nombre="curriculum.".$extencion;
                $archivo->move($ruta,$nombre);
                $data['ruta']=$nombre;

                $vitae->ruta=$nombre;
                $vitae->save();

            }

        }else{

            echo "no existe archivo";

        }

        return redirect()->back();
    }

    public function updateRif(Request $request){

        $user= User::find($request->user_id);
        $rif= $user->rif;

        if($archivo=$request->file('file')){

            if(empty($rif)){

                
                $ruta='document/'.$user->email;
                $extencion= $archivo->getClientOriginalExtension();
                $nombre="rif.".$extencion;
                $archivo->move($ruta,$nombre);
                $data['ruta']=$nombre;

               
                $rif=New rif;
                $rif->user_id=$request->user_id;
                $rif->ruta=$nombre;
                $rif->estatu_id=1;//estatus pendiente
                $rif->save();
                

            }else{

                
                $ruta='document/'.$user->email;
                $extencion= $archivo->getClientOriginalExtension();
                $nombre="rif.".$extencion;
                $archivo->move($ruta,$nombre);
                $data['ruta']=$nombre;

                $rif->ruta=$nombre;
                $rif->save();

            }

        }else{

            echo "no existe archivo";

        }

        return redirect()->back();
    }

    public function updateCedula(Request $request){

        $user= User::find($request->user_id);
        $cedula= $user->cedula;

        if($archivo=$request->file('file')){

            if(empty($cedula)){

                
                $ruta='document/'.$user->email;
                $extencion= $archivo->getClientOriginalExtension();
                $nombre="cedula.".$extencion;
                $archivo->move($ruta,$nombre);
                $data['ruta']=$nombre;

               
                $cedula=New cedula;
                $cedula->user_id=$request->user_id;
                $cedula->ruta=$nombre;
                $cedula->estatu_id=1;//estatus pendiente
                $cedula->save();
                
                
                echo "rif cargado";
           
            }else{

                
                $ruta='document/'.$user->email;
                $extencion= $archivo->getClientOriginalExtension();
                $nombre="cedula.".$extencion;
                $archivo->move($ruta,$nombre);
                $data['ruta']=$nombre;

                $cedula->ruta=$nombre;
                $cedula->save();
                


            }

        }else{

            echo "no existe archivo";

        }

        return redirect()->back();
    }


    public function updateActa(Request $request){

        $user= User::find($request->user_id);
        $acta= $user->acta;

        if($archivo=$request->file('file')){

            if(empty($acta)){

                
                $ruta='document/'.$user->email;
                $extencion= $archivo->getClientOriginalExtension();
                $nombre="partidaNacimiento.".$extencion;
                $archivo->move($ruta,$nombre);
                $data['ruta']=$nombre;

               
                $acta=New acta;
                $acta->user_id=$request->user_id;
                $acta->ruta=$nombre;
                $acta->estatu_id=1;//estatus pendiente
                $acta->save();
           
           
            }else{


                $ruta='document/'.$user->email;
                $extencion= $archivo->getClientOriginalExtension();
                $nombre="partidaNacimiento.".$extencion;
                $archivo->move($ruta,$nombre);
                $data['ruta']=$nombre;

                $acta->ruta=$nombre;
                $acta->save();
            }

        }else{

            echo "no existe archivo";

        }

        return redirect()->back();

    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    /*METODOS PARA LA VISTA DE LOS RECIBOS DE LOS EMPLEADOS */

    public function recibosIndex(){


        return view('user.recibos');
    }
}
