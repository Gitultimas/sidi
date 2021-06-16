<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class dat_per extends Model
{
    //


    public function User() {
        return $this->belongsTo(User::class);
    }  

    protected $fillable=['user_id', 'cedula', 'fech_nac', 'sexo', 'est_civil','num_movil','num_fijo','correo_pers'];

    protected $table = 'dat_pers';
}
