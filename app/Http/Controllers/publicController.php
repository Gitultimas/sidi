<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\persona;
use App\User;
use App\Role;
class publicController extends Controller
{
    //

    public function galeria(){


        return view('public.galeria');
    }

    public function gimnasio(){


        return view('public.gimnasio');
        
    }

    public function organigrama(){


        return view('public.organigrama');
        
    }

    public function ubicacion(){


        return view('public.ubicacion');
        
    }

    public function transporte(){


        return view('public.transporte');
        
    }

    public function formatos(){


        return view('public.formatos');
        
    }

    public function comedor(){


        return view('public.comedor');
        
    }

    public function empleados(){


        $personas= persona::orderBy('name','asc')->paginate(135);
        $cargos= persona::select('title')->orderBy('title','asc')->distinct()->get();
        return view('public.empleados', compact('personas','cargos'));
    }

    public function searchName(Request $request){

        $name=$request->name;
        $personas= persona::where('name','like',$name.'%')->get();
        $cargos= persona::select('title')->orderBy('title','asc')->distinct()->get();

        return view('public.empleadosSearchName',compact('personas','cargos'));
    }

    public function searchCargo($cargo){

        $cargo=$cargo;
        $personas= persona::where('title',$cargo)->get();
        $cargos= persona::select('title')->orderBy('title','asc')->distinct()->get();
        
        return view('public.empleadosSearchNameCargo',compact('personas','cargos'));
    }

    public function userImport(){

        $personas=persona::select('name','email')->get();

        $users=User::select('name','email')->get();
        
        foreach ($personas as $persona) {
            
            
           

           $users=User::select('name','email')->where('name',$persona->name)->get()->toArray();
           if(!$users){


                $user = User::create([
                    'name' =>$persona->name,
                    'email' => $persona->email,
                    'password' => bcrypt('123456'),
                ]);
            
                $user->roles()->attach(Role::where('nombre', 'user')->first()); 
                return redirect('/'); 

           }else{

             $nouser="No hay nuevos usuarios<br>";
           }

        }

        
        echo $nouser;
        
    }
}
