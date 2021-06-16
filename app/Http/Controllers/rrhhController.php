<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
class rrhhController extends Controller
{
    //

    public function __construct(){

        $this->middleware('role:rrhh');
    }


    public function index(){
        
       return view('rrhh.index');
    }
}
