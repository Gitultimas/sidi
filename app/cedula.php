<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\statu;
use App\User;
class cedula extends Model
{
    //

    public function status(){

        return $this->belongsTo(statu::class,'estatu_id','id');
    }


    public function user(){

        return $this->belongsTo(User::class);
    }
    protected $fillable=['ruta'];
    protected $table="cedulas";
}
