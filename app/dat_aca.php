<?php

namespace App;
use App\dat_user;

use Illuminate\Database\Eloquent\Model;

class dat_aca extends Model
{
    //

    public function User() {
        return $this->belongsTo(User::class);
    }  

    protected $fillable=['acerca_de', 'niv_aca', 'nombre_inst', 'nombre_carr'];
    protected $table = 'dat_acas';
}
