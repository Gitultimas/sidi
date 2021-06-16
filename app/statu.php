<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\acta;
use App\cedula;
use App\rif;
use App\vitae;
class statu extends Model
{
    //
    
    public function acta(){

        return $this->hasOne(acta::class,'estatu_id','id');
    }

    public function cedula(){

        return $this->hasOne(cedula::class,'estatu_id','id');
    }

    public function rif(){

        return $this->hasOne(rif::class,'estatu_id','id');
    }

    public function vitae(){

        return $this->hasMany(vitae::class,'estatu_id','id');
    }

    protected $table="status";    
}
